<?php namespace App\Models;

use CodeIgniter\Shield\Models\UserModel as ShieldUserModel;
use CodeIgniter\Shield\Entities\User as ShieldUser;

class UsuarioModel extends ShieldUserModel
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'persona_id', 'email', 'password_hash', 'rol_id', 'activo', 'ultimo_login',
        // Asegúrate de incluir todos los campos que usa Shield
        'username', 'status', 'status_message', 'active', 'last_active', 'created_at', 'updated_at', 'deleted_at'
    ];
    
    protected $useTimestamps = true;
    
    public function actualizarUltimoLogin($userId)
    {
        return $this->update($userId, ['last_active' => date('Y-m-d H:i:s')]);
    }
    
    public function getUsuarioWithRol($userId)
    {
        return $this->select('usuarios.*, roles.nombre as rol_nombre, roles.permisos')
                    ->join('roles', 'roles.id = usuarios.rol_id')
                    ->where('usuarios.id', $userId)
                    ->first();
    }
    
    // Relación con personas
    public function persona()
    {
        return $this->belongsTo(PersonaModel::class, 'persona_id');
    }
}