<?php include("templates/base.php");?>

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-9">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-4">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <h2 class="text-center fw-bold mb-4" style="font-size: 1.5rem;">Registrarse</h2>

                <form class="mx-1 mx-md-4" method="post" action="regis.php">

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-user fa-lg me-3 fa-fw" style="font-size: 1rem;"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" style="font-size: 0.9rem;" />
                      <label class="form-label" for="nombre" style="font-size: 0.9rem;">Nombre</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw" style="font-size: 1rem;"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="correo" name="correo" class="form-control form-control-sm" style="font-size: 0.9rem;" />
                      <label class="form-label" for="correo" style="font-size: 0.9rem;">Correo</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-3">
                    <i class="fas fa-lock fa-lg me-3 fa-fw" style="font-size: 1rem;"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="pass" name="pass" class="form-control form-control-sm" style="font-size: 0.9rem;" />
                      <label class="form-label" for="pass" style="font-size: 0.9rem;">Contraseña</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3" style="font-size: 0.8rem;">
                      Acepto todas las declaraciones en <a href="gijs-coolen-CRmcBeINxtg-unsplash.jpg">Términos de servicio</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary btn-sm" name="registrar" style="font-size: 0.9rem;">Registrar</button>
                  </div>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <!-- <img src="img/alexey-malakhov-LZVkAbIw74Q-unsplash.jpg "
                  class="img-fluid" alt="Sample image"> -->
                  <?php include("templates/carousel.php");?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
