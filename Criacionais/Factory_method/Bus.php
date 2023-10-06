<?php

    include_once('./IVehicle.php');

    class Bus implements VeiculosInterface{
        public function getTipoVeiculo(){
            return 'Ônibus';
        }

        public function ligarVeiculo(){
            return 'Ônibus ligado';
        }
        
        public function desligarVeiculo(){
            return 'Ônibus desligado';
        }
    }
