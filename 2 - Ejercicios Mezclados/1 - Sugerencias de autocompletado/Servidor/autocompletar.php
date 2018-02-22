<?php
/*
 * Array con nombres de usuarios
 */
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";

// Obtiene el parámetro desde la URL
$q=$_REQUEST["q"];
$hint="";

// Comprueba con todos los elementos del array si $q no es cadena vacía: ""
if ($q !== "") {
    $q=strtolower($q); $len=strlen($q);

    foreach($a as $name) {
        if (stristr($q, substr($name,0,$len))) {
            if ($hint==="") {
                $hint=$name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Devuelve "no suggestion" si no es encontrado o no hay valor correcto
echo $hint==="" ? "Sin sugerencias" : $hint;
