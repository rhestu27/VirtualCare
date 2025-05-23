<?php

return [

    /*
    |-----------------------------------------------------------------------
    | Broadcasting
    |-----------------------------------------------------------------------
    | ...
    */

    'broadcasting' => [
        // ...
    ],

    /*
    |-----------------------------------------------------------------------
    | Default Filesystem Disk
    |-----------------------------------------------------------------------
    */
    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |-----------------------------------------------------------------------
    | Assets Path
    |-----------------------------------------------------------------------
    */
    'assets_path' => null,

    /*
    |-----------------------------------------------------------------------
    | Cache Path
    |-----------------------------------------------------------------------
    */
    'cache_path' => base_path('bootstrap/cache/filament'),

    /*
    |-----------------------------------------------------------------------
    | Livewire Loading Delay
    |-----------------------------------------------------------------------
    */
    'livewire_loading_delay' => 'default',

    /*
    |-----------------------------------------------------------------------
    | System Route Prefix
    |-----------------------------------------------------------------------
    */
    'system_route_prefix' => 'filament',

    /*
    |-----------------------------------------------------------------------
    | Authentication Guard
    |-----------------------------------------------------------------------
    */
    'auth_guard' => 'web',

    /*
    |-----------------------------------------------------------------------
    | Middleware
    |-----------------------------------------------------------------------
    */
    'middleware' => [
        'web',
        'auth',
        'role:admin',
    ],

];
