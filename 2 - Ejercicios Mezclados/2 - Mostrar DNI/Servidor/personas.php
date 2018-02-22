<?php

$datos = array(
    0 => array("id" => 1, "dni" => "12345678-a", "nombre" => "Juan"),
    1 => array("id" => 2, "dni" => "23143543-d", "nombre" => "Antonio"),
    2 => array("id" => 3, "dni" => "75770999-d", "nombre" => "Pepa"),
    3 => array("id" => 4, "dni" => "75754321-f", "nombre" => "Pepe")
);

echo json_encode($datos);
