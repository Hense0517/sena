<?php
$tdatatickets = array();
$tdatatickets[".searchableFields"] = array();
$tdatatickets[".ShortName"] = "tickets";
$tdatatickets[".OwnerID"] = "Tecnico";
$tdatatickets[".OriginalTable"] = "tickets";


$tdatatickets[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatickets[".originalPagesByType"] = $tdatatickets[".pagesByType"];
$tdatatickets[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatickets[".originalPages"] = $tdatatickets[".pages"];
$tdatatickets[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatickets[".originalDefaultPages"] = $tdatatickets[".defaultPages"];

//	field labels
$fieldLabelstickets = array();
$fieldToolTipstickets = array();
$pageTitlestickets = array();
$placeHolderstickets = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets["Spanish"] = array();
	$fieldToolTipstickets["Spanish"] = array();
	$placeHolderstickets["Spanish"] = array();
	$pageTitlestickets["Spanish"] = array();
	$fieldLabelstickets["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipstickets["Spanish"]["id_tickets"] = "";
	$placeHolderstickets["Spanish"]["id_tickets"] = "";
	$fieldLabelstickets["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipstickets["Spanish"]["Tickets"] = "";
	$placeHolderstickets["Spanish"]["Tickets"] = "";
	$fieldLabelstickets["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipstickets["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHolderstickets["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelstickets["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipstickets["Spanish"]["Localidad"] = "";
	$placeHolderstickets["Spanish"]["Localidad"] = "";
	$fieldLabelstickets["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipstickets["Spanish"]["Estado_del_Ticket"] = "";
	$placeHolderstickets["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelstickets["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipstickets["Spanish"]["Observaciones"] = "";
	$placeHolderstickets["Spanish"]["Observaciones"] = "";
	$fieldLabelstickets["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipstickets["Spanish"]["Tecnico"] = "";
	$placeHolderstickets["Spanish"]["Tecnico"] = "";
	$fieldLabelstickets["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipstickets["Spanish"]["Empresa"] = "";
	$placeHolderstickets["Spanish"]["Empresa"] = "";
	$fieldLabelstickets["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipstickets["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHolderstickets["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelstickets["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipstickets["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHolderstickets["Spanish"]["Tipo_de_Actividad"] = "";
	$fieldLabelstickets["Spanish"]["Foto_Da_o"] = "Foto Daño";
	$fieldToolTipstickets["Spanish"]["Foto_Da_o"] = "";
	$placeHolderstickets["Spanish"]["Foto_Da_o"] = "";
	$fieldLabelstickets["Spanish"]["Foto_Solucion"] = "Foto Solucion";
	$fieldToolTipstickets["Spanish"]["Foto_Solucion"] = "";
	$placeHolderstickets["Spanish"]["Foto_Solucion"] = "";
	if (count($fieldToolTipstickets["Spanish"]))
		$tdatatickets[".isUseToolTips"] = true;
}


	$tdatatickets[".NCSearch"] = true;



$tdatatickets[".shortTableName"] = "tickets";
$tdatatickets[".nSecOptions"] = 1;

$tdatatickets[".mainTableOwnerID"] = "Tecnico";
$tdatatickets[".entityType"] = 0;
$tdatatickets[".connId"] = "mega_ya_at_localhost";


$tdatatickets[".strOriginalTableName"] = "tickets";

	



$tdatatickets[".showAddInPopup"] = false;

$tdatatickets[".showEditInPopup"] = false;

$tdatatickets[".showViewInPopup"] = false;

$tdatatickets[".listAjax"] = false;
//	temporary
//$tdatatickets[".listAjax"] = false;

	$tdatatickets[".audit"] = true;

	$tdatatickets[".locking"] = false;


$pages = $tdatatickets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets[".edit"] = true;
	$tdatatickets[".afterEditAction"] = 1;
	$tdatatickets[".closePopupAfterEdit"] = 1;
	$tdatatickets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets[".add"] = true;
$tdatatickets[".afterAddAction"] = 1;
$tdatatickets[".closePopupAfterAdd"] = 1;
$tdatatickets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets[".list"] = true;
}



$tdatatickets[".strSortControlSettingsJSON"] = "";

$tdatatickets[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatickets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets[".printFriendly"] = true;
}



$tdatatickets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets[".isUseAjaxSuggest"] = true;



																		

$tdatatickets[".ajaxCodeSnippetAdded"] = false;

$tdatatickets[".buttonsAdded"] = false;

$tdatatickets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets[".isUseTimeForSearch"] = false;


$tdatatickets[".badgeColor"] = "6b8e23";


$tdatatickets[".allSearchFields"] = array();
$tdatatickets[".filterFields"] = array();
$tdatatickets[".requiredSearchFields"] = array();

$tdatatickets[".googleLikeFields"] = array();
$tdatatickets[".googleLikeFields"][] = "id tickets";
$tdatatickets[".googleLikeFields"][] = "Tickets";
$tdatatickets[".googleLikeFields"][] = "Fecha de atencioón";
$tdatatickets[".googleLikeFields"][] = "Localidad";
$tdatatickets[".googleLikeFields"][] = "Estado del Ticket";
$tdatatickets[".googleLikeFields"][] = "Observaciones";
$tdatatickets[".googleLikeFields"][] = "Tecnico";
$tdatatickets[".googleLikeFields"][] = "Empresa";
$tdatatickets[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdatatickets[".googleLikeFields"][] = "Tipo de Actividad";



$tdatatickets[".tableType"] = "list";

$tdatatickets[".printerPageOrientation"] = 0;
$tdatatickets[".nPrinterPageScale"] = 100;

$tdatatickets[".nPrinterSplitRecords"] = 40;

$tdatatickets[".geocodingEnabled"] = true;
$tdatatickets[".geocodingData"] = array();
$tdatatickets[".geocodingData"]["latField"] = "Latitud";
$tdatatickets[".geocodingData"]["lngField"] = "Longitud";
$tdatatickets[".geocodingData"]["addressFields"] = array();
	$tdatatickets[".geocodingData"]["addressFields"][] = "Direccion";
	$tdatatickets[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatatickets[".geocodingData"]["addressFields"][] = "Longitud";




$tdatatickets[".isDisplayLoading"] = true;






$tdatatickets[".pageSize"] = 20;

$tdatatickets[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC";
$tdatatickets[".strOrderBy"] = $tstrOrderBy;

$tdatatickets[".orderindexes"] = array();
	$tdatatickets[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");



$tdatatickets[".sqlHead"] = "SELECT `id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Foto_Daño`,  Foto_Solucion";
$tdatatickets[".sqlFrom"] = "FROM tickets";
$tdatatickets[".sqlWhereExpr"] = "";
$tdatatickets[".sqlTail"] = "";

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
$tdatatickets[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets[".highlightSearchResults"] = true;

$tableKeystickets = array();
$tableKeystickets[] = "id tickets";
$tdatatickets[".Keys"] = $tableKeystickets;


$tdatatickets[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","id_tickets");
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


	$tdatatickets["id tickets"] = $fdata;
		$tdatatickets[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Tickets");
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatatickets["Tickets"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Fecha_de_atencio_n");
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


	$tdatatickets["Fecha de atencioón"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Localidad");
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


	$tdatatickets["Localidad"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Estado_del_Ticket");
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


	$tdatatickets["Estado del Ticket"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Observaciones");
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


	$tdatatickets["Observaciones"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Tecnico");
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


	$tdatatickets["Tecnico"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Empresa");
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


	$tdatatickets["Empresa"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Cedula_nit_Cliente");
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


	$tdatatickets["Cedula/nit-Cliente"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Tipo_de_Actividad");
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
	$edata["LookupValues"][] = "Retiro";
	$edata["LookupValues"][] = "Gestionado";

	
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


	$tdatatickets["Tipo de Actividad"] = $fdata;
		$tdatatickets[".searchableFields"][] = "Tipo de Actividad";
//	Foto_Daño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Foto_Daño";
	$fdata["GoodName"] = "Foto_Da_o";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Foto_Da_o");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto_Daño";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto_Daño`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
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


	$tdatatickets["Foto_Daño"] = $fdata;
	//	Foto_Solucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Foto_Solucion";
	$fdata["GoodName"] = "Foto_Solucion";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("tickets","Foto_Solucion");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto_Solucion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foto_Solucion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
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


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("bmp");
						$edata["acceptFileTypesHtml"] = ".bmp";
			$edata["acceptFileTypes"][] = strtoupper("gif");
						$edata["acceptFileTypesHtml"] .= ",.gif";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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


	$tdatatickets["Foto_Solucion"] = $fdata;
	

$tables_data["tickets"]=&$tdatatickets;
$field_labels["tickets"] = &$fieldLabelstickets;
$fieldToolTips["tickets"] = &$fieldToolTipstickets;
$placeHolders["tickets"] = &$placeHolderstickets;
$page_titles["tickets"] = &$pageTitlestickets;


changeTextControlsToDate( "tickets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tickets"] = array();
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


		
	$detailsTablesData["tickets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tickets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tecnico";

				$detailsTablesData["tickets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="tecnico";
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


		
	$detailsTablesData["tickets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tickets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["tickets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Tipo de Actividad";
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


		
	$detailsTablesData["tickets"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tickets"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["tickets"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["tickets"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["tickets"][$dIndex]["detailKeys"][]="Tipo de Tramite";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tickets"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="clientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="clientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "clientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tickets"][0] = $masterParams;
				$masterTablesData["tickets"][0]["masterKeys"] = array();
	$masterTablesData["tickets"][0]["masterKeys"][]="cedula";
				$masterTablesData["tickets"][0]["detailKeys"] = array();
	$masterTablesData["tickets"][0]["detailKeys"][]="Cedula/nit-Cliente";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tickets"][1] = $masterParams;
				$masterTablesData["tickets"][1]["masterKeys"] = array();
	$masterTablesData["tickets"][1]["masterKeys"][]="Cedula";
				$masterTablesData["tickets"][1]["detailKeys"] = array();
	$masterTablesData["tickets"][1]["detailKeys"][]="Tecnico";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Foto_Daño`,  Foto_Solucion";
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
	"m_srcTableName" => "tickets"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "tickets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto8["m_sql"] = "Tickets";
$proto8["m_srcTableName"] = "tickets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "tickets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto12["m_sql"] = "Localidad";
$proto12["m_srcTableName"] = "tickets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "tickets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "tickets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto18["m_sql"] = "Tecnico";
$proto18["m_srcTableName"] = "tickets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "tickets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "tickets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "tickets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto_Daño",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto26["m_sql"] = "`Foto_Daño`";
$proto26["m_srcTableName"] = "tickets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto_Solucion",
	"m_strTable" => "tickets",
	"m_srcTableName" => "tickets"
));

$proto28["m_sql"] = "Foto_Solucion";
$proto28["m_srcTableName"] = "tickets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tickets";
$proto31["m_srcTableName"] = "tickets";
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
$proto30["m_sql"] = "tickets";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tickets";
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
	"m_srcTableName" => "tickets"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tickets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets = createSqlQuery_tickets();


	
												;

												

$tdatatickets[".sqlquery"] = $queryData_tickets;



$tdatatickets[".hasEvents"] = false;

?>