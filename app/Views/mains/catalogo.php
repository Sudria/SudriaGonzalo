<div class="container mt-5  ">
    <div class="row fondo-gris py-5 mt-5 ">
        
        <?php foreach($datos as $producto): ?>
           
        <div class="col-3">
            <div class="card product-card mx-auto my-3">
                <img src="./img/productos/<?php echo $producto->imagen ?>"
                    class="card-img-top img-fluid w-100 product-img " alt="...">
                <div class="card-body ">
                    <h5 class="card-title texto-base card-header"><?php echo $producto->titulo ?></h5>
                    <p class="card-text ">
                    <ul class="list-group">
                        <!--    <li class="list-group-item">id: <?php echo $producto->id ?></li>
                        <li class="list-group-item"> stock: <?php echo $producto->stock ?></li>
                        <li class="list-group-item"> categoria: <?php echo $producto->categoria ?></li>
                        <li class="list-group-item"> <?php echo $producto->descripcion ?></li>
                        -->
                        <h5 class="texto-base"> Precio: $<?php echo $producto->precio ?></h5>


                    </ul>
                    </p>
                    <div class="text-center mt-3">
                        <a href="#" class="btn boton-marron ">Ver detalles</a>
                        <?php if (session('rol')!= null ){ ?>
                        <a href="#" class="btn boton-marron"><i class="fa-solid fa-cart-plus"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>