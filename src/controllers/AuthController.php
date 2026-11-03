<?php

declare(strict_types=1);

namespace App\Controller;

final class AuthController extends AppController
{
    public function login(): void
    {
        $this->render('auth/login', [
            'pageTitle' => 'Moja aplikacja',
        ]);
    }

    public function register(): void
    {
        $this->render('auth/register', [
            'pageTitle' => 'Moja aplikacja',
        ]);
    }
}