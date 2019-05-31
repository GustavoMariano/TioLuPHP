<?php
$cliente=array(
'identificador' => $_POST['identificador']);

$sql = $pdo->prepare("DELETE FROM tb_clientes WHERE id_cliente = :identificador");
$sql->execute($cliente);

if ($sql->rowCount() > 0) {
	include 'verCliente.php';
} else {
	echo "<br><br><br>ERRO NOVO!!!!!";
}
?>