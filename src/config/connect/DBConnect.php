<?php
    
    class DBConnect extends PDO {
        protected $con;
        private $port;
        private $local;
        private $nameDB;
        private $user;
        private $pass;

        public function __construct()
        {
            $this->local = 'localhost';
            $this->nameDB = 'jessame';
            $this->user = 'root';
            $this->pass = '';
        }

        protected function connectDB() {
            try {
                $this->con = new PDO("mysql:host={$this->local};dbname={$this->nameDB}", $this->user, $this->pass);
            } catch (PDOException $e) {
                // Manejo de errores
                die("Error de conexión: " . $e->getMessage());
            }
        }
    }
