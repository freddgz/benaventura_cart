<section class="pt-40 mt-90">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row">
            <div class="col-md-12">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Carrito</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0"></p>
                </div>
            </div>
            <div class="col-lg-8 col-xl-8">
                <div class="resp_cesta"></div>
                <?php
                $total = 0;
                if (!empty($this->cart->contents())) : ?>
                    <div class="row y-gap-30">
                        <?php
                        // $cod_categoria = 'CAT000001';
                        var_dump($this->cart->contents());
                        foreach ($this->cart->contents() as $row) {
                            $cod_servicio = $row['id'];
                            $rowid = $row['rowid'];
                            $subtotal = $row['subtotal'];
                            $item = $row['item'];
                            $total += $subtotal;
                        ?>
                            <div class="col-12" id="li_cesta_<?= $rowid; ?>">
                                <div class="border-light rounded-4">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-md-auto">
                                            <div class="cardImage ratio ratio-1:1 w-180 md:w-1/1 rounded-4">
                                                <div class="cardImage__content">
                                                    <img class="rounded-4 col-12 js-lazy" src="#" data-src="<?= SERVER_IMG; ?>portada/<?= $row['image']; ?>" alt="image">
                                                </div>
                                                <div class="cardImage__wishlist">
                                                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                                                        <i class="icon-heart text-12"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <p class="text-14 lh-14 mb-5">6+ hours</p>
                                            <h3 class="text-18 lh-16 fw-500"><?= ucfirst($row['name']); ?></h3>
                                            <p class="text-14 lh-14 mt-5"><?= ucfirst(mb_strtolower($this->util->limitar_cadena($item['descripcion'], 90, "..ver mas"))); ?></p>

                                            <div class="text-14 lh-15 fw-500 mt-20"><i class="icon-calendar text-12"></i>
                                                <?= $this->util->obtener_fecha_format_text($item['fecha_reserva']); ?>
                                            </div>
                                            <?php if ($item['ninos_menores'] !== '0') { ?>
                                                <div class="text-14 lh-15 fw-500"><?php echo $item['ninos_menores']; ?> Infantes</div>
                                            <?php } ?>
                                            <?php if ($item['ninos_mayores'] !== '0') { ?>
                                                <div class="text-14 lh-15 fw-500"><?php echo $item['ninos_mayores']; ?> Niños</div>
                                            <?php } ?>
                                            <?php if ($item['adultos'] !== '0') { ?>
                                                <div class="text-14 lh-15 fw-500"><?php echo $item['adultos']; ?> Adultos</div>
                                            <?php } ?>
                                            <?php if ($item['adultos_mayores'] !== '0') { ?>
                                                <div class="text-14 lh-15 fw-500"><?php echo $item['adultos_mayores']; ?> Adultos Mayores</div>
                                            <?php } ?>
                                            <div class="text-14 text-green-2 fw-500 lh-15 mt-5">Free cancellation</div>
                                        </div>

                                        <div class="col-md-auto md:text-left p-4">
                                            <div class="d-flex ">
                                                <button type="button" class="btnEditar btn btn-sm btn-icon rounded-circle text-warning" data-rowid="<?= $rowid ?>">
                                                    <span class="icon-edit font-size-20"></span>
                                                </button>
                                                <button type="button" class="btnEliminar btn btn-sm btn-icon rounded-circle text-danger" data-rowid="<?= $rowid ?>">
                                                    <span class="icon-trash font-size-20"></span>
                                                </button>
                                            </div>

                                            <div class="text-14 text-light-1 mt-50 md:mt-20">Costo</div>
                                            <div class="text-22 lh-12 fw-600 mt-5">$ <?= number_format($subtotal, 3); ?></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php else : ?>
                    <p>cesta vacia</p>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="px-30 py-30 border-light rounded-4">
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
                                <div class="text-18 lh-13 fw-500">$ <?= number_format($total, 3); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top-light mt-30 mb-20"></div>
                    <div class="p-4">
                        <div class="text-center">
                            <a href="<?= base_url(); ?>reserva" class="btn btn-primary d-flex align-items-center justify-content-center  height-60 w-100 mb-xl-0 mb-lg-1 transition-3d-hover font-weight-bold">
                                Tramitar Reserva
                            </a>
                        </div>
                        <a href="<?= base_url(); ?>" class="btn btn-outline-primary col-12 mt-2 d-flex align-items-center justify-content-center font-weight-bold min-height-50 border-radius-3 border-width-2 px-2 px-5 py-2">
                            Segui Reservando
                        </a>
                        <button class="btn btn-outline-danger col-12 mt-2" id="btnBorrar">Borrar todo</button>
                        <div class="mt-2 d-flex justify-content-center justify-content-md-start justify-content-xl-center">

                        </div>
                    </div>
                    <div class="p-4 mb-2">
                        <div class="d-flex align-items-center mb-3">
                            <i class="flaticon-star font-size-25 text-primary mr-3 pr-1"></i>
                            <h6 class="mb-0 font-size-14 text-gray-1">
                                <a href="#">Cancelacion gratuita 2 dias antes.</a>
                            </h6>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="flaticon-support font-size-25 text-primary mr-3 pr-1"></i>
                            <h6 class="mb-0 font-size-14 text-gray-1">
                                <a href="#">Reserva ahora y paga despues.</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Product Cards carousel -->
<section class="layout-pt-lg layout-pb-md">
    <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">También podría gustarte...</h2>
                    <p class=" sectionTitle__text mt-5 sm:mt-0"></p>
                </div>
            </div>
        </div>


    </div>
</section>

<div class="modal fade" id="modalServicio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close float-right" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body cont_edit">

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let myModal = new bootstrap.Modal(document.getElementById("modalServicio"), {});
        $('#btnBorrar').on('click', function() {
            $.ajax({
                type: 'POST',
                url: baseURL + 'carrito/deleteCart',
                // dataType: 'json',
                success: function(res) {
                    location.reload();
                }
            });
        });

        function reloadJs(src) {
            src = $('script[src$="' + src + '"]').attr("src");
            $('script[src$="' + src + '"]').remove();
            $('<script/>').attr('src', src).appendTo('head');
        }

        $('.btnEditar').on('click', function() {
            let rowid = $(this).data('rowid');
            $.ajax({
                type: 'POST',
                url: baseURL + 'ajax/servicio/showEditCart',
                // dataType: 'json',
                data: {
                    rowid: rowid,
                },
                success: function(res) {
                    res = JSON.parse(res);
                    console.log('carrito/showEditCart', res);
                    $(".cont_edit").html(res.html).fadeIn("slow");
                    myModal.show();
                    // reloadJs(baseURL + "assets/js/main.js");
                    initialReveal();
                    initComponents();
                    $('#fecha_dispon').daterangepicker({
                        "singleDatePicker": true,
                        "autoApply": true,
                        "locale": {
                            "format": "MMMM D, Y",
                            "separator": " - ",
                            "applyLabel": "Apply",
                            "cancelLabel": "Cancel",
                            "fromLabel": "From",
                            "toLabel": "To",
                            "customRangeLabel": "Custom",
                            "weekLabel": "W",
                            "daysOfWeek": [
                                "Do",
                                "Lu",
                                "Ma",
                                "Mi",
                                "Ju",
                                "Vi",
                                "Sa"
                            ],
                            "monthNames": [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Setiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ],
                            "firstDay": 1
                        },
                        "opens": "center"
                    }, function(start, end, label) {
                        console.log('New date range selected: ' + start.format('MMMM D, YYYY') + ' to ' + end.format('MMMM D, YYYY') + ' (predefined range: ' + label + ')');
                    });


                    $('#form_reserva').submit(function(e) {
                        e.preventDefault();
                        $.ajax({
                            url: `${baseURL}ajax/servicio/disponibilidad`,
                            type: 'POST',
                            // dataType: 'json',
                            data: $('#form_reserva').serialize(),
                            // data: {
                            //     'cod_servicio': $('#cod_servicio').val(),
                            // }
                        }).always(function(res) {
                            res = JSON.parse(res);
                            console.log("ajax/servicio/disponibilidad", res);
                            if (res.status == true) {
                                if (res.cartitem_updated == true) {
                                    location.reload();
                                } else {

                                    swal({
                                        title: "Error al actualizar el servicio",
                                        animation: false,
                                        type: 'info',
                                        customClass: 'animated tada',
                                        padding: '2em'
                                    })
                                }
                                // let personas = "";
                                // if (res.data.num_ninos_menores >= 1) personas += res.data.num_ninos_menores + " Niños infantes /";
                                // if (res.data.num_ninos_mayores >= 1) personas += res.data.num_ninos_mayores + " Niños /";
                                // if (res.data.num_adultos >= 1) personas += res.data.num_adultos + " Adultos /";
                                // if (res.data.num_adultos_mayores >= 1) personas += res.data.num_adultos_mayores + " Adultos mayores /";
                                // $("#div-fecha").html("Fecha: " + res.data.fecha_reserva);
                                // $("#div-personas").html("Personas: " + personas);
                                // $("#span-total").html("$ " + res.data.total);
                                // $("#span-tipo").html((res.data.id_costo == 1) ? `/ Por ${res.data.numero_personas} persona` : "/ Por Paquete");
                                // // var myModal = new bootstrap.Modal(document.getElementById("myModal"), {});
                                // myServicio.total = res.data.total;
                                // myServicio.personas = res.data.numero_personas;
                                // myServicio.fecha_reserva = res.data.fecha_reserva;
                                // myServicio.ninos_menores = parseInt(res.data.num_ninos_menores);
                                // myServicio.ninos_mayores = parseInt(res.data.num_ninos_mayores);
                                // myServicio.adultos = parseInt(res.data.num_adultos);
                                // myServicio.adultos_mayores = parseInt(res.data.num_adultos_mayores);
                                // myModal.show()
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

                        return false;
                    });
                }
            });
        });

        $('.btnEliminar').on('click', function() {
            let rowid = $(this).data('rowid');
            $.ajax({
                type: 'POST',
                url: baseURL + 'carrito/deleteOneItemInCart',
                dataType: 'json',
                data: {
                    rowid: rowid,
                },
                success: function(res) {
                    console.log('carrito/deleteOneItemInCart', res);
                    location.reload();
                }
            });
        });

    });
</script>