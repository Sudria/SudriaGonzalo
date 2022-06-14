<div class="container mt-5 fondo-gris ">
    <div class="row justify-content-end">
        <div class="col-sm-12">
            <?php if (session('rol') == 1) {?>
            <img src="img/comp/lista-usuarios.jpg" alt="banner" class="img-fluid w-100">
            <h2 class="texto-base mt-3">Consultas</h2>
        </div>

        <div class="col-3">
            <select class="form-select mb-3 selector" aria-label="Default select example" id="consulta">
                <option selected value="all">Todas</option>
                <option value="consulta">Consulta</option>
                <option value="contacto">Contacto</option>
            </select>
        </div>

        <div class="col-3">
            <select class="form-select mb-3 selector" aria-label="Default select example" id="clasif">
                <option selected value="all">Todas</option>
                <option value="not_resolved">Sin resolver</option>
                <option value="resolved">Resueltas</option>
            </select>
        </div>



        <div class="table table-responsive ">
            <table class="table table-hover table-bordered ">
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Mensaje</th>
                    <th>Id usuario</th>
                    <th>Estado</th>
                </tr>
                <tbody class="myTable">
                    <?php foreach($datos as $consulta): ?>
                    <tr>
                        <td><?php echo $consulta->id ?></td>
                        <td><?php echo $consulta->email ?></td>
                        <td><?php echo $consulta->nombre ?></td>
                        <td><?php echo $consulta->apellido ?></td>
                        <td><?php echo $consulta->telefono ?></td>
                        <td><?php echo $consulta->mensaje ?></td>
                        <td class="user" user-value=<?php echo $consulta->usuarioId ?>>
                        
                        <?php if ($consulta->usuarioId){ ?>
                        <?php echo $consulta->usuarioId?>
                        <?php }else{ ?>
                            Visitante
                        <?php }?>
                    </td>
                        <td class="estado" estado-value=<?php echo $consulta->estado ?>>
                        <?php if ($consulta->estado){?>
                            <a class="btn btn-danger" href="<?php echo base_url()."/cambio_estadoc/".$consulta->id."/".$consulta->estado;?>">
                           No resuelta
                        </a>
                            <?php }else{?>
                                <a class="btn btn-success" href="<?php echo base_url()."/cambio_estadoc/".$consulta->id."/".$consulta->estado;?>">
                         Resolver
                        </a>
                            <?php }?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
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