<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function enviarlogin()
    {
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getVar('email');
        $pass = $this->request->getVar('pass');

        $usuario = $usuarioModel->where('email', $email)->first();

        if($usuario) {
            if($pass === $usuario['pass']) {
                $session = session();
                $session->set('usuario', $usuario);

                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('msg', 'Contraseña incorrecta');
            }
        } else {
            return redirect()->back()->with('msg', 'El usuario no existe');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
