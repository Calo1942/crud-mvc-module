<?php
namespace BruzDeporte\UptaebMvc\Controllers;

class ProductController {
    private $basePath;
    private $model;
    
    public function __construct() {
        $this->basePath = __DIR__ . '/../';
        require_once $this->basePath . 'models/productModel.php';
        $this->model = new \ProductoModel();
    }

    public function index() {
        $productos = $this->model->obtenerProductos();
        require $this->basePath . 'views/productSee.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleCreate();
        } else {
            require $this->basePath . 'views/productForm.php';
        }
    }

    private function handleCreate() {
        $data = [
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'cantidad' => $_POST['cantidad'],
            'talla' => $_POST['talla'],
            'categoria' => $_POST['categoria'],
            'precio' => $_POST['precio'],
            'imgProduct1' => $_POST['imgProduct1'],
            'imgProduct2' => $_POST['imgProduct2'] ?? null,
            'imgProduct3' => $_POST['imgProduct3'] ?? null,
            'imgProduct4' => $_POST['imgProduct4'] ?? null
        ];
        
        if ($this->model->crearProducto($data)) {
            header('Location: /?url=product/index');
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->handleEdit($id);
        } else {
            $producto = $this->model->obtenerProducto($id);
            require $this->basePath . 'views/productEdit.php';
        }
    }

    private function handleEdit($id) {
        $data = [
            ':nombre' => $_POST['nombre'],
            ':descripcion' => $_POST['descripcion'],
            ':cantidad' => $_POST['cantidad'],
            ':talla' => $_POST['talla'],
            ':categoria' => $_POST['categoria'],
            ':precio' => $_POST['precio'],
            ':img1' => $_POST['imgProduct1'],
            ':img2' => $_POST['imgProduct2'] ?? null,
            ':img3' => $_POST['imgProduct3'] ?? null,
            ':img4' => $_POST['imgProduct4'] ?? null
        ];
        
        if ($this->model->actualizarProducto($id, $data)) {
            header('Location: /?url=product/index');
        }
    }

    public function delete($id) {
        if ($this->model->eliminarProducto($id)) {
            header('Location: /?url=product/index');
        }
    }
}
