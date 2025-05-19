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
                        <li class="breadcrumb-item breadcrumb-light"><a href="#"></a></li>
                        <li class="breadcrumb-item breadcrumb-light"><a href="#"></a></li>
                        <li class="breadcrumb-item  breadcrumb-light active" aria-current="page"></li>
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
    
                <!-- Product Information -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="sticky-top top-5">
                        <div class="pb-3 bg-white rounded-3 shadow-sm" data-aos="fade-in">
                            <div class="p-4">
                                <h1 class="mb-3 fs-2 fw-bold border-bottom pb-3">Agregar Producto</h1>
                                <form action="/?url=product/create" method="POST">
                                    <div class="row g-4">

                                        <!-- Campos del formulario mejorados -->
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control rounded-1 border-dark" 
                                                    id="nombreProducto" name="nombre" placeholder="Nombre" required>
                                                <label for="nombreProducto" class="text-secondary">Nombre del producto</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select class="form-select rounded-1 border-dark" 
                                                        id="categoriaProducto" name="categoria" required>
                                                    <option value="Camiseta">Camiseta</option>
                                                    <option value="Pantalón">Pantalón</option>
                                                    <option value="Accesorio">Accesorio</option>
                                                </select>
                                                <label for="categoriaProducto">Categoría</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" 
                                                    id="cantidad" name="cantidad" required>
                                                <label for="cantidad">Cantidad en stock</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <select class="form-select rounded-1 border-dark" 
                                                        id="tallaProducto" name="talla" required>
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                                </select>
                                                <label for="tallaProducto">Talla</label>
                                            </div>
                                        </div>

                                        <?php for ($i = 1; $i <= 4; $i++): ?>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="url" class="form-control" 
                                                    id="imgProduct<?= $i ?>" 
                                                    name="imgProduct<?= $i ?>" 
                                                    placeholder="URL de imagen <?= $i ?>"
                                                    <?= $i === 1 ? 'required' : '' ?>>
                                                <label for="imgProduct<?= $i ?>">Imagen <?= $i ?></label>
                                            </div>
                                        </div>
                                        <?php endfor; ?>

                                        <div class="col-12">
                                            <div class="input-group border-dark rounded-1">
                                                <span class="input-group-text bg-transparent border-dark rounded-start">$</span>
                                                <div class="form-floating flex-grow-1">
                                                    <input type="number" class="form-control border-dark rounded-0" 
                                                        id="precioProducto" name="precio" 
                                                        step="0.01" placeholder="Precio" required>
                                                    <label for="precioProducto">Precio</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="url" class="form-control rounded-1 border-dark" 
                                                    id="imagenProducto" name="imagen" 
                                                    placeholder="https://..." required>
                                                <label for="imagenProducto">URL de la imagen</label>
                                            </div>
                                        </div>

                                        <!-- Botón mejorado -->
                                        <div class="col-12 mt-4">
                                            <button type="submit" 
                                                    class="btn btn-dark w-100 py-3 fs-5 rounded-1 hover-opacity-75 transition-all">
                                                <i class="bi bi-save me-2"></i>Guardar Producto
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
