<div class="container mt-5 fondo-gris ">
    <div class="row">
        <div class="col-sm-12">
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
                        <th>Contraseña</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <?php foreach($datos as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->id ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->nombre ?></td>
                        <td><?php echo $usuario->apellido ?></td>
                        <td><?php echo $usuario->dni ?></td>
                        <td><?php echo $usuario->usuario ?></td>
                        <td><?php echo $usuario->contraseña ?></td>
                        <td><?php echo $usuario->direccion ?></td>
                        <td><?php echo $usuario->telefono ?></td>
                        <td><?php echo $usuario->rol ?></td>
                        <td>
                            <a href="<?php // echo base_url().'/obtener_id/'.$usuario->id ?>"
                                class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url().'/eliminar/'.$usuario->id?>"
                             class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>