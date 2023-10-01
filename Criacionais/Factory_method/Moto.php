<?php
    
    include_once('./IVehicle.php');

    class Moto implements VeiculosInterface{
        public function getTipoVeiculo(){
            return 'Moto';
        }

        public function ligarVeiculo(){
            return 'Moto ligado';
        }
        
        public function desligarVeiculo(){
            return 'Moto desligado';
        }
    }
