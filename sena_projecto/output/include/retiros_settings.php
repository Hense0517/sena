<?php
$tdataretiros = array();
$tdataretiros[".searchableFields"] = array();
$tdataretiros[".ShortName"] = "retiros";
$tdataretiros[".OwnerID"] = "Tecnico";
$tdataretiros[".OriginalTable"] = "tickets";


$tdataretiros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataretiros[".originalPagesByType"] = $tdataretiros[".pagesByType"];
$tdataretiros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataretiros[".originalPages"] = $tdataretiros[".pages"];
$tdataretiros[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataretiros[".originalDefaultPages"] = $tdataretiros[".defaultPages"];

//	field labels
$fieldLabelsretiros = array();
$fieldToolTipsretiros = array();
$pageTitlesretiros = array();
$placeHoldersretiros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsretiros["Spanish"] = array();
	$fieldToolTipsretiros["Spanish"] = array();
	$placeHoldersretiros["Spanish"] = array();
	$pageTitlesretiros["Spanish"] = array();
	$fieldLabelsretiros["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipsretiros["Spanish"]["id_tickets"] = "";
	$placeHoldersretiros["Spanish"]["id_tickets"] = "";
	$fieldLabelsretiros["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipsretiros["Spanish"]["Tickets"] = "";
	$placeHoldersretiros["Spanish"]["Tickets"] = "";
	$fieldLabelsretiros["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipsretiros["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHoldersretiros["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelsretiros["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsretiros["Spanish"]["Localidad"] = "";
	$placeHoldersretiros["Spanish"]["Localidad"] = "";
	$fieldLabelsretiros["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipsretiros["Spanish"]["Estado_del_Ticket"] = "";
	$placeHoldersretiros["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelsretiros["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsretiros["Spanish"]["Observaciones"] = "";
	$placeHoldersretiros["Spanish"]["Observaciones"] = "";
	$fieldLabelsretiros["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsretiros["Spanish"]["Tecnico"] = "";
	$placeHoldersretiros["Spanish"]["Tecnico"] = "";
	$fieldLabelsretiros["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsretiros["Spanish"]["Empresa"] = "";
	$placeHoldersretiros["Spanish"]["Empresa"] = "";
	$fieldLabelsretiros["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipsretiros["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHoldersretiros["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelsretiros["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsretiros["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersretiros["Spanish"]["Tipo_de_Actividad"] = "";
	$fieldLabelsretiros["Spanish"]["Recupera_Cable_"] = "Recupera Cable?";
	$fieldToolTipsretiros["Spanish"]["Recupera_Cable_"] = "";
	$placeHoldersretiros["Spanish"]["Recupera_Cable_"] = "";
	$fieldLabelsretiros["Spanish"]["Libera_Puerto_"] = "Libera Puerto?";
	$fieldToolTipsretiros["Spanish"]["Libera_Puerto_"] = "";
	$placeHoldersretiros["Spanish"]["Libera_Puerto_"] = "";
	$fieldLabelsretiros["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipsretiros["Spanish"]["Puerto"] = "";
	$placeHoldersretiros["Spanish"]["Puerto"] = "";
	$fieldLabelsretiros["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsretiros["Spanish"]["Cto"] = "";
	$placeHoldersretiros["Spanish"]["Cto"] = "";
	$fieldLabelsretiros["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsretiros["Spanish"]["Spliter"] = "";
	$placeHoldersretiros["Spanish"]["Spliter"] = "";
	$fieldLabelsretiros["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsretiros["Spanish"]["Cable"] = "";
	$placeHoldersretiros["Spanish"]["Cable"] = "";
	$pageTitlesretiros["Spanish"]["masterprint"] = "Retiros {%id_tickets}";
	if (count($fieldToolTipsretiros["Spanish"]))
		$tdataretiros[".isUseToolTips"] = true;
}


	$tdataretiros[".NCSearch"] = true;



$tdataretiros[".shortTableName"] = "retiros";
$tdataretiros[".nSecOptions"] = 1;

$tdataretiros[".mainTableOwnerID"] = "Tecnico";
$tdataretiros[".entityType"] = 1;
$tdataretiros[".connId"] = "mega_ya_at_localhost";


$tdataretiros[".strOriginalTableName"] = "tickets";

	



$tdataretiros[".showAddInPopup"] = false;

$tdataretiros[".showEditInPopup"] = false;

$tdataretiros[".showViewInPopup"] = false;

$tdataretiros[".listAjax"] = false;
//	temporary
//$tdataretiros[".listAjax"] = false;

	$tdataretiros[".audit"] = true;

	$tdataretiros[".locking"] = false;


$pages = $tdataretiros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataretiros[".edit"] = true;
	$tdataretiros[".afterEditAction"] = 1;
	$tdataretiros[".closePopupAfterEdit"] = 1;
	$tdataretiros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataretiros[".add"] = true;
$tdataretiros[".afterAddAction"] = 1;
$tdataretiros[".closePopupAfterAdd"] = 1;
$tdataretiros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataretiros[".list"] = true;
}



$tdataretiros[".strSortControlSettingsJSON"] = "";

$tdataretiros[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdataretiros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataretiros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataretiros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataretiros[".printFriendly"] = true;
}



$tdataretiros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataretiros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataretiros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataretiros[".isUseAjaxSuggest"] = true;



						

$tdataretiros[".ajaxCodeSnippetAdded"] = false;

$tdataretiros[".buttonsAdded"] = false;

$tdataretiros[".addPageEvents"] = false;

// use timepicker for search panel
$tdataretiros[".isUseTimeForSearch"] = false;


$tdataretiros[".badgeColor"] = "9ACD32";


$tdataretiros[".allSearchFields"] = array();
$tdataretiros[".filterFields"] = array();
$tdataretiros[".requiredSearchFields"] = array();

$tdataretiros[".googleLikeFields"] = array();
$tdataretiros[".googleLikeFields"][] = "id tickets";
$tdataretiros[".googleLikeFields"][] = "Tickets";
$tdataretiros[".googleLikeFields"][] = "Fecha de atencioón";
$tdataretiros[".googleLikeFields"][] = "Localidad";
$tdataretiros[".googleLikeFields"][] = "Estado del Ticket";
$tdataretiros[".googleLikeFields"][] = "Observaciones";
$tdataretiros[".googleLikeFields"][] = "Tecnico";
$tdataretiros[".googleLikeFields"][] = "Empresa";
$tdataretiros[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdataretiros[".googleLikeFields"][] = "Tipo de Actividad";
$tdataretiros[".googleLikeFields"][] = "Recupera_Cable?";
$tdataretiros[".googleLikeFields"][] = "Libera_Puerto?";



$tdataretiros[".tableType"] = "list";

$tdataretiros[".printerPageOrientation"] = 0;
$tdataretiros[".nPrinterPageScale"] = 100;

$tdataretiros[".nPrinterSplitRecords"] = 40;

$tdataretiros[".geocodingEnabled"] = true;
$tdataretiros[".geocodingData"] = array();
$tdataretiros[".geocodingData"]["latField"] = "Latitud";
$tdataretiros[".geocodingData"]["lngField"] = "Longitud";
$tdataretiros[".geocodingData"]["addressFields"] = array();
	$tdataretiros[".geocodingData"]["addressFields"][] = "Direccion";
	$tdataretiros[".geocodingData"]["addressFields"][] = "Latitud";
	$tdataretiros[".geocodingData"]["addressFields"][] = "Longitud";




$tdataretiros[".isDisplayLoading"] = true;






$tdataretiros[".pageSize"] = 20;

$tdataretiros[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC";
$tdataretiros[".strOrderBy"] = $tstrOrderBy;

$tdataretiros[".orderindexes"] = array();
	$tdataretiros[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");



$tdataretiros[".sqlHead"] = "SELECT `id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Recupera_Cable?`,  `Libera_Puerto?`,  Puerto,  Cto,  Spliter,  Cable";
$tdataretiros[".sqlFrom"] = "FROM tickets";
$tdataretiros[".sqlWhereExpr"] = "(`Tipo de Actividad` like'R%')";
$tdataretiros[".sqlTail"] = "";

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
$tdataretiros[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataretiros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataretiros[".arrGroupsPerPage"] = $arrGPP;

$tdataretiros[".highlightSearchResults"] = true;

$tableKeysretiros = array();
$tableKeysretiros[] = "id tickets";
$tdataretiros[".Keys"] = $tableKeysretiros;


$tdataretiros[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","id_tickets");
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


	$tdataretiros["id tickets"] = $fdata;
		$tdataretiros[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Tickets");
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


	$tdataretiros["Tickets"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Fecha_de_atencio_n");
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


	$tdataretiros["Fecha de atencioón"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Localidad");
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


	$tdataretiros["Localidad"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Estado_del_Ticket");
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


	$tdataretiros["Estado del Ticket"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Observaciones");
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


	$tdataretiros["Observaciones"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Tecnico");
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


	$tdataretiros["Tecnico"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Empresa");
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
		$fdata["filterTotalFields"] = "id tickets";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataretiros["Empresa"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Cedula_nit_Cliente");
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


	$tdataretiros["Cedula/nit-Cliente"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Tipo_de_Actividad");
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


	$tdataretiros["Tipo de Actividad"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Tipo de Actividad";
//	Recupera_Cable?
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Recupera_Cable?";
	$fdata["GoodName"] = "Recupera_Cable_";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Recupera_Cable_");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id tickets";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataretiros["Recupera_Cable?"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Recupera_Cable?";
//	Libera_Puerto?
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Libera_Puerto?";
	$fdata["GoodName"] = "Libera_Puerto_";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Libera_Puerto_");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id tickets";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataretiros["Libera_Puerto?"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Libera_Puerto?";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Puerto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Puerto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puerto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataretiros["Puerto"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Cto");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataretiros["Cto"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Spliter");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "21";
	$edata["LookupValues"][] = "22";
	$edata["LookupValues"][] = "23";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "25";
	$edata["LookupValues"][] = "26";
	$edata["LookupValues"][] = "27";
	$edata["LookupValues"][] = "28";
	$edata["LookupValues"][] = "29";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "31";
	$edata["LookupValues"][] = "32";
	$edata["LookupValues"][] = "33";
	$edata["LookupValues"][] = "34";
	$edata["LookupValues"][] = "35";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "37";
	$edata["LookupValues"][] = "38";
	$edata["LookupValues"][] = "39";
	$edata["LookupValues"][] = "40";
	$edata["LookupValues"][] = "41";
	$edata["LookupValues"][] = "42";
	$edata["LookupValues"][] = "43";
	$edata["LookupValues"][] = "44";
	$edata["LookupValues"][] = "45";
	$edata["LookupValues"][] = "46";
	$edata["LookupValues"][] = "47";
	$edata["LookupValues"][] = "48";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataretiros["Spliter"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Retiros","Cable");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdataretiros["Cable"] = $fdata;
		$tdataretiros[".searchableFields"][] = "Cable";


$tables_data["Retiros"]=&$tdataretiros;
$field_labels["Retiros"] = &$fieldLabelsretiros;
$fieldToolTips["Retiros"] = &$fieldToolTipsretiros;
$placeHolders["Retiros"] = &$placeHoldersretiros;
$page_titles["Retiros"] = &$pageTitlesretiros;


changeTextControlsToDate( "Retiros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Retiros"] = array();
//	logistica inversa
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="logistica inversa";
		$detailsParam["dOriginalTable"] = "logistica inversa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "logistica_inversa";
	$detailsParam["dCaptionTable"] = GetTableCaption("logistica_inversa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Retiros"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Retiros"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Retiros"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Tipo de Tramite";
//	Material Recuperado
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Material Recuperado";
		$detailsParam["dOriginalTable"] = "ingreso de materiales";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "material_recuperado";
	$detailsParam["dCaptionTable"] = GetTableCaption("Material_Recuperado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Retiros"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Retiros"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tickets";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Fecha de atencioón";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tecnico";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Empresa";

	$detailsTablesData["Retiros"][$dIndex]["masterKeys"][]="Tipo de Actividad";

				$detailsTablesData["Retiros"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Ticket";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Fecha de Consumo";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Tecnico";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Empresa";

		
	$detailsTablesData["Retiros"][$dIndex]["detailKeys"][]="Tipo de Actividad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Retiros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_retiros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`,  `Recupera_Cable?`,  `Libera_Puerto?`,  Puerto,  Cto,  Spliter,  Cable";
$proto0["m_strFrom"] = "FROM tickets";
$proto0["m_strWhere"] = "(`Tipo de Actividad` like'R%')";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de atencioón` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Tipo de Actividad` like'R%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like'R%'";
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
	"m_srcTableName" => "Retiros"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "Retiros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto8["m_sql"] = "Tickets";
$proto8["m_srcTableName"] = "Retiros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Retiros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto12["m_sql"] = "Localidad";
$proto12["m_srcTableName"] = "Retiros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "Retiros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "Retiros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto18["m_sql"] = "Tecnico";
$proto18["m_srcTableName"] = "Retiros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Retiros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "Retiros";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "Retiros";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Recupera_Cable?",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto26["m_sql"] = "`Recupera_Cable?`";
$proto26["m_srcTableName"] = "Retiros";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Libera_Puerto?",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto28["m_sql"] = "`Libera_Puerto?`";
$proto28["m_srcTableName"] = "Retiros";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto30["m_sql"] = "Puerto";
$proto30["m_srcTableName"] = "Retiros";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto32["m_sql"] = "Cto";
$proto32["m_srcTableName"] = "Retiros";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto34["m_sql"] = "Spliter";
$proto34["m_srcTableName"] = "Retiros";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Retiros"
));

$proto36["m_sql"] = "Cable";
$proto36["m_srcTableName"] = "Retiros";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "tickets";
$proto39["m_srcTableName"] = "Retiros";
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
$proto38["m_srcTableName"] = "Retiros";
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
	"m_srcTableName" => "Retiros"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retiros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_retiros = createSqlQuery_retiros();


	
												;

																

$tdataretiros[".sqlquery"] = $queryData_retiros;



$tdataretiros[".hasEvents"] = false;

?>