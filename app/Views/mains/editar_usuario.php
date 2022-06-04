<?php if(session('rol')!=null){ ?>

    <?php if(session('mensaje')){ ?>


<div class="container p-0">
    <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
        <strong>Error!</strong> <?=session('mensaje');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
</div>
        
<form method="POST" action="<?php echo base_url().'/modificar_usuario'; ?>">
    <div class="container p-5" id="crear">
        <div class="row ">
            <div class="col-12">
                <h2 class="text-center mt-5 texto-base"> MODIFICAR USUARIO </h2>                
            </div>
            <input id="id" name="id" type="hidden" value="<?php echo session('id')?>">
        </div>
        <div class="row mt-5">
            <div class="mb-3 col-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input placeholder="Nombre" type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $datos->nombre; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input placeholder="Apellido" type="text" class="form-control" name="apellido" id="apellido" value="<?php echo $datos->apellido; ?>">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input placeholder="Email" type="email" class="form-control" name="email" id="email" value="<?php echo $datos->email; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="rep_email" class="form-label">Repetir email</label>
                <input placeholder="Repetir email" type="email" class="form-control" name="rep_email" id="rep_email">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="direccion" class="form-label">Direccion</label>
                <input placeholder="Direccion" type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $datos->direccion; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="telefono" class="form-label">Telefono</label>
                <input placeholder="Telefono" type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $datos->telefono; ?>">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input placeholder="Contraseña" type="password" class="form-control" name="contra" id="contra">
            </div>
            <div class="mb-3 col-6">
                <label for="rep_contraseña" class="form-label">Repetir contraseña</label>
                <input placeholder="Repetir contraseña" type="password" class="form-control" name="rep_contra"
                    id="rep_contraseña">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-1">
                <button type="submit" class="btn boton-marron mt-5">Actualizar</button>
            </div>
        </div>
    </div>
</form>
<?php } else { ?>
<div class="fondo-gris container">
    <h2 class="text-center pt-5 mb-5 "> ERROR 403</h2>
    <h4 class="text-center pb-5">No tienes permiso para acceder a esta pagina. <br> Porfavor vuelve al
        <a href="<?php echo base_url();?>" class="text-center">Inicio</a>
    </h4>
    <?php } ?>