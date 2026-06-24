# Ammar Hussein — Linktree

A self-hosted linktree built on Laravel + vanilla JS.

## File structure

```
app/Http/Controllers/LinktreeController.php   ← all backend logic
resources/views/index.blade.php               ← public page
resources/views/admin.blade.php               ← admin panel
routes/web.php                                ← URL routes
config/linktree.php                           ← reads .env values
.env.example                                  ← copy to .env on server
.gitignore                                    ← keeps .env + data.json out of git
```

---

## Deploy to Laravel Forge (step by step)

### 1. Push to GitHub
Push this project to your GitHub repo as normal.

### 2. Create site on Forge
- In Forge → your server → **New Site**
- Domain: your domain
- Project type: **Laravel**
- Root: `/public`

### 3. Connect GitHub repo
- In Forge site → **Git Repository**
- Connect your repo, branch: `main`

### 4. Set environment variables on Forge
In Forge site → **Environment** tab, add:

```
ADMIN_PASSWORD=choose_a_strong_password
YOUTUBE_API_KEY=AIza...your_key_here
APP_KEY=   ← run: php artisan key:generate
APP_URL=https://yourdomain.com
SESSION_DRIVER=file
```

> **Never put these in GitHub.** Forge's Environment tab is the right place.

### 5. Deploy
Click **Deploy Now** in Forge. It runs `composer install`, `php artisan migrate`, etc automatically.

### 6. Your URLs
| URL | What it is |
|-----|-----------|
| `https://yourdomain.com/` | Public page (share this) |
| `https://yourdomain.com/admin` | Admin panel (keep private) |

---

## YouTube API Key (free)

1. Go to [console.cloud.google.com](https://console.cloud.google.com)
2. Create a new project
3. Search **YouTube Data API v3** → Enable it
4. Go to **Credentials** → Create **API Key**
5. Copy it → paste into Forge Environment as `YOUTUBE_API_KEY`

The key **never touches the browser** — all YouTube fetches go through PHP on your server.

---

## How data is stored

All page content is saved to `/storage/app/linktree_data.json` on the server.
This file is in `.gitignore` so it never goes to GitHub.
Forge keeps it on the server between deploys.

---

## First login
- Go to `/admin`
- Password: whatever you set as `ADMIN_PASSWORD` in Forge
- Go to **Settings** tab → change password (it becomes bcrypt-hashed automatically)
