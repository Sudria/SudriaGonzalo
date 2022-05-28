    <div class="container mt-5 pt-3 form-input h-custom  ">
        <div class="row fondo-gris pb-5  d-flex justify-content-center align-items-center h-100 ">

            <div class=" col-sm-3 col-md-3 col-lg-3 col-xl-4">
                <img src="img/comp/login.jpg" class="img-fluid w-100  " alt="login-imagen">
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 ">
                <p class="lead fw-normal mb-3 me-3">Ingresa con </p>
                <button class="btn boton-marron mx-1 mb-3 " type="button" data-bs-toggle="collapse"
                    data-bs-target=".multi-collapse" aria-expanded="false"
                    aria-controls="multiCollapseExample1 multiCollapseExample2">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button class="btn boton-marron mx-1 mb-3" type="button" data-bs-toggle="collapse"
                    data-bs-target=".multi-collapse" aria-expanded="false"
                    aria-controls="multiCollapseExample1 multiCollapseExample2">
                    <i class="fab fa-twitter"></i>
                </button>
                <button class="btn boton-marron mx-1 mb-3" type="button" data-bs-toggle="collapse"
                    data-bs-target=".multi-collapse" aria-expanded="false"
                    aria-controls="multiCollapseExample1 multiCollapseExample2">
                    <i class="fab fa-linkedin-in"></i>
                </button>
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Esta funcionalidad todavia no esta disponible. MUY PRONTO!
                    </div>
                </div>


                <form method="POST" action="<?php echo base_url().'/login'; ?>">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="usuario">Usuario</label>
                        <input type="text" id="usuario" class="form-control form-control-lg login-input"
                            placeholder="Ingrese su usuario" name="usuario" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="contra">Contraseña</label>
                        <input type="password" id="contra" class="form-control form-control-lg login-input"
                            placeholder="Ingrese su contraseña" name="contra" />
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button class="btn boton-marron btn-lg px-5">Ingresar</button>

                        <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes cuenta?
                            <a href="<?php echo base_url();?>/crear_usuario" class="link-danger">Registrarse</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>