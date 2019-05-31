<?php
$rs = $pdo->prepare("SELECT * FROM tb_pedidos");
$rs->execute();
$listarPedidos = $rs->fetchall(PDO::FETCH_OBJ);
?>
<table>

    <thead>
        <th>Data/Hora|</th>
        <th>Observação |</th>

        <?php foreach ($listarPedidos as $l): ?>
          <tr>
           <td><?php echo $l->data_hora; ?></td> 
           <td><?php echo $l->observacao; ?></td>

       </tr>

   <?php endforeach; ?>
</tbody> 
</table>
