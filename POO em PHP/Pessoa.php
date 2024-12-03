<?php 

class Pessoa {
    #como definir variáveis
    public $nome;
    public $idade;

    #como declarar uma função publica
    public function falar(){
        echo $this->nome." de ".$this->idade." anos acabou de falar"."<br>";
    }

    public function get_idade(){
        
    }
}

    #criando variável do tipo Pessoa;
    $rodrigo = new Pessoa();
    #adicionando valores
    $rodrigo->nome = "Rodrigo Santos de Oliveira";
    $rodrigo->idade = 25;
    #chamando função da classe;
    $rodrigo->falar();

?>