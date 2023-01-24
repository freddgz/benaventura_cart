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
    <section class="mt-90 layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30">
                <div class="col-xl-3 col-lg-4 lg:d-none">
                    <aside class="sidebar y-gap-40">
                        <div class="sidebar__item -no-border">
                            <h5 class="text-18 fw-500 mb-10">Categorias</h5>
                            <input type="hidden" name="cod_categoria" id="cod_categoria" value="<?= $categoria->cod_categoria ?>">
                            <div class="sidebar-checkbox">
                                <?php
                                foreach ($subcategorias as $sub) {
                                ?>
                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">
                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" class="common_selector subcategoria" value="<?= $sub->cod_sub_cate; ?>">
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

                        <!-- <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Destinos</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Free cancellation</div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">92</div>
                                    </div>
                                </div>

                            </div>
                        </div> -->

                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-10">Precios</h5>
                            <div class="row x-gap-10 y-gap-30">
                                <div class="col-12">
                                    <div class="">
                                        <div class="text-14 fw-500"></div>
                                        <div class="d-flex justify-between mb-20">
                                            <div class="text-15 text-dark-1">
                                                <?php $costo_maximo = max($costos); ?>
                                                <span id="price_show">0.000 - <?= $costo_maximo ?></span>
                                            </div>
                                        </div>
                                        <div class="px-5">
                                            <input type="hidden" id="hidden_minimum_price" value="0" />
                                            <input type="hidden" id="hidden_maximum_price" value="<?= $costo_maximo ?>" />
                                            <div id="rango_costo"></div>
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

                        <!-- <div class="col-auto">
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-auto">
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
                                </div>

                                <div class="col-auto d-none lg:d-block">
                                    <button data-x-click="filterPopup" class="button -blue-1 h-40 px-20 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                                        <i class="icon-up-down text-14 mr-10"></i>
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>

                    <div class="filterPopup bg-white" data-x="filterPopup" data-x-toggle="-is-active">
                        <aside class="sidebar -mobile-filter">
                            <div data-x-click="filterPopup" class="-icon-close">
                                <i class="icon-close"></i>
                            </div>

                            <div class="sidebar__item -no-border">
                                <h5 class="text-18 fw-500 mb-10">Category Types</h5>
                                <div class="sidebar-checkbox">

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Tours</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">92</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Attractions </div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">45</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Day Trips</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">21</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Outdoor Activities </div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">78</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Concerts &amp; Shows </div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">679</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="sidebar__item">
                                <h5 class="text-18 fw-500 mb-10">Other</h5>
                                <div class="sidebar-checkbox">

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Free cancellation</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">92</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="sidebar__item pb-30">
                                <h5 class="text-18 fw-500 mb-10">Price</h5>
                                <div class="row x-gap-10 y-gap-30">
                                    <div class="col-12">
                                        <div class="js-price-rangeSlider">
                                            <div class="text-14 fw-500"></div>

                                            <div class="d-flex justify-between mb-20">
                                                <div class="text-15 text-dark-1">
                                                    <span class="js-lower"></span>
                                                    -
                                                    <span class="js-upper"></span>
                                                </div>
                                            </div>

                                            <div class="px-5">
                                                <div class="js-slider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar__item">
                                <h5 class="text-18 fw-500 mb-10">Duration</h5>
                                <div class="sidebar-checkbox">

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Up to 1 hour</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">92</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">1 to 4 hours </div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">45</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">4 hours to 1 day </div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">21</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="sidebar__item">
                                <h5 class="text-18 fw-500 mb-10">Languages</h5>
                                <div class="sidebar-checkbox">

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">English</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">92</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Spanish</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">45</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">French</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">45</div>
                                        </div>
                                    </div>

                                    <div class="row y-gap-10 items-center justify-between">
                                        <div class="col-auto">

                                            <div class="d-flex items-center">
                                                <div class="form-checkbox ">
                                                    <input type="checkbox" name="name">
                                                    <div class="form-checkbox__mark">
                                                        <div class="form-checkbox__icon icon-check"></div>
                                                    </div>
                                                </div>

                                                <div class="text-15 ml-10">Turkish</div>

                                            </div>

                                        </div>

                                        <div class="col-auto">
                                            <div class="text-15 text-light-1">21</div>
                                        </div>
                                    </div>

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

        // let sucbategoria_filtro = '<?= $filtro["subcategoria"] ?>';
        // console.log('sucbategoria_filtro', sucbategoria_filtro);
        document.querySelectorAll(".subcategoria").forEach((el, idx) => {
            if (el.value == '<?= $filtro["subcategoria"] ?>')
                el.checked = true;
            // console.log(`${idx} Element ${el.tagName} with ID #${el.id} value: ${el.value}`);
        });
        filter_data();

        function filter_data() {
            console.log('filter_data() ');
            $('#contenData').html('<div id="loading" style="" ></div>');
            // var action = 'fetch_data';
            var precio_minimo = $('#hidden_minimum_price').val();
            var precio_maximo = $('#hidden_maximum_price').val();
            let cod_categoria = $("#cod_categoria").val();
            let cod_sub_categoria = get_filter('subcategoria');
            let duraciones = get_filter('duracion');
            // var ram = get_filter('ram');
            // var storage = get_filter('storage');
            $.ajax({
                url: `${baseURL}ajax/Servicio/getItems`,
                method: "POST",
                data: {
                    // action: action,
                    precio_minimo: precio_minimo,
                    precio_maximo: precio_maximo,
                    cod_sub_categoria: cod_sub_categoria,
                    cod_categoria: cod_categoria,
                    duraciones: duraciones,
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
        $('#rango_costo').slider({
            range: true,
            min: 0.000,
            max: costo_maximo,
            values: [0.000, costo_maximo],
            // step: 500,
            stop: function(event, ui) {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });

    });
</script>