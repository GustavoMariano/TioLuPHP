<?php 
require 'validaSessao.php';
?>
<br>
<form action="index.php" method="POST" enctype="multipart/form-data">            
	<label>Descrição: </label>
	<input type="text" name="descricao" required="" >

	<label>Valor: </label>
	<input type="number" name="valor" required="" >

	<br><br>
	<label>Imagem: </label>
	<input type="file" name="imagem" required="" />

	<br><br>
	<input type="submit" name="btnProduto" value="Enviar">
</form>
