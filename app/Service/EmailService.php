<?php namespace App\Services;

use Resend;

class EmailService
{
    protected $resend;

    public function __construct()
    {
        $apiKey = getenv('RESEND_API_KEY');
        $this->resend = new Resend\Client($apiKey);
    }

    /**
     * Envía un correo electrónico
     */
    public function enviarCorreo(array $params): bool
    {
        try {
            $this->resend->emails->send([
                'from' => $params['de'] ?? 'notificaciones@parroquiasanfrancisco.com',
                'to' => $params['para'],
                'subject' => $params['asunto'],
                'html' => $params['contenido'],
                'reply_to' => $params['responder_a'] ?? 'secretaria@parroquiasanfrancisco.com'
            ]);
            return true;
        } catch (\Exception $e) {
            log_message('error', 'Error Resend: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Crea una nueva clave API
     */
    public function crearClaveApi(string $nombre): ?string
    {
        try {
            $response = $this->resend->apiKeys->create([
                'name' => $nombre
            ]);
            return $response->token;
        } catch (\Exception $e) {
            log_message('error', 'Error creando API Key: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Lista todas las claves API
     */
    public function listarClavesApi(): array
    {
        try {
            return $this->resend->apiKeys->list()->data;
        } catch (\Exception $e) {
            log_message('error', 'Error listando API Keys: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Elimina una clave API
     */
    public function eliminarClaveApi(string $id): bool
    {
        try {
            $this->resend->apiKeys->remove($id);
            return true;
        } catch (\Exception $e) {
            log_message('error', 'Error eliminando API Key: ' . $e->getMessage());
            return false;
        }
    }
}