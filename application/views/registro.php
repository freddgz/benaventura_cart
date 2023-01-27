<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-7 col-lg-7 col-md-9">
                <div class="RespuestaRegistro"></div>
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form method="POST" class="main-register-form register_users" action="<?php echo base_url(); ?>ajax/registroAjax.php">
                        <div class="row y-gap-20">
                            <div class="col-12">
                                <h1 class="text-22 fw-500">Crea una cuenta</h1>
                                <p class="mt-10">¿Ya tienes una cuenta? <a href="<?php echo base_url(); ?>login" class="text-blue-1">Iniciar sesión</a></p>
                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input name="us_nombre" id="us_nombre" type="text" required>
                                    <label class="lh-1 text-14 text-light-1">Nombre</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="us_apellido" id="us_apellido" required>
                                    <label class="lh-1 text-14 text-light-1">Apellido</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="us_run" id="us_run" required>
                                    <label class="lh-1 text-14 text-light-1">Run</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="us_direccion" id="us_direccion" required>
                                    <label class="lh-1 text-14 text-light-1">Dirección</label>
                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="us_telefono" id="us_telefono" required>
                                    <label class="lh-1 text-14 text-light-1">Telefono</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="email" name="us_email" id="us_email" required>
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="password" name="us_contrasena" id="us_contrasena" minlength="8" maxlength="8" required>
                                    <label class="lh-1 text-14 text-light-1">Contraseña</label>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="password" name="us_conf_contrasena" id="us_conf_contrasena" minlength="8" maxlength="8" required>
                                    <label class="lh-1 text-14 text-light-1">Confirma Contraseña</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="d-flex ">
                                    <div class="form-checkbox mt-5">
                                        <input type="checkbox" name="politica" id="politica">
                                        <div class="form-checkbox__mark">
                                            <div class="form-checkbox__icon icon-check"></div>
                                        </div>
                                    </div>

                                    <div class="text-15 lh-15 text-light-1 ml-10">He leído y acepto los Términos y Política de Privacidad.</div>

                                </div>

                            </div>

                            <div class="col-12">

                                <button type="submit" class="button col-12 py-20 -dark-1 bg-blue-1 text-white">
                                    Registrarme <div class="icon-arrow-top-right ml-15"></div>
                                </button>

                            </div>
                        </div>
                    </form>
                    <div class="row y-gap-20 pt-30">
                        <div class="col-12">
                            <div class="text-center">o inicia sesión con</div>

                            <button class="button col-12 -outline-blue-1 text-blue-1 py-15 rounded-8 mt-10">
                                <i class="icon-apple text-15 mr-10"></i>
                                Facebook
                            </button>

                            <button class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                <i class="icon-apple text-15 mr-10"></i>
                                Google
                            </button>

                            <button class="button col-12 -outline-dark-2 text-dark-2 py-15 rounded-8 mt-15">
                                <i class="icon-apple text-15 mr-10"></i>
                                Apple
                            </button>
                        </div>

                        <div class="col-12">
                            <div class="text-center px-30">Al crear una cuenta, acepta nuestros Términos de servicio y Declaración de privacidad.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>