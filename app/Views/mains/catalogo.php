<div class="container mt-5  ">
    <div class="row fondo-gris py-5 mt-5 ">
        <!-- Card de los productos -->
        <?php foreach ($datos as $producto): ?>
        <div class="col-3">
            <div class="card product-card mx-auto my-3">
                <img src="./img/productos/<?php echo $producto->imagen ?>"
                    class="card-img-top img-fluid w-100 product-img " alt="...">
                <div class="card-body ">
                    <h5 class="card-title texto-base card-header"><?php echo $producto->titulo ?></h5>
                    <p class="card-text ">
                    <ul class="list-group">
                        <h5 class="texto-base"> Precio: $<?php echo $producto->precio ?></h5>
                    </ul>
                    </p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn boton-marron ">Ver detalles</a>

                        <!-- Button trigger modal -->
                        <?php if (session('rol') != null) {?>
                        <button type="button" class="btn boton-marron" data-bs-toggle="modal"
                            data-bs-target="#mimodal<?php echo "$producto->id" ?>">
                            <i class="fa-solid fa-cart-plus"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="mimodal<?php echo "$producto->id" ?>" tabindex="-1"
                            aria-labelledby="modalTitle<?php echo "$producto->id" ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle<?php echo "$producto->id" ?>">Agregar
                                            articulo al carrito</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-6">
                                                    <img src="./img/productos/<?= $producto->imagen ?>"
                                                        class="img-fluid w-100" style="height: 14rem; " alt="...">
                                                </div>
                                                <div class="col-6">
                                                    <ul class="list-group">
                                                        <li class="list-group-item"><?php echo $producto->titulo ?></li>
                                                        <li class="list-group-item"> stock:
                                                            <?php echo $producto->stock ?></li>
                                                        <li class="list-group-item"> categoria:
                                                            <?php echo $producto->categoria ?></li>

                                                        <li class="list-group-item">
                                                            <h5 class="texto-base"> Precio:$
                                                                <?php echo $producto->precio ?> c/u
                                                            </h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST"
                                            action="<?php echo base_url() . "/agregar_pcarrito/".$producto->id; ?>">
                                            Cantidad: <input id="cantidad" name="cantidad" class="text-center"
                                                type="number" style="width:30%" min="1" max="99" value="1">
                                            <button type="submit" class="btn boton-marron">Agregar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>