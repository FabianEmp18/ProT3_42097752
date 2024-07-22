<?php 
// Inicialización de la sesión y obtención del nombre de usuario
$session = session();
$nombre = $session->get('nombre');
?>

<!-- Página de usuario logueado -->
<div class="content py-3 my-3">
    <div class="container-fluid">
        <div class="row">
            <!-- Mostrar mensaje flash si existe -->
            <?php if (session()->getFlashData('msg')): ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <br><br>

            <!-- Verificar el perfil del usuario -->
            <?php if (session()->perfil_id == 1): ?>
                <!-- Contenido para Administrador -->
                <div class="card" data-bs-theme="dark">
                    <div class="card-body">
                        <h5 class="card-title">Permisos Especiales</h5>
                        <p class="card-text">Bienvenido a RHF, <b><?= $nombre; ?></b>. Tienes un perfil especial de <b>Administrador</b>.</p>
                        <p class="card-text"><small class="text-body-secondary"> Devs: RHF</small></p>
                    </div>
                    <img src="assets/img/en construccion.png" class="card-img-bottom" alt="...">
                </div>
            <?php elseif (session()->perfil_id == 2): ?>
                <!-- Contenido para Cliente -->
                <div class="card" data-bs-theme="dark">
                    <div class="card-body">
                        <h5 class="card-title">Sesión Iniciada.</h5>
                        <p class="card-text">Bienvenido a RHF, <b><?= $nombre; ?></b>.</p>
                        <p class="card-text"><small class="text-body-secondary"> Devs: RHF</small></p>
                    </div>
                    <img src="assets/img/en construccion.png" class="card-img-bottom" alt="...">
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
