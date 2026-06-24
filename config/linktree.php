<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Admin Password
    |--------------------------------------------------------------------------
    | Set this in your .env file as ADMIN_PASSWORD=yourpassword
    | After first login you can change it from the Settings tab in admin panel
    | — it will be stored as a bcrypt hash automatically.
    |
    */
    'admin_password' => env('ADMIN_PASSWORD', 'admin123'),
];
