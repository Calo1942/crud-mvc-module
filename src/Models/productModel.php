<?php
    class ProductoModel {
        private $db;

        public function __construct() {
            $host = 'localhost';
            $dbname = 'BruzProducto';
            $user = 'root';
            $pass = '';
            
            try {
                $this->db = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                    $user,
                    $pass,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch(PDOException $e) {
                die("Error de conexión: " . $e->getMessage());
            }
        }

        // CREATE
        public function crearProducto($data) {
            $sql = "INSERT INTO productos (
                nombre, descripcion, cantidad, talla, categoria, precio,
                imgProduct1, imgProduct2, imgProduct3, imgProduct4
            ) VALUES (
                :nombre, :descripcion, :cantidad, :talla, :categoria, :precio,
                :img1, :img2, :img3, :img4
            )";
            
            $stmt = $this->db->prepare($sql);
            return $stmt->execute([
                ':nombre' => $data['nombre'],
                ':descripcion' => $data['descripcion'],
                ':cantidad' => $data['cantidad'],
                ':talla' => $data['talla'],
                ':categoria' => $data['categoria'],
                ':precio' => $data['precio'],
                ':img1' => $data['imgProduct1'],
                ':img2' => $data['imgProduct2'] ?? null,
                ':img3' => $data['imgProduct3'] ?? null,
                ':img4' => $data['imgProduct4'] ?? null
            ]);
        }

        // READ
        public function obtenerProductos() {
            $stmt = $this->db->query("SELECT * FROM productos");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function obtenerProducto($id) {
            $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // UPDATE
        public function actualizarProducto($id, $data) {
            $sql = "UPDATE productos SET
                nombre = :nombre,
                descripcion = :descripcion,
                cantidad = :cantidad,
                talla = :talla,
                categoria = :categoria,
                precio = :precio,
                imgProduct1 = :img1,
                imgProduct2 = :img2,
                imgProduct3 = :img3,
                imgProduct4 = :img4
                WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            // Aseguramos que los nombres de los parámetros tengan los dos puntos y coincidan con la consulta
            $params = [
                ':nombre' => $data['nombre'],
                ':descripcion' => $data['descripcion'],
                ':cantidad' => $data['cantidad'],
                ':talla' => $data['talla'],
                ':categoria' => $data['categoria'],
                ':precio' => $data['precio'],
                ':img1' => $data['imgProduct1'],
                ':img2' => $data['imgProduct2'],
                ':img3' => $data['imgProduct3'],
                ':img4' => $data['imgProduct4'],
                ':id' => $id
            ];
            return $stmt->execute($params);
        }

        // DELETE
        public function eliminarProducto($id) {
            $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
            return $stmt->execute([$id]);
        }

        public function obtenerImagenes($id) {
            $stmt = $this->db->prepare("SELECT imgProduct1, imgProduct2, imgProduct3, imgProduct4 FROM productos WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }