<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<main class="content">
    <section class="products">
        <div class="container">
            <h2>Otros</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/camara.jpg'); ?>" alt="Cámara de seguridad">
                        <h3>Cámara de seguridad</h3>
                        <p class="price">$129.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/impresora.jpg'); ?>" alt="Impresora">
                        <h3>Impresora láser</h3>
                        <p class="price">$199.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/auriculares.jpg'); ?>" alt="Auriculares">
                        <h3>Auriculares Bluetooth</h3>
                        <p class="price">$49.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <!-- Puedes agregar más productos aquí -->
            </div>
        </div>
    </section>
</main>
