<?php

return [

    'name' => 'Noah',

    'logo' => '<b>Noah</b> admin',

    'logo-mini' => '<b>No</b>',

    /**
     * Noah-admin route settings
     */
    'route' => [

        'prefix' => 'noah',

        'namespace' => 'App\\Noah\\Controllers',

        'middleware' => ['web', 'admin'],
    ],

    /**
     * Noah-admin install directory
     *
     * 管理后台和路由的目录地址， 默认为 `app/Noah`
     */
    'directory' => app_path('Noah'),

    /**
     * Noah-admin html title
     */
    'title' => 'Noah',

    /**
     * Access via `https`
     *
     * 如果要通过 https 访问，设置为 `true`
     */
    'https' => env('NOAH_HTTPS', false),

];
