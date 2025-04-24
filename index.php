<?php

// Clase Universidad
class Universidad {
    public $nombre;
    public $ubicacion;
    public $numeroFacultades;
    public $tipo; // pública o privada
    public $rector;

    public function __construct($nombre, $ubicacion, $numeroFacultades, $tipo, $rector) {
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->numeroFacultades = $numeroFacultades;
        $this->tipo = $tipo;
        $this->rector = $rector;
    }

    public function mostrarNombre() {
        return "Nombre de la universidad: $this->nombre";
    }

    public function mostrarUbicacion() {
        return "Ubicada en: $this->ubicacion";
    }

    public function mostrarFacultades() {
        return "Tiene $this->numeroFacultades facultades.";
    }

    public function esPublica() {
        return ($this->tipo == "pública") ? "Es una universidad pública." : "Es una universidad privada.";
    }

    public function nombreRector() {
        return "El rector es: $this->rector";
    }
}

// Clase Colegio
class Colegio {
    public $nombre;
    public $direccion;
    public $niveles;
    public $cantidadEstudiantes;
    public $director;

    public function __construct($nombre, $direccion, $niveles, $cantidadEstudiantes, $director) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->niveles = $niveles;
        $this->cantidadEstudiantes = $cantidadEstudiantes;
        $this->director = $director;
    }

    public function mostrarNombre() {
        return "Nombre del colegio: $this->nombre";
    }

    public function mostrarDireccion() {
        return "Dirección: $this->direccion";
    }

    public function mostrarNiveles() {
        return "Niveles que ofrece: $this->niveles";
    }

    public function totalEstudiantes() {
        return "Total de estudiantes: $this->cantidadEstudiantes";
    }

    public function mostrarDirector() {
        return "El director es: $this->director";
    }
}

// Clase Celular
class Celular {
    public $marca;
    public $modelo;
    public $sistemaOperativo;
    public $almacenamiento;
    public $camaraMP;

    public function __construct($marca, $modelo, $sistemaOperativo, $almacenamiento, $camaraMP) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->almacenamiento = $almacenamiento;
        $this->camaraMP = $camaraMP;
    }

    public function mostrarMarca() {
        return "Marca: $this->marca";
    }

    public function mostrarModelo() {
        return "Modelo: $this->modelo";
    }

    public function mostrarSistema() {
        return "Sistema Operativo: $this->sistemaOperativo";
    }

    public function mostrarAlmacenamiento() {
        return "Almacenamiento: $this->almacenamiento GB";
    }

    public function mostrarCamara() {
        return "Cámara: $this->camaraMP MP";
    }
}

// Crear objetos
$uni = new Universidad("Universidad Nacional", "Bogotá", 15, "pública", "Carlos Pérez");
$cole = new Colegio("Colegio San José", "Medellín", "Primaria y Secundaria", 1200, "Ana Ramírez");
$celu = new Celular("Samsung", "Galaxy S22", "Android", 128, 64);

// Imprimir un método de cada objeto
echo $uni->mostrarNombre() . "<br>";
echo $cole->mostrarDireccion() . "<br>";
echo $celu->mostrarSistema() . "<br>";

?>
