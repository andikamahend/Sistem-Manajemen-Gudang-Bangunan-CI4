<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'  => \CodeIgniter\Filters\CSRF::class,
        'toolbar' => \CodeIgniter\Filters\DebugToolbar::class,
        'auth'  => \App\Filters\Auth::class, // Pastikan filter ini terdaftar
    ];

    public $globals = [
        'before' => [
            // Filter yang dijalankan sebelum request
            'csrf',
        ],
        'after' => [
            'toolbar',
        ],
    ];

    public $methods = [];

    public $filters = [];
}
