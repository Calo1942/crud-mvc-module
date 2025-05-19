<!DOCTYPE html>
<html>
<head>
    <!-- Mismo head que productForm.php -->
</head>
<body>
    <!-- Misma estructura que productForm.php pero con datos precargados -->
    <?php $producto = $producto; ?>
    <form action="/?url=product/edit/<?= $producto['id'] ?>" method="POST">
        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
        
        <div class="form-floating">
            <input type="text" class="form-control" 
                id="nombre" name="nombre" 
                value="<?= htmlspecialchars($producto['nombre']) ?>" required>
            <label for="nombre">Nombre del producto</label>
        </div>
        
        <!-- Resto de campos con valores precargados -->
    </form>
</body>
</html>