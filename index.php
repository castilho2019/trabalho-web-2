<?php
class Cadastro {
    private $nome;
    private $nomeDaEpresa;
    private $cnpj;
    private $telefone;
    private $email;

    public function processaCadastro() {
        $nome = $_POST['nome'];
        $nomeDaEmpresa = $_POST['empresa'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];


    public function validaCadastro() {        
        if($nome != " ") {
            echo "seu nome é: $nome";
      }else{
        echo "dados inválidos";
      }
      if ($nomeDaEmpresa != " ") {
        echo "A empresa $nomeDaEmpresa está cadastrada";
      }else{
        echo "dados inválidos";
      }
      if($cnpj != " ") {
        echo "CNPJ: $cnpj validado";
      }else{
        echo "dados inválidos";
      }
      if($telefone != " ") {
        echo "seu numero é: $telefone";
      }else{
        echo "numero de telefone inválido"
      }
      if($email != " ") {
        echo " endereço de email: $email";
      }else{
        echo "email inválido";
      }
    }
        
    }
}


?>