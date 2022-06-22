<?php $total = 0;?>
<section class="h-100 h-custom">
    <div class="container h-100 mt-5 fondo-gris py-5">
        <div class="row d-flex h-100">
            <div class="col">
                <?php if (session('rol') == 0 && session('rol')!=null) {?>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="fs-4">Carrito de compras</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Precio total</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <?php foreach ($datos as $producto): ?>
                        <?php if (array_key_exists($producto->id, session('carrito'))) {?>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="./img/productos/<?=$producto->imagen?>" class="img-fluid rounded-3 "
                                            style="height: 5rem; width:5rem;" alt="<?=$producto->titulo?>">
                                        <div class="flex-column ms-4">
                                            <p class="mb-2"><?=$producto->titulo?></p>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <div class="flex-column ms-4 ">
                                        <p class="my-4 fw-bold"> <?= session('carrito')[$producto->id]?></p>
                                    </div>
                                </td>
                                <td>
                                    <p class="my-4 fw-bold">$<?=$producto->precio?></p>
                                </td>
                                <td>
                                    <p class="my-4 fw-bold">
                                        $<?= session('carrito')[$producto->id]* $producto->precio;?>
                                        <?php $total = $total + session('carrito')[$producto->id]* $producto->precio;?>
                                    </p>

                                </td>
                                <td>
                                    <a href="<?=base_url() . "/eliminar_pcarrito/" . $producto->id;?>"
                                        class="btn btn-danger my-3"> <i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <?php }?>
                        <?php endforeach;?>
                    </table>
                </div>



                <div class="card shadow-2-strong mb-5 mb-lg-0" style="border-radius: 16px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                                <form>
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel1v" value="" aria-label="..." checked />
                                        </div>
                                        <div class="rounded border w-100 p-3">
                                            <p class="d-flex align-items-center mb-0">
                                                <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Tarjeta de
                                                credito
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row pb-3">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel2v" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border w-100 p-3">
                                            <p class="d-flex align-items-center mb-0">
                                                <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Tarjeta de
                                                debito
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row">
                                        <div class="d-flex align-items-center pe-2">
                                            <input class="form-check-input" type="radio" name="radioNoLabel"
                                                id="radioNoLabel3v" value="" aria-label="..." />
                                        </div>
                                        <div class="rounded border w-100 p-3">
                                            <p class="d-flex align-items-center mb-0">
                                                <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>PayPal
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-lg-2 col-xl-5">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeName" class="form-control form-control-lg"
                                                placeholder="Nombre" />
                                            <label class="form-label" for="typeName">Nombre de la tarjeta</label>
                                        </div>

                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="typeExp" class="form-control form-control-lg"
                                                placeholder="MM/YY" size="7" id="exp" minlength="7" maxlength="7" />
                                            <label class="form-label" for="typeExp">Vencimiento</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="text" id="dsa" class="form-control form-control-lg"
                                                placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                                            <label class="form-label" for="dsa">Numero de la tarjeta</label>
                                        </div>

                                        <div class="form-outline mb-4 mb-xl-5">
                                            <input type="password" id="asd" class="form-control form-control-lg"
                                                placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3"
                                                maxlength="3" />
                                            <label class="form-label" for="asd">Cod. de seguridad</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4">
                                <div class="d-flex justify-content-between fw-bold">
                                    <p class="mb-2">Subtotal</p>
                                    <p class="mb-2"> $<?=$total?></p>
                                </div>
                                <div class="d-flex justify-content-between fw-bold">
                                    <p class="mb-0">Descuento pago online</p>
                                    <p class="mb-0">10% = $<?=$total * 0.1?></p>
                                </div>
                                <hr class="my-4">
                                <div class="d-flex justify-content-between mb-4 fw-bold">
                                    <p class="mb-2">Total</p>
                                    <p class="mb-2">$<?=$total - $total * 0.1;?></p>
                                </div>

                                <a href="<?=base_url() . '/comprar';?>" type="button"
                                    class="m-1 btn btn-success btn-block ">
                                    <div class="d-flex justify-content-between">
                                        <span class="me-2">Pagar</span>
                                        <span> $<?=$total - $total * 0.1;?></span>
                                    </div>
                                </a>
                                </button>
                                <a href="<?=base_url() . "/vaciar_carrito";?>" class="m-1 btn btn-danger btn-block ">
                                    <div class="d-flex justify-content-between">
                                        <span>Vaciar</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
<div class="fondo-gris container">
    <h2 class="text-center pt-5 mb-5 "> ERROR 403</h2>
    <h4 class="text-center pb-5">No tienes permiso para acceder a esta pagina. <br> Porfavor vuelve al
        <a href="<?php echo base_url();?>" class="text-center">Inicio.</a>
        <br> O <a href="<?= base_url()."/ingresar";?>">inicia sesion.</a>
    </h4>
    <?php } ?>