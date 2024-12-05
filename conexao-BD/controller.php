<?php

require_once "model.php";


class Controller{

    private $connection;
    
    public function __construct(){
        $this->connection = new dbPdo();
        $this->connection->db_conn();
    }

    public function show_products(){

        try{
            $this->connection->db_select();

            var_dump($this->connection);

        } catch (Exception $err){
            die("Erro ao carregar produtos :" . $err->getMessage());
        }
    }
}






