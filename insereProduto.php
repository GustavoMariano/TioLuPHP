<?php

if (isset($_FILES['imagem'])) {
	$encoded_image = "data:" . $_FILES['imagem']['type'] . ";base64," . base64_encode(file_get_contents($_FILES['imagem']['tmp_name']));
}

$novo_produto = array(
	'descricao' => $_POST['descricao'],
	'valor' => $_POST['valor'],
	'imagem' => $encoded_image);

$sql = $pdo->prepare("INSERT INTO tb_produtos (descricao,valor,imagem) VALUES (:descricao,:valor,:imagem)");
$sql->execute($novo_produto);

if ($sql->rowCount() > 0) {
	include 'verProduto.php';
} else {
	echo "<br><br><br>ERROU!!!!!";
}

?>﻿

