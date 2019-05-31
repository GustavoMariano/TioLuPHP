<?php

/* verifica se não esta logado */
if (!isset($_SESSION['LOGADO'])) {
	require 'logoff.php';
}
?>
