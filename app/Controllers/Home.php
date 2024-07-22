<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina_principal'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/Principal'); // Carga la vista principal
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function Nosotros()
    {
        $data['titulo'] = 'Nosotros'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/Nosotros'); // Carga la vista de "Nosotros"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function AcercaDe()
    {
        $data['titulo'] = 'Acerca de'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/AcercaDe'); // Carga la vista de "Acerca De"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function Registrar()
    {
        $data['titulo'] = 'Registrar'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Backend/usuario/registrar'); // Carga la vista de registro de usuario
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function login()
    {
        $data['titulo'] = 'Login'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Backend/usuario/login'); // Carga la vista de inicio de sesión
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function usuarios()
    {
        $data['titulo'] = 'Usuarios'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Backend/usuario/usuarios'); // Carga la vista de usuarios
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function componentes()
    {
        $data['titulo'] = 'Componentes'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/componentes'); // Carga la vista de "componentes"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function perifericos()
    {
        $data['titulo'] = 'Perifericos'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/perifericos'); // Carga la vista de "Periféricos"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function accesorios()
    {
        $data['titulo'] = 'Accesorios'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/accesorios'); // Carga la vista de "Accesorios"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }

    public function otros()
    {
        $data['titulo'] = 'Otros'; // Título de la página
        echo view('Frontend/head_view', $data); // Carga la vista del encabezado
        echo view('Frontend/navbar_view'); // Carga la vista de la barra de navegación
        echo view('Frontend/otros'); // Carga la vista de "Otros"
        echo view('Frontend/footer_view'); // Carga la vista del pie de página
    }
}
