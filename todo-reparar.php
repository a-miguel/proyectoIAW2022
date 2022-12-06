<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>
      Property &mdash; Free Bootstrap 5 Website Template by Untree.co
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <?php include 'menu.php'; ?>

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Reparaciones</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Reparaciones
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 text-center mx-auto">
            <h2 class="font-weight-bold text-primary heading">
              Nuestra mejores reparaciones
            </h2>
          </div>
        </div>

        
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">

            <?php include 'reparaciones.php'; ?> 

              
              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <div class="section section-properties">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_4.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_5.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_6.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_8.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>
                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <div class="property-item mb-30">
              <a href="info-reparaciones.php" class="img">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
              </a>

              <div class="property-content">
                <div class="price mb-2"><span>25.00€-1200€</span></div>
                <div>
                  <span class="d-block mb-2 text-black-50"
                    >P. Sherman, calle Wallaby, 42</span
                  >
                  <span class="city d-block mb-3">Sydney</span>

                  <div class="specs d-flex mb-4">
                    <span class="d-block d-flex align-items-center me-3">
                      <span class="caption">Componentes de 1ª</span>
                    </span>

                  </div>

                  <a
                    href="info-reparaciones.php"
                    class="btn btn-primary py-2 px-3"
                    >Ver más información</a
                  >
                </div>
              </div>
            </div>
            <!-- .item -->
          </div>
        </div>
        <div class="row align-items-center py-5">
          <div class="col-lg-3">Pagination (1 of 10)</div>
          <div class="col-lg-6 text-center">
            <div class="custom-pagination">
              <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php include 'piepagina.php'; ?>
    
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>