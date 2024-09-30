<?php
declare(strict_types=1);

class libro {
    
    private string $titulo;
    private string $autor;
    private float $precio;
    private int $stock;

    public function __construct(string $titulo, string $autor,$precio, int $stock) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->stock = $stock;
    }
    public function getTitulo($titulo): string {
        return $this->titulo;
    }
    public function getAutor($autor): string {
        return $this->autor;
    }
    public function getprecio($precio) {
        return $this->precio;
    }
    public function getStock($stock) {
        return $this->stock;
    }

    public function setStock($nuevoStock) {
        if ($this->setStock ($nuevoStock)){
            $this->stock > 0;
        };
        $this->stock = $nuevoStock;
    }

};

$libro1 = new libro('Cien años de Soledad', 'Gabriel García Márquez', 45, 2);
    echo 'El libro seleccionado es: ' . $libro1->getTitulo('titulo') . ' su autor es ' . $libro1->getAutor('autor') . ' su precio es ' . $libro1->getprecio('precio') . ' € y quedan en existencias: ' . $libro1->getStock('stock');
$libro2 = new libro('El Túnel', 'Ernesto Sabato', 25, 4);
    echo '<br>';
    echo 'El libro seleccionado es: ' . $libro2->getTitulo('titulo') . ' su autor es ' . $libro2->getAutor('autor') . ' su precio es ' . $libro2->getprecio('precio') . ' € y quedan en existencias: ' . $libro2->getStock('stock');

