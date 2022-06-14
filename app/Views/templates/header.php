<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="<?php echo base_url();?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/miestilo.css" rel="stylesheet">
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg fixed-top navbar-light texto-base" id="navbar">
            <div class="container">
                <a class="navbar-brand texto-base" href="<?php echo base_url();?>">ESPINNITAS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/catalogo">Catalogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/quienes">Quiénes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/comercializacion">Comercialización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/terminos">Términos y usos</a>
                        </li>
                    </ul>

                <?php if(session('rol')!=null){ ?>

                   <a href="<?= base_url()."/prueba";?>" class="btn boton-gris"><i class="fa-solid fa-cart-shopping"></i></a> 
                <div class="dropdown  justify-content-center text-center">
                    <button class="btn boton-gris dropdown-toggle m-2" type="button" id="usuarioMenu"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo session('nombre') ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="<?php echo base_url()."/editar_usuario/".session('id');?>" class="text-decoration-none"><button
                                    class="dropdown-item" type="button">Configuracion </button></a></li>

                        <?php if(session('rol') == 1){ ?>
                        <li><a href="<?php echo base_url();?>/tabla_usuarios" class="text-decoration-none"><button
                                    class="dropdown-item" type="button">Usuarios </button></a></li>
                        <li><a href="<?php echo base_url();?>/tabla_productos" class="text-decoration-none"><button
                                    class="dropdown-item" type="button">Productos </button></a></li>
                        <li><a href="<?php echo base_url();?>/tabla_consultas" class="text-decoration-none"><button
                                    class="dropdown-item" type="button">Consultas </button></a></li>
                        <?php } ?>

                </div>
                <a class="btn boton-gris" href="<?php echo base_url();?>/logout">Cerrar sesion</a>
                <?php }?>

                <?php if (session('rol') ==null){ ?>

                <a class="btn boton-gris m-2" href="<?php  echo base_url();?>/ingresar">Iniciar Sesion</a>

                <a class="btn boton-gris" href="<?php echo base_url();?>/crear_usuario">Registrarse</a>
                <?php } ?>
                <!-- <form class="d-flex">
                        <input class="form-control me-2" id="input-buscar" type="search" placeholder="Buscar"
                            aria-label="Buscar">
                        <button class="btn boton-gris" type="submit">Buscar</button>
                    </form> -->

            </div>
            </div>
        </nav>
    </header>
    <main>