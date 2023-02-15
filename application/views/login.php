<section class="layout-pt-lg layout-pb-lg bg-blue-2">
  <div class="container">
    <div class="row justify-center">
      <div class="RespuestaRegistro"></div>
      <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
          <form class="login_users" method="POST" name="registerform" autocomplete="off">
            <input type="hidden" name="web" id="web" value="<?php echo base_url(); ?>">
            <div class="row y-gap-20">
              <div class="col-12">
                <h1 class="text-22 fw-500">Bienvenido a <?= PROYECTO ?></h1>
                <p class="mt-10">A un no eres parte de <?= PROYECTO ?>? <a href="<?php echo base_url(); ?>registro" class="text-blue-1">Registrate Gratis</a></p>
              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="email" id="email" name="email" required>
                  <label class="lh-1 text-14 text-light-1">Correo</label>
                </div>

              </div>

              <div class="col-12">

                <div class="form-input ">
                  <input type="password" id="password" name="password" required>
                  <label class="lh-1 text-14 text-light-1">Contraseña</label>
                </div>

              </div>

              <div class="col-12">
                <?php
                $error = $this->session->flashdata('error');
                if ($error) { ?>
                  <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $error; ?>
                  </div>
                <?php } ?>
                <a href="#" class="text-14 fw-500 text-blue-1 underline">Olvidaste tu contraseña?</a>
              </div>

              <div class="col-12">

                <button type="submit" class="button col-12 py-20 -dark-1 bg-blue-1 text-white">
                  Iniciar Sesión <div class="icon-arrow-top-right ml-15"></div>
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
    $(".login_users").submit(function(e) {
      e.preventDefault();
      var respuesta = $(".RespuestaRegistro");
      var email = $("#email").val();
      var contrasena = $("#password").val();
      if (email == "" || contrasena == "") {
        alert("Todo los campos son requeridos!");
        return false;
      }
      if (email.length > 100) {
        alert("El email supera los 100 caracteres!");
        return false;
      }

      if (!/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)) {
        alert("El email no es valido");
        return false;
      }
      // if (!/^\+[1-9]{1}[0-9]{9,12}$/.test(telefono)) {

      // alert('El numero telefonico deve tener este formato +51999999999');
      // return false;
      // }

      if (contrasena.length > 8) {
        alert("La contraseña supera los 8 caracteres!");
        return false;
      }

      $.ajax({
        type: "POST",
        url: baseURL + "login/loginMe",
        data: "password=" + contrasena + "&email=" + email,
        success: function(res) {
          res = JSON.parse(res);
          console.log('res', res);
          if (res.status == true) {
            window.location = baseURL;
          } else {
            alert(res.message);
          }
          //respuesta.html(data);
        },
        error: function() {
          alert('Ocurrio un error inesperado!');
        },
      });
    });
  });
</script>