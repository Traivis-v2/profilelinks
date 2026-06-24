<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class LinktreeController extends Controller
{
    private string $dataFile = 'linktree_data.json';

    // ── Pages ────────────────────────────────────────────────────────────────

    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin');
    }

    // ── Load data (public) ────────────────────────────────────────────────────

    public function load()
    {
        $data = $this->readData();
        return response()->json($data);
    }

    // ── Auth ─────────────────────────────────────────────────────────────────

    public function auth(Request $request)
    {
        $password  = $request->input('password', '');
        $stored    = config('linktree.admin_password');

        // Support both plain-text (from .env) and bcrypt hashes
        $valid = $stored === $password || Hash::check($password, $stored);

        if ($valid) {
            Session::put('linktree_admin', true);
            return response()->json(['ok' => true]);
        }

        return response()->json(['ok' => false], 401);
    }

    public function logout()
    {
        Session::forget('linktree_admin');
        return response()->json(['ok' => true]);
    }

    // ── Save data (admin only) ────────────────────────────────────────────────

    public function save(Request $request)
    {
        if (!Session::get('linktree_admin')) {
            return response()->json(['ok' => false, 'error' => 'Unauthorized'], 401);
        }

        $data = $request->all();

        // Sanitise — strip any PHP/script tags from text fields
        array_walk_recursive($data, function (&$val) {
            if (is_string($val)) {
                $val = strip_tags($val, '<b><i><br>');
            }
        });

        Storage::disk('local')->put($this->dataFile, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

        return response()->json(['ok' => true]);
    }

    // ── YouTube proxy (key stays server-side) ─────────────────────────────────

    public function youtube(Request $request)
    {
        if (!Session::get('linktree_admin')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $videoId = $request->query('id', '');

        if (!preg_match('/^[A-Za-z0-9_-]{11}$/', $videoId)) {
            return response()->json(['error' => 'Invalid video ID'], 400);
        }

        $apiKey = env('YOUTUBE_API_KEY', '');

        if (empty($apiKey)) {
            return response()->json(['error' => 'YouTube API key not configured in .env'], 500);
        }

        $response = Http::get('https://www.googleapis.com/youtube/v3/videos', [
            'id'   => $videoId,
            'key'  => $apiKey,
            'part' => 'snippet',
        ]);

        if (!$response->ok()) {
            return response()->json(['error' => 'YouTube API error'], 502);
        }

        $items = $response->json('items', []);

        if (empty($items)) {
            return response()->json(['error' => 'Video not found'], 404);
        }

        $snippet   = $items[0]['snippet'];
        $thumbnails = $snippet['thumbnails'] ?? [];
        $thumb     = $thumbnails['high']['url']
                  ?? $thumbnails['medium']['url']
                  ?? $thumbnails['default']['url']
                  ?? '';

        return response()->json([
            'title' => $snippet['title'] ?? '',
            'desc'  => mb_substr($snippet['description'] ?? '', 0, 140),
            'thumb' => $thumb,
            'url'   => "https://www.youtube.com/watch?v={$videoId}",
        ]);
    }

    // ── Change password ───────────────────────────────────────────────────────

    public function changePassword(Request $request)
    {
        if (!Session::get('linktree_admin')) {
            return response()->json(['ok' => false, 'error' => 'Unauthorized'], 401);
        }

        $current = $request->input('current', '');
        $new     = $request->input('password', '');
        $stored  = config('linktree.admin_password');

        $valid = $stored === $current || Hash::check($current, $stored);

        if (!$valid) {
            return response()->json(['ok' => false, 'error' => 'Current password is wrong']);
        }

        if (strlen($new) < 6) {
            return response()->json(['ok' => false, 'error' => 'Min 6 characters']);
        }

        // Write new hashed password to .env
        $envPath   = base_path('.env');
        $envContent = file_get_contents($envPath);
        $hashed    = Hash::make($new);

        if (str_contains($envContent, 'ADMIN_PASSWORD=')) {
            $envContent = preg_replace('/^ADMIN_PASSWORD=.*/m', "ADMIN_PASSWORD={$hashed}", $envContent);
        } else {
            $envContent .= "\nADMIN_PASSWORD={$hashed}";
        }

        file_put_contents($envPath, $envContent);

        // Clear config cache so new password is picked up immediately
        \Artisan::call('config:clear');

        return response()->json(['ok' => true]);
    }

    // ── Helpers ───────────────────────────────────────────────────────────────

    private function readData(): array
    {
        if (Storage::disk('local')->exists($this->dataFile)) {
            $raw = Storage::disk('local')->get($this->dataFile);
            return json_decode($raw, true) ?? $this->defaultData();
        }
        return $this->defaultData();
    }

    private function defaultData(): array
    {
        return [
            'name'    => 'Ammar Hussein',
            'sub'     => '',
            'avatar'  => '',
            'banner'  => '',
            'socials' => [
                'facebook'   => '',
                'instagram'  => '',
                'x'          => '',
                'telegram'   => '',
                'youtube'    => '',
                'podcast'    => '',
                'spotify'    => '',
                'soundcloud' => '',
            ],
            'video' => [
                'thumb' => '',
                'title' => '',
                'desc'  => '',
                'link'  => '',
            ],
            'links' => [],
        ];
    }
}
