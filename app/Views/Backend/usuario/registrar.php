<body class="bodyregistrarse">
    <style>
        .register-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding-top: 100px; /* Espaciado superior aumentado */
            padding-bottom: 50px;
        }

        .about-us-box {
            background: linear-gradient(135deg, #4B0000, #1F1F1F, #000080);
            border: 2px solid #1f53c5;
            border-radius: 8px;
            padding: 20px;
            color: white;
            font-size: 18px;
            line-height: 1.6;
            box-shadow: 7px 13px 37px #000;
            width: 100%;
            max-width: 40%; /* Ancho máximo del cuadro reducido */
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .about-us-box h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .about-us-box .form-label {
            font-weight: bold;
        }

        .about-us-box .form-text,
        .about-us-box a {
            color: #00FF00;
        }

        .about-us-box a {
            display: block;
            margin-bottom: 5px;
            text-align: center;
        }

        .about-us-box a:hover {
            text-decoration: underline;
        }

        .about-us-box button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #000000, #003333, #990000); /* Gradiente automático del botón */
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            transition: background 0.3s, filter 0.3s; /* Transición para el fondo y filtro */
            background-size: 300% 300%;
            animation: gradientAnimation 3s ease infinite; /* Animación del gradiente */
        }

        .about-us-box button:hover {
            background: linear-gradient(135deg, #B03A2E, #F39C12, #2C3E50); /* Gradiente al pasar el cursor */
            filter: brightness(0.6);
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center register-section">
        <div class="about-us-box">
            <h1>Registrarse</h1>
            <?php $validation = \Config\Services::validation(); ?>
            <form method="post" action="<?= base_url('enviar-form'); ?>" class="row g-3 needs-validation" novalidate>
                <?= csrf_field(); ?>

                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                <?php endif; ?>
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                <?php endif; ?>

                <div class="col-md-12">
                    <label for="validationDefault01" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('nombre') ?>" required>
                    <div class="invalid-feedback"><?= $validation->getError('nombre'); ?></div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefault02" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : ''; ?>" id="validationDefault02" value="<?= old('apellido') ?>" required>
                    <div class="invalid-feedback"><?= $validation->getError('apellido'); ?></div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefaultUsername" class="form-label">Usuario</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                        <input type="text" name="usuario" class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : ''; ?>" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?= old('usuario') ?>" required>
                        <div class="invalid-feedback"><?= $validation->getError('usuario'); ?></div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefaultEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="validationDefaultEmail" value="<?= old('email') ?>" required>
                    <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                </div>

                <div class="col-md-12">
                    <label for="validationDefaultPassword" class="form-label">Contraseña</label>
                    <input type="password" name="pass" class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : ''; ?>" id="validationDefaultPassword" required>
                    <div class="invalid-feedback"><?= $validation->getError('pass'); ?></div>
                </div>

                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                        <label class="form-check-label" for="invalidCheck2">
                            Acepto términos y condiciones
                        </label>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn" type="submit">Enviar Formulario</button>
                </div>
            </form>
        </div>
    </div>
</body>
