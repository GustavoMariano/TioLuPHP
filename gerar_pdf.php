<?php	

	$html = "";
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
