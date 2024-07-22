<?php
namespace App\Controllers;
Use App\Models\usuario_models;
use CodeIgniter\Controller;

class login_Controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo']='login';
        echo view('Frontend/head_view', $dato);
        echo view('Frontend/navbar_view');
        echo view('Backend/usuario/login');
        echo view('Frontend/footer_view');
    }

    public function auth(){
        $session = session();
        $model = new usuario_models();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');
        
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/login_Controller');
            }

            // Se verifica la contraseña en texto plano
            if ($password === $pass) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
    
                $session->setFlashdata('msg', 'Bienvenido a RHF');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Datos ingresados incorrectos');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('msg', 'Datos ingresados incorrectos');
            return redirect()->to('login');
        }
    }  
    
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
