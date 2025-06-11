<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Cargar el helper de autenticación de Shield
        helper('auth');

        // Verificar si el usuario está autenticado
        if (!auth()->loggedIn()) {
            return redirect()->to('/login');
        }
        
        $user = auth()->user();
        return $this->redirectToDashboard($user->id);
    }
    
    private function redirectToDashboard($userId)
    {
        $usuarioModel = new \App\Models\UsuarioModel();
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