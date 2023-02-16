<?php
$total_pages = 0;
if ($total >= 1) {

    $total_pages = ceil($total / NUM_ITEMS_BY_PAGE);
    // $subcategorias = [];
    $costos = [];
    foreach ($servicios as $col) {
        // array_push($subcategorias, $col['cod_subcategori']);
        array_push($costos, $col->costo);
    }

    $page = 1;
?>
    <section class="mt-40 sm:mt-60 layout-pt-md layout-pb-lg">
        <div class="container">
            <?php if (isset($destino)) : ?>
                <div class="row">
                    <div class="col-12">
                        <div class="relative d-flex">
                            <img src="<?= SERVER_IMG ?>destinos/<?= $destino->imagen; ?>" alt="image" class="col-12 rounded-4">
                            <div class="absolute z-2 px-50 py-60">
                                <h1 class="text-50 fw-600 text-white"><?= $destino->nombre ?></h1>
                                <!-- <div class="text-white">Explore deals, travel guides and things to do in London</div> -->
                            </div>
                            <!-- <div class="absolute d-flex justify-end items-end col-12 h-full z-1 px-10 py-10">
                            <button class="button -md -blue-1 bg-white text-dark-1 text-14 fw-500">See All 90 Photos</button>
                        </div> -->
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row y-gap-30 mt-0">
                <div class="col-xl-3 col-lg-4 lg:d-none">
                    <aside class="sidebar y-gap-40">
                        <div class="sidebar__item -no-border">
                            <!-- <h5 class="text-18 fw-500 mb-10">Filtro</h5> -->
                            <div class="form-input ">
                                <input type="text" id="filtro" name="filtro" value="">
                                <label class="lh-1 text-16 text-light-1">Filtro</label>
                            </div>
                        </div>
                        <div class="sidebar__item -no-border">
                            <h5 class="text-18 fw-500 mb-10">Categorias</h5>
                            <input type="hidden" name="cod_destino" id="cod_destino" value="<?= $destino->id_region ?>">
                            <div class="sidebar-checkbox">
                                <?php
                                foreach ($categorias as $sub) {
                                ?>
                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" class="common_selector categoria" value="<?= $sub->cod_categoria; ?>">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>
                                                <div class="text-15 ml-10"><?= $sub->nombre; ?></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">
                                                <?php
                                                //echo print_r(array_search($cod_sub, $subcategorias));
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>


                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-10">Precios</h5>
                            <div class="row x-gap-10 y-gap-30">
                                <div class="col-12">
                                    <div class="">
                                        <div class="text-14 fw-500"></div>
                                        <div class="d-flex justify-between mb-20">
                                            <div class="text-15 text-dark-1">
                                                <?php $costo_maximo = max($costos); ?>
                                                <span class="price_show">0.000 - <?= $costo_maximo ?></span>
                                            </div>
                                        </div>
                                        <div class="px-5">
                                            <input type="hidden" class="hidden_minimum_price" value="0" />
                                            <input type="hidden" class="hidden_maximum_price" value="<?= $costo_maximo ?>" />
                                            <div class="rango_costo"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Duracion <?= $duraciones["4"]["hasta"] ?></h5>
                            <div class="sidebar-checkbox">
                                <?php foreach ($duraciones as $key => $row) { ?>
                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" class="common_selector duracion" value="<?= $key ?>">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>
                                                <div class="text-15 ml-10"><?= $row["nombre"] ?></div>
                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <!-- <div class="text-15 text-light-1">92</div> -->
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </aside>
                </div>

                <div class="col-xl-9 col-lg-8 contend_servis">
                    <div class="row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="text-18"><span class="fw-500" id="total"></span> Resultados</div>
                        </div>

                        <div class="col-auto">
                            <div class="row x-gap-20 y-gap-20">
                                <!-- <div class="col-auto">
                                    <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                        <i class="icon-list text-14 mr-10"></i>
                                        Lista
                                    </button>
                                </div>

                                <div class="col-auto">
                                    <button class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                        <i class="icon-up-down text-14 mr-10"></i>
                                        Map
                                    </button>
                                </div> -->

                                <div class="col-auto d-none lg:d-block">
                                    <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                        <i class="icon-up-down text-14 mr-10"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
                        <aside class="sidebar -mobile-filter">
                            <div data-x-click="filterPopup" class="-icon-close">
                                <i class="icon-close"></i>
                            </div>
                            <!-- sidebar__item -->
                            <div class="sidebar__item -no-border">
                                <!-- <h5 class="text-18 fw-500 mb-10">Filtro</h5> -->
                                <div class="form-input ">
                                    <input type="text" id="filtro" name="filtro" value="">
                                    <label class="lh-1 text-16 text-light-1">Filtro</label>
                                </div>
                            </div>
                            <div class="sidebar__item -no-border">
                                <h5 class="text-18 fw-500 mb-10">Categorias</h5>
                                <div class="sidebar-checkbox">
                                    <?php
                                    foreach ($categorias as $sub) {
                                    ?>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <div class="d-flex items-center">
                                                    <div class="form-checkbox ">
                                                        <input type="checkbox" class="common_selector categoria" value="<?= $sub->cod_categoria; ?>">
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10"><?= $sub->nombre; ?></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="text-15 text-light-1">
                                                    <?php
                                                    //echo print_r(array_search($cod_sub, $subcategorias));
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="sidebar__item pb-30">
                                <h5 class="text-18 fw-500 mb-10">Precios</h5>
                                <div class="row x-gap-10 y-gap-30">
                                    <div class="col-12">
                                        <div class="">
                                            <div class="text-14 fw-500"></div>
                                            <div class="d-flex justify-between mb-20">
                                                <div class="text-15 text-dark-1">
                                                    <?php $costo_maximo = max($costos); ?>
                                                    <span class="price_show">0.000 - <?= $costo_maximo ?></span>
                                                </div>
                                            </div>
                                            <div class="px-5">
                                                <input type="hidden" class="hidden_minimum_price" value="0" />
                                                <input type="hidden" class="hidden_maximum_price" value="<?= $costo_maximo ?>" />
                                                <div class="rango_costo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item">
                                <h5 class="text-18 fw-500 mb-10">Duracion <?= $duraciones["4"]["hasta"] ?></h5>
                                <div class="sidebar-checkbox">
                                    <?php foreach ($duraciones as $key => $row) { ?>
                                        <div class="row y-gap-10 items-center justify-between">
                                            <div class="col-auto">
                                                <div class="d-flex items-center">
                                                    <div class="form-checkbox ">
                                                        <input type="checkbox" class="common_selector duracion" value="<?= $key ?>">
                                                        <div class="form-checkbox__mark">
                                                            <div class="form-checkbox__icon icon-check"></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-15 ml-10"><?= $row["nombre"] ?></div>
                                                </div>

                                            </div>

                                            <div class="col-auto">
                                                <!-- <div class="text-15 text-light-1">92</div> -->
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="border-top-light mt-30 mb-30"></div>

                    <!-- list services -->
                    <div class="row y-gap-30" id="contenData">

                    </div>
                    <!-- list services -->
                    <!--paginate -->
                    <div class="row x-gap-10 y-gap-20 justify-between md:justify-center" id="Dpaginate">

                    </div>



                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="layout-pt-md layout-pb-md bg-dark-2">
    <div class="container">
        <div class="row y-gap-30 justify-between items-center">
            <div class="col-auto">
                <div class="row y-gap-20  flex-wrap items-center">
                    <div class="col-auto">
                        <div class="icon-newsletter text-60 sm:text-40 text-white"></div>
                    </div>

                    <div class="col-auto">
                        <h4 class="text-26 text-white fw-600">Your Travel Journey Starts Here</h4>
                        <div class="text-white">Sign up and we'll send the best deals to you</div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="single-field -w-410 d-flex x-gap-10 y-gap-20">
                    <div>
                        <input class="bg-white h-60" type="text" placeholder="Your Email">
                    </div>

                    <div>
                        <button class="button -md h-60 bg-blue-1 text-white">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {

        filter_data();

        function filter_data() {
            console.log('filter_data() ');
            $('#contenData').html('<div id="loading" style="" ></div>');
            // var action = 'fetch_data';
            var filtro = $('#filtro').val();
            var precio_minimo = $('.hidden_minimum_price').val();
            var precio_maximo = $('.hidden_maximum_price').val();
            let cod_destino = $("#cod_destino").val();
            let cod_categoria = get_filter('categoria');
            let duraciones = get_filter('duracion');
            // var ram = get_filter('ram');
            // var storage = get_filter('storage');
            $.ajax({
                url: `${baseURL}ajax/Servicio/getItems_Destino`,
                method: "POST",
                data: {
                    // action: action,
                    precio_minimo: precio_minimo,
                    precio_maximo: precio_maximo,
                    cod_categoria: cod_categoria,
                    cod_destino: cod_destino,
                    duraciones: duraciones,
                    texto: filtro,
                    // storage: storage
                },
                success: function(res) {
                    res = JSON.parse(res);
                    $("#total").text(res.total);
                    $('#contenData').html(res.html);
                }
            });
        }

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function() {
                filter.push($(this).val());
            });
            return filter;
        }

        $('.common_selector').click(function() {
            filter_data();
        });

        let costo_maximo = <?= $costo_maximo ?>;
        $('.rango_costo').slider({
            range: true,
            min: 0.000,
            max: costo_maximo,
            values: [0.000, costo_maximo],
            // step: 500,
            stop: function(event, ui) {
                $('.price_show').html(ui.values[0].toFixed(3) + ' - ' + ui.values[1].toFixed(3));
                $('.hidden_minimum_price').val(ui.values[0]);
                $('.hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });
        $("#filtro").on("keydown", function(event) {
            if (event.which == 13)
                filter_data();
        });


    });
</script>