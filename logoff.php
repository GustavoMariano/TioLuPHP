<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();
header("location: form_login.php");

?>