<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function alerta()
		{
			alert("Tem certeza que deseja deletar o cliente?");
		}
	</script>
</head>
<body>
</body>
</html>

<br>
<form action="index.php" method="POST">            
	<label>Digite o IDENTIFICADOR do cliente que deseja excluir: </label>
	<input type="text" name="identificador" required="" >
	<input type="submit" name="btnDelCliente" onclick="alerta()" value="EXCLUIR">
</form>



<?php
$rs = $pdo->prepare("SELECT * FROM tb_clientes");
$rs->execute();
$listarClientes = $rs->fetchall(PDO::FETCH_OBJ);
?>
<br>
<table>
	<thead>
		<th>IDENTIFICADOR |</th>
		<th>NOME |</th>
		<th>CEP |</th>
		<th>BAIRRO |</th>
		<th>CIDADE |</th>
		<th>ESTADO |</th>
		<th>TELEFONE |</th>
		<th>E-MAIL</th>
	</thead>
	<?php foreach ($listarClientes as $l): ?>
		<tr>
			<td><?php echo $l->id_cliente; ?></td>
			<td><?php echo $l->nome; ?></td> 
			<td><?php echo $l->cep; ?></td>
			<td><?php echo $l->bairro; ?></td>
			<td><?php echo $l->cidade; ?></td>
			<td><?php echo $l->estado; ?></td>
			<td><?php echo $l->telefone; ?></td>
			<td><?php echo $l->email; ?></td>
		</tr>

	<?php endforeach; ?>
</tbody> 
</table>

</div>