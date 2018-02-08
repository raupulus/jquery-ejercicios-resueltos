<?php
	header('Content-type: application/json; charset=utf-8');
	
	class Tour   {
        public $name;
        public $price;  
    }  

    $tour1 = new Tour();
    $tour1->name = 'París, Francia';
    $tour1->price = 550;

    $tour2 = new Tour();
    $tour2->name = 'Madrid, España';
    $tour2->price = 460;
    
    $tour3 = new Tour();
    $tour3->name = 'New York, Estados Unidos';
    $tour3->price = 334;

    $array = array($tour1, $tour2, $tour3);

    
	echo json_encode($array);
?>
