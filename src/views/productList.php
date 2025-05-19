<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
    <?php include_once __DIR__ . '/../config/components/initComponent.php'; ?>
    <?php echo $varHeader; ?>
</head>
<body>
    <?php echo $navBar; ?>
    
    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Productos</h1>
        <a href="/?url=product/create" class="btn btn-primary mb-3">Nuevo Producto</a>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto['nombre']) ?></td>
                        <td><?= $producto['categoria'] ?></td>
                        <td>$<?= number_format($producto['precio'], 2) ?></td>
                        <td>
                            <a href="/?url=product/edit/<?= $producto['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="/?url=product/delete/<?= $producto['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php echo $footer; ?>
    <?php echo $varJs; ?>
</body>
</html>