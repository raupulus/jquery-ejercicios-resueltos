<?php
header('Content-type: application/json; charset=utf-8');

class Flight
{
    public $flightNumber;
    public $time;
}

$flight1 = new Flight();
$flight1->flightNumber = '308';
$flight1->time = '3 de Abril, 5:29pm';

$flight2 = new Flight();
$flight2->flightNumber = '298';
$flight2->time = '3 de Abril, 2:46am';

$flight3 = new Flight();
$flight3->flightNumber = '421';
$flight3->time = '3 de Abril, 3:35pm';

$array = array($flight1, $flight2, $flight3);

echo json_encode($array);
