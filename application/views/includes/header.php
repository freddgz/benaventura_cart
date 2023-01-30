<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?= base_url() ?>favicon.png">
  <title><?= $pageTitle ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vendors.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/pluging/daterangepicker-master/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/pluging/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/pluging/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />




  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <script src="<?= base_url() ?>assets/js/vendors.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>
  <script src="<?= base_url() ?>assets/pluging/daterangepicker-master/moment.min.js"></script>

  <script src="<?= base_url() ?>assets/pluging/daterangepicker-master/daterangepicker.js"></script>
  <script src="<?= base_url() ?>assets/pluging/sweetalerts/sweetalert2.min.js"></script>
  <script src="<?= base_url() ?>assets/pluging/sweetalerts/custom-sweetalert.js"></script>

</head>

<body>
  <main>
    <div class="preloader js-preloader">
      <div class="preloader__wrap">
        <div class="preloader__icon">
          <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1_41)">
              <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
            </g>

            <defs>
              <clipPath id="clip0_1_41">
                <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
              </clipPath>
            </defs>
          </svg>
        </div>
      </div>

      <div class="preloader__title">VenAventura</div>
    </div>

    <header data-add-bg="" class="header bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
      <div data-anim="fade" class="header__container px-30 sm:px-20">
        <div class="row justify-between items-center">
          <div class="col-auto">
            <div class="d-flex items-center">
              <a href="<?= base_url() ?>" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="<?= base_url() ?>assets/img/logo.svg" alt="logo icon">
                <img src="<?= base_url() ?>assets/img/logo.svg" alt="logo icon">
              </a>
              <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                <div class="mobile-overlay"></div>
                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>
                  <div class="menu js-navList">
                    <ul class="menu__nav text-dark-1 -is-active">
                      <li>
                        <a href="<?= base_url() ?>">Inicio</a>
                      </li>
                      <?php
                      $categorias = $this->categoria_model->getAll();
                      foreach ($categorias as $index => $row) { ?>
                        <li class="menu-item-has-children">
                          <a data-barba href="<?= base_url() . strtolower($row->nombre); ?>">
                            <span class="mr-10"><?= $row->nombre; ?></span>
                            <i class="icon icon-chevron-sm-down"></i>
                          </a>

                          <ul class="subnav">
                            <li class="subnav__backBtn js-nav-list-back">
                              <a href="#"><i class="icon icon-chevron-sm-down"></i>
                                <?= $row->nombre; ?></a>
                            </li>
                            <li><a href="<?= base_url() . "categoria/" . PREFIX_CAT . strtolower($row->nombre) ?>">Todos</a>
                            </li>
                            <?php
                            $subcategorias = $this->categoria_model->getAll_Subcateoria_IdCategoria($row->cod_categoria);
                            foreach ($subcategorias as $subca) { ?>
                              <li>
                                <a href="<?= base_url() . "categoria/" . strtolower($subca->nombre); ?>">
                                  <?= $subca->nombre; ?></a>
                              </li>
                            <?php } ?>
                          </ul>

                        </li>
                      <?php } ?>
                      <li>
                        <a href="destinations.html">
                          Nosotros
                        </a>
                      </li>
                      <li>
                        <a href="destinations.html">
                          Contactenos
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex items-center">

              <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                <a href="login.html" class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white">AGENCIAS
                  VENAVENTURA</a>
                <?php
                if ($this->session->userdata('isLoggedIn') !== null) {
                  $nombre = $this->session->userdata(('nombre'));
                ?>
                  <a href="javascript:;" class="dropdown-nav-link dropdown-toggle d-flex align-items-center " id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="icon-user mr-3 ml-20 text-30"></i>
                    <span class="d-inline-block font-size-14 pl-1">
                      <?= $nombre ?>
                    </span>
                  </a>
                  <div id="setingUser" class="dropdown-menu dropdown-unfold dropdown-menu-right mt-0" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">My Perfil</a>
                    <a class="dropdown-item" href="#">Mis Reservasiones</a>
                    <a class="dropdown-item exit_sesion" href="<?= base_url() ?>/login/logout">Salir</a>
                  </div>
                <?php } else { ?>
                  <a href="<?= base_url() ?>login" class="items-center px-10 fw-400 text-30 icon-user  ml-20"></a>
                <?php } ?>
                <a href="signup.html" class="items-center px-10 fw-400 text-30  -outline-blue-1 text-blue-1 ml-20" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url() ?>assets/img/icon/cart-plus-solid.svg" alt="" width="30" class="mr-15">
                  <span class="text-15 num_censta" style="position: absolute;
                                top: 19px;
                                right: 45px;
                                height: 19px;
                                width: 19px;
                                text-align: center;
                                line-height: normal;
                                border-radius: 50%;
                                color: #fff;
                                background-color: #f8538d;"><?= sizeof($this->cart->contents()) ?></span> </a>
                <style>
                  .cart_cest {
                    width: 500px;
                  }
                </style>
                <ul class="dropdown-menu cart_cest" aria-labelledby="dropdownMenuButton3">
                  <div class="card cont-cesta " style="border: none;">
                    <!-- Header -->
                    <div class="card-header py-3 px-5 bg-white">
                      <span class="font-weight-semi-bold">Tu Cesta</span>
                    </div>
                    <!-- End Header -->

                    <?php if (!empty($this->cart->contents())) : ?>
                      <!-- Body -->
                      <div class="card-body p-0">
                        <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $item) :
                          $precio = $item['subtotal'];
                          $total += $precio;
                        ?>
                          <div class="px-2 px-md-3 py-2 py-md-1">
                            <div class="media p-2 p-md-3 row">
                              <div class=" col-3 u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                <img class="img-fluid rounded-pill" src="<?= SERVER_IMG; ?>portada/<?= $item['image']; ?>" alt="Image Description">
                              </div>
                              <div class=" col-9 media-body position-relative pl-md-1">
                                <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                  <span class="d-block text-dark font-weight-bold"><?= ucfirst($item['name']); ?></span>
                                  <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                    <i class="icon-trash"></i>
                                  </button>
                                </div>
                                <span class="d-block text-gray-1">Precio $ <?= $precio; ?> </span>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                      <!-- End Body -->

                      <!-- Footer -->
                      <div class="card-footer border-0 p-3 px-md-5 py-md-4">
                        <div class="mb-4 pb-md-1">
                          <span class="d-block font-weight-semi-bold">Subtotal: $ <?php echo $total; ?></span>
                        </div>
                        <div class="d-flex button-inline-group-md mb-1">
                          <a class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white" href="<?= base_url(); ?>carrito">
                            Ver Carrito
                          </a>
                          <a class="button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20" href="<?= base_url(); ?>reserva">
                            Reservar
                          </a>
                        </div>
                      </div>
                      <!-- End Footer -->

                    <?php else : ?>
                      <div class="empty"></div>
                    <?php endif; ?>
                  </div>
                </ul>
              </div>
              <div class="d-none xl:d-flex x-gap-20 align-items-center pl-30" data-x="header-mobile-icons" data-x-toggle="text-white">
                <?php
                if ($this->session->userdata('isLoggedIn') !== null) {
                ?>
                  <a href="javascript:;" class="dropdown-nav-link dropdown-toggle d-flex align-items-center " id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="icon-user text-30"></i>
                    <span class="d-inline-block font-size-14"></span>
                  </a>
                  <div id="setingUser" class="dropdown-menu dropdown-unfold dropdown-menu-right mt-0" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">My Perfil</a>
                    <a class="dropdown-item" href="#">Mis Reservasiones</a>
                    <a class="dropdown-item exit_sesion" href="<?= "token"; ?>">Salir</a>
                  </div>
                <?php } else { ?>
                  <a href="<?= base_url() ?>login" class="items-center fw-400 text-30 icon-user"></a>
                <?php } ?>
                <a href="signup.html" class="items-center fw-400 text-30  -outline-blue-1 text-blue-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="<?= base_url() ?>assets/img/icon/cart-plus-solid.svg" alt="" width="30">
                  <span class="text-15 num_censta" style="position: absolute;
                                top: 15px;
                                right: 40px;
                                height: 19px;
                                width: 19px;
                                text-align: center;
                                line-height: normal;
                                border-radius: 50%;
                                color: #fff;
                                background-color: #f8538d;"><?= sizeof($this->cart->contents()) ?></span> </a>
                <style>
                  .cart_cest {
                    width: 500px;
                  }
                </style>
                <ul class="dropdown-menu cart_cest" aria-labelledby="dropdownMenuButton1">
                  <div class="card cont-cesta " style="border: none;">
                    <!-- Header -->
                    <div class="card-header py-3 px-5 bg-white">
                      <span class="font-weight-semi-bold">Tu Cesta</span>
                    </div>
                    <!-- End Header -->

                    <?php if (!empty($this->cart->contents())) : ?>

                      <!-- Body -->
                      <div class="card-body p-0">
                        <?php
                        $total = 0;
                        foreach ($this->cart->contents() as $item) :
                          $precio = $item['subtotal'];
                          $total += $precio;
                        ?>
                          <div class="px-2 px-md-3 py-2 py-md-1">
                            <div class="media p-2 p-md-3 row">
                              <div class=" col-3 u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                <!-- <img class="img-fluid rounded-pill" src="<?php echo SERVER_IMG; ?>portada/<?php echo $ces['img_portada']; ?>" alt="Image Description"> -->
                              </div>
                              <div class=" col-9 media-body position-relative pl-md-1">
                                <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                  <span class="d-block text-dark font-weight-bold"><?php echo ucfirst($item['name']); ?></span>
                                  <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                    <i class="icon-trash"></i>
                                  </button>
                                </div>
                                <span class="d-block text-gray-1">Precio $ <?php echo $precio; ?> </span>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                      <!-- End Body -->

                      <!-- Footer -->
                      <div class="card-footer border-0 p-3 px-md-5 py-md-4">
                        <div class="mb-4 pb-md-1">
                          <span class="d-block font-weight-semi-bold">Subtotal: $ <?php echo $total; ?></span>
                        </div>
                        <div class="d-flex button-inline-group-md mb-1">
                          <a class="button px-30 fw-400 text-14 -blue-1 bg-blue-1 h-50 text-white" href="<?= base_url(); ?>carrito">
                            Ver Carrito
                          </a>
                          <a class="button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20" href="<?= base_url(); ?>reserva">
                            Reservar
                          </a>
                        </div>
                      </div>
                      <!-- End Footer -->
                    <?php else : ?>
                      <div class="empty"></div>
                    <?php endif; ?>
                  </div>
                </ul>
                <div><button class="d-flex items-center icon-menu text-20" data-x-click="header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>

    <script type="text/javascript">
      let baseURL = "<?= base_url() ?>";
    </script>