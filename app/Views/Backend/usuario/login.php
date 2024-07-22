<?php if(session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        .login-section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0 20px; 
        }

        .login-box {
            background: linear-gradient(135deg, #4B0000, #1F1F1F, #000080);
            border: 2px solid #1f53c5;
            border-radius: 8px;
            padding: 20px;
            color: white;
            font-size: 18px;
            line-height: 1.6;
            box-shadow: 7px 13px 37px #000;
            width: 100%;
            max-width: 400px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .login-box h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .login-box .form-label {
            font-weight: bold;
        }

        .login-box .form-text,
        .login-box a {
            color: #00FF00;
        }

        .login-box a {
            display: block;
            margin-bottom: 5px;
            text-align: center;
        }

        .login-box a:hover {
            text-decoration: underline;
        }

        .login-box button {
            display: block;
            width: 100%;
            background: linear-gradient(135deg, #000000, #003333, #990000);
            border: none;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 16px;
            transition: background 0.3s, filter 0.3s;
            background-size: 300% 300%;
            animation: gradientAnimation 3s ease infinite;
            margin-top: 10px; /* Agregar espacio entre los botones */
        }

        .login-box button:hover {
            background: linear-gradient(135deg, #B03A2E, #F39C12, #2C3E50);
            filter: brightness(0.6);
        }

        .login-box .btn-warning {
            background: linear-gradient(135deg, #FF9800, #FFC107, #FFEB3B);
            color: black;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }
    </style>
</head>
<body class="bodylogin">
    <div class="container d-flex justify-content-center align-items-center login-section">
        <div class="login-box">
            <h1>Iniciar Sesión</h1>
            <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electrónico:</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                    <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mantener sesión iniciada</label>
                </div>
                <div class="mb-3 text-center">
                    <a href="#">¿Has olvidado tu contraseña?</a>
                    <a href="<?php echo base_url('registrar'); ?>">¿Deseas registrarte?</a>
                </div>
                <button type="submit" class="btn">Ingresar</button>
                <form method="post" action="<?php echo base_url('/acceder_admin') ?>">
                    <button type="submit" class="btn btn-warning">Acceder como Admin</button>
                </form>
            </form>
        </div>
    </div>
</body>
</html>
