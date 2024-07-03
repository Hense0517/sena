<?php
$tdatainforme_de_tickets = array();
$tdatainforme_de_tickets[".searchableFields"] = array();
$tdatainforme_de_tickets[".ShortName"] = "informe_de_tickets";
$tdatainforme_de_tickets[".OwnerID"] = "cedula";
$tdatainforme_de_tickets[".OriginalTable"] = "tickets";


$tdatainforme_de_tickets[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatainforme_de_tickets[".originalPagesByType"] = $tdatainforme_de_tickets[".pagesByType"];
$tdatainforme_de_tickets[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatainforme_de_tickets[".originalPages"] = $tdatainforme_de_tickets[".pages"];
$tdatainforme_de_tickets[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatainforme_de_tickets[".originalDefaultPages"] = $tdatainforme_de_tickets[".defaultPages"];

//	field labels
$fieldLabelsinforme_de_tickets = array();
$fieldToolTipsinforme_de_tickets = array();
$pageTitlesinforme_de_tickets = array();
$placeHoldersinforme_de_tickets = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_de_tickets["Spanish"] = array();
	$fieldToolTipsinforme_de_tickets["Spanish"] = array();
	$placeHoldersinforme_de_tickets["Spanish"] = array();
	$pageTitlesinforme_de_tickets["Spanish"] = array();
	$fieldLabelsinforme_de_tickets["Spanish"]["Tickets"] = "Tickets";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Tickets"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Tickets"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Fecha_de_atencio_n"] = "Fecha de atención";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Fecha_de_atencio_n"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Fecha_de_atencio_n"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Localidad"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Localidad"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Estado_del_Ticket"] = "Estado del Ticket";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Estado_del_Ticket"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Estado_del_Ticket"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Observaciones"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Observaciones"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Tecnico"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Tecnico"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsinforme_de_tickets["Spanish"]["cedula"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["cedula"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsinforme_de_tickets["Spanish"]["fecha"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["fecha"] = "";
	$fieldLabelsinforme_de_tickets["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsinforme_de_tickets["Spanish"]["Empresa"] = "";
	$placeHoldersinforme_de_tickets["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsinforme_de_tickets["Spanish"]))
		$tdatainforme_de_tickets[".isUseToolTips"] = true;
}


	$tdatainforme_de_tickets[".NCSearch"] = true;



$tdatainforme_de_tickets[".shortTableName"] = "informe_de_tickets";
$tdatainforme_de_tickets[".nSecOptions"] = 1;

$tdatainforme_de_tickets[".mainTableOwnerID"] = "cedula";
$tdatainforme_de_tickets[".entityType"] = 2;
$tdatainforme_de_tickets[".connId"] = "mega_ya_at_localhost";


$tdatainforme_de_tickets[".strOriginalTableName"] = "tickets";

	



$tdatainforme_de_tickets[".showAddInPopup"] = false;

$tdatainforme_de_tickets[".showEditInPopup"] = false;

$tdatainforme_de_tickets[".showViewInPopup"] = false;

$tdatainforme_de_tickets[".listAjax"] = false;
//	temporary
//$tdatainforme_de_tickets[".listAjax"] = false;

	$tdatainforme_de_tickets[".audit"] = false;

	$tdatainforme_de_tickets[".locking"] = false;


$pages = $tdatainforme_de_tickets[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_de_tickets[".edit"] = true;
	$tdatainforme_de_tickets[".afterEditAction"] = 1;
	$tdatainforme_de_tickets[".closePopupAfterEdit"] = 1;
	$tdatainforme_de_tickets[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_de_tickets[".add"] = true;
$tdatainforme_de_tickets[".afterAddAction"] = 1;
$tdatainforme_de_tickets[".closePopupAfterAdd"] = 1;
$tdatainforme_de_tickets[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_de_tickets[".list"] = true;
}



$tdatainforme_de_tickets[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_de_tickets[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_de_tickets[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_de_tickets[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_de_tickets[".printFriendly"] = true;
}



$tdatainforme_de_tickets[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_de_tickets[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_de_tickets[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_de_tickets[".isUseAjaxSuggest"] = true;



						

$tdatainforme_de_tickets[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_de_tickets[".buttonsAdded"] = false;

$tdatainforme_de_tickets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_de_tickets[".isUseTimeForSearch"] = false;


$tdatainforme_de_tickets[".badgeColor"] = "E67349";


$tdatainforme_de_tickets[".allSearchFields"] = array();
$tdatainforme_de_tickets[".filterFields"] = array();
$tdatainforme_de_tickets[".requiredSearchFields"] = array();

$tdatainforme_de_tickets[".googleLikeFields"] = array();
$tdatainforme_de_tickets[".googleLikeFields"][] = "Tecnico";
$tdatainforme_de_tickets[".googleLikeFields"][] = "cedula";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Fecha de atencioón";
$tdatainforme_de_tickets[".googleLikeFields"][] = "fecha";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Tickets";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Localidad";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Estado del Ticket";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Observaciones";
$tdatainforme_de_tickets[".googleLikeFields"][] = "Empresa";



$tdatainforme_de_tickets[".tableType"] = "report";

$tdatainforme_de_tickets[".printerPageOrientation"] = 0;
$tdatainforme_de_tickets[".nPrinterPageScale"] = 100;

$tdatainforme_de_tickets[".nPrinterSplitRecords"] = 40;

$tdatainforme_de_tickets[".geocodingEnabled"] = false;

//report settings

$tdatainforme_de_tickets[".reportPrintGroupsPerPage"] = 3;
$tdatainforme_de_tickets[".reportPrintRecordsPerPage"] = 40;

$tdatainforme_de_tickets[".pageSizeGroups"] = 5;
$tdatainforme_de_tickets[".pageSizeRecords"] = 20;


//end of report settings



$tdatainforme_de_tickets[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY `Fecha de atencioón` DESC";
$tdatainforme_de_tickets[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_de_tickets[".orderindexes"] = array();
	$tdatainforme_de_tickets[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de atencioón`");



$tdatainforme_de_tickets[".sqlHead"] = "SELECT Tecnico,  Tecnico AS cedula,  `Fecha de atencioón`,  `Fecha de atencioón` AS fecha,  Tickets,  Localidad,  `Estado del Ticket`,  Observaciones,  Empresa";
$tdatainforme_de_tickets[".sqlFrom"] = "FROM tickets";
$tdatainforme_de_tickets[".sqlWhereExpr"] = "";
$tdatainforme_de_tickets[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_de_tickets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_de_tickets[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_de_tickets[".highlightSearchResults"] = true;

$tableKeysinforme_de_tickets = array();
$tdatainforme_de_tickets[".Keys"] = $tableKeysinforme_de_tickets;


$tdatainforme_de_tickets[".hideMobileList"] = array();




//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Tecnico");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Tecnico"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Tecnico";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","cedula");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["cedula"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "cedula";
//	Fecha de atencioón
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de atencioón";
	$fdata["GoodName"] = "Fecha_de_atencio_n";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Fecha_de_atencio_n");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Fecha de atencioón"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Fecha de atencioón";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","fecha");
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

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["fecha"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "fecha";
//	Tickets
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tickets";
	$fdata["GoodName"] = "Tickets";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Tickets");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value%Este Ticket ya existe.", "messageType" => "Text");

	
//	End validation

	
	
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Tickets"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Tickets";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Localidad");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Localidad"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Localidad";
//	Estado del Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Estado del Ticket";
	$fdata["GoodName"] = "Estado_del_Ticket";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Estado_del_Ticket");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
	$edata["LookupValues"][] = "Fiinalizado";
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Estado del Ticket"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Estado del Ticket";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Observaciones");
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
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Observaciones"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Observaciones";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "tickets";
	$fdata["Label"] = GetFieldLabel("Informe_de_Tickets","Empresa");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idempresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Empresa";

	

	
	$edata["LookupOrderBy"] = "Empresa";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatainforme_de_tickets["Empresa"] = $fdata;
		$tdatainforme_de_tickets[".searchableFields"][] = "Empresa";


$tables_data["Informe de Tickets"]=&$tdatainforme_de_tickets;
$field_labels["Informe_de_Tickets"] = &$fieldLabelsinforme_de_tickets;
$fieldToolTips["Informe_de_Tickets"] = &$fieldToolTipsinforme_de_tickets;
$placeHolders["Informe_de_Tickets"] = &$placeHoldersinforme_de_tickets;
$page_titles["Informe_de_Tickets"] = &$pageTitlesinforme_de_tickets;


changeTextControlsToDate( "Informe de Tickets" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Informe de Tickets"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Informe de Tickets"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_de_tickets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Tecnico,  Tecnico AS cedula,  `Fecha de atencioón`,  `Fecha de atencioón` AS fecha,  Tickets,  Localidad,  `Estado del Ticket`,  Observaciones,  Empresa";
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
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto6["m_sql"] = "Tecnico";
$proto6["m_srcTableName"] = "Informe de Tickets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto8["m_sql"] = "Tecnico";
$proto8["m_srcTableName"] = "Informe de Tickets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "cedula";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto10["m_sql"] = "`Fecha de atencioón`";
$proto10["m_srcTableName"] = "Informe de Tickets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto12["m_sql"] = "`Fecha de atencioón`";
$proto12["m_srcTableName"] = "Informe de Tickets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "fecha";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tickets",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto14["m_sql"] = "Tickets";
$proto14["m_srcTableName"] = "Informe de Tickets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto16["m_sql"] = "Localidad";
$proto16["m_srcTableName"] = "Informe de Tickets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado del Ticket",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto18["m_sql"] = "`Estado del Ticket`";
$proto18["m_srcTableName"] = "Informe de Tickets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto20["m_sql"] = "Observaciones";
$proto20["m_srcTableName"] = "Informe de Tickets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto22["m_sql"] = "Empresa";
$proto22["m_srcTableName"] = "Informe de Tickets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tickets";
$proto25["m_srcTableName"] = "Informe de Tickets";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id tickets";
$proto25["m_columns"][] = "Tickets";
$proto25["m_columns"][] = "Fecha de atencioón";
$proto25["m_columns"][] = "Localidad";
$proto25["m_columns"][] = "Estado del Ticket";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "Tecnico";
$proto25["m_columns"][] = "Empresa";
$proto25["m_columns"][] = "Cedula/nit-Cliente";
$proto25["m_columns"][] = "Tipo de Actividad";
$proto25["m_columns"][] = "Acta";
$proto25["m_columns"][] = "Recupera_Cable?";
$proto25["m_columns"][] = "Libera_Puerto?";
$proto25["m_columns"][] = "Puerto";
$proto25["m_columns"][] = "Cto";
$proto25["m_columns"][] = "Spliter";
$proto25["m_columns"][] = "Cable";
$proto25["m_columns"][] = "Foto_Daño";
$proto25["m_columns"][] = "Foto_Solucion";
$proto25["m_columns"][] = "Hora_Inicio";
$proto25["m_columns"][] = "Hora_Final";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tickets";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Informe de Tickets";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de atencioón",
	"m_strTable" => "tickets",
	"m_srcTableName" => "Informe de Tickets"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Informe de Tickets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_de_tickets = createSqlQuery_informe_de_tickets();


	
												;

									

$tdatainforme_de_tickets[".sqlquery"] = $queryData_informe_de_tickets;



$tdatainforme_de_tickets[".hasEvents"] = false;

?>