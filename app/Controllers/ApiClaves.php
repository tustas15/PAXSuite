<?php namespace App\Controllers;

use App\Services\EmailService;

class ApiClaves extends BaseController
{
    public function listarClaves()
    {
        $emailService = new EmailService();
        $data['claves'] = $emailService->listarClavesApi();
        
        return view('admin/api_claves', $data);
    }

    public function crearClave()
    {
        $nombre = $this->request->getPost('nombre');
        $emailService = new EmailService();
        $token = $emailService->crearClaveApi($nombre);
        
        if ($token) {
            // Mostrar token solo una vez (almacenar de forma segura)
            session()->setFlashdata('nueva_clave', $token);
        }
        
        return redirect()->to('/admin/api-claves');
    }

    public function eliminarClave($id)
    {
        $emailService = new EmailService();
        if ($emailService->eliminarClaveApi($id)) {
            return redirect()->back()->with('exito', 'Clave eliminada');
        }
        return redirect()->back()->with('error', 'Error al eliminar clave');
    }
}