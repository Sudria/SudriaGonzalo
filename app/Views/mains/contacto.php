    <?php if(session('mensaje')){ ?>


    <div class="container p-0">
        <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
            <strong>Error!</strong> <?=session('mensaje');?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>
    </div>

    <form action="<?php echo base_url();?>/create_consulta" method="POST">
        <div class="container p-5" id="formulario">
            <div class="row ">
                <div class="col-12">
                    <h1 class="text-center mt-5 texto-base"> CONTACTATE CON NOSOTROS</h1>
                </div>
            </div>
            <input id="usuarioid" name="usuarioid" type="hidden" value="<?php echo session('id')?>">

            <?php if (session('rol')!= null){?>
            <div class="row mt-5">
                <div class="mb-3 col-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo session('nombre')?>"
                        id="nombre" readonly>
                </div>
                <div class="mb-3 col-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo session('apellido')?>"
                        id="apellido" readonly>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo session('email')?>"
                        id="email" readonly>
                </div>
                <div class="mb-3 col-6">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="<?php echo session('telefono')?>"
                        id="telefono" readonly>
                </div>
            </div>
            <?php }else{?>

            <div class="row mt-5">
                <div class="mb-3 col-6">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3 col-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3 col-6">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
            </div>
            <?php }?>
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="mensaje"> </textarea>
                </div>
                <div class="col-3">
                    <button class="btn boton-marron ">Enviar</button>
                </div>
            </div>
        </div>
    </form>

    <div class="container fondo-gris">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center mt-5 texto-base"> O HAZLO DIRECTAMENTE</h1>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-sm-12 col-md-12 col-lg-6 p-0 fondo-verde">
                <p>
                <ul id="info">
                    <li>Nombre de la empresa: Espinnitas</li>
                    <li>Titular: Sudria Gonzalo</li>
                    <li>Razon social: Responsable Monotributista</li>
                    <li>Domicilio: Av. 3 de abril 1422, Corrientes </li>
                    <li>Telefono: 3794-123-456</li>
                    <li>Correo: espinnitas@gmail.com</li>
                </ul>
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7757465140744!2d-58.835791084943!3d-27.476240082888133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456c9ec1b4d9ab%3A0x35c299fea673064a!2sAv.%203%20de%20Abril%201422%2C%20Corrientes!5e0!3m2!1ses-419!2sar!4v1650312566509!5m2!1ses-419!2sar"
                    class="img-fluid w-100 p" style="height:17rem;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>