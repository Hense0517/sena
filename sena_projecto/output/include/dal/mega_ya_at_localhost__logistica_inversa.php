<?php
$dalTablelogistica_inversa = array();
$dalTablelogistica_inversa["Id_Logistica"] = array("type"=>3,"varname"=>"Id_Logistica", "name" => "Id_Logistica", "autoInc" => "1");
$dalTablelogistica_inversa["Ticket"] = array("type"=>200,"varname"=>"Ticket", "name" => "Ticket", "autoInc" => "0");
$dalTablelogistica_inversa["Tecnico"] = array("type"=>3,"varname"=>"Tecnico", "name" => "Tecnico", "autoInc" => "0");
$dalTablelogistica_inversa["Serial"] = array("type"=>200,"varname"=>"Serial", "name" => "Serial", "autoInc" => "0");
$dalTablelogistica_inversa["Observación"] = array("type"=>201,"varname"=>"Observaci_n", "name" => "Observación", "autoInc" => "0");
$dalTablelogistica_inversa["Empresa"] = array("type"=>3,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTablelogistica_inversa["Tipo de Tramite"] = array("type"=>200,"varname"=>"Tipo_de_Tramite", "name" => "Tipo de Tramite", "autoInc" => "0");
$dalTablelogistica_inversa["CedulaCliente"] = array("type"=>3,"varname"=>"CedulaCliente", "name" => "CedulaCliente", "autoInc" => "0");
$dalTablelogistica_inversa["Entregado en Bodega"] = array("type"=>200,"varname"=>"Entregado_en_Bodega", "name" => "Entregado en Bodega", "autoInc" => "0");
$dalTablelogistica_inversa["Fecha de Entrega"] = array("type"=>7,"varname"=>"Fecha_de_Entrega", "name" => "Fecha de Entrega", "autoInc" => "0");
$dalTablelogistica_inversa["Fecha de Atencón"] = array("type"=>7,"varname"=>"Fecha_de_Atenc_n", "name" => "Fecha de Atencón", "autoInc" => "0");
$dalTablelogistica_inversa["Acta"] = array("type"=>128,"varname"=>"Acta", "name" => "Acta", "autoInc" => "0");
$dalTablelogistica_inversa["Id_Logistica"]["key"]=true;

$dal_info["mega_ya_at_localhost__logistica_inversa"] = &$dalTablelogistica_inversa;
?>