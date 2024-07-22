<?php

namespace App\Controllers;

use App\Models\usuario_models;
use CodeIgniter\Controller;

class usuario_Controller extends Controller {

    public function __construct() {
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] = 'registrar';
        echo view('Frontend/head_view', $data);
        echo view('Frontend/navbar_view');
        echo view('Backend/usuario/registrar');
        echo view('Frontend/footer_view');
    }

    public function formValidation() {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]',
        ]);

        $formModel = new usuario_models();
        $email = $this->request->getVar('email');

        if ($formModel->where('email', $email)->first()) {
            session()->setFlashdata('fail', 'El email ya está en uso.');
            return redirect()->to('registrar');
        } else {
            if (!$input) {
                session()->setFlashdata('fail', 'Error al registrarse. Por favor, revisa los campos e intenta nuevamente.');
                return redirect()->back()->withInput();
            } else {
                $formModel->save([
                    'nombre' => $this->request->getVar('nombre'),
                    'apellido' => $this->request->getVar('apellido'),
                    'usuario' => $this->request->getVar('usuario'),
                    'email' => $this->request->getVar('email'),
                    'pass' => $this->request->getVar('pass'), // Almacena la contraseña en texto plano
                ]);

                session()->setFlashdata('success', 'Usuario registrado con éxito');
                return redirect()->to('registrar');
            }
        }
    }
}
