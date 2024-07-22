<body class="bodyprincipal"> <!-- Cuerpo del documento con clase personalizada -->
    <!-- Sección de Carrusel -->
    <main class="content">
        <section class="hero">
            <div class="container">
                <h1>Bienvenido a nuestra tienda de insumos informáticos</h1>
                <p>Encuentra todo lo que necesitas para tu computadora</p>
            </div>
        </section>

        <section class="products">
            <div class="container">
                <h2>Nuestros Productos</h2>
                <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/producto1.jpg" class="d-block w-100" alt="Producto 1">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/producto2.jpg" class="d-block w-100" alt="Producto 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/producto3.jpg" class="d-block w-100" alt="Producto 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- Fin de la sección de Carrusel -->

    <style>
        .text-center {
            text-align: center; /* Estilo CSS para alineación centrada */
            color: #273746; /* Color del texto */
            font-weight: bold; /* Peso de la fuente en negrita */
            font-size: 30px; /* Tamaño de la fuente */
            margin-top: 20px; /* Margen superior */
            margin-bottom: 20px; /* Margen inferior */
            font-family: "Source Sans Pro", sans-serif; /* Familia de fuentes */
        }
    </style> <!-- Estilos CSS internos para personalizar la apariencia -->
</body>
