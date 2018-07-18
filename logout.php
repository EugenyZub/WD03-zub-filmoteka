<?php 

require('config.php');

unset($_SESSION['úser']);
session_destroy();


header('Location: ' . HOST . 'index.php');

?>