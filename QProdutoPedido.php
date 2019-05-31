<?php
$cliente=array(
	'id_cliente' => $_POST['id_cliente'],
	'observacao' => $_POST['observacao']);

$sql = $pdo->prepare("INSERT INTO tb_pedidos (data_hora, id_cliente, observacao) VALUES (CURRENT_TIMESTAMP, :id_cliente, :observacao)");
$sql->execute($cliente);

if ($sql->rowCount() > 0) {
	include 'verPedidos.php';
} else {
	echo "<br><br><br>ERRO NOVO!!!!!";
}

?>



