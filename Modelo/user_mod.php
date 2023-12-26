    <?php
    class Usuario {
        private $id;
        private $nombre;
        private $email;
        private $direccion;
        private $ciudad;
        private $codigoPostal;
        private $detalles;
        private $fechaRegistro;
        private $claveEncriptada;

        public function __construct() {
            $this->setNombre("");
            $this->setEmail("");
            $this->setDireccion("");
            $this->setCiudad("");
            $this->setCodigoPostal("");
            $this->setDetalles("");
            $this->setFechaRegistro("");
            $this->setClaveEncriptada("");
        }
        /**
         * Get the value of id
         */ 
        public function getId() {
            return $this->id;
        }
        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id) {
            $this->id = $id;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getDireccion() {
            return $this->direccion;
        }

        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        public function getCiudad() {
            return $this->ciudad;
        }

        public function setCiudad($ciudad) {
            $this->ciudad = $ciudad;
        }

        public function getCodigoPostal() {
            return $this->codigoPostal;
        }

        public function setCodigoPostal($codigoPostal) {
            $this->codigoPostal = $codigoPostal;
        }

        public function getDetalles() {
            return $this->detalles;
        }

        public function setDetalles($detalles) {
            $this->detalles = $detalles;
        }

        public function getFechaRegistro() {
            return $this->fechaRegistro;
        }

        public function setFechaRegistro($fechaRegistro) {
            $this->fechaRegistro = $fechaRegistro;
        }

        public function getClaveEncriptada() {
            return $this->claveEncriptada;
        }

        public function setClaveEncriptada($claveEncriptada) {
            $this->claveEncriptada = $claveEncriptada;

        }
    }
?>
