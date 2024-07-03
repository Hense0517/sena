<?php
$dalTabletickets = array();
$dalTabletickets["id tickets"] = array("type"=>3,"varname"=>"id_tickets", "name" => "id tickets", "autoInc" => "1");
$dalTabletickets["Tickets"] = array("type"=>200,"varname"=>"Tickets", "name" => "Tickets", "autoInc" => "0");
$dalTabletickets["Fecha de atencioón"] = array("type"=>7,"varname"=>"Fecha_de_atencio_n", "name" => "Fecha de atencioón", "autoInc" => "0");
$dalTabletickets["Localidad"] = array("type"=>200,"varname"=>"Localidad", "name" => "Localidad", "autoInc" => "0");
$dalTabletickets["Estado del Ticket"] = array("type"=>200,"varname"=>"Estado_del_Ticket", "name" => "Estado del Ticket", "autoInc" => "0");
$dalTabletickets["Observaciones"] = array("type"=>201,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTabletickets["Tecnico"] = array("type"=>3,"varname"=>"Tecnico", "name" => "Tecnico", "autoInc" => "0");
$dalTabletickets["Empresa"] = array("type"=>3,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTabletickets["Cedula/nit-Cliente"] = array("type"=>3,"varname"=>"Cedula_nit_Cliente", "name" => "Cedula/nit-Cliente", "autoInc" => "0");
$dalTabletickets["Tipo de Actividad"] = array("type"=>200,"varname"=>"Tipo_de_Actividad", "name" => "Tipo de Actividad", "autoInc" => "0");
$dalTabletickets["Acta"] = array("type"=>3,"varname"=>"Acta", "name" => "Acta", "autoInc" => "0");
$dalTabletickets["Recupera_Cable?"] = array("type"=>200,"varname"=>"Recupera_Cable_", "name" => "Recupera_Cable?", "autoInc" => "0");
$dalTabletickets["Libera_Puerto?"] = array("type"=>200,"varname"=>"Libera_Puerto_", "name" => "Libera_Puerto?", "autoInc" => "0");
$dalTabletickets["Puerto"] = array("type"=>3,"varname"=>"Puerto", "name" => "Puerto", "autoInc" => "0");
$dalTabletickets["Cto"] = array("type"=>3,"varname"=>"Cto", "name" => "Cto", "autoInc" => "0");
$dalTabletickets["Spliter"] = array("type"=>3,"varname"=>"Spliter", "name" => "Spliter", "autoInc" => "0");
$dalTabletickets["Cable"] = array("type"=>3,"varname"=>"Cable", "name" => "Cable", "autoInc" => "0");
$dalTabletickets["Foto_Daño"] = array("type"=>128,"varname"=>"Foto_Da_o", "name" => "Foto_Daño", "autoInc" => "0");
$dalTabletickets["Foto_Solucion"] = array("type"=>128,"varname"=>"Foto_Solucion", "name" => "Foto_Solucion", "autoInc" => "0");
$dalTabletickets["Hora_Inicio"] = array("type"=>134,"varname"=>"Hora_Inicio", "name" => "Hora_Inicio", "autoInc" => "0");
$dalTabletickets["Hora_Final"] = array("type"=>134,"varname"=>"Hora_Final", "name" => "Hora_Final", "autoInc" => "0");
$dalTabletickets["id tickets"]["key"]=true;

$dal_info["mega_ya_at_localhost__tickets"] = &$dalTabletickets;
?>