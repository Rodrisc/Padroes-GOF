<?php

    include_once('./Moto.php');
    include_once('./Car.php');
    
    class Creator{

        private $veiculo;
        function __construct($tipoClass){
            switch(strtolower($tipoClass)){
                case 'moto':
                    $this->veiculo = new Moto();
                    break;
                case 'carro':
                    $this->veiculo = new Car();
                    break;
                default:
                    $this->veiculo = null;
            }
        }

        function getObj(){
           return $this->veiculo;
        }
    }
