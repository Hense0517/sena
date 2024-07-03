<?php
$dalTableusuarios = array();
$dalTableusuarios["Cedula"] = array("type"=>20,"varname"=>"Cedula", "name" => "Cedula", "autoInc" => "0");
$dalTableusuarios["Nombre y Apellido"] = array("type"=>200,"varname"=>"Nombre_y_Apellido", "name" => "Nombre y Apellido", "autoInc" => "0");
$dalTableusuarios["Celular"] = array("type"=>3,"varname"=>"Celular", "name" => "Celular", "autoInc" => "0");
$dalTableusuarios["Pass"] = array("type"=>200,"varname"=>"Pass", "name" => "Pass", "autoInc" => "0");
$dalTableusuarios["Empresa"] = array("type"=>3,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTableusuarios["Cedula"]["key"]=true;

$dal_info["mega_ya_at_localhost__usuarios"] = &$dalTableusuarios;
?>