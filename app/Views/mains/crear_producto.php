<?php if (session('rol') == 1) {?>


<?php if(session('mensaje')){ ?>
<div class="container p-0 mt-5">
    <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
        <strong>Error!</strong> <?=session('mensaje');?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
</div>


<form method="POST" action="<?php echo base_url().'/create_producto';?>" enctype="multipart/form-data">


    <div class="container p-5 form-input" id="crear">
        <div class="row ">
            <div class="col-12">
                <h1 class="text-center mt-5 texto-base">NUEVO PRODUCTO</h1>
            </div>
        </div>

        <div class="row mx-5 clearfix">
            <div class="mb-3 col-6">
                <label for="titulo" class="form-label mt-2">Titulo</label>
                <input placeholder="Titulo" type="text" class="form-control" name="titulo" id="titulo">

                <label for="precio" class="form-label mt-2">Precio</label>
                <input placeholder="Precio" type="precio" class="form-control" name="precio" id="precio">

                <label for="stock" class="form-label mt-2">Stock</label>
                <input placeholder="Stock" type="text" class="form-control" name="stock" id="stock">

                <label for="categoria" class="form-label mt-2">Categoria</label>
                <select class="form-select form-control " aria-label="Default select example" name="categoria"
                    id="categoria">
                    <option selected>Selecciona una categoria</option>
                    <option value="cactus">Cactus</option>
                    <option value="suculenta">Suculenta</option>
                    <option value="planta">Planta</option>
                </select>

                <label for="descripcion" class="form-label mt-2">Descripcion</label>
                <textarea class="form-control" name="descripcion" id="descripcion"> </textarea>

                <button class="btn boton-marron mt-3">Crear</button>
            </div>

            <div class="mt-3 p-5 col-xl-6 col-sm-12 ">
                <div class="file-upload ">
                    <button class="file-upload-btn" type="button"
                        onclick="$('.file-upload-input').trigger( 'click' )">Añadir
                        imagen</button>
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"
                            name="imagen" id="imagen" />
                        <div class="drag-text">
                            <h3>Seleccione una imagen</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image  " src="#" alt="Tu-imagen" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Quitar Imagen
                                <span class="image-title">Subir una imagen</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php } else { ?>
<div class="fondo-gris container">
    <h2 class="text-center pt-5 my-5 "> ERROR 403</h2>
    <h4 class="text-center pb-5">No tienes permiso para acceder a esta pagina. <br> Porfavor vuelve al <a
            href="<?php echo base_url();?>" class="text-center">Inicio</a></h4>
    <?php } ?>
</div>