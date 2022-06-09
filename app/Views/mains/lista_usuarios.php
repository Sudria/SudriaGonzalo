<div class="container mt-5 fondo-gris ">
    <div class="row">
        <div class="col-sm-12">
            <?php if (session('rol') == 1) {?>
            <img src="img/comp/lista-usuarios.jpg" alt="banner" class="img-fluid w-100">
            <h2 class="texto-base mt-3">Listado de usuarios</h2>
            <div class="table table-responsive ">
                <table class="table table-hover table-bordered ">
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Usuario</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th>Estado</th>
                    </tr>
                    <?php foreach($datos as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->id ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->nombre ?></td>
                        <td><?php echo $usuario->apellido ?></td>
                        <td><?php echo $usuario->dni ?></td>
                        <td><?php echo $usuario->usuario ?></td>
                        <td><?php echo $usuario->direccion ?></td>
                        <td><?php echo $usuario->telefono ?></td>
                        <td><?php if ($usuario->rol){?>
                            Admin
                        <?php }else{?>
                        Usuario
                            <?php }?>
                        </td>
                        <td><?php if ($usuario->rol==0){?>
                            <?php if ($usuario->estado){?>
                            <a  href="<?php echo base_url()."/cambio_estadou/".$usuario->id."/".$usuario->estado;?>" class="btn btn-success" style="width:8.5rem;">ACTIVADO</a>
                        <?php }else{?>
                            <a  href="<?php echo base_url()."/cambio_estadou/".$usuario->id."/".$usuario->estado;?>" class="btn btn-danger" style="width:8.5rem;">DESACTIVADO</a>
                            <?php } }else {?>
                               <button class="btn btn-secondary" style="width:8.5rem;" disabled>INMODIFICABLE</button> 
                            <?php } ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
<div class="fondo-gris container">
    <h2 class="text-center pt-5 mb-5 "> ERROR 403</h2>
    <h4 class="text-center pb-5">No tienes permiso para acceder a esta pagina. <br> Porfavor vuelve al
        <a href="<?php echo base_url();?>" class="text-center">Inicio</a>
    </h4>
    <?php } ?>