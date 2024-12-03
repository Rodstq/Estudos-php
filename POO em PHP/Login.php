<?php 

Class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->set_email($email);
        $this->set_senha($senha);
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "logado com sucesso";
        } else {
            echo "Dados incorretos";
        }
    }

    #como fazer getters and setters
    public function get_email(){
        return $this->email;
        
        # return this.email;
    }

    public function get_senha(){
        return $this->senha;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function set_email($new_email){
        #limpando caracteres não aceitos em formato e-mail
        $email = filter_var($new_email, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function set_senha($new_senha){
        $this->senha = $new_senha;
    }

    public function set_nome($new_nome){
        $this->nome = $new_nome;
    }
}

$logar = new Login("teste@teste.com","123456","Rodrigo Oliveira");

$logar->Logar();
echo "<br>";
echo $logar->get_senha();
echo "<br>";
echo $logar->get_email();

?>
