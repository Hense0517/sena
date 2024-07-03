<?php
$strTableName="Logistica Inversa Para Contratistas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="logistica inversa";

$gstrOrderBy="ORDER BY `Fecha de Entrega` DESC, Id_Logistica DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>