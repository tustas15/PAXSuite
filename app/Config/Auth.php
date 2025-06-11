<?php

namespace Config;

use CodeIgniter\Shield\Config\Auth as ShieldAuth;

class Auth extends ShieldAuth
{
    public string $sessionAuthenticator = \CodeIgniter\Shield\Authentication\Authenticators\Session::class;
    
    public array $authenticators = [
        'session' => \CodeIgniter\Shield\Authentication\Authenticators\Session::class,
    ];
    
    public array $reservedRoutes = [
        'login'    => 'login',
        'register' => 'register',
        'logout'   => 'logout',
    ];
    
    public string $userProvider = \App\Models\UsuarioModel::class;
}