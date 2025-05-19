<!doctype html>
<html lang="es">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

    <!-- Links Estilos -->
    <?php include_once __DIR__ . '/../config/components/initComponent.php'; ?>
    <?php echo $varHeader; ?>
    
    <?php 
    
      $productCategory = "Camiseta";
      $productName = "Camiseta Japón - OSAKA";
    
    ?>

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
        /**
        * Reinstate scrolling for non-JS clients
        */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Bruz Deporte | Producto</title>

</head>
<body class="">

    <!-- Navbar -->
    <?php echo $navBar; ?>
    <!-- / Navbar-->    

    <!-- Main Section-->
    <section class="mt-0 ">
        <!-- Page Content Goes Here -->            
        
        <!-- Breadcrumbs-->
        <div class="bg-dark py-6">
            <div class="container-fluid">
                <nav class="m-0" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item breadcrumb-light"><a href="#">Personalizado</a></li>
                        <li class="breadcrumb-item breadcrumb-light"><a href="#"><?php echo $productCategory?></a></li>
                        <li class="breadcrumb-item  breadcrumb-light active" aria-current="page"><?php echo $productName?></li>
                    </ol>
                </nav>            
            </div>
        </div>
        <!-- / Breadcrumbs-->

        <div class="container-fluid mt-5">

            <!-- Product Top Section-->
            <div class="row g-9" data-sticky-container>

                <!-- Product Images-->
                <div class="col-12 col-md-6 col-xl-7">
                    <div class="row g-3" data-aos="fade-right">
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./src/assets/images/products/product-page-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./src/assets/images/products/product-page-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./src/assets/images/products/product-page-3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid" data-zoomable src="./src/assets/images/products/product-page-4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                </div>
                <!-- /Product Images-->
    
                <!-- Product Information-->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="sticky-top top-5">
                        <div class="pb-3" data-aos="fade-in">
                            <h1 class="mb-1 fs-2 fw-bold"><?php echo $productName?></h1>
                            <div class="border-top mt-4 mb-3 product-option">
                                <small class="text-uppercase pt-4 d-block fw-bolder">
                                    <span class="text-muted">Disponible en Tallas (Hombres)</span> : <span class="selected-option fw-bold"
                                        data-pixr-product-option="size">M</span>
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                            <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="S" 
                                                    id="option-sizes-0">
                                                <label for="option-sizes-0">
                                                    
                                                    <small>S</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="SM" 
                                                    id="option-sizes-1">
                                                <label for="option-sizes-1">
                                                    
                                                    <small>SM</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="M" 
                                                        checked
                                                    id="option-sizes-2">
                                                <label for="option-sizes-2">
                                                    
                                                    <small>M</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="L" 
                                                    id="option-sizes-3">
                                                <label for="option-sizes-3">
                                                    
                                                    <small>L</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="Xl" 
                                                    id="option-sizes-4">
                                                <label for="option-sizes-4">
                                                    
                                                    <small>XL</small>
                                                </label>
                                            </div>                    <div class="form-check-option form-check-rounded">
                                                <input 
                                                    type="radio" 
                                                    name="product-option-sizes" 
                                                    value="XXL" 
                                                    id="option-sizes-5">
                                                <label for="option-sizes-5">
                                                    
                                                    <small>XXL</small>
                                                </label>
                                            </div>        </div>
                            </div>
                            <div class="mb-3">
                                <small class="text-uppercase pt-4 d-block fw-bolder text-muted">
                                    Diseños Disponibles :
                                </small>
                                <div class="mt-4 d-flex justify-content-start flex-wrap align-items-start">
                                    <picture class="me-2">
                                        <img class="f-w-24 p-2 bg-light border-bottom border-dark border-2 cursor-pointer" src="./src/assets/images/products/product-page-thumb-1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <picture>
                                        <img class="f-w-24 p-2 bg-light cursor-pointer" src="./src/assets/images/products/product-page-thumb-2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                </div>
                            </div>
                            <button class="btn btn-dark w-100 mt-4 mb-0 hover-lift-sm hover-boxshadow">Añadir al Carrito</button>
                        
                            <!-- Product Highlights-->
                                <div class="my-5">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-24-hours-line ri-2x"></i>
                                                <small class="d-block mt-1">Entrega al día siguiente</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-secure-payment-line ri-2x"></i>
                                                <small class="d-block mt-1">Pago Seguro</small>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-center px-2">
                                                <i class="ri-service-line ri-2x"></i>
                                                <small class="d-block mt-1">Devoluciones Gratis</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- / Product Highlights-->
                        
                            <!-- Product Accordion -->
                            <div class="accordion" id="accordionProduct">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Detalles del Producto
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <p class="m-0">Hecho de 100% algodón orgánico, la Camiseta Osaka Japón de Kiikii fue creada pensando en el uso diario. Presenta gráficos impresos y tela de gran peso para máxima comodidad y durabilidad.</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Detalles y Cuidado
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionProduct">
                                      <div class="accordion-body">
                                          <ul class="list-group list-group-flush">
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Composición</span>
                                                  <span class="col-7 offset-1">98% Cotton, 2% elastane</span>
                                              </li>
                                              <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                  <span class="col-4 fw-bolder">Cuidado</span>
                                                  <span class="col-7 offset-1">Professional dry clean only. Do not bleach. Do not iron.</span>
                                              </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </div>        
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Entrega y Devoluciones
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionProduct">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Entrega</span>
                                                <span class="col-7 offset-1">Standard delivery free for orders over $99. Next day delivery $9.99</span>
                                            </li>
                                            <li class="list-group-item d-flex border-0 row g-0 px-0">
                                                <span class="col-4 fw-bolder">Devoluciones</span>
                                                <span class="col-7 offset-1">Periodo de devolución de 30 días. Consulta nuestros <a class="text-link-border" href="#">términos y condiciones.</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- / Product Accordion-->
                        </div>                    </div>
                </div>
                <!-- / Product Information-->
            </div>
            <!-- / Product Top Section-->

        </div>

        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <?php echo $footer; ?>
    <!-- / Footer-->  

    <!-- Theme JS -->
    <?php echo $varJs; ?>
    
    <!-- Custom JS -->

</body>

</html>
