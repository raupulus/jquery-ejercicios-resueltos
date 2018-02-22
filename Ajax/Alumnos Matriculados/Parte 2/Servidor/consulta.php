<?php
header('Content-type: application/json; charset=utf-8');

class Alumno
{
    public $nombre;
    public $dni;
    public $acceso;
}

if ($_GET['curso'] === '1daw') {
    $a1 = new Alumno();
    $a1->nombre = 'Manuel Blanca';
    $a1->dni = '77335544A';
    $a1->acceso = array('CFGM SMR');

    $a2 = new Alumno();
    $a2->nombre = 'María Jiménez';
    $a2->dni = '22335544B';
    $a2->acceso = array('CFGM SMR');

    $ciclo = array($a1, $a2);
} else if ($_GET['curso'] === '2daw') {
    $a3 = new Alumno();
    $a3->nombre = 'Juan Parras';
    $a3->dni = '77665566X';
    $a3->acceso = array('Bachillerato');

    $a4 = new Alumno();
    $a4->nombre = 'Juana Moral';
    $a4->dni = '25335544E';
    $a4->acceso = array('CFGS ASIR');

    $ciclo = array($a3, $a4);
}

echo json_encode($ciclo);
