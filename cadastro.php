<?php

include("conexao.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cnpj=$_POST['cnpj'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$logradouro=$_POST['logradouro'];
$bairro=$_POST['bairro'];
$numero=$_POST['numero'];


$sql="INSERT INTO juridica(nome, sobrenome, email, senha, cnpj, uf, cidade, logradouro, bairro, numero) 
VALUES ('$nome', '$sobrenome', '$email', '$senha', $cnpj, '$estado', '$cidade', '$logradouro', '$bairro', $numero)";

if(mysqli_query($conexao, $sql))
{ 
    echo"Usuario Cadastrado com Sucesso";
}
else{

    echo "Erro";
}

mysqli_close($conexao);
?>