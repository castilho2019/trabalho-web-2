<?php
$nome = "nome";
$empresa = "empresa";
$cnpj = "cnpj";
$telefone = "telefone";
$email = "email";

$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$$cnpj = $_POST['cnpj'];
$$telefone = $_POST['telefone'];
$email = $_POST['email'];

echo "seu nome é: $nome<hr>";
echo "empresa cadastrada com sucesso: $empresa<hr>";
echo "cadastro de CNPJ: $cnpj<hr>";
echo "número para contato: $telefone<hr>";
echo "email para  contato: $email<hr>";


?>