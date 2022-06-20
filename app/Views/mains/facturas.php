
<?php $contador = 1;
$total = 0;
$final = 0;
?>
<div class="card">
    <div class="card-body">
        <div class="container mb-5 mt-5 pt-4">
            <div class="row d-flex align-items-baseline">
                <div class="col-xl-9">
                    <p style="color: #7e8d9f;font-size: 20px;">N° de factura >>
                        <strong><?= $factura->id?></strong>
                    </p>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="col-md-12">
                    <div class="text-center">
                        <i class="fa-solid fa-seedling fa-4x ms-0 texto-verde"></i>
                        <p class="pt-0 fs-3 texto-base">Espinnitas.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <ul class="list-unstyled">
                            <li class="text-muted">Para: <span style="color:#5d9fc5 ;"><?= $usuario->nombre ." ". $usuario->apellido;?></span></li>
                            <li class="text-muted"><?= $usuario->direccion?></li>
                            <li class="text-muted">Corrientes, Argentina</li>
                            <li class="text-muted"><i class="fas fa-phone"></i> <?= $usuario->telefono?></li>
                        </ul>
                    </div>
                    <div class="col-xl-4">
                        <p class="text-muted">Factura n°: <?= $factura->id?></p>
                        <ul class="list-unstyled">

                            <li class="text-muted"><i class="fas fa-circle" style="color:rgb(18, 49, 50) ;"></i> <span
                                    class="fw-bold">Fecha de compra: </span><?= $factura->fecha?></li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:rgb(18, 49, 50) ;"></i> <span
                                    class="me-1 fw-bold">Estado:</span>
                                <span class="badge bg-success text-black fw-bold">
                                    Pagado</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row my-2 mx-1 justify-content-center">
                    <table class="table table-striped table-borderless">
                        <thead style="background-color:rgb(18, 49, 50) ;" class="text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio unitario</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                               <?php foreach ($detalles as $detalle):?>
                               <?php foreach ($productos as $producto):?>
                                <?php if ($detalle->idProducto == $producto->id){?>
                            <tr>
                                <th scope="row"><?= $contador?></th>
                                <td><?= $producto->titulo?> </td>
                                <td><?= $detalle->cantidad ?></td>
                                <td>$<?= $producto->precio?></td>
                               <?php $total= ($detalle->cantidad * $producto->precio);?>
                                <td> $<?= $total;?></td>
                                <?php $contador +=1;
                                $final += $total;
                                ?>
                                
                            </tr>
                            <?php }?>
                            <?php endforeach; ?>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>
                <div class="row justify-content-end">

                    <div class="col-xl-3">
                        <ul class="list-unstyled">
                            <li class="text-muted ms-3"><span class="text-black me-4">SubTotal:</span>$<?= $final?></li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Descuento(10%):</span>$ <?= ($final * 0.1) ?></li>
                        </ul>
                        <p class="text-black float-start"><span class="text-black me-3"> Total Final </span><span
                                style="font-size: 25px;">$ <?= ($final*0.9)?></span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xl-12">
                        <p>Gracias por su compra.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>