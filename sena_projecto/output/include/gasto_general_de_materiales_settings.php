<?php
$tdatagasto_general_de_materiales = array();
$tdatagasto_general_de_materiales[".searchableFields"] = array();
$tdatagasto_general_de_materiales[".ShortName"] = "gasto_general_de_materiales";
$tdatagasto_general_de_materiales[".OwnerID"] = "cedula";
$tdatagasto_general_de_materiales[".OriginalTable"] = "ingreso de materiales";


$tdatagasto_general_de_materiales[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatagasto_general_de_materiales[".originalPagesByType"] = $tdatagasto_general_de_materiales[".pagesByType"];
$tdatagasto_general_de_materiales[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatagasto_general_de_materiales[".originalPages"] = $tdatagasto_general_de_materiales[".pages"];
$tdatagasto_general_de_materiales[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatagasto_general_de_materiales[".originalDefaultPages"] = $tdatagasto_general_de_materiales[".defaultPages"];

//	field labels
$fieldLabelsgasto_general_de_materiales = array();
$fieldToolTipsgasto_general_de_materiales = array();
$pageTitlesgasto_general_de_materiales = array();
$placeHoldersgasto_general_de_materiales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsgasto_general_de_materiales["Spanish"] = array();
	$fieldToolTipsgasto_general_de_materiales["Spanish"] = array();
	$placeHoldersgasto_general_de_materiales["Spanish"] = array();
	$pageTitlesgasto_general_de_materiales["Spanish"] = array();
	$fieldLabelsgasto_general_de_materiales["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsgasto_general_de_materiales["Spanish"]["Material"] = "Material";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["Material"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["Material"] = "";
	$fieldLabelsgasto_general_de_materiales["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["Cantidad"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["Cantidad"] = "";
	$fieldLabelsgasto_general_de_materiales["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["Ticket"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["Ticket"] = "";
	$fieldLabelsgasto_general_de_materiales["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["Tecnico"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["Tecnico"] = "";
	$fieldLabelsgasto_general_de_materiales["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsgasto_general_de_materiales["Spanish"]["cedula"] = "";
	$placeHoldersgasto_general_de_materiales["Spanish"]["cedula"] = "";
	if (count($fieldToolTipsgasto_general_de_materiales["Spanish"]))
		$tdatagasto_general_de_materiales[".isUseToolTips"] = true;
}


	$tdatagasto_general_de_materiales[".NCSearch"] = true;



$tdatagasto_general_de_materiales[".shortTableName"] = "gasto_general_de_materiales";
$tdatagasto_general_de_materiales[".nSecOptions"] = 1;

$tdatagasto_general_de_materiales[".mainTableOwnerID"] = "cedula";
$tdatagasto_general_de_materiales[".entityType"] = 2;
$tdatagasto_general_de_materiales[".connId"] = "mega_ya_at_localhost";


$tdatagasto_general_de_materiales[".strOriginalTableName"] = "ingreso de materiales";

	



$tdatagasto_general_de_materiales[".showAddInPopup"] = false;

$tdatagasto_general_de_materiales[".showEditInPopup"] = false;

$tdatagasto_general_de_materiales[".showViewInPopup"] = false;

$tdatagasto_general_de_materiales[".listAjax"] = false;
//	temporary
//$tdatagasto_general_de_materiales[".listAjax"] = false;

	$tdatagasto_general_de_materiales[".audit"] = false;

	$tdatagasto_general_de_materiales[".locking"] = false;


$pages = $tdatagasto_general_de_materiales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagasto_general_de_materiales[".edit"] = true;
	$tdatagasto_general_de_materiales[".afterEditAction"] = 1;
	$tdatagasto_general_de_materiales[".closePopupAfterEdit"] = 1;
	$tdatagasto_general_de_materiales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagasto_general_de_materiales[".add"] = true;
$tdatagasto_general_de_materiales[".afterAddAction"] = 1;
$tdatagasto_general_de_materiales[".closePopupAfterAdd"] = 1;
$tdatagasto_general_de_materiales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagasto_general_de_materiales[".list"] = true;
}



$tdatagasto_general_de_materiales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagasto_general_de_materiales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagasto_general_de_materiales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagasto_general_de_materiales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagasto_general_de_materiales[".printFriendly"] = true;
}



$tdatagasto_general_de_materiales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagasto_general_de_materiales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagasto_general_de_materiales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagasto_general_de_materiales[".isUseAjaxSuggest"] = true;



						

$tdatagasto_general_de_materiales[".ajaxCodeSnippetAdded"] = false;

$tdatagasto_general_de_materiales[".buttonsAdded"] = false;

$tdatagasto_general_de_materiales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagasto_general_de_materiales[".isUseTimeForSearch"] = false;


$tdatagasto_general_de_materiales[".badgeColor"] = "778899";


$tdatagasto_general_de_materiales[".allSearchFields"] = array();
$tdatagasto_general_de_materiales[".filterFields"] = array();
$tdatagasto_general_de_materiales[".requiredSearchFields"] = array();

$tdatagasto_general_de_materiales[".googleLikeFields"] = array();
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "Tecnico";
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "cedula";
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "Fecha de Consumo";
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "Ticket";
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "Material";
$tdatagasto_general_de_materiales[".googleLikeFields"][] = "Cantidad";



$tdatagasto_general_de_materiales[".tableType"] = "report";

$tdatagasto_general_de_materiales[".printerPageOrientation"] = 0;
$tdatagasto_general_de_materiales[".nPrinterPageScale"] = 100;

$tdatagasto_general_de_materiales[".nPrinterSplitRecords"] = 40;

$tdatagasto_general_de_materiales[".geocodingEnabled"] = false;

//report settings

$tdatagasto_general_de_materiales[".reportPrintGroupsPerPage"] = 3;
$tdatagasto_general_de_materiales[".reportPrintRecordsPerPage"] = 40;

$tdatagasto_general_de_materiales[".pageSizeGroups"] = 5;
$tdatagasto_general_de_materiales[".pageSizeRecords"] = 20;


//end of report settings



$tdatagasto_general_de_materiales[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY `Fecha de Consumo` DESC";
$tdatagasto_general_de_materiales[".strOrderBy"] = $tstrOrderBy;

$tdatagasto_general_de_materiales[".orderindexes"] = array();
	$tdatagasto_general_de_materiales[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`Fecha de Consumo`");



$tdatagasto_general_de_materiales[".sqlHead"] = "SELECT Tecnico,  Tecnico AS cedula,  `Fecha de Consumo`,  Ticket,  Material,  Cantidad";
$tdatagasto_general_de_materiales[".sqlFrom"] = "FROM `ingreso de materiales`";
$tdatagasto_general_de_materiales[".sqlWhereExpr"] = "";
$tdatagasto_general_de_materiales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagasto_general_de_materiales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagasto_general_de_materiales[".arrGroupsPerPage"] = $arrGPP;

$tdatagasto_general_de_materiales[".highlightSearchResults"] = true;

$tableKeysgasto_general_de_materiales = array();
$tdatagasto_general_de_materiales[".Keys"] = $tableKeysgasto_general_de_materiales;


$tdatagasto_general_de_materiales[".hideMobileList"] = array();




//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","Tecnico");
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


	$tdatagasto_general_de_materiales["Tecnico"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "Tecnico";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","cedula");
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


	$tdatagasto_general_de_materiales["cedula"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "cedula";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","Fecha_de_Consumo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Consumo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Consumo`";

	
	
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


	$tdatagasto_general_de_materiales["Fecha de Consumo"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "Fecha de Consumo";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","Ticket");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ticket";

	
	
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
	$edata["LookupTable"] = "tickets";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Tickets";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tickets";

	

	
	$edata["LookupOrderBy"] = "Tickets";

	
	
	
	

	
	
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


	$tdatagasto_general_de_materiales["Ticket"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "Ticket";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","Material");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Material";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Material";

	
	
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
	$edata["LookupTable"] = "materiales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id Materales";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Material";

	

	
	$edata["LookupOrderBy"] = "Material";

	
	
	
	

	
	
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


	$tdatagasto_general_de_materiales["Material"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "Material";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Gasto_general_de_materiales","Cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
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


	$tdatagasto_general_de_materiales["Cantidad"] = $fdata;
		$tdatagasto_general_de_materiales[".searchableFields"][] = "Cantidad";


$tables_data["Gasto general de materiales"]=&$tdatagasto_general_de_materiales;
$field_labels["Gasto_general_de_materiales"] = &$fieldLabelsgasto_general_de_materiales;
$fieldToolTips["Gasto_general_de_materiales"] = &$fieldToolTipsgasto_general_de_materiales;
$placeHolders["Gasto_general_de_materiales"] = &$placeHoldersgasto_general_de_materiales;
$page_titles["Gasto_general_de_materiales"] = &$pageTitlesgasto_general_de_materiales;


changeTextControlsToDate( "Gasto general de materiales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Gasto general de materiales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Gasto general de materiales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gasto_general_de_materiales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Tecnico,  Tecnico AS cedula,  `Fecha de Consumo`,  Ticket,  Material,  Cantidad";
$proto0["m_strFrom"] = "FROM `ingreso de materiales`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de Consumo` DESC";
	
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
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto6["m_sql"] = "Tecnico";
$proto6["m_srcTableName"] = "Gasto general de materiales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto8["m_sql"] = "Tecnico";
$proto8["m_srcTableName"] = "Gasto general de materiales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "cedula";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto10["m_sql"] = "`Fecha de Consumo`";
$proto10["m_srcTableName"] = "Gasto general de materiales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto12["m_sql"] = "Ticket";
$proto12["m_srcTableName"] = "Gasto general de materiales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto14["m_sql"] = "Material";
$proto14["m_srcTableName"] = "Gasto general de materiales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto16["m_sql"] = "Cantidad";
$proto16["m_srcTableName"] = "Gasto general de materiales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ingreso de materiales";
$proto19["m_srcTableName"] = "Gasto general de materiales";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id Ingreso";
$proto19["m_columns"][] = "Fecha de Consumo";
$proto19["m_columns"][] = "Material";
$proto19["m_columns"][] = "Cantidad";
$proto19["m_columns"][] = "Ticket";
$proto19["m_columns"][] = "Tecnico";
$proto19["m_columns"][] = "Empresa";
$proto19["m_columns"][] = "Tipo de Actividad";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`ingreso de materiales`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Gasto general de materiales";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Gasto general de materiales"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Gasto general de materiales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gasto_general_de_materiales = createSqlQuery_gasto_general_de_materiales();


	
												;

						

$tdatagasto_general_de_materiales[".sqlquery"] = $queryData_gasto_general_de_materiales;



$tdatagasto_general_de_materiales[".hasEvents"] = false;

?>