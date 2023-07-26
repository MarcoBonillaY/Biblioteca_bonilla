<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistema de biblioteca</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styles.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: #686e74;
        }

        h1 {
            color: #007bff;
        }

        .form-label {
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
<a class="navbar-brand" href="#">
                <img src="Assets/img/librolo.jpg" alt="" width="50">
            </a>
        <a class="navbar-brand" href="<?php echo base_url(); ?>admin/listar">Biblioteca</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-capitalize" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nombre']; ?> <i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/perfil">Perfil</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuarios/salir">Salir</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">

                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>admin/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-tasks fa-lg"></i></div>
                                Prestamo
                            </a>
                        <?php } ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book fa-lg"></i></div>
                            Libros
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" href="<?php echo base_url(); ?>libros">Libros</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>autor">Autor</a>
                                <a class="nav-link active" href="<?php echo base_url(); ?>editorial">Editorial</a>
                            </nav>
                        </div>
                        <a class="nav-link active" href="<?php echo base_url(); ?>materia">
                            <div class="sb-nav-link-icon"><i class="fas fa-list fa-lg"></i>
                            </div>
                            Materia
                        </a><a class="nav-link active" href="<?php echo base_url(); ?>estudiantes">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-graduate fa-lg"></i>
                            </div>
                            Estudiantes
                        </a>
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <a class="nav-link active" href="<?php echo base_url(); ?>usuarios/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-lg"></i>
                                </div>
                                Usuarios
                            </a>
                            <a class="nav-link active" href="<?php echo base_url(); ?>configuracion/listar">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools fa-lg"></i>
                                </div>
                                Configuración
                            </a>
                        <?php } ?>
                        <a class="nav-link collapsed active" href="<?php echo base_url(); ?>/libros" data-toggle="collapse" data-target="#collapseEst" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-pdf fa-lg"></i></div>
                            Reportes
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                        </a>
                        <div class="collapse" id="collapseEst" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link active" target="_blank" href="<?php echo base_url(); ?>admin/pdf">Prestamos</a>
                                <a class="nav-link active" target="_blank" href="<?php echo base_url(); ?>libros/pdf">Libros</a>
                            </nav>
                        </div>

                    </div>
                </div>
                <div class="sb-sidenav-footer bg-primary">
                    <div class="small">Sígueme en : </div>
                    <a href="https://www.facebook.com/profile.php?id=100072379307819" class="text-white"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="https://www.instagram.com/yepez_said/" class="text-danger"><i class="fab fa-instagram-square"></i> Instagram</a>
                    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
                </div>
            </nav>
        </div>