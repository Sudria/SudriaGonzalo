<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/miestilo.css" rel="stylesheet">
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/quienes">Quiénes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/comercializacion">Comercialización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/">Términos y usos</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" id="input-buscar" type="search" placeholder="Buscar"
                            aria-label="Buscar">
                        <button class="btn boton-gris" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>