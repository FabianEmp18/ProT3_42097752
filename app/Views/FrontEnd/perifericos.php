<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes - Tienda de Insumos Informáticos</title>
</head>
<body>

<main class="content">
    <section class="products">
        <div class="container">
            <h2>Componentes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/procesador.jpg'); ?>" alt="Procesador">
                        <h3>Procesador Intel Core i5</h3>
                        <p class="price">$249.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/motherboard.jpg'); ?>" alt="Motherboard">
                        <h3>Motherboard ASUS ROG</h3>
                        <p class="price">$179.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product">
                        <img src="<?php echo base_url('assets/img/gpu.jpg'); ?>" alt="Tarjeta gráfica">
                        <h3>Tarjeta gráfica NVIDIA RTX 3060</h3>
                        <p class="price">$499.99</p>
                        <button class="btn btn-primary">Agregar al carrito</button>
                    </div>
                </div>
                <!-- Puedes agregar más productos aquí -->
            </div>
        </div>
    </section>
</main>

</body>
</html>
