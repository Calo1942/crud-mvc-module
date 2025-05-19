<?php
namespace BruzDeporte\UptaebMvc\Controllers;

class ProductController {
    private $model;
    
    public function __construct() {
        require_once __DIR__ . '/../models/productModel.php';
        $this->model = new \ProductoModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require __DIR__ . '/../views/product.php';
    }

    public function agregar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $imgName = $this->procesarImagen($_FILES['imagen']);
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'cantidad' => $_POST['stock'],
                'talla' => $_POST['talla'],
                'categoria' => $_POST['categoria'],
                'precio' => $_POST['precio'],
                'imgProduct1' => $imgName
            ];

            if ($this->model->crearProducto($data)) {
                header('Location: '.BASE_URL.'?url=product');
                exit;
            }
        }
        require __DIR__.'/../../views/product.php';
    }

    private function procesarAgregar() {
        $data = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'cantidad' => $_POST['stock'],
            'talla' => $_POST['talla'],
            'categoria' => $_POST['categoria'],
            'precio' => $_POST['precio'],
            'imgProduct1' => $this->procesarImagen($_FILES['imagen']),
        ];

        if ($this->model->crearProducto($data)) {
            header('Location: /?url=product');
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->procesarEditar();
        }
    }

    private function procesarEditar() {
        $data = [
            ':nombre' => $_POST['nombre'],
            ':descripcion' => $_POST['descripcion'],
            ':cantidad' => $_POST['stock'],
            ':talla' => $_POST['talla'],
            ':categoria' => $_POST['categoria'],
            ':precio' => $_POST['precio'],
            ':img1' => $this->procesarImagen($_FILES['imagen'], $_POST['id']),
        ];

        if ($this->model->actualizarProducto($_POST['id'], $data)) {
            header('Location: /?url=product');
        }
    }

    public function eliminar($id) {
        if ($this->model->eliminarProducto($id)) {
            header('Location: '.BASE_URL.'?url=product');
        };
    }

    // Endpoint para obtener un producto por ID (AJAX)
    public function obtener($id) {
        $producto = $this->model->obtenerProducto($id);
        header('Content-Type: application/json');
        echo json_encode($producto);
        exit;
    }

    private function procesarImagen($imagen, $id = null) {
        $uploadDir = __DIR__ . '/../assets/images/products/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        if (isset($imagen['tmp_name']) && is_uploaded_file($imagen['tmp_name'])) {
            $ext = pathinfo($imagen['name'], PATHINFO_EXTENSION);
            $fileName = uniqid('prod_', true) . '.' . $ext;
            $destPath = $uploadDir . $fileName;
            if (move_uploaded_file($imagen['tmp_name'], $destPath)) {
                return $fileName;
            }
        }
        // Si no hay nueva imagen, devolver la anterior o default
        if ($id) {
            $producto = $this->model->obtenerProducto($id);
            return $producto['imgProduct1'] ?? 'default.jpg';
        }
        return 'default.jpg';
    }
}
?>