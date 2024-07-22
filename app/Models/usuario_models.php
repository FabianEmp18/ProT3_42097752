<?php
namespace App\Models;

use CodeIgniter\Model;

class usuario_models extends Model {
    
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'id_usuario'; // Nombre de la clave primaria
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'baja', 'created_at']; // Campos permitidos para inserción y actualización
    

    public function getUsuarios() {
        return $this->findAll();
    }


    // Obtener todos los usuarios

    // Obtener un usuario por ID
    public function getUsuario($id) {
        return $this->find($id);
    }

    // Crear un nuevo usuario
    public function createUsuario($data) {
        return $this->insert($data);
    }

    // Actualizar un usuario
    public function updateUsuario($id, $data) {
        return $this->update($id, $data);
    }

    // Borrar un usuario
    public function deleteUsuario($id) {
        return $this->delete($id);
    }


}
