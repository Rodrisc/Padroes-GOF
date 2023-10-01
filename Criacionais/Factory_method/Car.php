<?php 

    include_once('./IVehicle.php');

    class Car implements VeiculosInterface{
        public function getTipoVeiculo(){
            return 'Carro';
        }

        public function ligarVeiculo(){
            return 'Carro ligado';
        }
        
        public function desligarVeiculo(){
            return 'Carro desligado';
        }
    }
