<?php	
include 'conectaDB.php';

	$html = "";
	     $html .= '<h2>Dados dos Produtos</h2>';
       $rs = $pdo->prepare("SELECT * FROM tb_produtos");

       if ($rs->execute()) {
         if ($rs->rowCount() > 0) {
           $row = $rs->fetch(PDO::FETCH_OBJ);
           $html .= "Código do Cliente : ".$row->id_produto . "<br>";
           $html .= "Nome : ".$row->descricao. "<br>";
           $html .= "Endereco : ".$row->valor. "<br>";
           $html.= "<img src='{$row->imagem}' width='100' height='100' name='imagem' value='{$row->imagem}'>"."<br>";
         }
       }

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");


	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html(' 
		'.$html.'
		');

	//Renderizar o html
	$dompdf->render();
	$dompdf->stream(
		"relatorio_produtos.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>
