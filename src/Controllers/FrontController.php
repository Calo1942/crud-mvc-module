<?php

class FrontController {
    private $url;
    private $controller;
    private $method;
    private $params;
    private $basePath;

    public function __construct() {
        $this->url = $_REQUEST['url'] ?? 'product';
        $this->basePath = __DIR__ . '/../';
        $this->parseUrl();
    }

    private function parseUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'product';
        $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
        
        $this->controller = isset($url[0]) ? ucfirst($url[0]).'Controller' : 'ProductController';
        $this->method = isset($url[1]) ? $url[1] : 'index';
        $this->params = array_slice($url, 2);
    }

    public function run() {
        $controllerFile = $this->basePath . 'Controllers/' . $this->controller . '.php';
        
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerClass = "BruzDeporte\\UptaebMvc\\Controllers\\" . $this->controller;
            
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $this->method)) {
                    call_user_func_array([$controller, $this->method], $this->params);
                } else {
                    throw new \Exception("Método {$this->method} no encontrado en {$this->controller}");
                    //die("<script>window.location='?url=Product';</script>");
                }
            } else {
                throw new \Exception("Clase {$this->controller} no encontrada");
                //die("<script>window.location='?url=Product';</script>");
            }
        } else {
            throw new \Exception("Controlador {$this->controller} no encontrado");
            //die("<script>window.location='?url=Product';</script>");
        }
    }
}

// Inicializar la aplicación
try {
    $app = new FrontController();
    $app->run();
} catch (Exception $e) {
    // Manejo básico de errores
    die("Error en la aplicación: " . $e->getMessage());
}