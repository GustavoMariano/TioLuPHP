<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function alerta()
		{
			alert("Tem certeza que deseja deletar o produto?");
		}
	</script>
</head>
<body>
</body>
</html>


<br>
<form action="index.php" method="POST">            
	<label>Digite o IDENTIFICADOR do produto que deseja excluir: </label>
	<input type="text" name="identificador" required="" >
	<input type="submit" name="btnDelProduto" onclick="alerta()" value="EXCLUIR">
	<br>
</form>

<?php
$rs = $pdo->prepare("SELECT * FROM tb_produtos");
$rs->execute();
$listarProdutos = $rs->fetchall(PDO::FETCH_OBJ);
?>
<table>
	<br>
	<thead>
		<th>IDENTIFICADOR  | </th>
		<th>DESCRIÇÃO | </th>
		<th>VALOR | </th>
		<th>IMAGEM </th>

		<?php foreach ($listarProdutos as $l): ?>
			<tr>
				<td><?php echo $l->id_produto; ?></td>
				<td><?php echo $l->descricao; ?></td> 
				<td><?php echo $l->valor; ?></td>
				<td><img src="<?php echo $l->imagem; ?>" width="250" height="300"></td>

			</tr>

		<?php endforeach; ?>
	</tbody> 
</table>

</div>