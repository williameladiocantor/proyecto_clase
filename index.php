<?php
    // Carga el controlador (Clase) Landing 
    require_once "controllers/Landing.php";
    // Se crea un objeto a partir de la clase Landing
    $controller = new Landing;
    // Se usa el método main
    $controller->main();
?>