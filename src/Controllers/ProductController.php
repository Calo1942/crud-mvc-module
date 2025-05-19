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
            $data = [
                'nombre' => $_POST['nombre'],
                'descripcion' => $_POST['descripcion'],
                'cantidad' => $_POST['stock'],
                'talla' => $_POST['talla'],
                'categoria' => $_POST['categoria'],
                'precio' => $_POST['precio'],
                'imgProduct1' => 'default.jpg' // Cambiar por lógica de subida de imágenes
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

    private function procesarImagen($imagen, $id = null) {
        // Lógica para subir/manejar imágenes
        return $imagen['name'] ?? ($id ? $this->model->obtenerProducto($id)['imgProduct1'] : 'default.jpg');
    }
}
?>