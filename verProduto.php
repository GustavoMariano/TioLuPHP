
<form name="geraPDF" action="index.php" method="POST" >
  <button type="submit" name="gerarPDF">GERAR PDF</button>

</form>



<?php
$rs = $pdo->prepare("SELECT * FROM tb_produtos");
$rs->execute();
$listarProdutos = $rs->fetchall(PDO::FETCH_OBJ);
?>
<table>

    <thead>
        <th>Descrição |</th>
        <th>Valor |</th>
        <th>Imagem |</th>

        <?php foreach ($listarProdutos as $l): ?>
          <tr>
           <td><?php echo $l->descricao; ?></td> 
           <td><?php echo $l->valor; ?></td>
           <td><img src="<?php echo $l->imagem; ?>" width="250" height="300"></td>

       </tr>

   <?php endforeach; ?>
</tbody> 
</table>
