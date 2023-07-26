<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar a Biblioteca</title>
    <link href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #FF5733; /* Fondo principal (naranja claro) */
        }

        .card {
            border: 0;
            border-radius: 20px;
            margin-top: 5rem;
        }

        .card-header {
            background-color: #00A8E8; /* Encabezado y botones (azul cielo) */
            color: #FFFFFF; /* Texto (blanco) */
            border-bottom: 0;
            padding: 2rem 0;
            border-radius: 20px 20px 0 0;
        }

        .card-body {
            padding: 2rem;
        }

        .card-body strong {
            color: #FFFFFF; /* Texto (blanco) */
        }

        .footer {
            background-color: #f8f9fa;
            padding: 1rem 0;
        }
    </style>
</head>
</html>
</head>

<body>
    <div class="container fluid">
        <?php if (isset($_GET['msg'])) { ?>
            <div class="toast ml-auto" id="errorPass" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="<?php echo base_url(); ?>Assets/img/error.png" class="rounded mr-2" width="20">
                    <strong class="mr-auto">Alerta</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    Usuario o contraseña incorrecta
                </div>
            </div>
        <?php } ?>
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 class="font-weight my-4">Ingresar a Biblioteca</h3>
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>Assets/img/logos.jpg" width="150">
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                            <div class="form-group">
                                <strong class="text-white">Usuario</strong>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <strong class="text-white">Contraseña</strong>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Iniciar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('#errorPass').toast('show');
        });
    </script>

    <div class="footer">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Bonilla &copy; Biblioteca Bonilla</div>
            </div>
        </div>
    </div>
</body>

</html>
