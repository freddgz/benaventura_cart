<section data-anim-wrap class="masthead -type-5">
  <div data-anim-child="fade" class="masthead__bg">
    <img src="<?= base_url(); ?>assets/img/banner/bg.svg" alt="image">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xl-9">
        <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30">
          La mejor
          <span class="text-blue-1 relative">Experiencia de viajes
            <span class="-line">
              <img src="<?= base_url(); ?>assets/img/banner/line.png" alt="image">
            </span>
          </span>
        </h1>
        <p data-anim-child="slide-up delay-5" class="mt-20">Experimente los diversos y emocionantes paquetes de viajes y excursiones y haga reservas de hotel,<br class="lg:d-none"> encuentre paquetes de vacaciones, busque hoteles baratos y eventos</p>


        <div class="mt-40 mainSearch -w-900 bg-white px-10 py-10 lg:px-20 lg:pt-5 lg:pb-20 rounded-100">
          <div class="button-grid items-center">

            <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch" style="grid-column: span 2;">
              <div>
                <h4 class="text-15 fw-500 ls-2 lh-16">Buscar</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input autocomplete="off" class="js-search js-dd-focus" type="search" id="search" name="search" placeholder="Servicio, Destino, Aventura, etc" />
                </div>
              </div>

              <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                  <div class="y-gap-5 js-results">

                  </div>
                </div>
              </div>


            </div>


            <!-- <div class="px-30 lg:py-20 lg:px-0">
              <div>
                <h4 class="text-15 fw-500 ls-2 lh-16">Desde - Hasta</h4>
                <div class="text-15 text-light-1 ls-2 lh-16">
                  <input type="text" name="rango_fecha" id="rango_fecha" required>
                </div>
              </div>
            </div> -->
            <div class="button-item">
              <button id="btnSearch" class="mainSearch__submit button -dark-1 h-60 px-35 col-12 rounded-100 bg-blue-1 text-white">
                <i class="icon-search text-20 mr-10"></i>
                Buscar
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div data-anim-child="fade" class="masthead__image">
    <img src="<?= base_url(); ?>assets/img/banner/1.png" alt="image">
  </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div data-anim-wrap class="container">
    <div class="tabs -pills-2 js-tabs">
      <div data-anim-child="slide-up delay-1" class="row y-gap-20 justify-between items-end">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Tendencias</h2>
            <p class=" sectionTitle__text mt-5 sm:mt-0">Categorias en tendencia</p>
          </div>
        </div>

        <div class="col-auto">
          <div class="tabs__controls row x-gap-10 justify-center js-tabs-controls">
            <?php
            $n = 1;
            foreach ($categorias as $cate) {
            ?>
              <div class="col-auto">
                <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button <?= ($n == 1) ? "is-tab-el-active" : ""; ?>" data-tab-target=".-tab-item-<?= $n; ?>">
                  <?= $cate->nombre; ?>
                </button>
              </div>
            <?php
              $n++;
            }

            ?>
          </div>
        </div>
      </div>

      <div class="tabs__content pt-40 js-tabs-content">
        <?php
        $d = 1;
        foreach ($categorias as $cate) {
        ?>
          <div class="tabs__pane -tab-item-<?= $d; ?> <?= ($d == 1) ? "is-tab-el-active" : ""; ?>">
            <div class="row y-gap-30">
              <?php
              foreach ($cate->servicios as $ser) {
                $id_servicio = $ser->cod_servicio;
              ?>
                <div data-anim-child="slide-up delay-1" class="col-xl-3 col-lg-3 col-sm-6">
                  <a href="<?= base_url(); ?>detalleTour/<?= $id_servicio; ?>" class="tourCard -type-1 rounded-4 ">
                    <div class="tourCard__image">
                      <div class="cardImage ratio ratio-1:1">
                        <div class="cardImage__content">
                          <img class="rounded-4 col-12 js-lazy" src="#" data-src="<?= SERVER_IMG ?>portada/<?= $ser->img_portada; ?>" alt="image">
                        </div>
                        <div class="cardImage__wishlist">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                            <i class="icon-heart text-12"></i>
                          </button>
                        </div>
                        <div class="cardImage__leftBadge">
                          <!-- <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-dark-1 text-white">
                                LIKELY TO SELL OUT*
                              </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="tourCard__content mt-10">
                      <div class="d-flex items-center lh-14 mb-5">
                        <div class="text-14 text-light-1"><?= $ser->duracion . " " . $ser->medida_duracion; ?></div>
                      </div>
                      <h4 class="tourCard__title text-dark-1 text-18 lh-16 fw-500">
                        <span><?= ucfirst($ser->titulo); ?></span>
                      </h4>
                      <p class="text-light-1 lh-14 text-14 mt-5">
                        <?php
                        if (isset($ser->geo)) {
                          echo $ser->geo->region . ", " . $ser->geo->provincia;
                        } else {
                          echo "No definido.";
                        }
                        ?></p>
                      <div class="row justify-between items-center pt-15">
                        <div class="col-auto">
                          <div class="d-flex items-center">
                            <div class="d-flex items-center x-gap-5">

                              <div class="icon-star text-yellow-1 text-10"></div>

                              <div class="icon-star text-yellow-1 text-10"></div>

                              <div class="icon-star text-yellow-1 text-10"></div>

                              <div class="icon-star text-yellow-1 text-10"></div>

                              <div class="icon-star text-yellow-1 text-10"></div>

                            </div>

                            <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <div class="text-14 text-light-1">
                            Desde
                            <span class="text-16 fw-500 text-dark-1">$ <?= $ser->costo; ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php } ?>
            </div>
          </div>
        <?php
          $d++;
        }
        ?>

      </div>

    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-md">
  <div data-anim-wrap class="container">
    <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Top Destinos</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Los destinos mas populares de todo Chile</p>
        </div>
      </div>
    </div>

    <div class="row y-gap-40 justify-between pt-40 sm:pt-20">
      <?php
      $de = 3;
      foreach ($servicios_top as $row) {
        if (($de % 2) == 0) {
          $amplitud = 3;
        } else {
          if ($de == 5) {
            $amplitud = 3;
          } else {
            $amplitud = 6;
          }
        }

      ?>
        <div data-anim-child="slide-up delay-<?= $de; ?>" class="col-xl-<?= $amplitud; ?> col-md-4 col-sm-6">
          <a href="<?= base_url() . "destino/" . strtolower($row->nombre); ?>" class="citiesCard -type-3 d-block h-full rounded-4 ">
            <div class="citiesCard__image ratio ratio-1:1">
              <img class="col-12 js-lazy" src="#" data-src="<?= SERVER_IMG ?>destinos/<?= $row->imagen; ?>" alt="image">
            </div>
            <div class="citiesCard__content px-30 py-30">
              <h4 class="text-26 fw-600 text-white"><?= $row->nombre; ?></h4>
              <?php if ($row->cantidad_aventura > 0) : ?>
                <div class="text-15 text-white"><?= $row->cantidad_aventura ?> Aventuras</div>
              <?php endif ?>
              <?php if ($row->cantidad_tour > 0) : ?>
                <div class="text-15 text-white"><?= $row->cantidad_tour ?> Tours</div>
              <?php endif ?>
            </div>
          </a>

        </div>
      <?php
        $de++;
      }
      ?>

    </div>
  </div>
</section>



<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-15 justify-center text-center">

      <div class="col-xl-3 col-sm-6">
        <div class="text-40 lh-13 text-blue-1 fw-600">4,958</div>
        <div class="text-14 lh-14 text-light-1 mt-5">Destinations</div>
      </div>

      <div class="col-xl-3 col-sm-6">
        <div class="text-40 lh-13 text-blue-1 fw-600">2,869</div>
        <div class="text-14 lh-14 text-light-1 mt-5">Total Properties</div>
      </div>

      <div class="col-xl-3 col-sm-6">
        <div class="text-40 lh-13 text-blue-1 fw-600">2M</div>
        <div class="text-14 lh-14 text-light-1 mt-5">Happy customers</div>
      </div>

      <div class="col-xl-3 col-sm-6">
        <div class="text-40 lh-13 text-blue-1 fw-600">574,974</div>
        <div class="text-14 lh-14 text-light-1 mt-5">Our Volunteers</div>
      </div>

    </div>
  </div>
</section>

<section class="section-bg layout-pt-lg md:pt-0 md:pb-60 sm:pb-40 layout-pb-lg bg-blue-1-05">
  <div class="section-bg__item -right -image col-5 md:mb-60 sm:mb-40">
    <img src="img/backgrounds/5.png" alt="image">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-md-7">
        <h2 class="text-30 fw-600">Why Choose Us</h2>
        <p class="mt-5">These popular destinations have a lot to offer</p>

        <div class="row y-gap-30 pt-60 md:pt-40">

          <div class="col-12">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/1.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/2.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="d-flex pr-30">
              <img class="size-50" src="img/featureIcons/1/3.svg" alt="image">

              <div class="ml-15">
                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-bg layout-pt-lg layout-pb-md">
  <div class="section-bg__item col-12">
    <img src="img/backgrounds/testimonials/bg.png" alt="image">
  </div>

  <div data-anim="slide-up delay-1" class="container">
    <div class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Customer Reviews</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
        </div>
      </div>
    </div>


    <div class="row justify-center pt-60 md:pt-30">
      <div class="col-xl-5 col-lg-8 col-md-11">
        <div class="overflow-hidden js-section-slider" data-slider-cols="base-1" data-gap="30" data-pagination="js-testimonials-pag">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonials -type-2 text-center">
                <div class="testimonials__image mb-24 md:mb-20">
                  <img src="img/testimonials/2/quote.svg" alt="quote">
                  <img src="img/testimonials/2/1.png" alt="quote">
                </div>

                <h4 class="text-16 fw-500 text-blue-1">Hotel Equatorial Melaka</h4>
                <div class="fw-500 text-dark-1 mt-20">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</div>

                <div class="testimonials__author mt-40">
                  <h5 class="text-15 lh-14 fw-500">Brooklyn Simmons</h5>
                  <div class="text-14 text-light-1 mt-5">Web Developer</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonials -type-2 text-center">
                <div class="testimonials__image mb-24 md:mb-20">
                  <img src="img/testimonials/2/quote.svg" alt="quote">
                  <img src="img/testimonials/2/2.png" alt="quote">
                </div>

                <h4 class="text-16 fw-500 text-blue-1">Hotel Equatorial Melaka</h4>
                <div class="fw-500 text-dark-1 mt-20">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</div>

                <div class="testimonials__author mt-40">
                  <h5 class="text-15 lh-14 fw-500">Brooklyn Simmons</h5>
                  <div class="text-14 text-light-1 mt-5">Web Developer</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonials -type-2 text-center">
                <div class="testimonials__image mb-24 md:mb-20">
                  <img src="img/testimonials/2/quote.svg" alt="quote">
                  <img src="img/testimonials/2/3.png" alt="quote">
                </div>

                <h4 class="text-16 fw-500 text-blue-1">Hotel Equatorial Melaka</h4>
                <div class="fw-500 text-dark-1 mt-20">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</div>

                <div class="testimonials__author mt-40">
                  <h5 class="text-15 lh-14 fw-500">Brooklyn Simmons</h5>
                  <div class="text-14 text-light-1 mt-5">Web Developer</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonials -type-2 text-center">
                <div class="testimonials__image mb-24 md:mb-20">
                  <img src="img/testimonials/2/quote.svg" alt="quote">
                  <img src="img/testimonials/2/4.png" alt="quote">
                </div>

                <h4 class="text-16 fw-500 text-blue-1">Hotel Equatorial Melaka</h4>
                <div class="fw-500 text-dark-1 mt-20">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</div>

                <div class="testimonials__author mt-40">
                  <h5 class="text-15 lh-14 fw-500">Brooklyn Simmons</h5>
                  <div class="text-14 text-light-1 mt-5">Web Developer</div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonials -type-2 text-center">
                <div class="testimonials__image mb-24 md:mb-20">
                  <img src="img/testimonials/2/quote.svg" alt="quote">
                  <img src="img/testimonials/2/5.png" alt="quote">
                </div>

                <h4 class="text-16 fw-500 text-blue-1">Hotel Equatorial Melaka</h4>
                <div class="fw-500 text-dark-1 mt-20">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</div>

                <div class="testimonials__author mt-40">
                  <h5 class="text-15 lh-14 fw-500">Brooklyn Simmons</h5>
                  <div class="text-14 text-light-1 mt-5">Web Developer</div>
                </div>
              </div>
            </div>

          </div>


          <div class="d-flex x-gap-15 items-center justify-center pt-40 sm:pt-20">
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-left-hover js-prev">
                <i class="icon icon-arrow-left"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="pagination -dots text-border js-testimonials-pag"></div>
            </div>

            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-right-hover js-next">
                <i class="icon icon-arrow-right"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<section class="layout-pt-lg layout-pb-md">
  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-auto">
        <div class="text-15 lh-1">Trusted by the world’s best</div>
      </div>
    </div>

    <div class="row y-gap-40 justify-between items-center pt-60 lg:pt-40 sm:pt-20">

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/1.svg" alt="image">
        </div>
      </div>

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/2.svg" alt="image">
        </div>
      </div>

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/3.svg" alt="image">
        </div>
      </div>

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/4.svg" alt="image">
        </div>
      </div>

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/5.svg" alt="image">
        </div>
      </div>

      <div class="col-md-auto col-6">
        <div class="d-flex justify-center">
          <img src="img/clients/6.svg" alt="image">
        </div>
      </div>

    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-md">
  <div data-anim-wrap class="container">
    <div data-anim="slide-up delay-1" class="row justify-center text-center">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Get inspiration for your next trip</h2>
          <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
        </div>
      </div>
    </div>

    <div class="row y-gap-30 pt-40 sm:pt-20">

      <div data-anim="slide-up delay-3" class="col-lg-4 col-sm-6">

        <a href="" class="blogCard -type-1 d-block ">
          <div class="blogCard__image">
            <div class="ratio ratio-4:3 rounded-4 rounded-8">
              <img class="img-ratio js-lazy" src="#" data-src="img/blog/1.png" alt="image">
            </div>
          </div>

          <div class="mt-20">
            <h4 class="text-dark-1 text-18 fw-500">10 European ski destinations you should visit this winter</h4>
            <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
          </div>
        </a>

      </div>

      <div data-anim="slide-up delay-4" class="col-lg-4 col-sm-6">

        <a href="" class="blogCard -type-1 d-block ">
          <div class="blogCard__image">
            <div class="ratio ratio-4:3 rounded-4 rounded-8">
              <img class="img-ratio js-lazy" src="#" data-src="img/blog/2.png" alt="image">
            </div>
          </div>

          <div class="mt-20">
            <h4 class="text-dark-1 text-18 fw-500">Booking travel during Corona: good advice in an uncertain time</h4>
            <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
          </div>
        </a>

      </div>

      <div data-anim="slide-up delay-5" class="col-lg-4 col-sm-6">

        <a href="" class="blogCard -type-1 d-block ">
          <div class="blogCard__image">
            <div class="ratio ratio-4:3 rounded-4 rounded-8">
              <img class="img-ratio js-lazy" src="#" data-src="img/blog/3.png" alt="image">
            </div>
          </div>

          <div class="mt-20">
            <h4 class="text-dark-1 text-18 fw-500">Where can I go? 5 amazing countries that are open right now</h4>
            <div class="text-light-1 text-15 lh-14 mt-5">April 06, 2022</div>
          </div>
        </a>

      </div>

    </div>
  </div>
</section>

<section class="layout-pt-md layout-pb-lg">
  <div class="container">
    <div class="row y-gap-20 justify-between items-end">
      <div class="col-auto">
        <div class="sectionTitle -md">
          <h2 class="sectionTitle__title">Not a Member Yet?</h2>
          <p class="text-dark-1 sectionTitle__text mt-5 sm:mt-0">Join us! Our members can access savings of up to 50% and earn Trip Coins while booking.</p>
        </div>
      </div>

      <div class="col-auto">
        <div class="row x-gap-20 y-gap-20">
          <div class="col-auto">
            <button class="button px-40 h-60 -white bg-blue-1 text-white">
              Sign In
              <i class="icon-arrow-top-right ml-10"></i>
            </button>
          </div>

          <div class="col-auto">
            <button class="button px-40 h-60 -outline-blue-1 text-blue-1">
              Register
              <i class="icon-arrow-top-right ml-10"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(document).ready(function() {

    $('#btnSearch').click(function() {
      let texto = $("#search").val();
      window.location = `${baseURL}categoria/cat_aventura?search=${texto}`;

    });

    document.getElementById("search").addEventListener("keyup", function() {
      const target = document.querySelector(`[data-x-dd=searchMenu-loc]`)
      target.classList.remove('-is-active')
      if (this.value == "") {
        $(".js-results").html("");
      } else {
        target.classList.add('-is-active')

        $.ajax({
          type: 'POST',
          url: baseURL + 'ajax/servicio/buscar',
          dataType: 'json',
          data: "texto=" + this.value,
          beforeSend: function(objeto) {
            $(".js-results").html('<div class="svg-preloader"></div>');
          },
          success: function(res) {
            $(".js-results").html(res.html);
          }
        });
      }
    })
  });
</script>