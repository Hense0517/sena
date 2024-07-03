<?php
$tdatamantenimientos = array();
$tdatamantenimientos[".searchableFields"] = array();
$tdatamantenimientos[".ShortName"] = "mantenimientos";
$tdatamantenimientos[".OwnerID"] = "Tecnico";
$tdatamantenimientos[".OriginalTable"] = "tickets";


$tdatamantenimientos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\",\"add1\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamantenimientos[".originalPagesByType"] = $tdatamantenimientos[".pagesByType"];
$tdatamantenimientos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\",\"add1\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamantenimientos[".originalPages"] = $tdatamantenimientos[".pages"];
$tdatamantenimientos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamantenimientos[".originalDefaultPages"] = $tdatamantenimientos[".defaultPages"];

//	field labels
$fieldLabelsmantenimientos = array();
$fieldToolTipsmantenimientos = array();
$pageTitlesmantenimientos = array();
$placeHoldersmantenimientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmantenimientos["Spanish"] = array();
	$fieldToolTipsmantenimientos["Spanish"] = array();
	$placeHoldersmantenimientos["Spanish"] = array();
	$pageTitlesmantenimientos["Spanish"] = array();
	$fieldLabelsmantenimientos["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipsmantenimientos["Spanish"]["id_tickets"] = "";
	$placeHoldersmantenimientos["Spanish"]["id_tickets"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipsmantenimientos["Spanish"]["Tickets"] = "";
	$placeHoldersmantenimientos["Spanish"]["Tickets"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipsmantenimientos["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHoldersmantenimientos["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmantenimientos["Spanish"]["Localidad"] = "";
	$placeHoldersmantenimientos["Spanish"]["Localidad"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipsmantenimientos["Spanish"]["Estado_del_Ticket"] = "";
	$placeHoldersmantenimientos["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsmantenimientos["Spanish"]["Observaciones"] = "";
	$placeHoldersmantenimientos["Spanish"]["Observaciones"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsmantenimientos["Spanish"]["Tecnico"] = "";
	$placeHoldersmantenimientos["Spanish"]["Tecnico"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsmantenimientos["Spanish"]["Empresa"] = "";
	$placeHoldersmantenimientos["Spanish"]["Empresa"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipsmantenimientos["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHoldersmantenimientos["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsmantenimientos["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersmantenimientos["Spanish"]["Tipo_de_Actividad"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Foto_Da_o"] = "Foto Daño";
	$fieldToolTipsmantenimientos["Spanish"]["Foto_Da_o"] = "";
	$placeHoldersmantenimientos["Spanish"]["Foto_Da_o"] = "";
	$fieldLabelsmantenimientos["Spanish"]["Foto_Solucion"] = "Foto Solucion";
	$fieldToolTipsmantenimientos["Spanish"]["Foto_Solucion"] = "";
	$placeHoldersmantenimientos["Spanish"]["Foto_Solucion"] = "";
	if (count($fieldToolTipsmantenimientos["Spanish"]))
		$tdatamantenimientos[".isUseToolTips"] = true;
}


	$tdatamantenimientos[".NCSearch"] = true;



$tdatamantenimientos[".shortTableName"] = "mantenimientos";
$tdatamantenimientos[".nSecOptions"] = 1;

$tdatamantenimientos[".mainTableOwnerID"] = "Tecnico";
$tdatamantenimientos[".entityType"] = 1;
$tdatamantenimientos[".connId"] = "mega_ya_at_localhost";


$tdatamantenimientos[".strOriginalTableName"] = "tickets";

	



$tdatamantenimientos[".showAddInPopup"] = false;

$tdatamantenimientos[".showEditInPopup"] = false;

$tdatamantenimientos[".showViewInPopup"] = false;

$tdatamantenimientos[".listAjax"] = false;
//	temporary
//$tdatamantenimientos[".listAjax"] = false;

	$tdatamantenimientos[".audit"] = true;

	$tdatamantenimientos[".locking"] = false;


$pages = $tdatamantenimientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamantenimientos[".edit"] = true;
	$tdatamantenimientos[".afterEditAction"] = 1;
	$tdatamantenimientos[".closePopupAfterEdit"] = 1;
	$tdatamantenimientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamantenimientos[".add"] = true;
$tdatamantenimientos[".afterAddAction"] = 1;
$tdatamantenimientos[".closePopupAfterAdd"] = 1;
$tdatamantenimientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamantenimientos[".list"] = true;
}



$tdatamantenimientos[".strSortControlSettingsJSON"] = "";

$tdatamantenimientos[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatamantenimientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamantenimientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamantenimientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamantenimientos[".printFriendly"] = true;
}



$tdatamantenimientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamantenimientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamantenimientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamantenimientos[".isUseAjaxSuggest"] = true;



						

$tdatamantenimientos[".ajaxCodeSnippetAdded"] = false;

$tdatamantenimientos[".buttonsAdded"] = false;

$tdatamantenimientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamantenimientos[".isUseTimeForSearch"] = false;


$tdatamantenimientos[".badgeColor"] = "CFAE83";


$tdatamantenimientos[".allSearchFields"] = array();
$tdatamantenimientos[".filterFields"] = array();
$tdatamantenimientos[".requiredSearchFields"] = array();

$tdatamantenimientos[".googleLikeFields"] = array();
$tdatamantenimientos[".googleLikeFields"][] = "Tickets";
$tdatamantenimientos[".googleLikeFields"][] = "Fecha de atencioón";
$tdatamantenimientos[".googleLikeFields"][] = "Localidad";
$tdatamantenimientos[".googleLikeFields"][] = "Estado del Ticket";
$tdatamantenimientos[".googleLikeFields"][] = "Observaciones";
$tdatamantenimientos[".googleLikeFields"][] = "Tecnico";
$tdatamantenimientos[".googleLikeFields"][] = "Empresa";
$tdatamantenimientos[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdatamantenimientos[".googleLikeFields"][] = "Tipo de Actividad";



$tdatamantenimientos[".tableType"] = "list";

$tdatamantenimientos[".printerPageOrientation"] = 0;
$tdatamantenimientos[".nPrinterPageScale"] = 100;

$tdatamantenimientos[".nPrinterSplitRecords"] = 40;

$tdatamantenimientos[".geocodingEnabled"] = true;
$tdatamantenimientos[".geocodingData"] = array();
$tdatamantenimientos[".geocodingData"]["latField"] = "Latitud";
$tdatamantenimientos[".geocodingData"]["lngField"] = "Longitud";
$tdatamantenimientos[".geocodingData"]["addressFields"] = array();
	$tdatamantenimientos[".geocodingData"]["addressFields"][] = "Direccion";
	$tdatamantenimientos[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatamantenimientos[".geocodingData"]["addressFields"][] = "Longitud";




$tdatamantenimientos[".isDisplayLoading"] = true;






$tdatamantenimientos[".pageSize"] = 20;

$tdatamantenimientos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC, `Tipo de Actividad` DESC";
$tdatamantenimientos[".strOrderBy"] = $tstrOrderBy;

$tdatamantenimientos[".orderindexes"] = array();
	$tdatamantenimientos[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");

	$tdatamantenimientos[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "`Tipo de Actividad`");



$tdatamantenimientos[".sqlHead"] = "SELECT `id tickets`,  `Tickets`,  `Fecha de atencioón`,  `Localidad`,  `Estado del Ticket`,  `Observaciones`,  `Tecnico`,  `Empresa`,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Foto_Daño`,  `Foto_Solucion`";
$tdatamantenimientos[".sqlFrom"] = "FROM `tickets`";
$tdatamantenimientos[".sqlWhereExpr"] = "(`Tipo de Actividad` like'M%')";
$tdatamantenimientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamantenimientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamantenimientos[".arrGroupsPerPage"] = $arrGPP;

$tdatamantenimientos[".highlightSearchResults"] = true;

$tableKeysmantenimientos = array();
$tableKeysmantenimientos[] = "id tickets";
$tdatamantenimientos[".Keys"] = $tableKeysmantenimientos;


$tdatamantenimientos[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","id_tickets");
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


	$tdatamantenimientos["id tickets"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Tickets");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tickets";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tickets`";

	
	
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


	$tdatamantenimientos["Tickets"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Fecha_de_atencio_n");
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


	$tdatamantenimientos["Fecha de atencioón"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Localidad`";

	
	
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


	$tdatamantenimientos["Localidad"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Estado_del_Ticket");
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


	$tdatamantenimientos["Estado del Ticket"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Observaciones`";

	
	
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


	$tdatamantenimientos["Observaciones"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Tecnico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tecnico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tecnico`";

	
	
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


	$tdatamantenimientos["Tecnico"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Empresa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Empresa`";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamantenimientos["Empresa"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Cedula_nit_Cliente");
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


	$tdatamantenimientos["Cedula/nit-Cliente"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Tipo_de_Actividad");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamantenimientos["Tipo de Actividad"] = $fdata;
		$tdatamantenimientos[".searchableFields"][] = "Tipo de Actividad";
//	Foto_Daño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Foto_Daño";
	$fdata["GoodName"] = "Foto_Da_o";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Foto_Da_o");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto_Daño";

		$fdata["sourceSingle"] = "Foto_Daño";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto_Daño`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatamantenimientos["Foto_Daño"] = $fdata;
	//	Foto_Solucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Foto_Solucion";
	$fdata["GoodName"] = "Foto_Solucion";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Mantenimientos","Foto_Solucion");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto_Solucion";

		$fdata["sourceSingle"] = "Foto_Solucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto_Solucion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatamantenimientos["Foto_Solucion"] = $fdata;
	

$tables_data["Mantenimientos"]=&$tdatamantenimientos;
$field_labels["Mantenimientos"] = &$fieldLabelsmantenimientos;
$fieldToolTips["Mantenimientos"] = &$fieldToolTipsmantenimientos;
$placeHolders["Mantenimientos"] = &$placeHoldersmantenimientos;
$page_titles["Mantenimientos"] = &$pageTitlesmantenimientos;


changeTextControlsToDate( "Mantenimientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mantenimientos"] = array();
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


		
	$detailsTablesData["Mantenimientos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Empresa";

				$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="tecnico";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Empresa";
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


		
	$detailsTablesData["Mantenimientos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Tipo de Actividad";
//	logistica inversa
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="logistica inversa";
		$detailsParam["dOriginalTable"] = "logistica inversa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "logistica_inversa";
	$detailsParam["dCaptionTable"] = GetTableCaption("logistica_inversa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Mantenimientos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Mantenimientos"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Mantenimientos"][$dIndex]["detailKeys"][]="Tipo de Tramite";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mantenimientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mantenimientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  `Tickets`,  `Fecha de atencioón`,  `Localidad`,  `Estado del Ticket`,  `Observaciones`,  `Tecnico`,  `Empresa`,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Foto_Daño`,  `Foto_Solucion`";
$proto0["m_strFrom"] = "FROM `tickets`";
$proto0["m_strWhere"] = "(`Tipo de Actividad` like'M%')";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de atencioón` DESC, `Tipo de Actividad` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Tipo de Actividad` like'M%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like'M%'";
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
	"m_srcTableName" => "Mantenimientos"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "Mantenimientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto8["m_sql"] = "`Tickets`";
$proto8["m_srcTableName"] = "Mantenimientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Mantenimientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto12["m_sql"] = "`Localidad`";
$proto12["m_srcTableName"] = "Mantenimientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "Mantenimientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto16["m_sql"] = "`Observaciones`";
$proto16["m_srcTableName"] = "Mantenimientos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto18["m_sql"] = "`Tecnico`";
$proto18["m_srcTableName"] = "Mantenimientos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto20["m_sql"] = "`Empresa`";
$proto20["m_srcTableName"] = "Mantenimientos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "Mantenimientos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "Mantenimientos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto_Daño",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto26["m_sql"] = "`Foto_Daño`";
$proto26["m_srcTableName"] = "Mantenimientos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto_Solucion",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto28["m_sql"] = "`Foto_Solucion`";
$proto28["m_srcTableName"] = "Mantenimientos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tickets";
$proto31["m_srcTableName"] = "Mantenimientos";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id tickets";
$proto31["m_columns"][] = "Tickets";
$proto31["m_columns"][] = "Fecha de atencioón";
$proto31["m_columns"][] = "Localidad";
$proto31["m_columns"][] = "Estado del Ticket";
$proto31["m_columns"][] = "Observaciones";
$proto31["m_columns"][] = "Tecnico";
$proto31["m_columns"][] = "Empresa";
$proto31["m_columns"][] = "Cedula/nit-Cliente";
$proto31["m_columns"][] = "Tipo de Actividad";
$proto31["m_columns"][] = "Acta";
$proto31["m_columns"][] = "Recupera_Cable?";
$proto31["m_columns"][] = "Libera_Puerto?";
$proto31["m_columns"][] = "Puerto";
$proto31["m_columns"][] = "Cto";
$proto31["m_columns"][] = "Spliter";
$proto31["m_columns"][] = "Cable";
$proto31["m_columns"][] = "Foto_Daño";
$proto31["m_columns"][] = "Foto_Solucion";
$proto31["m_columns"][] = "Hora_Inicio";
$proto31["m_columns"][] = "Hora_Final";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`tickets`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Mantenimientos";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Mantenimientos"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mantenimientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mantenimientos = createSqlQuery_mantenimientos();


	
												;

												

$tdatamantenimientos[".sqlquery"] = $queryData_mantenimientos;



$tdatamantenimientos[".hasEvents"] = false;

?>