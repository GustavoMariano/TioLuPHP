<?php
$produto=array(
'identificador' => $_POST['identificador']);

$sql = $pdo->prepare("DELETE FROM tb_produtos WHERE id_produto = :identificador");
$sql->execute($produto);

if ($sql->rowCount() > 0) {
	include 'verProduto.php';
} else {
	echo "<br><br><br>ERRO NOVO!!!!!";
}
?>
