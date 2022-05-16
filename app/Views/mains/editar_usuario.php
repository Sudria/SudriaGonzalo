<form method="POST" action="<?php echo base_url().'/actualizar'; ?>">
    <div class="container p-5" id="crear">
        <div class="row ">
            <div class="col-12">
                <h2 class="text-center mt-5 texto-base"> MODIFICAR USUARIO </h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="mb-3 col-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input placeholder="Nombre" type="text" class="form-control" name="nombre" id="nombre">
            </div>
            <div class="mb-3 col-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input placeholder="Apellido" type="text" class="form-control" name="apellido" id="apellido">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="email" class="form-label">Email</label>
                <input placeholder="Email" type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3 col-6">
                <label for="rep_email" class="form-label">Repetir email</label>
                <input placeholder="Repetir email" type="email" class="form-control" name="rep_email" id="rep_email">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="direccion" class="form-label">Direccion</label>
                <input placeholder="Direccion" type="text" class="form-control" name="direccion" id="direccion">
            </div>
            <div class="mb-3 col-6">
                <label for="telefono" class="form-label">Telefono</label>
                <input placeholder="Telefono" type="text" class="form-control" name="telefono" id="telefono">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="usuario" class="form-label">Usuario</label>
                <input placeholder="Usuario" type="text" class="form-control" name="usuario" id="usuario">
            </div>
            <div class="mb-3 col-6">
                <label for="dni" class="form-label">DNI</label>
                <input placeholder="DNI" type="text" class="form-control" name="dni" id="dni">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input placeholder="Contraseña" type="password" class="form-control" name="contraseña" id="contraseña">
            </div>
            <div class="mb-3 col-6">
                <label for="rep_contraseña" class="form-label">Repetir contraseña</label>
                <input placeholder="Repetir contraseña" type="password" class="form-control" name="rep_contraseña" id="rep_contraseña">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-1">
                <button type="submit" class="btn boton-marron mt-5">Actualizar</button>
            </div>
        </div>
    </div>
</form>