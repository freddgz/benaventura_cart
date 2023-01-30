<section class="pt-40 mt-90">
    <div class="container">
        <div class="row x-gap-40 y-gap-30 items-center">
            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1">
                        <i class="icon-check text-16 text-white"></i>
                    </div>
                    <div class="text-18 fw-500 ml-10">Datos de la reserva</div>
                </div>
            </div>

            <div class="col">
                <div class="w-full h-1 bg-border"></div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">2</div>
                    <div class="text-18 fw-500 ml-10">Método de pago</div>
                </div>
            </div>

            <div class="col">
                <div class="w-full h-1 bg-border"></div>
            </div>

            <div class="col-auto">
                <div class="d-flex items-center">
                    <div class="size-40 rounded-full flex-center bg-blue-1-05 text-blue-1 fw-500">3</div>
                    <div class="text-18 fw-500 ml-10">Confirmacion de Reserva!</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40 layout-pb-md">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 order-xs-2">
                <?php
                if ($this->session->userdata('isLoggedIn') == null) {
                ?>
                    <div class="py-15 px-20 rounded-4 text-15 bg-blue-1-05">
                        <a href="#" class="text-blue-1 fw-500">Inicia sessión o Registrate</a>
                        para que tu reservación sea mas rapido.
                    </div>

                    <h2 class="text-22 fw-500 mt-40 md:mt-24">Datos del Reservante</h2>
                    <form id="form_invitado">
                        <div class="row x-gap-20 y-gap-20 pt-20">
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="run_invit" required>
                                    <label class="lh-1 text-16 text-light-1">Run</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="name_invit" required>
                                    <label class="lh-1 text-16 text-light-1">Nombre</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="text" name="apellido_invit" required>
                                    <label class="lh-1 text-16 text-light-1">Apellidos</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="email" name="email_invit" required>
                                    <label class="lh-1 text-16 text-light-1">Email</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-input ">
                                    <input type="number" name="telefono_invit" required>
                                    <label class="lh-1 text-16 text-light-1">Teléfono</label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-input ">
                                    <select name="departamento_invit" id="departamento_invit">
                                        <option value="">Seleccione Departamento</option>
                                        <?php
                                        foreach ($regiones as $dep) {
                                        ?>
                                            <option value="<?= $dep->id; ?>"><?= $dep->region; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>


                            </div>
                            <!-- <div class="col-md-6">
                            <div class="form-input">
                                <select class="cont_provincia" name="provincia_invit" id="provincia_invit">
                                    <option value="">Selecciones Provincia</option>
                                </select>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-input">
                                <select class="cont_provincia" name="provincia_invit" id="provincia_invit">
                                    <option value="">Selecciones Comuna</option>
                                </select>
                            </div>
                        </div> -->

                            <div class="col-12">

                                <div class="form-input ">
                                    <textarea required rows="2" name="direccion_invit"></textarea>
                                    <label class="lh-1 text-16 text-light-1">Dirección</label>
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="row y-gap-20 items-center justify-between">
                                    <div class="col-auto">
                                        <div class="text-14 text-light-1">
                                            Al continuar con esta reserva, acepto los <a href="#" class="text-blue-1 fw-500">Términos de uso y la Política de privacidad</a> de VenAventura.
                                        </div>
                                    </div>

                                    <div class="col-auto">

                                        <button type="submit" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                                            SIGUIENTE <div class="icon-arrow-top-right ml-15"></div>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- aqui termina los datos de reserva -->
                <?php  } else {
                    $nombre = $this->session->userdata(('nombre')); ?>
                    <h2 class="text-22 fw-500 mt-40 md:mt-24">Datos del Reservante</h2>
                    <div class="row x-gap-20 y-gap-20 pt-20">
                        <div class="col-md-6">
                            <p>Nombre: <?= $nombre ?></p>
                        </div>
                        <div class="col-12">
                            <button type="button" id="btnSiguiente" class="button h-60 px-24 -dark-1 bg-blue-1 text-white">
                                SIGUIENTE <div class="icon-arrow-top-right ml-15"></div>
                            </button>
                        </div>
                    </div>

                <?php  } ?>
                <div class="px-10 mt-30 border-light rounded-4">
                    <div class="text-20 fw-500 mb-30">Detalle de Reservación</div>
                    <?php
                    $total = 0;
                    $igv = 0.18;
                    if (!empty($this->cart->contents())) {
                        foreach ($this->cart->contents() as $row) {
                            $subtotal = $row['subtotal'];
                            $item = $row['item'];
                            $total += $subtotal;
                    ?>
                            <div class="row x-gap-15 y-gap-20">
                                <div class="col-auto">
                                    <img src="<?= SERVER_IMG; ?>portada/<?= $row['image']; ?>" alt="image" class="size-140 rounded-4 object-cover">
                                </div>
                                <div class="col">
                                    <div class="d-flex x-gap-5 pb-10">
                                        <i class="icon-star text-yellow-1 text-10"></i>
                                        <i class="icon-star text-yellow-1 text-10"></i>
                                        <i class="icon-star text-yellow-1 text-10"></i>
                                        <i class="icon-star text-yellow-1 text-10"></i>
                                        <i class="icon-star text-yellow-1 text-10"></i>
                                    </div>

                                    <div class="lh-17 fw-500"><?= ucfirst($row['name']); ?></div>
                                    <div class="text-14 lh-15 mt-5">Westminster Borough, London</div>
                                    <div class="row x-gap-10 y-gap-10 items-center pt-10">
                                        <div class="col-auto">
                                            <div class="fw-500"><?= $this->util->obtener_fecha_format_text($item['fecha_reserva']); ?></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-auto">
                                    <div class="fw-500">Personas</div>
                                </div>

                                <div class="col-auto">
                                    <div class="text-15"><?php if ($item['ninos_menores'] !== '0') {
                                                                echo $item['ninos_menores'] . " Infantes ";
                                                            }
                                                            echo ($item['ninos_mayores'] !== '0') ? $item['ninos_mayores'] . " Niños " : "";
                                                            echo ($item['adultos'] !== '0') ? $item['adultos'] . " Adultos " : "";
                                                            echo ($item['adultos_mayores'] !== '0') ? $item['adultos_mayores'] . " Adultos Mayores " : ""; ?></div>
                                </div>
                            </div>
                            <div class="row y-gap-20 justify-between items-center">
                                <div class="col-auto">
                                    <div class="fw-500">Total</div>
                                </div>

                                <div class="col-auto">
                                    <div class="fw-500">$ <?= $subtotal; ?></div>
                                </div>
                            </div>
                            <div class="border-top-light mt-30 mb-20"></div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>

            <div class="col-xl-5 col-lg-4 order-xs-1">
                <div class="ml-80 lg:ml-40 md:ml-0">


                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="text-20 fw-500 mb-20">Precio Total</div>

                        <div class="row y-gap-5 justify-between">
                            <div class="col-auto">
                                <div class="text-15">Sub Total</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-15">$ <?= number_format($total, 3); ?></div>
                            </div>
                        </div>

                        <div class="px-20 py-20 bg-blue-2 rounded-4 mt-20">
                            <div class="row y-gap-5 justify-between">
                                <div class="col-auto">
                                    <div class="text-18 lh-13 fw-500">Total</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-18 lh-13 fw-500">$ <?= number_format((($igv * $total) + $total), 3); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-30 py-30 border-light rounded-4 mt-30">
                        <div class="text-20 fw-500 mb-15">Do you have a promo code?</div>


                        <div class="form-input ">
                            <input type="text" required>
                            <label class="lh-1 text-16 text-light-1">Enter promo code</label>
                        </div>


                        <button class="button -outline-blue-1 text-blue-1 px-30 py-15 mt-20">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalCheckout" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="text-20 fw-500 lh-15">Método de pago</div>
            <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body cont_edit">

                <button class="btnPagar btn btn-outline-primary col-12 mt-2 d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">
                    Paypal
                </button>
                <button class="btnPagar btn btn-outline-danger col-12 mt-2">Visa</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalConfirmacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="text-20 fw-500 lh-15">Confirmacion de Reserva</div>
            <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body confirmacion_content">


            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let myModal = new bootstrap.Modal(document.getElementById("modalCheckout"), {});
        let modalConfirmacion = new bootstrap.Modal(document.getElementById("modalConfirmacion"), {});
        $("#modalConfirmacion").on("hidden.bs.modal", function() {
            location.reload();
        });
        $('.btnPagar').on('click', function() {

            myModal.hide();

            $.ajax({
                url: `${baseURL}reserva/registrar`,
                type: 'POST',
                // dataType: 'json',
                data: $('#form_invitado').serialize(),
                // data: {
                //     'cod_servicio': $('#cod_servicio').val(),
                // }
            }).always(function(res) {
                res = JSON.parse(res);
                if (res.status == true) {
                    //TODO: mostrar informacion de reserva
                    $(".confirmacion_content").html(`<p>${res.message}</p>`)
                    modalConfirmacion.show();
                } else {
                    swal({
                        title: res.message,
                        animation: false,
                        type: 'info',
                        customClass: 'animated tada',
                        padding: '2em'
                    })
                }
            });


        });
        $('#form_invitado').submit(function(e) {
            e.preventDefault();

            console.log('form', $('#form_invitado').serialize());
            myModal.show();
            return false;
        });
        $('#btnSiguiente').on('click', function(e) {
            e.preventDefault();

            myModal.show();
            return false;
        });
    });
</script>