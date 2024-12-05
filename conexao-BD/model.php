<?php

require_once "./config.php/config.php";

class dbPdo{
    private $conn;

    // Método para criar a conexão
    public function db_conn() {
        if ($this->conn === null) { // Garante que a conexão seja criada apenas uma vez
            try {
                $dsn = "mysql:host=" . HOST . ";dbname=" . DBNAME . ";charset=utf8mb4";
                $this->conn = new PDO($dsn, USERNAME, PASSWORD);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conectou ao banco de dados " . DBNAME . " com sucesso!<br>";
            } catch (PDOException $erro) {
                throw new Exception("Erro ao conectar ao banco de dados: " . $erro->getMessage());
            }
        }
        return $this->conn;
    }

    public function db_select(){
        try{
            $result = $this->conn->query("SELECT * FROM produtos")->fetchAll(pdo::FETCH_ASSOC);
            return $result;
            // foreach($result as $produto){
            //     echo $produto['nomeProduto'] . " ---- " . $produto['valorProduto'] . "<br>";
            // }
        } catch (PDOException $err){
            throw new Exception("Erro ao buscar produtos" . $err->getMessage());
        }        
    }

    public function get_conn() {
        return $this->conn ?? $this->db_conn();
    }
}
    



