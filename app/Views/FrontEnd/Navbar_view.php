<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <style>
        /* Estilo para el contenedor del navbar */
        .navbar {
            padding: 0.5rem 1rem; /* Ajusta el padding del navbar si es necesario */
        }

        /* Estilo para el cuadro de búsqueda */
        .navbar-form {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-form .form-control {
            width: 200px; /* Ancho fijo para el cuadro de búsqueda */
            max-width: 200px; /* Ancho máximo */
            height: 38px; /* Altura fija para el cuadro de búsqueda */
            margin-right: 5px; /* Espacio entre el cuadro de búsqueda y el botón */
        }

        .navbar-form .btn-secondary {
            background-color: transparent; /* Fondo transparente para el botón */
            color: #28a745; /* Color verde para el texto */
            border: 2px solid #28a745; /* Borde verde */
            font-weight: bold; /* Texto en negrita */
            height: 38px; /* Ajusta la altura para que coincida con el cuadro de búsqueda */
            padding: 0 15px; /* Espacio interno en el botón */
        }

        .navbar-form .btn-secondary:hover {
            background-color: rgba(40, 167, 69, 0.1); /* Fondo verde con transparencia al pasar el mouse */
            border-color: #28a745; /* Borde verde */
            color: #28a745; /* Color verde para el texto */
        }

        /* Estilo para el ícono del carrito */
        .navbar-form .cart-icon {
            display: flex;
            align-items: center;
            margin-left: 10px; /* Espacio entre el botón de búsqueda y el ícono del carrito */
        }

        .navbar-form .cart-icon img {
            width: 30px; /* Ancho fijo para el ícono del carrito */
            height: 30px; /* Altura fija para el ícono del carrito */
        }

        /* Aseguramos que el ícono del carrito esté alineado correctamente */
        .navbar .navbar-nav {
            margin-right: auto;
        }
    </style>
    <div class="container-fluid">
        <?php if ($perfil == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Admin: <?php echo $nombre; ?></a>
            </div>
        <?php elseif($perfil == 2): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Cliente: <?php echo $nombre; ?></a>
            </div>
        <?php endif; ?>
        <a class="navbar-brand" href="<?php echo base_url('Principal'); ?>">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'Principal' ? ' active' : ''); ?>" aria-current="page" href="<?php echo base_url('Principal'); ?>">Principal</a>
                </li>
                <!-- Menú desplegable de productos -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle<?php echo (current_url(true)->getSegment(1) == 'productos' ? ' active' : ''); ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url('productos/componentes'); ?>">Componentes</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('productos/perifericos'); ?>">Periféricos</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('productos/accesorios'); ?>">Accesorios</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('productos/otros'); ?>">Otros</a></li>
                    </ul>
                </li>
                <?php if ($perfil != 2): // Ocultar para clientes ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'nosotros' ? ' active' : ''); ?>" href="<?php echo base_url('nosotros'); ?>">Nosotros</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'AcercaDe' ? ' active' : ''); ?>" href="<?php echo base_url('AcercaDe'); ?>">Acerca de</a>
                </li>
                <?php if ($perfil == 1): // Solo visible para admins ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'usuarios' ? ' active' : ''); ?>" href="<?php echo base_url('usuarios'); ?>">Usuarios</a>
                    </li>
                <?php endif; ?>
                <?php if (!$session->get('logged_in')): ?>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'registrar' ? ' active' : ''); ?>" href="<?php echo base_url('registrar'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo (current_url(true)->getSegment(1) == 'login' ? ' active' : ''); ?>" href="<?php echo base_url('login'); ?>">Ingresar</a>
                    </li>
                <?php endif; ?>
                <?php if ($perfil == 1 || $perfil == 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="navbar-form">
                <form class="d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-secondary" type="button">Buscar</button>
                </form>
                <a href="<?php echo base_url('carrito'); ?>" class="btn btn-link text-light cart-icon">
                    <img src="<?php echo base_url('assets/img/carrito.png'); ?>" alt="Carrito">
                </a>
            </div>
        </div>
    </div>
</nav>

