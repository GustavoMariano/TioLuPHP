<form action="index.php" method="POST">            
	<label>Digite o IDENTIFICADOR do produto que deseja pedir: </label>
	<input type="text" name="id_cliente" required="" >
	<input type="text" name="observacao" required="" >
	<input type="submit" name="finalizaPedido" value="SOLICITAR">
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
				<td><img src="<?php echo $l->imagem; ?>" width="350" height="400"></td>

			</tr>

		<?php endforeach; ?>
	</tbody> 
</table>

</div>