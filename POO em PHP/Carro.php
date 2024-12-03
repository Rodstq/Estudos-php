<?php 

class Veiculo{

    public $modelo = "a";
    public $cor = 234;
    public $ano;

    public function andar(){
        echo "Andou";
    }
    
    public function Parar(){
        echo "Parou";
    }

}

class Carro extends Veiculo {
    public function abrir_porta(){
        echo "Abriu porta";
    }
}

class Moto extends Veiculo{
    public function dar_grau(){
        echo "dando grau em 321";
    }
}

// Criando e populando um carro
$carro = new Carro();
$carro->modelo = "Sedan";
$carro->cor = "Vermelho";
$carro->ano = 2023;

echo "\n";
$carro->abrir_porta();
echo "\n";

// Criando e populando uma moto
$moto = new Moto();
$moto->modelo = "Esportiva";
$moto->cor = "Azul";
$moto->ano = 2022;
$moto->dar_grau();
echo "\n";

?>