<?php
    include_once('./VeiculoFactory.php');
    class Main{
        protected $obj;
     
        public function main() {
            $sair = false;
            
            while (!$sair) {
                $opcao = $this->input('Digite sua opção: (carro/moto/sair): ');
                
                if ($opcao === 'sair') {
                    $sair = true;
                    continue;
                }
                
                $this->obj = VeiculoFactory::criarVeiculo($opcao);
                
                if ($this->obj) {
                    echo ucfirst($opcao) . ' criado' . PHP_EOL;
                    $this->mostrarObj($opcao);
                } else {
                    echo 'opção inválida' . PHP_EOL;
                }
            }
        }

        function input($msg){
            echo $msg;
            $entrada = fgets(STDIN);
            if($entrada)
                return (string) strtolower(rtrim($entrada));
            return null;
        }

        function mostrarObj($opcao){
            $voltar = false;
            while(!$voltar){
                $escolha = $this->input("Digite sua opção de " . $opcao . " - (1 - Tipo veículo/2 - Ligar veículo/3 - Desligar veículo/0 - Voltar)");
                switch($escolha){
                    case '1':
                        echo $this->obj->getTipoVeiculo() . PHP_EOL;
                        break;
                    case '2':   
                        echo $this->obj->ligarVeiculo() . PHP_EOL;
                        break;
                    case '3':
                        echo $this->obj->desligarVeiculo() . PHP_EOL;
                        break;
                    default:
                        $voltar = true;
                        break;
                }
            }
        }
    }

    $main = new Main();
    $main->main();
