<?php

abstract class Banco {
    protected $saldo;
    protected $limite_saque;
    protected $juros;

    // Metodos abstratos
    abstract public function sacar($quantia);
    abstract public function depositar($quantia);
}


class Itau extends Banco {
    public function sacar($quantia) {
        echo "sacou R$$quantia,00";
    }

    public function depositar($quantia) {
        echo "depositou R$ {$quantia}\n";
    }
}

$itau = new Itau();
$itau->sacar(500);


?>