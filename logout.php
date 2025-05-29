<?php
session_start();

//Uusnięcie wszystkich danych sesji
$_SESSION = array();

//Zniszczenie sesji
session_destroy();
header("Location: index.html"); // Przekierowanie do strony głównej
exit;
?>