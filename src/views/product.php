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
    <title>Bruz Deporte | Plantilla HTML Bootstrap 5</title>
    
</head>

<body class="">

    <!-- Load Navbar -->
    <?php echo $navBar; ?>

    <section class="mt-0">
        <div class="container py-5">

            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fs-4 fw-bold m-0">Nuestros Productos</h3>
                    <!-- Botón que abre el modal -->
                    <button class="btn btn-sm btn-dark btn-px-2-5 py-3" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">
                        <i class="ri-add-line me-1"></i> Agregar producto
                    </button>
                </div>
                <table class="table align-middle">
                    <tbody>
                        <?php foreach ($productos as $producto): ?>
                            <tr class="border-bottom">
                                <td class="col-2">
                                    <img src="<?= BASE_URL . 'src/storage/images/products/' . ($producto['imgProduct1'] ?? 'default.jpg') ?>" alt="<?= htmlspecialchars($producto['nombre']) ?>" class="img-fluid border">
                                </td>
                                <td>
                                    <h6 class="mb-1"><?php echo htmlspecialchars($producto['nombre']); ?></h6>
                                    <p class="text-muted mb-0"><span class="text-body">Categoría:</span> <?php echo htmlspecialchars($producto['categoria']); ?></p>
                                    <p class="text-muted mb-0"><span class="text-body">Talla:</span> <?php echo htmlspecialchars($producto['talla']); ?></p>
                                    <p class="text-muted mb-0"><span class="text-body">Stock:</span> <?= htmlspecialchars($producto['cantidad']) ?></p>
                                    <p class="text-muted mb-0"><span class="text-body">Descripción:</span> <?php echo htmlspecialchars($producto['descripcion']); ?></p>
                                </td>
                                <td class="text-end fw-bold">
                                    $<?php echo number_format($producto['precio'], 2); ?>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-light border dropdown-toggle" type="button" id="dropdownMenu<?php echo $producto['id']; ?>" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="/?url=product/ver/<?= $producto['id'] ?>" 
                                                class="dropdown-item btnVerProducto"
                                                data-id="<?= $producto['id'] ?>"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalVerProducto">
                                                Ver
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" 
                                                class="dropdown-item btnEditarProducto"
                                                data-id="<?= $producto['id'] ?>"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalEditarProducto">
                                                Editar
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?= BASE_URL ?>?url=product/eliminar/<?= $producto['id'] ?>"
                                                class="dropdown-item text-danger"
                                                onclick="return confirm('¿Seguro?')">
                                                Eliminar
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-twitter-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-snapchat-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2025 Bruz Deportes Todos los derechos reservados</p>
                    <ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i>
                        </li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> <!-- / Footer-->

    <!-- Theme JS -->

    <!-- Custom JS -->
    <?php echo $varJs; ?>
    <!-- Modal Agregar Producto -->
    <div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?= BASE_URL ?>?url=product/agregar" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">Agregar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row g-3">

                            <!-- Nombre -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-1" id="nombreProducto" name="nombre" placeholder="Nombre" required>
                                    <label for="nombreProducto">Nombre</label>
                                </div>
                            </div>

                            <!-- Categoría -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select rounded-1 " id="categoriaProducto" name="categoria" required>
                                        <option value="Camiseta">Camiseta</option>
                                        <option value="Pantalón">Pantalón</option>
                                        <!-- Puedes agregar más categorías aquí -->
                                    </select>
                                    <label for="categoriaProducto">Categoría</label>
                                </div>
                            </div>

                            <!-- Talla -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select rounded-1 " id="tallaProducto" name="talla" required>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                    <label for="tallaProducto">Talla</label>
                                </div>
                            </div>

                            <!-- Descripción -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control rounded-1 " id="descripcionProducto" name="descripcion" style="height: 100px" required></textarea>
                                    <label for="descripcionProducto">Descripción</label>
                                </div>
                            </div>

                            <!-- Precio -->
                            <div class="col-12">
                                <div class="input-group border-dark rounded-1">
                                    <span class="input-group-text bg-transparent  rounded-start">$</span>
                                    <div class="form-floating flex-grow-1">
                                        <input type="number" class="form-control  rounded-0" id="precioProducto" name="precio" step="0.01" placeholder="Precio" required>
                                        <label for="precioProducto">Precio</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Stock -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control rounded-1" id="stockProducto" name="stock" placeholder="Stock disponible" min="0" required>
                                    <label for="stockProducto">Stock disponible</label>
                                </div>
                            </div>

                            <!-- Imagen -->
                            <div class="col-12">
                                <label for="imagenProducto" class="form-label">Imagen del producto</label>
                                <input type="file" class="form-control  rounded-1" id="imagenProducto" name="imagen">
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Ver Producto -->
    <div class="modal fade" id="modalVerProducto" tabindex="-1" aria-labelledby="modalVerProductoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content border-0 rounded-3 shadow">

                <div class="modal-header border-bottom">
                    <h5 class="modal-title fw-bold" id="modalVerProductoLabel">Detalle de Producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <div class="modal-body">
                    <div class="row g-4">
                        <div class="col-md-5 text-center">
                            <img id="modalProductoImagen" src="" alt="Imagen del producto" class="img-fluid mb-3" style="max-height: 250px; object-fit: contain;">
                            <h5 id="modalProductoNombre" class="fw-bold mt-2"></h5>
                        </div>
                        <div class="col-md-7">
                            <div class="mb-2">
                                <span class="fw-bold">Categoría:</span> <span id="modalProductoCategoria"></span>
                            </div>
                            <div class="mb-2">
                                <span class="fw-bold">Talla:</span> <span id="modalProductoTalla"></span>
                            </div>
                            <div class="mb-2">
                                <span class="fw-bold">Descripción:</span> <span id="modalProductoDescripcion"></span>
                            </div>
                            <div class="mb-2">
                                <span class="fw-bold">Stock disponible:</span> <span id="modalProductoStock"></span>
                            </div>
                            <div class="mb-2">
                                <span class="fw-bold">Precio:</span> <span id="modalProductoPrecio"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <script>
    // Ver producto
    document.querySelectorAll('.btnVerProducto').forEach(button => {
        button.addEventListener('click', async function() {
            const id = this.getAttribute('data-id');
            try {
                const response = await fetch('<?= BASE_URL ?>?url=product/obtener/' + id);
                const producto = await response.json();
                console.log('Producto recibido:', producto); // Para depuración
                if (!producto || !producto.id) {
                    alert('Producto no encontrado');
                    return;
                }
                document.getElementById('modalProductoNombre').textContent = producto.nombre;
                document.getElementById('modalProductoCategoria').textContent = producto.categoria;
                document.getElementById('modalProductoTalla').textContent = producto.talla;
                document.getElementById('modalProductoStock').textContent = producto.cantidad;
                document.getElementById('modalProductoDescripcion').textContent = producto.descripcion;
                document.getElementById('modalProductoPrecio').textContent = `$${producto.precio}`;
                // Corregir la ruta de la imagen
                const baseUrl = '<?= BASE_URL ?>';
                const img = producto.imgProduct1 ? producto.imgProduct1 : 'default.jpg';
                document.getElementById('modalProductoImagen').src = baseUrl + 'src/storage/images/products/' + img;
            } catch (e) {
                alert('Error procesando la respuesta del servidor');
                console.error(e);
            }
        });
    });
    </script>
    <!-- Modal Editar Producto -->
    <div class="modal fade" id="modalEditarProducto" tabindex="-1" aria-labelledby="modalEditarProductoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="<?= BASE_URL ?>?url=product/editar" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="editarProductoId" value="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditarProductoLabel">Editar Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <!-- Nombre -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-1" id="editarNombreProducto" name="nombre" placeholder="Nombre" required>
                                    <label for="editarNombreProducto">Nombre</label>
                                </div>
                            </div>
                            <!-- Categoría -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select rounded-1" id="editarCategoriaProducto" name="categoria" required>
                                        <option value="Camiseta">Camiseta</option>
                                        <option value="Pantalón">Pantalón</option>
                                        <!-- Más categorías -->
                                    </select>
                                    <label for="editarCategoriaProducto">Categoría</label>
                                </div>
                            </div>
                            <!-- Talla -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select rounded-1" id="editarTallaProducto" name="talla" required>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                    <label for="editarTallaProducto">Talla</label>
                                </div>
                            </div>
                            <!-- Descripción -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control rounded-1" id="editarDescripcionProducto" name="descripcion" style="height: 100px" required></textarea>
                                    <label for="editarDescripcionProducto">Descripción</label>
                                </div>
                            </div>
                            <!-- Precio -->
                            <div class="col-12">
                                <div class="input-group border-dark rounded-1">
                                    <span class="input-group-text bg-transparent rounded-start">$</span>
                                    <div class="form-floating flex-grow-1">
                                        <input type="number" class="form-control rounded-0" id="editarPrecioProducto" name="precio" step="0.01" placeholder="Precio" required>
                                        <label for="editarPrecioProducto">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Stock -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control rounded-1" id="editarStockProducto" name="stock" placeholder="Stock disponible" min="0" required>
                                    <label for="editarStockProducto">Stock disponible</label>
                                </div>
                            </div>
                            <!-- Imagen actual -->
                            <div class="col-12">
                                <label class="form-label">Imagen actual</label>
                                <div id="editarImagenActualContainer">
                                    <img id="editarImagenActual" src="" alt="Imagen actual" class="img-fluid mb-2" style="max-height:100px;object-fit:contain;">
                                </div>
                            </div>
                            <!-- Imagen nueva -->
                            <div class="col-12">
                                <label for="editarImagenProducto" class="form-label">Cambiar Imagen (opcional)</label>
                                <input type="file" class="form-control rounded-1" id="editarImagenProducto" name="imagen">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script>
        // Editar producto
        // Asegúrate de que el campo hidden existe y los IDs coinciden

        document.querySelectorAll('.btnEditarProducto').forEach(btn => {
            btn.addEventListener('click', async function() {
                const id = this.getAttribute('data-id');
                const response = await fetch('<?= BASE_URL ?>?url=product/obtener/' + id);
                const producto = await response.json();
                document.getElementById('editarProductoId').value = id;
                document.getElementById('editarNombreProducto').value = producto.nombre;
                document.getElementById('editarCategoriaProducto').value = producto.categoria;
                document.getElementById('editarTallaProducto').value = producto.talla;
                document.getElementById('editarStockProducto').value = producto.cantidad;
                document.getElementById('editarPrecioProducto').value = producto.precio;
                document.getElementById('editarDescripcionProducto').value = producto.descripcion;
                // Mostrar imagen actual
                const baseUrl = '<?= BASE_URL ?>';
                const img = producto.imgProduct1 ? producto.imgProduct1 : 'default.jpg';
                document.getElementById('editarImagenActual').src = baseUrl + 'src/storage/images/products/' + img;
            });
        });
    </script>

</body>

</html>