<?php
$rs = $pdo->prepare("SELECT * FROM tb_clientes");
$rs->execute();
$listarClientes = $rs->fetchall(PDO::FETCH_OBJ);
?>
<table>

	<thead>
		<th>Nome |</th>
		<th>Endereço |</th>
		<th>Numero |</th>
		<th>Observação |</th>
		<th>CEP |</th>
		<th>Bairro |</th>
		<th>Cidade |</th>
		<th>Estado |</th>
		<th>Telefone |</th>
		<th>E-mail</th>

	</thead>
	<?php foreach ($listarClientes as $l): ?>
		<tr>
			<td><?php echo $l->nome; ?></td> 
			<td><?php echo $l->endereco; ?></td>
			<td><?php echo $l->numero; ?></td>
			<td><?php echo $l->observacao; ?></td>
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
<br>