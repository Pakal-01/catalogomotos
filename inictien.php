<?php include("templates/base.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Estilos adicionales para lograr un diseño similar */
     
        .bg-custom {
            background-color: #eee;
        }
        .card-custom {
            border-radius: 25px;
        }
        .form-control-custom {
            font-size: 0.9rem;
        }
        .form-label-custom {
            font-size: 0.9rem;
        }
        .btn-custom {
            font-size: 0.9rem;
        }
    </style>
</head>
<body class="bg-custom">
    <section class="vh-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-9">
                    <div class="card card-custom text-black">
                        <div class="card-body p-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <h2 class="text-center fw-bold mb-4" style="font-size: 1.5rem;">Iniciar seción en Motocorp</h2>
                                    <form class="mx-1 mx-md-4" action="controlador.php" method="post">
                                        <div class="row gy-3 gy-md-4 overflow-hidden">
                                            <div class="col-12">
                                                <label for="email" class="form-label form-label-custom">Correo <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control form-control-custom" name="correo" id="email" placeholder="name@example.com" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="pass" class="form-label form-label-custom">Contraseña <span class="text-danger">*</span></label>
                                                <input type="password" class="form-control form-control-custom" name="contraseña" id="pass" value="" required>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                                                    <label class="form-check-label text-secondary" for="remember_me">
                                                        Keep me logged in
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-custom btn-primary" type="submit" name="iniciar">Inicia sesión ahora</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="./assets/img/bsb-logo.svg" class="img-fluid mx-auto d-block" width="245" height="80" alt="BootstrapBrain Logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

