<?php namespace App\Controllers;

use App\Services\EmailService;

class Notificacion extends BaseController
{
    public function enviarNotificacionPadres()
    {
        $emailService = new EmailService();
        
        $datosCorreo = [
            'para' => 'padre@ejemplo.com',
            'asunto' => 'Asistencia de Catecismo',
            'contenido' => view('emails/asistencia_catecismo', [
                'nombre_estudiante' => 'Juan Pérez',
                'fecha' => date('d/m/Y'),
                'estado' => 'Presente'
            ])
        ];

        if ($emailService->enviarCorreo($datosCorreo)) {
            return redirect()->back()->with('exito', 'Notificación enviada');
        } else {
            return redirect()->back()->with('error', 'Error al enviar notificación');
        }
    }
}