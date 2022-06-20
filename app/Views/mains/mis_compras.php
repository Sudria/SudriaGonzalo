<div class="container mt-5 fondo-gris ">
    <div class="row justify-content-end">
        <div class="col-sm-12">
            <?php if (session('rol') == 0 && session('rol')!=null) {?>
            <img src="img/comp/lista-usuarios.jpg" alt="banner" class="img-fluid w-100">
            <h2 class="texto-base mt-3">Mis compras</h2>
        </div>
    </div>

    <div class="row">

        <div class="table table-responsive ">
            <table class="table table-hover table-bordered ">
                <tr class="text-center">
                    <th>Fecha</th>
                    <th>Ver factura</th>
                </tr>
                <tbody class="myTable">
                    <?php foreach($facturas as $factura): ?>
                    <tr class="text-center">
                        <td><?php echo $factura->fecha ?></td>
                        <td>
                            <a href="<?php  echo base_url().'/facturas/'.$factura->id ?>"
                                class="btn btn-primary btn-sm">Ver factura</a>
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