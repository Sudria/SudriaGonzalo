<div class="container mt-5 fondo-gris ">
    <div class="row justify-content-end">
        <div class="col-sm-12">
            <?php if (session('rol') == 1) {?>
            <img src="img/comp/lista-usuarios.jpg" alt="banner" class="img-fluid w-100">
            <h2 class="texto-base mt-3">Listado de productos</h2>
        </div>
        <div class="col-3">

            <select class="form-select mb-3 clasif" aria-label="Default select example" id="clasif" >
                <option selected value="all">Todas</option>
                <option value="resolved">Activas</option>
                <option value="not_resolved">Desactivas</option>

            </select>
        </div>

        <div class="table table-responsive ">
            <table class="table table-hover table-bordered ">
                <tr class="text-center">
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                <tbody class="myTable">
                    <?php foreach($datos as $producto): ?>
                    <tr class="text-center">
                        <td><?php echo $producto->id ?></td>
                        <td><?php echo $producto->titulo ?></td>
                        <td><?php echo $producto->descripcion ?></td>
                        <td><?php echo $producto->categoria ?></td>
                        <td><?php echo $producto->precio ?></td>
                        <td><?php echo $producto->stock ?></td>
                        <td class="estado" estado-value=<?php echo $producto->activo ?>><?php echo $producto->activo ?>
                        </td>
                        <td class="col-2"><img src="./img/productos/<?php echo $producto->imagen ?>"
                                class="img-fluid w-100" style=" height:7rem" alt=""> </td>
                        <td>
                            <a href="<?php // echo base_url().'/obtener_id/'.$producto->id ?>"
                                class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?php // echo base_url().'/eliminar/'.$producto->id?>"
                                class="btn btn-danger btn-sm">Activar</a>
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