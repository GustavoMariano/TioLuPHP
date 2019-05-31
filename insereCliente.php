<?php

$cliente=array(

    'nome' => $_POST['nome'],
    'endereco' => $_POST['endereco'], 
    'numero' => $_POST['numero'], 
    'observacao' => $_POST['observacao'], 
    'cep' => $_POST['cep'], 
    'bairro' => $_POST['bairro'], 
    'cidade' => $_POST['cidade'], 
    'estado' => $_POST['estado'], 
    'telefone' => $_POST['telefone'], 
    'email' => $_POST['email']);

$sql = $pdo->prepare("INSERT INTO tb_clientes (nome, endereco, numero, observacao, cep, bairro, cidade, estado, telefone, email) VALUES (:nome, :endereco, :numero, :observacao, :cep, :bairro, :cidade, :estado, :telefone, :email)");
$sql->execute($cliente);

if ($sql->rowCount() > 0) {
    include 'verCliente.php';
} else {
    echo "<br><br><br>ERRO NOVO!!!!!";
}

?>