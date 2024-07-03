<?php
$tdataconsultar_ticket_para_modificarlo = array();
$tdataconsultar_ticket_para_modificarlo[".searchableFields"] = array();
$tdataconsultar_ticket_para_modificarlo[".ShortName"] = "consultar_ticket_para_modificarlo";
$tdataconsultar_ticket_para_modificarlo[".OwnerID"] = "";
$tdataconsultar_ticket_para_modificarlo[".OriginalTable"] = "tickets";


$tdataconsultar_ticket_para_modificarlo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsultar_ticket_para_modificarlo[".originalPagesByType"] = $tdataconsultar_ticket_para_modificarlo[".pagesByType"];
$tdataconsultar_ticket_para_modificarlo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsultar_ticket_para_modificarlo[".originalPages"] = $tdataconsultar_ticket_para_modificarlo[".pages"];
$tdataconsultar_ticket_para_modificarlo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsultar_ticket_para_modificarlo[".originalDefaultPages"] = $tdataconsultar_ticket_para_modificarlo[".defaultPages"];

//	field labels
$fieldLabelsconsultar_ticket_para_modificarlo = array();
$fieldToolTipsconsultar_ticket_para_modificarlo = array();
$pageTitlesconsultar_ticket_para_modificarlo = array();
$placeHoldersconsultar_ticket_para_modificarlo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"] = array();
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"] = array();
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"] = array();
	$pageTitlesconsultar_ticket_para_modificarlo["Spanish"] = array();
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["id_tickets"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["id_tickets"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Tickets"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Tickets"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Localidad"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Localidad"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Estado_del_Ticket"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Observaciones"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Observaciones"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Tecnico"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Tecnico"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Empresa"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Empresa"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Tipo_de_Actividad"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Recupera_Cable_"] = "Recupera Cable?";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Recupera_Cable_"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Recupera_Cable_"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Libera_Puerto_"] = "Libera Puerto?";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Libera_Puerto_"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Libera_Puerto_"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Puerto"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Puerto"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Cto"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Cto"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Spliter"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Spliter"] = "";
	$fieldLabelsconsultar_ticket_para_modificarlo["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]["Cable"] = "";
	$placeHoldersconsultar_ticket_para_modificarlo["Spanish"]["Cable"] = "";
	if (count($fieldToolTipsconsultar_ticket_para_modificarlo["Spanish"]))
		$tdataconsultar_ticket_para_modificarlo[".isUseToolTips"] = true;
}





$tdataconsultar_ticket_para_modificarlo[".shortTableName"] = "consultar_ticket_para_modificarlo";
$tdataconsultar_ticket_para_modificarlo[".nSecOptions"] = 0;

$tdataconsultar_ticket_para_modificarlo[".mainTableOwnerID"] = "";
$tdataconsultar_ticket_para_modificarlo[".entityType"] = 1;
$tdataconsultar_ticket_para_modificarlo[".connId"] = "mega_ya_at_localhost";


$tdataconsultar_ticket_para_modificarlo[".strOriginalTableName"] = "tickets";

	



$tdataconsultar_ticket_para_modificarlo[".showAddInPopup"] = false;

$tdataconsultar_ticket_para_modificarlo[".showEditInPopup"] = false;

$tdataconsultar_ticket_para_modificarlo[".showViewInPopup"] = false;

$tdataconsultar_ticket_para_modificarlo[".listAjax"] = false;
//	temporary
//$tdataconsultar_ticket_para_modificarlo[".listAjax"] = false;

	$tdataconsultar_ticket_para_modificarlo[".audit"] = true;

	$tdataconsultar_ticket_para_modificarlo[".locking"] = false;


$pages = $tdataconsultar_ticket_para_modificarlo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsultar_ticket_para_modificarlo[".edit"] = true;
	$tdataconsultar_ticket_para_modificarlo[".afterEditAction"] = 1;
	$tdataconsultar_ticket_para_modificarlo[".closePopupAfterEdit"] = 1;
	$tdataconsultar_ticket_para_modificarlo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsultar_ticket_para_modificarlo[".add"] = true;
$tdataconsultar_ticket_para_modificarlo[".afterAddAction"] = 1;
$tdataconsultar_ticket_para_modificarlo[".closePopupAfterAdd"] = 1;
$tdataconsultar_ticket_para_modificarlo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsultar_ticket_para_modificarlo[".list"] = true;
}



$tdataconsultar_ticket_para_modificarlo[".strSortControlSettingsJSON"] = "";

$tdataconsultar_ticket_para_modificarlo[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataconsultar_ticket_para_modificarlo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsultar_ticket_para_modificarlo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsultar_ticket_para_modificarlo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsultar_ticket_para_modificarlo[".printFriendly"] = true;
}



$tdataconsultar_ticket_para_modificarlo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsultar_ticket_para_modificarlo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsultar_ticket_para_modificarlo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsultar_ticket_para_modificarlo[".isUseAjaxSuggest"] = true;



						

$tdataconsultar_ticket_para_modificarlo[".ajaxCodeSnippetAdded"] = false;

$tdataconsultar_ticket_para_modificarlo[".buttonsAdded"] = false;

$tdataconsultar_ticket_para_modificarlo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultar_ticket_para_modificarlo[".isUseTimeForSearch"] = false;


$tdataconsultar_ticket_para_modificarlo[".badgeColor"] = "5F9EA0";


$tdataconsultar_ticket_para_modificarlo[".allSearchFields"] = array();
$tdataconsultar_ticket_para_modificarlo[".filterFields"] = array();
$tdataconsultar_ticket_para_modificarlo[".requiredSearchFields"] = array();

$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"] = array();
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "id tickets";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Tickets";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Fecha de atencioón";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Localidad";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Estado del Ticket";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Observaciones";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Tecnico";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Empresa";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Tipo de Actividad";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Recupera_Cable?";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Libera_Puerto?";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Puerto";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Cto";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Spliter";
$tdataconsultar_ticket_para_modificarlo[".googleLikeFields"][] = "Cable";



$tdataconsultar_ticket_para_modificarlo[".tableType"] = "list";

$tdataconsultar_ticket_para_modificarlo[".printerPageOrientation"] = 0;
$tdataconsultar_ticket_para_modificarlo[".nPrinterPageScale"] = 100;

$tdataconsultar_ticket_para_modificarlo[".nPrinterSplitRecords"] = 40;

$tdataconsultar_ticket_para_modificarlo[".geocodingEnabled"] = true;
$tdataconsultar_ticket_para_modificarlo[".geocodingData"] = array();
$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["latField"] = "Latitud";
$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["lngField"] = "Longitud";
$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["addressFields"] = array();
	$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["addressFields"][] = "Direccion";
	$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["addressFields"][] = "Latitud";
	$tdataconsultar_ticket_para_modificarlo[".geocodingData"]["addressFields"][] = "Longitud";




$tdataconsultar_ticket_para_modificarlo[".isDisplayLoading"] = true;


$tdataconsultar_ticket_para_modificarlo[".searchIsRequiredForFilters"] = true;

$tdataconsultar_ticket_para_modificarlo[".noRecordsFirstPage"] = true;



$tdataconsultar_ticket_para_modificarlo[".pageSize"] = 20;

$tdataconsultar_ticket_para_modificarlo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC";
$tdataconsultar_ticket_para_modificarlo[".strOrderBy"] = $tstrOrderBy;

$tdataconsultar_ticket_para_modificarlo[".orderindexes"] = array();
	$tdataconsultar_ticket_para_modificarlo[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");



$tdataconsultar_ticket_para_modificarlo[".sqlHead"] = "SELECT `id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Recupera_Cable?`,  `Libera_Puerto?`,  Puerto,  Cto,  Spliter,  Cable";
$tdataconsultar_ticket_para_modificarlo[".sqlFrom"] = "FROM tickets";
$tdataconsultar_ticket_para_modificarlo[".sqlWhereExpr"] = "";
$tdataconsultar_ticket_para_modificarlo[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataconsultar_ticket_para_modificarlo[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultar_ticket_para_modificarlo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultar_ticket_para_modificarlo[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultar_ticket_para_modificarlo[".highlightSearchResults"] = true;

$tableKeysconsultar_ticket_para_modificarlo = array();
$tableKeysconsultar_ticket_para_modificarlo[] = "id tickets";
$tdataconsultar_ticket_para_modificarlo[".Keys"] = $tableKeysconsultar_ticket_para_modificarlo;


$tdataconsultar_ticket_para_modificarlo[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","id_tickets");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id tickets";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id tickets`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["id tickets"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Tickets");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tickets";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tickets";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
		$edata["insertNull"] = true;

	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% Este Ticket ya existe.", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Tickets"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Fecha_de_atencio_n");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de atencioón";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de atencioón`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Fecha de atencioón"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Localidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidades";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Id Licalidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Localidad";

	

	
	$edata["LookupOrderBy"] = "Localidad";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Localidad"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Estado_del_Ticket");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado del Ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado del Ticket`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Asignado";
	$edata["LookupValues"][] = "Cancelado";
	$edata["LookupValues"][] = "Finalizado";
	$edata["LookupValues"][] = "Pendiente";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Estado del Ticket"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 50;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Observaciones"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Tecnico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tecnico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tecnico";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usuarios";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Cedula";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nombre y Apellido";

	

	
	$edata["LookupOrderBy"] = "Nombre y Apellido";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Tecnico"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Empresa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Empresa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "empresas";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idempresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Empresa";

	

	
	$edata["LookupOrderBy"] = "Empresa";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Empresa"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Cedula_nit_Cliente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula/nit-Cliente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cedula/nit-Cliente`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Cedula/nit-Cliente"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Tipo_de_Actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo de Actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo de Actividad`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Mantenimiento";
	$edata["LookupValues"][] = "Daño Masivo";
	$edata["LookupValues"][] = "Instalación";
	$edata["LookupValues"][] = "Legalización";
	$edata["LookupValues"][] = "Preventivo";
	$edata["LookupValues"][] = "Retiro Exitoso";
	$edata["LookupValues"][] = "Retiro No Exitoso";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Tipo de Actividad"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Tipo de Actividad";
//	Recupera_Cable?
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Recupera_Cable?";
	$fdata["GoodName"] = "Recupera_Cable_";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Recupera_Cable_");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Recupera_Cable?";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Recupera_Cable?`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Recupera_Cable?"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Recupera_Cable?";
//	Libera_Puerto?
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Libera_Puerto?";
	$fdata["GoodName"] = "Libera_Puerto_";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Libera_Puerto_");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Libera_Puerto?";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Libera_Puerto?`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Libera_Puerto?"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Libera_Puerto?";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Puerto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Puerto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puerto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Puerto"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Cto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Cto"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Spliter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Spliter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Spliter";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Spliter"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Consultar_Ticket_Para_Modificarlo","Cable");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cable";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsultar_ticket_para_modificarlo["Cable"] = $fdata;
		$tdataconsultar_ticket_para_modificarlo[".searchableFields"][] = "Cable";


$tables_data["Consultar Ticket Para Modificarlo"]=&$tdataconsultar_ticket_para_modificarlo;
$field_labels["Consultar_Ticket_Para_Modificarlo"] = &$fieldLabelsconsultar_ticket_para_modificarlo;
$fieldToolTips["Consultar_Ticket_Para_Modificarlo"] = &$fieldToolTipsconsultar_ticket_para_modificarlo;
$placeHolders["Consultar_Ticket_Para_Modificarlo"] = &$placeHoldersconsultar_ticket_para_modificarlo;
$page_titles["Consultar_Ticket_Para_Modificarlo"] = &$pageTitlesconsultar_ticket_para_modificarlo;


changeTextControlsToDate( "Consultar Ticket Para Modificarlo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consultar Ticket Para Modificarlo"] = array();
//	ingreso de equipo
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ingreso de equipo";
		$detailsParam["dOriginalTable"] = "ingreso de equipo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ingreso_de_equipo";
	$detailsParam["dCaptionTable"] = GetTableCaption("ingreso_de_equipo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tecnico";

				$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="tecnico";
//	logistica inversa
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="logistica inversa";
		$detailsParam["dOriginalTable"] = "logistica inversa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "logistica_inversa";
	$detailsParam["dCaptionTable"] = GetTableCaption("logistica_inversa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Tipo de Tramite";
//	ingreso de materiales
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ingreso de materiales";
		$detailsParam["dOriginalTable"] = "ingreso de materiales";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ingreso_de_materiales";
	$detailsParam["dCaptionTable"] = GetTableCaption("ingreso_de_materiales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Consultar Ticket Para Modificarlo"][$dIndex]["detailKeys"][]="Tipo de Actividad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consultar Ticket Para Modificarlo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consultar_ticket_para_modificarlo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Recupera_Cable?`,  `Libera_Puerto?`,  Puerto,  Cto,  Spliter,  Cable";
$proto0["m_strFrom"] = "FROM tickets";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de atencioón` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto8["m_sql"] = "Tickets";
$proto8["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto12["m_sql"] = "Localidad";
$proto12["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto18["m_sql"] = "Tecnico";
$proto18["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Recupera_Cable?",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto26["m_sql"] = "`Recupera_Cable?`";
$proto26["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Libera_Puerto?",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto28["m_sql"] = "`Libera_Puerto?`";
$proto28["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto30["m_sql"] = "Puerto";
$proto30["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto32["m_sql"] = "Cto";
$proto32["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto34["m_sql"] = "Spliter";
$proto34["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto36["m_sql"] = "Cable";
$proto36["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "tickets";
$proto39["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id tickets";
$proto39["m_columns"][] = "Tickets";
$proto39["m_columns"][] = "Fecha de atencioón";
$proto39["m_columns"][] = "Localidad";
$proto39["m_columns"][] = "Estado del Ticket";
$proto39["m_columns"][] = "Observaciones";
$proto39["m_columns"][] = "Tecnico";
$proto39["m_columns"][] = "Empresa";
$proto39["m_columns"][] = "Cedula/nit-Cliente";
$proto39["m_columns"][] = "Tipo de Actividad";
$proto39["m_columns"][] = "Acta";
$proto39["m_columns"][] = "Recupera_Cable?";
$proto39["m_columns"][] = "Libera_Puerto?";
$proto39["m_columns"][] = "Puerto";
$proto39["m_columns"][] = "Cto";
$proto39["m_columns"][] = "Spliter";
$proto39["m_columns"][] = "Cable";
$proto39["m_columns"][] = "Foto_Daño";
$proto39["m_columns"][] = "Foto_Solucion";
$proto39["m_columns"][] = "Hora_Inicio";
$proto39["m_columns"][] = "Hora_Final";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "tickets";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Consultar Ticket Para Modificarlo";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Consultar Ticket Para Modificarlo"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Consultar Ticket Para Modificarlo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultar_ticket_para_modificarlo = createSqlQuery_consultar_ticket_para_modificarlo();


	
												;

																

$tdataconsultar_ticket_para_modificarlo[".sqlquery"] = $queryData_consultar_ticket_para_modificarlo;



$tdataconsultar_ticket_para_modificarlo[".hasEvents"] = false;

?>