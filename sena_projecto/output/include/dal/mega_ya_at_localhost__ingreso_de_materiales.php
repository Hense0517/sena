<?php
$dalTableingreso_de_materiales = array();
$dalTableingreso_de_materiales["Id Ingreso"] = array("type"=>3,"varname"=>"Id_Ingreso", "name" => "Id Ingreso", "autoInc" => "1");
$dalTableingreso_de_materiales["Fecha de Consumo"] = array("type"=>7,"varname"=>"Fecha_de_Consumo", "name" => "Fecha de Consumo", "autoInc" => "0");
$dalTableingreso_de_materiales["Material"] = array("type"=>3,"varname"=>"Material", "name" => "Material", "autoInc" => "0");
$dalTableingreso_de_materiales["Cantidad"] = array("type"=>3,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTableingreso_de_materiales["Ticket"] = array("type"=>200,"varname"=>"Ticket", "name" => "Ticket", "autoInc" => "0");
$dalTableingreso_de_materiales["Tecnico"] = array("type"=>3,"varname"=>"Tecnico", "name" => "Tecnico", "autoInc" => "0");
$dalTableingreso_de_materiales["Empresa"] = array("type"=>3,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTableingreso_de_materiales["Tipo de Actividad"] = array("type"=>200,"varname"=>"Tipo_de_Actividad", "name" => "Tipo de Actividad", "autoInc" => "0");
$dalTableingreso_de_materiales["Id Ingreso"]["key"]=true;

$dal_info["mega_ya_at_localhost__ingreso_de_materiales"] = &$dalTableingreso_de_materiales;
?>