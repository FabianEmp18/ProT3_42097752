<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<main class="content">
    <section class="products">
        <div class="container">
            <h2>Accesorios</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/funda.jpg'); ?>" alt="Funda para notebook 15'">
                        <h3>Funda para notebook 15'</h3>
                        <p class="price">$19.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/usb.jpg'); ?>" alt="Memoria USB">
                        <h3>Memoria USB 128GB</h3>
                        <p class="price">$24.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/soporte.jpg'); ?>" alt="Soporte para monitor">
                        <h3>Soporte ajustable para monitor</h3>
                        <p class="price">$39.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <!-- Puedes agregar más productos aquí -->
            </div>
        </div>
    </section>
</main>
