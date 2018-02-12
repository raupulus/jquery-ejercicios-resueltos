<?php
header('Content-type: application/json; charset=utf-8');

class Alumno
{
    public $nombre;
    public $dni;
    public $acceso;
}

$a1 = new Alumno();
$a1->nombre = 'Manuel Blanca';
$a1->dni = '77335544A';
$a1->acceso = array('CFGM SMR');

$a2 = new Alumno();
$a2->nombre = 'María Jiménez';
$a2->dni = '22335544B';
$a2->acceso = array('CFGM SMR');

$primero = array($a1, $a2);

$a3 = new Alumno();
$a3->nombre = 'Juan Parras';
$a3->dni = '77665566X';
$a3->acceso = array('Bachillerato');

$a4 = new Alumno();
$a4->nombre = 'Juana Moral';
$a4->dni = '25335544E';
$a4->acceso = array('CFGS ASIR');

$segundo = array($a3, $a4);

$ciclos = array($primero, $segundo);


echo json_encode($ciclos);
