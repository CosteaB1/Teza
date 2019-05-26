<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'create',
        'login',
        'admin/classes/store',
        'admin/classes',
        'admin/objects/store',
        'admin/objects',
        'admin/teachers/store',
        'admin/teachers',
        'admin/students/store',
        'admin/students',
        'admin/notes/store',
        'admin/notes',
    ];
}
