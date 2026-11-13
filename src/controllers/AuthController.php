<?php

declare(strict_types=1);

namespace App\Controller;

final class AuthController extends AppController
{
    public function login(): void
    {
        if($this->isGet()) {
            $this->render('auth/login', [
                'pageTitle' => 'Moja aplikacja',
            ]);
            return;
        }
        if($this->isPost()) {
            $_SESSION['email'] = $_POST['email'];
            $this->redirect('/');
        }
    }

    public function register(): void
    {
        if($this->isGet()) {
            $this->render('auth/register', [
                'pageTitle' => 'Moja aplikacja',
            ]);
            return;
        }
    }
}