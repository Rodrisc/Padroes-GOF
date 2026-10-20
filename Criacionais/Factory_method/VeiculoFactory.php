<?php

    include_once('./Moto.php');
    include_once('./Car.php');
    include_once('./Bus.php');
    
    class VeiculoFactory {
    public static function criarVeiculo($tipo) {
        $tipo = strtolower($tipo);
        switch ($tipo) {
            case 'carro':
                return new Car();
            case 'moto':
                return new Moto();
            case 'bus':
                return new Bus();
            default:
                return null;
        }
    }
}
