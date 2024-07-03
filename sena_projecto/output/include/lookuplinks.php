<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["reporte_de_material_gastado.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["reporte_de_material_gastado.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["reporte_de_material_gastado.Tecnico"]["search"] = array("table" => "Reporte de Material Gastado", "field" => "Tecnico", "page" => "search");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["reporte_de_material_gastado.Material"] )) {
			$lookupTableLinks["materiales"]["reporte_de_material_gastado.Material"] = array();
		}
		$lookupTableLinks["materiales"]["reporte_de_material_gastado.Material"]["search"] = array("table" => "Reporte de Material Gastado", "field" => "Material", "page" => "search");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["reporte_de_material_gastado.Empresa"] )) {
			$lookupTableLinks["empresas"]["reporte_de_material_gastado.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["reporte_de_material_gastado.Empresa"]["search"] = array("table" => "Reporte de Material Gastado", "field" => "Empresa", "page" => "search");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["informe_de_tickets.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["informe_de_tickets.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["informe_de_tickets.Tecnico"]["search"] = array("table" => "Informe de Tickets", "field" => "Tecnico", "page" => "search");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["informe_de_tickets.Localidad"] )) {
			$lookupTableLinks["localidades"]["informe_de_tickets.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["informe_de_tickets.Localidad"]["search"] = array("table" => "Informe de Tickets", "field" => "Localidad", "page" => "search");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["informe_de_tickets.Empresa"] )) {
			$lookupTableLinks["empresas"]["informe_de_tickets.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["informe_de_tickets.Empresa"]["search"] = array("table" => "Informe de Tickets", "field" => "Empresa", "page" => "search");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["tickets.Localidad"] )) {
			$lookupTableLinks["localidades"]["tickets.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["tickets.Localidad"]["edit"] = array("table" => "tickets", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["tickets.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["tickets.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["tickets.Tecnico"]["edit"] = array("table" => "tickets", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["tickets.Empresa"] )) {
			$lookupTableLinks["empresas"]["tickets.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["tickets.Empresa"]["edit"] = array("table" => "tickets", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["ingreso de equipo"] ) ) {
			$lookupTableLinks["ingreso de equipo"] = array();
		}
		if( !isset( $lookupTableLinks["ingreso de equipo"]["ingreso_de_equipo.Serial"] )) {
			$lookupTableLinks["ingreso de equipo"]["ingreso_de_equipo.Serial"] = array();
		}
		$lookupTableLinks["ingreso de equipo"]["ingreso_de_equipo.Serial"]["edit"] = array("table" => "ingreso de equipo", "field" => "Serial", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["ingreso_de_equipo.tecnico"] )) {
			$lookupTableLinks["usuarios"]["ingreso_de_equipo.tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["ingreso_de_equipo.tecnico"]["edit"] = array("table" => "ingreso de equipo", "field" => "tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["ingreso_de_equipo.Empresa"] )) {
			$lookupTableLinks["empresas"]["ingreso_de_equipo.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["ingreso_de_equipo.Empresa"]["edit"] = array("table" => "ingreso de equipo", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["ingreso_de_materiales.Material"] )) {
			$lookupTableLinks["materiales"]["ingreso_de_materiales.Material"] = array();
		}
		$lookupTableLinks["materiales"]["ingreso_de_materiales.Material"]["edit"] = array("table" => "ingreso de materiales", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["tickets"] ) ) {
			$lookupTableLinks["tickets"] = array();
		}
		if( !isset( $lookupTableLinks["tickets"]["ingreso_de_materiales.Ticket"] )) {
			$lookupTableLinks["tickets"]["ingreso_de_materiales.Ticket"] = array();
		}
		$lookupTableLinks["tickets"]["ingreso_de_materiales.Ticket"]["edit"] = array("table" => "ingreso de materiales", "field" => "Ticket", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["ingreso_de_materiales.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["ingreso_de_materiales.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["ingreso_de_materiales.Tecnico"]["edit"] = array("table" => "ingreso de materiales", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["ingreso_de_materiales.Empresa"] )) {
			$lookupTableLinks["empresas"]["ingreso_de_materiales.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["ingreso_de_materiales.Empresa"]["edit"] = array("table" => "ingreso de materiales", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["gasto_general_de_materiales.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["gasto_general_de_materiales.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["gasto_general_de_materiales.Tecnico"]["search"] = array("table" => "Gasto general de materiales", "field" => "Tecnico", "page" => "search");
		if( !isset( $lookupTableLinks["tickets"] ) ) {
			$lookupTableLinks["tickets"] = array();
		}
		if( !isset( $lookupTableLinks["tickets"]["gasto_general_de_materiales.Ticket"] )) {
			$lookupTableLinks["tickets"]["gasto_general_de_materiales.Ticket"] = array();
		}
		$lookupTableLinks["tickets"]["gasto_general_de_materiales.Ticket"]["search"] = array("table" => "Gasto general de materiales", "field" => "Ticket", "page" => "search");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["gasto_general_de_materiales.Material"] )) {
			$lookupTableLinks["materiales"]["gasto_general_de_materiales.Material"] = array();
		}
		$lookupTableLinks["materiales"]["gasto_general_de_materiales.Material"]["search"] = array("table" => "Gasto general de materiales", "field" => "Material", "page" => "search");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["cargue_de_materiales.Material"] )) {
			$lookupTableLinks["materiales"]["cargue_de_materiales.Material"] = array();
		}
		$lookupTableLinks["materiales"]["cargue_de_materiales.Material"]["edit"] = array("table" => "cargue de materiales", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["cargue_de_materiales.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["cargue_de_materiales.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["cargue_de_materiales.Tecnico"]["edit"] = array("table" => "cargue de materiales", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_de_materiales.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_de_materiales.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_de_materiales.Empresa"]["edit"] = array("table" => "cargue de materiales", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["cargue_de_materiales.Bodega"] )) {
			$lookupTableLinks["usuarios"]["cargue_de_materiales.Bodega"] = array();
		}
		$lookupTableLinks["usuarios"]["cargue_de_materiales.Bodega"]["edit"] = array("table" => "cargue de materiales", "field" => "Bodega", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["equipos_libres.tecnico"] )) {
			$lookupTableLinks["usuarios"]["equipos_libres.tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["equipos_libres.tecnico"]["edit"] = array("table" => "Equipos Libres", "field" => "tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["logistica_inversa.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["logistica_inversa.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["logistica_inversa.Tecnico"]["edit"] = array("table" => "logistica inversa", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["logistica_inversa.Empresa"] )) {
			$lookupTableLinks["empresas"]["logistica_inversa.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["logistica_inversa.Empresa"]["edit"] = array("table" => "logistica inversa", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["inventario__general.Material"] )) {
			$lookupTableLinks["materiales"]["inventario__general.Material"] = array();
		}
		$lookupTableLinks["materiales"]["inventario__general.Material"]["edit"] = array("table" => "inventario_ general", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["inventario__general.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["inventario__general.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["inventario__general.Tecnico"]["edit"] = array("table" => "inventario_ general", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["inventario__general.Empresa"] )) {
			$lookupTableLinks["empresas"]["inventario__general.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["inventario__general.Empresa"]["edit"] = array("table" => "inventario_ general", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["inventario__general_consulta.Material"] )) {
			$lookupTableLinks["materiales"]["inventario__general_consulta.Material"] = array();
		}
		$lookupTableLinks["materiales"]["inventario__general_consulta.Material"]["edit"] = array("table" => "inventario_ general_consulta", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["inventario__general_consulta.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["inventario__general_consulta.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["inventario__general_consulta.Tecnico"]["edit"] = array("table" => "inventario_ general_consulta", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["onts_cargadas.tecnico"] )) {
			$lookupTableLinks["usuarios"]["onts_cargadas.tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["onts_cargadas.tecnico"]["edit"] = array("table" => "Onts Cargadas", "field" => "tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["onts_cargadas.Empresa"] )) {
			$lookupTableLinks["empresas"]["onts_cargadas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["onts_cargadas.Empresa"]["edit"] = array("table" => "Onts Cargadas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["instalaciones.Localidad"] )) {
			$lookupTableLinks["localidades"]["instalaciones.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["instalaciones.Localidad"]["edit"] = array("table" => "Instalaciones", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["instalaciones.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["instalaciones.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["instalaciones.Tecnico"]["edit"] = array("table" => "Instalaciones", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["instalaciones.Empresa"] )) {
			$lookupTableLinks["empresas"]["instalaciones.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["instalaciones.Empresa"]["edit"] = array("table" => "Instalaciones", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["mantenimientos.Localidad"] )) {
			$lookupTableLinks["localidades"]["mantenimientos.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["mantenimientos.Localidad"]["edit"] = array("table" => "Mantenimientos", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["mantenimientos.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["mantenimientos.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["mantenimientos.Tecnico"]["edit"] = array("table" => "Mantenimientos", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["mantenimientos.Empresa"] )) {
			$lookupTableLinks["empresas"]["mantenimientos.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["mantenimientos.Empresa"]["edit"] = array("table" => "Mantenimientos", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["equipos_entregados_a_bodega.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["equipos_entregados_a_bodega.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["equipos_entregados_a_bodega.Tecnico"]["edit"] = array("table" => "Equipos Entregados a Bodega", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["equipos_entregados_a_bodega.Empresa"] )) {
			$lookupTableLinks["empresas"]["equipos_entregados_a_bodega.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["equipos_entregados_a_bodega.Empresa"]["edit"] = array("table" => "Equipos Entregados a Bodega", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["retiros.Localidad"] )) {
			$lookupTableLinks["localidades"]["retiros.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["retiros.Localidad"]["edit"] = array("table" => "Retiros", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["retiros.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["retiros.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["retiros.Tecnico"]["edit"] = array("table" => "Retiros", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["retiros.Empresa"] )) {
			$lookupTableLinks["empresas"]["retiros.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["retiros.Empresa"]["edit"] = array("table" => "Retiros", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["logistica_inversa_para_admin.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["logistica_inversa_para_admin.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["logistica_inversa_para_admin.Tecnico"]["edit"] = array("table" => "Logistica Inversa Para Admin", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["logistica_inversa_para_admin.Empresa"] )) {
			$lookupTableLinks["empresas"]["logistica_inversa_para_admin.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["logistica_inversa_para_admin.Empresa"]["edit"] = array("table" => "Logistica Inversa Para Admin", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["equipos_sin_entregar_a_bodega.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["equipos_sin_entregar_a_bodega.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["equipos_sin_entregar_a_bodega.Tecnico"]["edit"] = array("table" => "Equipos sin entregar a Bodega", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["equipos_sin_entregar_a_bodega.Empresa"] )) {
			$lookupTableLinks["empresas"]["equipos_sin_entregar_a_bodega.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["equipos_sin_entregar_a_bodega.Empresa"]["edit"] = array("table" => "Equipos sin entregar a Bodega", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["material_reintegrado_a_bodega1.Material"] )) {
			$lookupTableLinks["materiales"]["material_reintegrado_a_bodega1.Material"] = array();
		}
		$lookupTableLinks["materiales"]["material_reintegrado_a_bodega1.Material"]["edit"] = array("table" => "Material Reintegrado a Bodega", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["material_reintegrado_a_bodega1.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["material_reintegrado_a_bodega1.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["material_reintegrado_a_bodega1.Tecnico"]["edit"] = array("table" => "Material Reintegrado a Bodega", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["material_reintegrado_a_bodega1.Empresa"] )) {
			$lookupTableLinks["empresas"]["material_reintegrado_a_bodega1.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["material_reintegrado_a_bodega1.Empresa"]["edit"] = array("table" => "Material Reintegrado a Bodega", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["material_recuperado.Material"] )) {
			$lookupTableLinks["materiales"]["material_recuperado.Material"] = array();
		}
		$lookupTableLinks["materiales"]["material_recuperado.Material"]["edit"] = array("table" => "Material Recuperado", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["tickets"] ) ) {
			$lookupTableLinks["tickets"] = array();
		}
		if( !isset( $lookupTableLinks["tickets"]["material_recuperado.Ticket"] )) {
			$lookupTableLinks["tickets"]["material_recuperado.Ticket"] = array();
		}
		$lookupTableLinks["tickets"]["material_recuperado.Ticket"]["edit"] = array("table" => "Material Recuperado", "field" => "Ticket", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["material_recuperado.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["material_recuperado.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["material_recuperado.Tecnico"]["edit"] = array("table" => "Material Recuperado", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["material_recuperado.Empresa"] )) {
			$lookupTableLinks["empresas"]["material_recuperado.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["material_recuperado.Empresa"]["edit"] = array("table" => "Material Recuperado", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["admin_members.Empresa"] )) {
			$lookupTableLinks["empresas"]["admin_members.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["admin_members.Empresa"]["edit"] = array("table" => "admin_members", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["admin_users.Empresa"] )) {
			$lookupTableLinks["empresas"]["admin_users.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["admin_users.Empresa"]["edit"] = array("table" => "admin_users", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["cargue_material_a_bodega.Material"] )) {
			$lookupTableLinks["materiales"]["cargue_material_a_bodega.Material"] = array();
		}
		$lookupTableLinks["materiales"]["cargue_material_a_bodega.Material"]["edit"] = array("table" => "Cargue Material A Bodega", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["Bodegas"] ) ) {
			$lookupTableLinks["Bodegas"] = array();
		}
		if( !isset( $lookupTableLinks["Bodegas"]["cargue_material_a_bodega.Tecnico"] )) {
			$lookupTableLinks["Bodegas"]["cargue_material_a_bodega.Tecnico"] = array();
		}
		$lookupTableLinks["Bodegas"]["cargue_material_a_bodega.Tecnico"]["edit"] = array("table" => "Cargue Material A Bodega", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_material_a_bodega.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_material_a_bodega.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_material_a_bodega.Empresa"]["edit"] = array("table" => "Cargue Material A Bodega", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["bodegas.Empresa"] )) {
			$lookupTableLinks["empresas"]["bodegas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["bodegas.Empresa"]["edit"] = array("table" => "Bodegas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["bodegas_contratista.Empresa"] )) {
			$lookupTableLinks["empresas"]["bodegas_contratista.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["bodegas_contratista.Empresa"]["edit"] = array("table" => "Bodegas Contratista", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos.Material"] )) {
			$lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos.Material"] = array();
		}
		$lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos.Material"]["edit"] = array("table" => "Cargue de Material a Tecnicos", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["cargue_de_material_a_tecnicos.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["cargue_de_material_a_tecnicos.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["cargue_de_material_a_tecnicos.Tecnico"]["edit"] = array("table" => "Cargue de Material a Tecnicos", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos.Empresa"]["edit"] = array("table" => "Cargue de Material a Tecnicos", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["Bodegas"] ) ) {
			$lookupTableLinks["Bodegas"] = array();
		}
		if( !isset( $lookupTableLinks["Bodegas"]["cargue_de_material_a_tecnicos.Bodega"] )) {
			$lookupTableLinks["Bodegas"]["cargue_de_material_a_tecnicos.Bodega"] = array();
		}
		$lookupTableLinks["Bodegas"]["cargue_de_material_a_tecnicos.Bodega"]["edit"] = array("table" => "Cargue de Material a Tecnicos", "field" => "Bodega", "page" => "edit");
		if( !isset( $lookupTableLinks["Usiarios_Contratista"] ) ) {
			$lookupTableLinks["Usiarios_Contratista"] = array();
		}
		if( !isset( $lookupTableLinks["Usiarios_Contratista"]["cargue_de_onts_contratista.tecnico"] )) {
			$lookupTableLinks["Usiarios_Contratista"]["cargue_de_onts_contratista.tecnico"] = array();
		}
		$lookupTableLinks["Usiarios_Contratista"]["cargue_de_onts_contratista.tecnico"]["edit"] = array("table" => "Cargue de Onts Contratista", "field" => "tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_de_onts_contratista.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_de_onts_contratista.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_de_onts_contratista.Empresa"]["edit"] = array("table" => "Cargue de Onts Contratista", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["logistica_inversa_para_contratistas.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["logistica_inversa_para_contratistas.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["logistica_inversa_para_contratistas.Tecnico"]["edit"] = array("table" => "Logistica Inversa Para Contratistas", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["logistica_inversa_para_contratistas.Empresa"] )) {
			$lookupTableLinks["empresas"]["logistica_inversa_para_contratistas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["logistica_inversa_para_contratistas.Empresa"]["edit"] = array("table" => "Logistica Inversa Para Contratistas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["cargue_material_a_bodega_contratistas.Material"] )) {
			$lookupTableLinks["materiales"]["cargue_material_a_bodega_contratistas.Material"] = array();
		}
		$lookupTableLinks["materiales"]["cargue_material_a_bodega_contratistas.Material"]["edit"] = array("table" => "Cargue Material A Bodega Contratistas", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["Bodegas Contratista"] ) ) {
			$lookupTableLinks["Bodegas Contratista"] = array();
		}
		if( !isset( $lookupTableLinks["Bodegas Contratista"]["cargue_material_a_bodega_contratistas.Tecnico"] )) {
			$lookupTableLinks["Bodegas Contratista"]["cargue_material_a_bodega_contratistas.Tecnico"] = array();
		}
		$lookupTableLinks["Bodegas Contratista"]["cargue_material_a_bodega_contratistas.Tecnico"]["edit"] = array("table" => "Cargue Material A Bodega Contratistas", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_material_a_bodega_contratistas.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_material_a_bodega_contratistas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_material_a_bodega_contratistas.Empresa"]["edit"] = array("table" => "Cargue Material A Bodega Contratistas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos_contratistas.Material"] )) {
			$lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos_contratistas.Material"] = array();
		}
		$lookupTableLinks["materiales"]["cargue_de_material_a_tecnicos_contratistas.Material"]["edit"] = array("table" => "Cargue de Material a Tecnicos Contratistas", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["Usiarios_Contratista"] ) ) {
			$lookupTableLinks["Usiarios_Contratista"] = array();
		}
		if( !isset( $lookupTableLinks["Usiarios_Contratista"]["cargue_de_material_a_tecnicos_contratistas.Tecnico"] )) {
			$lookupTableLinks["Usiarios_Contratista"]["cargue_de_material_a_tecnicos_contratistas.Tecnico"] = array();
		}
		$lookupTableLinks["Usiarios_Contratista"]["cargue_de_material_a_tecnicos_contratistas.Tecnico"]["edit"] = array("table" => "Cargue de Material a Tecnicos Contratistas", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos_contratistas.Empresa"] )) {
			$lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos_contratistas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["cargue_de_material_a_tecnicos_contratistas.Empresa"]["edit"] = array("table" => "Cargue de Material a Tecnicos Contratistas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["Bodegas Contratista"] ) ) {
			$lookupTableLinks["Bodegas Contratista"] = array();
		}
		if( !isset( $lookupTableLinks["Bodegas Contratista"]["cargue_de_material_a_tecnicos_contratistas.Bodega"] )) {
			$lookupTableLinks["Bodegas Contratista"]["cargue_de_material_a_tecnicos_contratistas.Bodega"] = array();
		}
		$lookupTableLinks["Bodegas Contratista"]["cargue_de_material_a_tecnicos_contratistas.Bodega"]["edit"] = array("table" => "Cargue de Material a Tecnicos Contratistas", "field" => "Bodega", "page" => "edit");
		if( !isset( $lookupTableLinks["materiales"] ) ) {
			$lookupTableLinks["materiales"] = array();
		}
		if( !isset( $lookupTableLinks["materiales"]["inventario_contratistas.Material"] )) {
			$lookupTableLinks["materiales"]["inventario_contratistas.Material"] = array();
		}
		$lookupTableLinks["materiales"]["inventario_contratistas.Material"]["edit"] = array("table" => "Inventario_Contratistas", "field" => "Material", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["inventario_contratistas.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["inventario_contratistas.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["inventario_contratistas.Tecnico"]["edit"] = array("table" => "Inventario_Contratistas", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["inventario_contratistas.Empresa"] )) {
			$lookupTableLinks["empresas"]["inventario_contratistas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["inventario_contratistas.Empresa"]["edit"] = array("table" => "Inventario_Contratistas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["consultar_ticket_para_modificarlo.Localidad"] )) {
			$lookupTableLinks["localidades"]["consultar_ticket_para_modificarlo.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["consultar_ticket_para_modificarlo.Localidad"]["edit"] = array("table" => "Consultar Ticket Para Modificarlo", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["consultar_ticket_para_modificarlo.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["consultar_ticket_para_modificarlo.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["consultar_ticket_para_modificarlo.Tecnico"]["edit"] = array("table" => "Consultar Ticket Para Modificarlo", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["consultar_ticket_para_modificarlo.Empresa"] )) {
			$lookupTableLinks["empresas"]["consultar_ticket_para_modificarlo.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["consultar_ticket_para_modificarlo.Empresa"]["edit"] = array("table" => "Consultar Ticket Para Modificarlo", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["localidades"] ) ) {
			$lookupTableLinks["localidades"] = array();
		}
		if( !isset( $lookupTableLinks["localidades"]["tickets_contratistas.Localidad"] )) {
			$lookupTableLinks["localidades"]["tickets_contratistas.Localidad"] = array();
		}
		$lookupTableLinks["localidades"]["tickets_contratistas.Localidad"]["edit"] = array("table" => "Tickets_Contratistas", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios"] ) ) {
			$lookupTableLinks["usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios"]["tickets_contratistas.Tecnico"] )) {
			$lookupTableLinks["usuarios"]["tickets_contratistas.Tecnico"] = array();
		}
		$lookupTableLinks["usuarios"]["tickets_contratistas.Tecnico"]["edit"] = array("table" => "Tickets_Contratistas", "field" => "Tecnico", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["tickets_contratistas.Empresa"] )) {
			$lookupTableLinks["empresas"]["tickets_contratistas.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["tickets_contratistas.Empresa"]["edit"] = array("table" => "Tickets_Contratistas", "field" => "Empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["empresas"] ) ) {
			$lookupTableLinks["empresas"] = array();
		}
		if( !isset( $lookupTableLinks["empresas"]["usiarios_contratista.Empresa"] )) {
			$lookupTableLinks["empresas"]["usiarios_contratista.Empresa"] = array();
		}
		$lookupTableLinks["empresas"]["usiarios_contratista.Empresa"]["edit"] = array("table" => "Usiarios_Contratista", "field" => "Empresa", "page" => "edit");
}

?>