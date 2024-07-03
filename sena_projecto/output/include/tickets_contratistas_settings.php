<?php
$tdatatickets_contratistas = array();
$tdatatickets_contratistas[".searchableFields"] = array();
$tdatatickets_contratistas[".ShortName"] = "tickets_contratistas";
$tdatatickets_contratistas[".OwnerID"] = "Empresa";
$tdatatickets_contratistas[".OriginalTable"] = "tickets";


$tdatatickets_contratistas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatickets_contratistas[".originalPagesByType"] = $tdatatickets_contratistas[".pagesByType"];
$tdatatickets_contratistas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatickets_contratistas[".originalPages"] = $tdatatickets_contratistas[".pages"];
$tdatatickets_contratistas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatickets_contratistas[".originalDefaultPages"] = $tdatatickets_contratistas[".defaultPages"];

//	field labels
$fieldLabelstickets_contratistas = array();
$fieldToolTipstickets_contratistas = array();
$pageTitlestickets_contratistas = array();
$placeHolderstickets_contratistas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstickets_contratistas["Spanish"] = array();
	$fieldToolTipstickets_contratistas["Spanish"] = array();
	$placeHolderstickets_contratistas["Spanish"] = array();
	$pageTitlestickets_contratistas["Spanish"] = array();
	$fieldLabelstickets_contratistas["Spanish"]["id_tickets"] = "Id Tickets";
	$fieldToolTipstickets_contratistas["Spanish"]["id_tickets"] = "";
	$placeHolderstickets_contratistas["Spanish"]["id_tickets"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipstickets_contratistas["Spanish"]["Tickets"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Tickets"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipstickets_contratistas["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipstickets_contratistas["Spanish"]["Localidad"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Localidad"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipstickets_contratistas["Spanish"]["Estado_del_Ticket"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipstickets_contratistas["Spanish"]["Observaciones"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Observaciones"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipstickets_contratistas["Spanish"]["Tecnico"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Tecnico"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipstickets_contratistas["Spanish"]["Empresa"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Empresa"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Cedula_nit_Cliente"] = "Cedula/nit-Cliente";
	$fieldToolTipstickets_contratistas["Spanish"]["Cedula_nit_Cliente"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Cedula_nit_Cliente"] = "";
	$fieldLabelstickets_contratistas["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipstickets_contratistas["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHolderstickets_contratistas["Spanish"]["Tipo_de_Actividad"] = "";
	if (count($fieldToolTipstickets_contratistas["Spanish"]))
		$tdatatickets_contratistas[".isUseToolTips"] = true;
}


	$tdatatickets_contratistas[".NCSearch"] = true;



$tdatatickets_contratistas[".shortTableName"] = "tickets_contratistas";
$tdatatickets_contratistas[".nSecOptions"] = 1;

$tdatatickets_contratistas[".mainTableOwnerID"] = "Empresa";
$tdatatickets_contratistas[".entityType"] = 1;
$tdatatickets_contratistas[".connId"] = "mega_ya_at_localhost";


$tdatatickets_contratistas[".strOriginalTableName"] = "tickets";

	



$tdatatickets_contratistas[".showAddInPopup"] = false;

$tdatatickets_contratistas[".showEditInPopup"] = false;

$tdatatickets_contratistas[".showViewInPopup"] = false;

$tdatatickets_contratistas[".listAjax"] = false;
//	temporary
//$tdatatickets_contratistas[".listAjax"] = false;

	$tdatatickets_contratistas[".audit"] = true;

	$tdatatickets_contratistas[".locking"] = false;


$pages = $tdatatickets_contratistas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatickets_contratistas[".edit"] = true;
	$tdatatickets_contratistas[".afterEditAction"] = 1;
	$tdatatickets_contratistas[".closePopupAfterEdit"] = 1;
	$tdatatickets_contratistas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatickets_contratistas[".add"] = true;
$tdatatickets_contratistas[".afterAddAction"] = 1;
$tdatatickets_contratistas[".closePopupAfterAdd"] = 1;
$tdatatickets_contratistas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatickets_contratistas[".list"] = true;
}



$tdatatickets_contratistas[".strSortControlSettingsJSON"] = "";

$tdatatickets_contratistas[".strClickActionJSON"] = "{\"fields\":{\"Cedula/nit-Cliente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Empresa\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Estado del Ticket\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Fecha de atencioón\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"Localidad\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tecnico\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Tickets\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"ingreso de equipo\",\"url\":\"\"}},\"id tickets\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"ingreso de equipo\",\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"ingreso de equipo\"},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":\"ingreso de equipo\",\"url\":\"ingreso_de_equipo_list.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatickets_contratistas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatickets_contratistas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatickets_contratistas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatickets_contratistas[".printFriendly"] = true;
}



$tdatatickets_contratistas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatickets_contratistas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatickets_contratistas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatickets_contratistas[".isUseAjaxSuggest"] = true;



												

$tdatatickets_contratistas[".ajaxCodeSnippetAdded"] = false;

$tdatatickets_contratistas[".buttonsAdded"] = false;

$tdatatickets_contratistas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatickets_contratistas[".isUseTimeForSearch"] = false;


$tdatatickets_contratistas[".badgeColor"] = "9acd32";


$tdatatickets_contratistas[".allSearchFields"] = array();
$tdatatickets_contratistas[".filterFields"] = array();
$tdatatickets_contratistas[".requiredSearchFields"] = array();

$tdatatickets_contratistas[".googleLikeFields"] = array();
$tdatatickets_contratistas[".googleLikeFields"][] = "id tickets";
$tdatatickets_contratistas[".googleLikeFields"][] = "Tickets";
$tdatatickets_contratistas[".googleLikeFields"][] = "Fecha de atencioón";
$tdatatickets_contratistas[".googleLikeFields"][] = "Localidad";
$tdatatickets_contratistas[".googleLikeFields"][] = "Estado del Ticket";
$tdatatickets_contratistas[".googleLikeFields"][] = "Observaciones";
$tdatatickets_contratistas[".googleLikeFields"][] = "Tecnico";
$tdatatickets_contratistas[".googleLikeFields"][] = "Empresa";
$tdatatickets_contratistas[".googleLikeFields"][] = "Cedula/nit-Cliente";
$tdatatickets_contratistas[".googleLikeFields"][] = "Tipo de Actividad";



$tdatatickets_contratistas[".tableType"] = "list";

$tdatatickets_contratistas[".printerPageOrientation"] = 0;
$tdatatickets_contratistas[".nPrinterPageScale"] = 100;

$tdatatickets_contratistas[".nPrinterSplitRecords"] = 40;

$tdatatickets_contratistas[".geocodingEnabled"] = true;
$tdatatickets_contratistas[".geocodingData"] = array();
$tdatatickets_contratistas[".geocodingData"]["latField"] = "Latitud";
$tdatatickets_contratistas[".geocodingData"]["lngField"] = "Longitud";
$tdatatickets_contratistas[".geocodingData"]["addressFields"] = array();
	$tdatatickets_contratistas[".geocodingData"]["addressFields"][] = "Direccion";
	$tdatatickets_contratistas[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatatickets_contratistas[".geocodingData"]["addressFields"][] = "Longitud";




$tdatatickets_contratistas[".isDisplayLoading"] = true;






$tdatatickets_contratistas[".pageSize"] = 20;

$tdatatickets_contratistas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC";
$tdatatickets_contratistas[".strOrderBy"] = $tstrOrderBy;

$tdatatickets_contratistas[".orderindexes"] = array();
	$tdatatickets_contratistas[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");



$tdatatickets_contratistas[".sqlHead"] = "SELECT `id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`";
$tdatatickets_contratistas[".sqlFrom"] = "FROM tickets";
$tdatatickets_contratistas[".sqlWhereExpr"] = "";
$tdatatickets_contratistas[".sqlTail"] = "";

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
$tdatatickets_contratistas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatickets_contratistas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatickets_contratistas[".arrGroupsPerPage"] = $arrGPP;

$tdatatickets_contratistas[".highlightSearchResults"] = true;

$tableKeystickets_contratistas = array();
$tableKeystickets_contratistas[] = "id tickets";
$tdatatickets_contratistas[".Keys"] = $tableKeystickets_contratistas;


$tdatatickets_contratistas[".hideMobileList"] = array();




//	id tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id tickets";
	$fdata["GoodName"] = "id_tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","id_tickets");
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


	$tdatatickets_contratistas["id tickets"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "id tickets";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Tickets");
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


	$tdatatickets_contratistas["Tickets"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Tickets";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Fecha_de_atencio_n");
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


	$tdatatickets_contratistas["Fecha de atencioón"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Fecha de atencioón";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Localidad");
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


	$tdatatickets_contratistas["Localidad"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Estado_del_Ticket");
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


	$tdatatickets_contratistas["Estado del Ticket"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Observaciones");
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


	$tdatatickets_contratistas["Observaciones"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Observaciones";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Tecnico");
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


	$tdatatickets_contratistas["Tecnico"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Empresa");
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


	$tdatatickets_contratistas["Empresa"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Empresa";
//	Cedula/nit-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cedula/nit-Cliente";
	$fdata["GoodName"] = "Cedula_nit_Cliente";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Cedula_nit_Cliente");
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


	$tdatatickets_contratistas["Cedula/nit-Cliente"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Cedula/nit-Cliente";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Tickets_Contratistas","Tipo_de_Actividad");
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


	$tdatatickets_contratistas["Tipo de Actividad"] = $fdata;
		$tdatatickets_contratistas[".searchableFields"][] = "Tipo de Actividad";


$tables_data["Tickets_Contratistas"]=&$tdatatickets_contratistas;
$field_labels["Tickets_Contratistas"] = &$fieldLabelstickets_contratistas;
$fieldToolTips["Tickets_Contratistas"] = &$fieldToolTipstickets_contratistas;
$placeHolders["Tickets_Contratistas"] = &$placeHolderstickets_contratistas;
$page_titles["Tickets_Contratistas"] = &$pageTitlestickets_contratistas;


changeTextControlsToDate( "Tickets_Contratistas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tickets_Contratistas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tickets_Contratistas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Tecnicos_Contratistas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tecnicos_contratistas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Tickets_Contratistas"][0] = $masterParams;
				$masterTablesData["Tickets_Contratistas"][0]["masterKeys"] = array();
	$masterTablesData["Tickets_Contratistas"][0]["masterKeys"][]="Cedula";
				$masterTablesData["Tickets_Contratistas"][0]["detailKeys"] = array();
	$masterTablesData["Tickets_Contratistas"][0]["detailKeys"][]="Tecnico";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tickets_contratistas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id tickets`,  Tickets,  `Fecha de atencioón`,  Localidad,  `Estado del Ticket`,  Observaciones,  Tecnico,  Empresa,  `Cedula/nit-Cliente`,  `Tipo de Actividad`";
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
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto6["m_sql"] = "`id tickets`";
$proto6["m_srcTableName"] = "Tickets_Contratistas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto8["m_sql"] = "Tickets";
$proto8["m_srcTableName"] = "Tickets_Contratistas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Tickets_Contratistas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto12["m_sql"] = "Localidad";
$proto12["m_srcTableName"] = "Tickets_Contratistas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto14["m_sql"] = "`Estado del Ticket`";
$proto14["m_srcTableName"] = "Tickets_Contratistas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "Tickets_Contratistas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto18["m_sql"] = "Tecnico";
$proto18["m_srcTableName"] = "Tickets_Contratistas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Tickets_Contratistas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/nit-Cliente",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto22["m_sql"] = "`Cedula/nit-Cliente`";
$proto22["m_srcTableName"] = "Tickets_Contratistas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto24["m_sql"] = "`Tipo de Actividad`";
$proto24["m_srcTableName"] = "Tickets_Contratistas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tickets";
$proto27["m_srcTableName"] = "Tickets_Contratistas";
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
$proto26["m_srcTableName"] = "Tickets_Contratistas";
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
	"m_srcTableName" => "Tickets_Contratistas"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Tickets_Contratistas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tickets_contratistas = createSqlQuery_tickets_contratistas();


	
												;

										

$tdatatickets_contratistas[".sqlquery"] = $queryData_tickets_contratistas;



$tdatatickets_contratistas[".hasEvents"] = false;

?>