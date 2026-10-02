<?php

abstract class Producto
{
    public readonly string $nombre;
    public readonly float $precioBase;

    abstract public function __construct(string $nombre, float $precioBase);

    function precioFinal(int $cantidad): float
    {
        return $this->precioBase * $cantidad;
    }
}
?>