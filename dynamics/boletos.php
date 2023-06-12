<?php
echo "$nombre=(isset($_POST["nombre"]) && $_POST["nombre"] !="")? $_POST["nombre"] : "Sin llenar";
 $apellido=(isset($_POST["apellido"]) && $_POST["apellido"] !="")? $_POST["apellido"] : "Sin llenar";
 $fecha=(isset($_POST["fecha"]) && $_POST["fecha"] !="")? $_POST["fecha"] : false;
 $evento=(isset($_POST["evento"]) && $_POST["evento"] !="")? $_POST["evento"] : "Sin llenar";
 $unidades=(isset($_POST["unidades"]) && $_POST["unidades"] !="")? $_POST["unidades"] : "Sin llenar";
 $zona=(isset($_POST["zona"]) && $_POST["zona"] !="")? $_POST["zona"] : false;
 $lugar=(isset($_POST["lug"]) && $_POST["lug"] !="")? $_POST["lug"] : "Sin llenar";
 $extras=(isset($_POST["extras"]) && $_POST["extras"] !="")? $_POST["extras"] : false;"

?>
