<?php
$tdatainstalaciones = array();
$tdatainstalaciones[".searchableFields"] = array();
$tdatainstalaciones[".ShortName"] = "instalaciones";
$tdatainstalaciones[".OwnerID"] = "Tecnico";
$tdatainstalaciones[".OriginalTable"] = "tickets";


$tdatainstalaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainstalaciones[".originalPagesByType"] = $tdatainstalaciones[".pagesByType"];
$tdatainstalaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainstalaciones[".originalPages"] = $tdatainstalaciones[".pages"];
$tdatainstalaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainstalaciones[".originalDefaultPages"] = $tdatainstalaciones[".defaultPages"];

//	field labels
$fieldLabelsinstalaciones = array();
$fieldToolTipsinstalaciones = array();
$pageTitlesinstalaciones = array();
$placeHoldersinstalaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinstalaciones["Spanish"] = array();
	$fieldToolTipsinstalaciones["Spanish"] = array();
	$placeHoldersinstalaciones["Spanish"] = array();
	$pageTitlesinstalaciones["Spanish"] = array();
	$fieldLabelsinstalaciones["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipsinstalaciones["Spanish"]["id_tickets"] = "";
	$placeHoldersinstalaciones["Spanish"]["id_tickets"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Tickets"] = "Tickets o Preventa";
	$fieldToolTipsinstalaciones["Spanish"]["Tickets"] = "";
	$placeHoldersinstalaciones["Spanish"]["Tickets"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipsinstalaciones["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHoldersinstalaciones["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsinstalaciones["Spanish"]["Localidad"] = "";
	$placeHoldersinstalaciones["Spanish"]["Localidad"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipsinstalaciones["Spanish"]["Estado_del_Ticket"] = "";
	$placeHoldersinstalaciones["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsinstalaciones["Spanish"]["Observaciones"] = "";
	$placeHoldersinstalaciones["Spanish"]["Observaciones"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsinstalaciones["Spanish"]["Tecnico"] = "";
	$placeHoldersinstalaciones["Spanish"]["Tecnico"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsinstalaciones["Spanish"]["Empresa"] = "";
	$placeHoldersinstalaciones["Spanish"]["Empresa"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipsinstalaciones["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHoldersinstalaciones["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelsinstalaciones["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsinstalaciones["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersinstalaciones["Spanish"]["Tipo_de_Actividad"] = "";
	if (count($fieldToolTipsinstalaciones["Spanish"]))
		$tdatainstalaciones[".isUseToolTips"] = true;
}


	$tdatainstalaciones[".NCSearch"] = true;



$tdatainstalaciones[".shortTableName"] = "instalaciones";
$tdatainstalaciones[".nSecOptions"] = 1;

$tdatainstalaciones[".mainTableOwnerID"] = "Tecnico";
$tdatainstalaciones[".entityType"] = 1;
$tdatainstalaciones[".connId"] = "mega_ya_at_localhost";


$tdatainstalaciones[".strOriginalTableName"] = "tickets";

	



$tdatainstalaciones[".showAddInPopup"] = false;

$tdatainstalaciones[".showEditInPopup"] = false;

$tdatainstalaciones[".showViewInPopup"] = false;

$tdatainstalaciones[".listAjax"] = false;
//	temporary
//$tdatainstalaciones[".listAjax"] = false;

	$tdatainstalaciones[".audit"] = true;

	$tdatainstalaciones[".locking"] = false;


$pages = $tdatainstalaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainstalaciones[".edit"] = true;
	$tdatainstalaciones[".afterEditAction"] = 1;
	$tdatainstalaciones[".closePopupAfterEdit"] = 1;
	$tdatainstalaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainstalaciones[".add"] = true;
$tdatainstalaciones[".afterAddAction"] = 1;
$tdatainstalaciones[".closePopupAfterAdd"] = 1;
$tdatainstalaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainstalaciones[".list"] = true;
}



$tdatainstalaciones[".strSortControlSettingsJSON"] = "";

$tdatainstalaciones[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatainstalaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainstalaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainstalaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainstalaciones[".printFriendly"] = true;
}



$tdatainstalaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainstalaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainstalaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainstalaciones[".isUseAjaxSuggest"] = true;



						

$tdatainstalaciones[".ajaxCodeSnippetAdded"] = false;

$tdatainstalaciones[".buttonsAdded"] = false;

$tdatainstalaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstalaciones[".isUseTimeForSearch"] = false;


$tdatainstalaciones[".badgeColor"] = "7b68ee";


$tdatainstalaciones[".allSearchFields"] = array();
$tdatainstalaciones[".filterFields"] = array();
$tdatainstalaciones[".requiredSearchFields"] = array();

$tdatainstalaciones[".googleLikeFields"] = array();
$tdatainstalaciones[".googleLikeFields"][] = "Tickets";
$tdatainstalaciones[".googleLikeFields"][] = "Fecha de atencioón";
$tdatainstalaciones[".googleLikeFields"][] = "Localidad";
$tdatainstalaciones[".googleLikeFields"][] = "Estado del Ticket";
$tdatainstalaciones[".googleLikeFields"][] = "Observaciones";
$tdatainstalaciones[".googleLikeFields"][] = "Tecnico";
$tdatainstalaciones[".googleLikeFields"][] = "Empresa";
$tdatainstalaciones[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdatainstalaciones[".googleLikeFields"][] = "Tipo de Actividad";



$tdatainstalaciones[".tableType"] = "list";

$tdatainstalaciones[".printerPageOrientation"] = 0;
$tdatainstalaciones[".nPrinterPageScale"] = 100;

$tdatainstalaciones[".nPrinterSplitRecords"] = 40;

$tdatainstalaciones[".geocodingEnabled"] = true;
$tdatainstalaciones[".geocodingData"] = array();
$tdatainstalaciones[".geocodingData"]["latField"] = "Latitud";
$tdatainstalaciones[".geocodingData"]["lngField"] = "Longitud";
$tdatainstalaciones[".geocodingData"]["addressFields"] = array();
	$tdatainstalaciones[".geocodingData"]["addressFields"][] = "Direccion";
	$tdatainstalaciones[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatainstalaciones[".geocodingData"]["addressFields"][] = "Longitud";




$tdatainstalaciones[".isDisplayLoading"] = true;






$tdatainstalaciones[".pageSize"] = 20;

$tdatainstalaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC, `Tipo de Actividad` DESC";
$tdatainstalaciones[".strOrderBy"] = $tstrOrderBy;

$tdatainstalaciones[".orderindexes"] = array();
	$tdatainstalaciones[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");

	$tdatainstalaciones[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "`Tipo de Actividad`");



$tdatainstalaciones[".sqlHead"] = "SELECT `id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`";
$tdatainstalaciones[".sqlFrom"] = "FROM tickets";
$tdatainstalaciones[".sqlWhereExpr"] = "(`Tipo de Actividad` like'I%')";
$tdatainstalaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstalaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstalaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatainstalaciones[".highlightSearchResults"] = true;

$tableKeysinstalaciones = array();
$tableKeysinstalaciones[] = "id tickets";
$tdatainstalaciones[".Keys"] = $tableKeysinstalaciones;


$tdatainstalaciones[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","id_tickets");
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


	$tdatainstalaciones["id tickets"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Tickets");
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


	
	



		$edata["IsRequired"] = true;

		$edata["insertNull"] = true;

	
	
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


	$tdatainstalaciones["Tickets"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Fecha_de_atencio_n");
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


	$tdatainstalaciones["Fecha de atencioón"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Localidad");
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


	$tdatainstalaciones["Localidad"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Estado_del_Ticket");
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


	$tdatainstalaciones["Estado del Ticket"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Observaciones");
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


	$tdatainstalaciones["Observaciones"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Tecnico");
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

				$edata["LookupWhereCode"] = true;


	
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


	$tdatainstalaciones["Tecnico"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Empresa");
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
		$fdata["filterTotalFields"] = "id tickets";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainstalaciones["Empresa"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Cedula_nit_Cliente");
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


	$tdatainstalaciones["Cedula/nit-Cliente"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Instalaciones","Tipo_de_Actividad");
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


	$tdatainstalaciones["Tipo de Actividad"] = $fdata;
		$tdatainstalaciones[".searchableFields"][] = "Tipo de Actividad";


$tables_data["Instalaciones"]=&$tdatainstalaciones;
$field_labels["Instalaciones"] = &$fieldLabelsinstalaciones;
$fieldToolTips["Instalaciones"] = &$fieldToolTipsinstalaciones;
$placeHolders["Instalaciones"] = &$placeHoldersinstalaciones;
$page_titles["Instalaciones"] = &$pageTitlesinstalaciones;


changeTextControlsToDate( "Instalaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Instalaciones"] = array();
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


		
	$detailsTablesData["Instalaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Empresa";

				$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="tecnico";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Empresa";
//	ingreso de materiales
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ingreso de materiales";
		$detailsParam["dOriginalTable"] = "ingreso de materiales";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ingreso_de_materiales";
	$detailsParam["dCaptionTable"] = GetTableCaption("ingreso_de_materiales");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Instalaciones"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Instalaciones"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Instalaciones"][$dIndex]["detailKeys"][]="Tipo de Actividad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Instalaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_instalaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`";
$proto0["m_strFrom"] = "FROM tickets";
$proto0["m_strWhere"] = "(`Tipo de Actividad` like'I%')";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de atencioón` DESC, `Tipo de Actividad` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Tipo de Actividad` like'I%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like'I%'";
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
	"m_srcTableName" => "Instalaciones"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "Instalaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto8["m_sql"] = "Tickets";
$proto8["m_srcTableName"] = "Instalaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Instalaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto12["m_sql"] = "Localidad";
$proto12["m_srcTableName"] = "Instalaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "Instalaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "Instalaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto18["m_sql"] = "Tecnico";
$proto18["m_srcTableName"] = "Instalaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Instalaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "Instalaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "Instalaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tickets";
$proto27["m_srcTableName"] = "Instalaciones";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id tickets";
$proto27["m_columns"][] = "Tickets";
$proto27["m_columns"][] = "Fecha de atencioón";
$proto27["m_columns"][] = "Localidad";
$proto27["m_columns"][] = "Estado del Ticket";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Tecnico";
$proto27["m_columns"][] = "Empresa";
$proto27["m_columns"][] = "Cedula/nit-Cliente";
$proto27["m_columns"][] = "Tipo de Actividad";
$proto27["m_columns"][] = "Acta";
$proto27["m_columns"][] = "Recupera_Cable?";
$proto27["m_columns"][] = "Libera_Puerto?";
$proto27["m_columns"][] = "Puerto";
$proto27["m_columns"][] = "Cto";
$proto27["m_columns"][] = "Spliter";
$proto27["m_columns"][] = "Cable";
$proto27["m_columns"][] = "Foto_Daño";
$proto27["m_columns"][] = "Foto_Solucion";
$proto27["m_columns"][] = "Hora_Inicio";
$proto27["m_columns"][] = "Hora_Final";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tickets";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Instalaciones";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Instalaciones"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Instalaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_instalaciones = createSqlQuery_instalaciones();


	
												;

										

$tdatainstalaciones[".sqlquery"] = $queryData_instalaciones;



$tdatainstalaciones[".hasEvents"] = false;

?>