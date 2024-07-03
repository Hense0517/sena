<?php
$dalTableingreso_de_equipo = array();
$dalTableingreso_de_equipo["Id Ingresp"] = array("type"=>3,"varname"=>"Id_Ingresp", "name" => "Id Ingresp", "autoInc" => "1");
$dalTableingreso_de_equipo["Fecha de Entrega"] = array("type"=>7,"varname"=>"Fecha_de_Entrega", "name" => "Fecha de Entrega", "autoInc" => "0");
$dalTableingreso_de_equipo["Serial"] = array("type"=>200,"varname"=>"Serial", "name" => "Serial", "autoInc" => "0");
$dalTableingreso_de_equipo["tecnico"] = array("type"=>3,"varname"=>"tecnico", "name" => "tecnico", "autoInc" => "0");
$dalTableingreso_de_equipo["Ticket"] = array("type"=>200,"varname"=>"Ticket", "name" => "Ticket", "autoInc" => "0");
$dalTableingreso_de_equipo["Fecha de Consumo"] = array("type"=>7,"varname"=>"Fecha_de_Consumo", "name" => "Fecha de Consumo", "autoInc" => "0");
$dalTableingreso_de_equipo["Empresa"] = array("type"=>3,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTableingreso_de_equipo["Id Ingresp"]["key"]=true;

$dal_info["mega_ya_at_localhost__ingreso_de_equipo"] = &$dalTableingreso_de_equipo;
?>