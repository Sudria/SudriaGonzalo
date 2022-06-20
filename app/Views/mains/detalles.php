<div class="container fondo-gris mt-5 p-5 ">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <img src="<?php echo base_url();?>/img/productos/<?php echo $datos->imagen;?>" class="img-fluid p-5 ms-5"
                    style="width:25rem; height:30rem">
            </div>

            <div class="col-md-6 p-5 ">
                <div class="p-3">
                    <div class="d-flex justify-content-between align-items-center texto-base">
                        <h3> <?= $datos->titulo?></h3>
                    </div>
                    <div class="mt-2">
                        <h3 class="texto-verde">$ <?= $datos->precio?></h3>
                    </div>
                    <p><?= $datos->descripcion?></p>

                    <div class="mt-2">
                            <p class="texto-verde">Categoria: <?= $datos->categoria?></p>
                            <p class="texto-verde">Stock disponible: <?= $datos->stock?></p>
                     
                    </div>
                    <div class="buttons d-flex flex-row mt-5 gap-3 texto-base">
                        <form method="POST" action="<?php echo base_url() . "/agregar_pcarrito/".$datos->id; ?>">
                            Cantidad: <input id="cantidad" name="cantidad" class="text-center" type="number"
                                style="width:30%" min="1" max="<?php echo $datos->stock ?>" value="1">
                            <button type="submit" class="btn boton-marron">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>