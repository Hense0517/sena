<?php
$dalTableempresas = array();
$dalTableempresas["idempresa"] = array("type"=>3,"varname"=>"idempresa", "name" => "idempresa", "autoInc" => "1");
$dalTableempresas["Empresa"] = array("type"=>200,"varname"=>"Empresa", "name" => "Empresa", "autoInc" => "0");
$dalTableempresas["idempresa"]["key"]=true;

$dal_info["mega_ya_at_localhost__empresas"] = &$dalTableempresas;
?>