<?php
// Configurar la cabecera para que el contenido sea de tipo JSON
header('Content-Type: application/json');

// Crear un array con datos
$data = array(
    'nombre' => 'Juan',
    'edad' => 25,
    'pais' => 'México',
    'ocupacion' => 'Ingeniero de Software'
);

// Convertir el array a formato JSON
echo json_encode($data);
?>