<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use CodeIgniter\Shield\Authentication\Authenticators\Session;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('login_view');
    }

    public function login()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $credentials = [
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];

        $auth = service('auth');
        $loginAttempt = $auth->attempt($credentials);

        if (!$loginAttempt->isOK()) {
            return redirect()->back()->withInput()->with('error', 'Credenciales inválidas');
        }

        // Obtiene el usuario autenticado
        $user = $loginAttempt->extraInfo();

        // Actualiza el último login
        $usuarioModel = new \App\Models\UsuarioModel();
        $usuarioModel->actualizarUltimoLogin($user->id);

        return $this->redirectToDashboard($user->id);
    }

    public function logout()
    {
        $auth = service('auth');
        $auth->logout();
        return redirect()->to('/');
    }

    private function redirectToDashboard($userId)
    {
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->getUsuarioWithRol($userId);

        switch ($usuario['rol_nombre']) {
            case 'administrador':
                return redirect()->to('/admin/dashboard');
            case 'catequista':
                return redirect()->to('/catequista/dashboard');
            case 'secretaria':
                return redirect()->to('/secretaria/dashboard');
            case 'tesorero':
                return redirect()->to('/tesorero/dashboard');
            default:
                return redirect()->to('/dashboard');
        }
    }
}
