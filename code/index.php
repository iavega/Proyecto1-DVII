<?php 
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
echo "http://" . $host . $url."<br>";
echo $url;
$element = ["/DVII-Proyecto1/Hola/Mundo"=>"Esto es un Hola mundo",
    "/DVII-Proyecto1/Hola/Mundo/{id}"=>"Esto es un Hola mundo en casa"]; 
//echo $element[$url];
$attr = "";
$cadenaUrl = explode("/",$url);
foreach($element as $key =>$val ){
    $cadena = explode("/",$key);
    if(count(array_uintersect_assoc($cadena,$cadenaUrl,'strcasecmp'))%2 == 0 && count($cadena) === count($cadenaUrl)){
        $attr = $key;
        echo $key;
        break;
    }
}
echo $element[$attr];

class HolaMundo {
    public function __construct()
    {
        echo "A1";
    }
    public function caso(){
        echo "E2";
    }
}
$A = "HolaMundo";
$Ab = "caso";
$dClass = new $A;
$dClass->$Ab();