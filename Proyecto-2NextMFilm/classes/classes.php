<?php
declare(strict_types=1);

require_once 'api.php';
class Pelicula {
    public string $titulo;
    public string $fechaEstreno;
    public int $diasHastaEstreno;
    public string $posterUrl;

    public function __construct(string $titulo, string $fechaEstreno, int $diasHastaEstreno, string $posterUrl) {
        $this->titulo = $titulo;
        $this->fechaEstreno = $fechaEstreno;
        $this->diasHastaEstreno = $diasHastaEstreno;
        $this->posterUrl = $posterUrl;
    }

    public function mostrarDetalles(): string {
        return "<img src='{$this->posterUrl}' alt='{$this->titulo}'>
                <h2>{$this->titulo} se estrena en {$this->diasHastaEstreno} días</h2>
                <p class='fs5'>Fecha de estreno: <strong>{$this->fechaEstreno}</strong></p>";
    }
}


?>