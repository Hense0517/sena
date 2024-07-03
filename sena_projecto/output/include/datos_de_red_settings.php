<?php
$tdatadatos_de_red = array();
$tdatadatos_de_red[".searchableFields"] = array();
$tdatadatos_de_red[".ShortName"] = "datos_de_red";
$tdatadatos_de_red[".OwnerID"] = "";
$tdatadatos_de_red[".OriginalTable"] = "datos de red";


$tdatadatos_de_red[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadatos_de_red[".originalPagesByType"] = $tdatadatos_de_red[".pagesByType"];
$tdatadatos_de_red[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadatos_de_red[".originalPages"] = $tdatadatos_de_red[".pages"];
$tdatadatos_de_red[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadatos_de_red[".originalDefaultPages"] = $tdatadatos_de_red[".defaultPages"];

//	field labels
$fieldLabelsdatos_de_red = array();
$fieldToolTipsdatos_de_red = array();
$pageTitlesdatos_de_red = array();
$placeHoldersdatos_de_red = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdatos_de_red["Spanish"] = array();
	$fieldToolTipsdatos_de_red["Spanish"] = array();
	$placeHoldersdatos_de_red["Spanish"] = array();
	$pageTitlesdatos_de_red["Spanish"] = array();
	$fieldLabelsdatos_de_red["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsdatos_de_red["Spanish"]["Cto"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Cto"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsdatos_de_red["Spanish"]["Spliter"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Spliter"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsdatos_de_red["Spanish"]["Cable"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Cable"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Puerto_CTO"] = "Puerto CTO";
	$fieldToolTipsdatos_de_red["Spanish"]["Puerto_CTO"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Puerto_CTO"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Serial_ONT"] = "Serial ONT";
	$fieldToolTipsdatos_de_red["Spanish"]["Serial_ONT"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Serial_ONT"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Cedula_NIt_Cliente"] = "Cedula/NIt-Cliente";
	$fieldToolTipsdatos_de_red["Spanish"]["Cedula_NIt_Cliente"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Cedula_NIt_Cliente"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Foto_Potencia"] = "Foto Potencia";
	$fieldToolTipsdatos_de_red["Spanish"]["Foto_Potencia"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Foto_Potencia"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsdatos_de_red["Spanish"]["Estado"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Estado"] = "";
	$fieldLabelsdatos_de_red["Spanish"]["Municipio"] = "Municipio";
	$fieldToolTipsdatos_de_red["Spanish"]["Municipio"] = "";
	$placeHoldersdatos_de_red["Spanish"]["Municipio"] = "";
	if (count($fieldToolTipsdatos_de_red["Spanish"]))
		$tdatadatos_de_red[".isUseToolTips"] = true;
}


	$tdatadatos_de_red[".NCSearch"] = true;



$tdatadatos_de_red[".shortTableName"] = "datos_de_red";
$tdatadatos_de_red[".nSecOptions"] = 0;

$tdatadatos_de_red[".mainTableOwnerID"] = "";
$tdatadatos_de_red[".entityType"] = 0;
$tdatadatos_de_red[".connId"] = "mega_ya_at_localhost";


$tdatadatos_de_red[".strOriginalTableName"] = "datos de red";

	



$tdatadatos_de_red[".showAddInPopup"] = false;

$tdatadatos_de_red[".showEditInPopup"] = false;

$tdatadatos_de_red[".showViewInPopup"] = false;

$tdatadatos_de_red[".listAjax"] = false;
//	temporary
//$tdatadatos_de_red[".listAjax"] = false;

	$tdatadatos_de_red[".audit"] = true;

	$tdatadatos_de_red[".locking"] = false;


$pages = $tdatadatos_de_red[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadatos_de_red[".edit"] = true;
	$tdatadatos_de_red[".afterEditAction"] = 1;
	$tdatadatos_de_red[".closePopupAfterEdit"] = 1;
	$tdatadatos_de_red[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadatos_de_red[".add"] = true;
$tdatadatos_de_red[".afterAddAction"] = 1;
$tdatadatos_de_red[".closePopupAfterAdd"] = 1;
$tdatadatos_de_red[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadatos_de_red[".list"] = true;
}



$tdatadatos_de_red[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadatos_de_red[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadatos_de_red[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadatos_de_red[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadatos_de_red[".printFriendly"] = true;
}



$tdatadatos_de_red[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadatos_de_red[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadatos_de_red[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadatos_de_red[".isUseAjaxSuggest"] = true;



												

$tdatadatos_de_red[".ajaxCodeSnippetAdded"] = false;

$tdatadatos_de_red[".buttonsAdded"] = false;

$tdatadatos_de_red[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadatos_de_red[".isUseTimeForSearch"] = false;


$tdatadatos_de_red[".badgeColor"] = "b22222";


$tdatadatos_de_red[".allSearchFields"] = array();
$tdatadatos_de_red[".filterFields"] = array();
$tdatadatos_de_red[".requiredSearchFields"] = array();




$tdatadatos_de_red[".tableType"] = "list";

$tdatadatos_de_red[".printerPageOrientation"] = 0;
$tdatadatos_de_red[".nPrinterPageScale"] = 100;

$tdatadatos_de_red[".nPrinterSplitRecords"] = 40;

$tdatadatos_de_red[".geocodingEnabled"] = false;




$tdatadatos_de_red[".isDisplayLoading"] = true;


$tdatadatos_de_red[".searchIsRequiredForFilters"] = true;

$tdatadatos_de_red[".noRecordsFirstPage"] = true;



$tdatadatos_de_red[".pageSize"] = 20;

$tdatadatos_de_red[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadatos_de_red[".strOrderBy"] = $tstrOrderBy;

$tdatadatos_de_red[".orderindexes"] = array();


$tdatadatos_de_red[".sqlHead"] = "SELECT Cto,  	Spliter,  	Cable,  	`Puerto CTO`,  	`Serial ONT`,  	`Cedula/NIt-Cliente`,  	`Foto Potencia`,  	Estado,  	Municipio";
$tdatadatos_de_red[".sqlFrom"] = "FROM `datos de red`";
$tdatadatos_de_red[".sqlWhereExpr"] = "";
$tdatadatos_de_red[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadatos_de_red[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadatos_de_red[".arrGroupsPerPage"] = $arrGPP;

$tdatadatos_de_red[".highlightSearchResults"] = true;

$tableKeysdatos_de_red = array();
$tableKeysdatos_de_red[] = "Cedula/NIt-Cliente";
$tdatadatos_de_red[".Keys"] = $tableKeysdatos_de_red;


$tdatadatos_de_red[".hideMobileList"] = array();




//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Cto");
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


	$tdatadatos_de_red["Cto"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Spliter");
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


	$tdatadatos_de_red["Spliter"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Cable");
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


	$tdatadatos_de_red["Cable"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Cable";
//	Puerto CTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Puerto CTO";
	$fdata["GoodName"] = "Puerto_CTO";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Puerto_CTO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Puerto CTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Puerto CTO`";

	
	
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


	$tdatadatos_de_red["Puerto CTO"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Puerto CTO";
//	Serial ONT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Serial ONT";
	$fdata["GoodName"] = "Serial_ONT";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Serial_ONT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial ONT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial ONT`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatadatos_de_red["Serial ONT"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Serial ONT";
//	Cedula/NIt-Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cedula/NIt-Cliente";
	$fdata["GoodName"] = "Cedula_NIt_Cliente";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Cedula_NIt_Cliente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula/NIt-Cliente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cedula/NIt-Cliente`";

	
	
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


	$tdatadatos_de_red["Cedula/NIt-Cliente"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Cedula/NIt-Cliente";
//	Foto Potencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Foto Potencia";
	$fdata["GoodName"] = "Foto_Potencia";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Foto_Potencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Foto Potencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto Potencia`";

	
	
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


	$tdatadatos_de_red["Foto Potencia"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Foto Potencia";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdatadatos_de_red["Estado"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Estado";
//	Municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Municipio";
	$fdata["GoodName"] = "Municipio";
	$fdata["ownerTable"] = "datos de red";
	$fdata["Label"] = GetFieldLabel("datos_de_red","Municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Municipio";

	
	
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


	$tdatadatos_de_red["Municipio"] = $fdata;
		$tdatadatos_de_red[".searchableFields"][] = "Municipio";


$tables_data["datos de red"]=&$tdatadatos_de_red;
$field_labels["datos_de_red"] = &$fieldLabelsdatos_de_red;
$fieldToolTips["datos_de_red"] = &$fieldToolTipsdatos_de_red;
$placeHolders["datos_de_red"] = &$placeHoldersdatos_de_red;
$page_titles["datos_de_red"] = &$pageTitlesdatos_de_red;


changeTextControlsToDate( "datos de red" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["datos de red"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["datos de red"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="clientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="clientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "clientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["datos de red"][0] = $masterParams;
				$masterTablesData["datos de red"][0]["masterKeys"] = array();
	$masterTablesData["datos de red"][0]["masterKeys"][]="cedula";
				$masterTablesData["datos de red"][0]["detailKeys"] = array();
	$masterTablesData["datos de red"][0]["detailKeys"][]="Cedula/NIt-Cliente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_datos_de_red()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cto,  	Spliter,  	Cable,  	`Puerto CTO`,  	`Serial ONT`,  	`Cedula/NIt-Cliente`,  	`Foto Potencia`,  	Estado,  	Municipio";
$proto0["m_strFrom"] = "FROM `datos de red`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "Cto",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto6["m_sql"] = "Cto";
$proto6["m_srcTableName"] = "datos de red";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto8["m_sql"] = "Spliter";
$proto8["m_srcTableName"] = "datos de red";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto10["m_sql"] = "Cable";
$proto10["m_srcTableName"] = "datos de red";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto CTO",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto12["m_sql"] = "`Puerto CTO`";
$proto12["m_srcTableName"] = "datos de red";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial ONT",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto14["m_sql"] = "`Serial ONT`";
$proto14["m_srcTableName"] = "datos de red";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula/NIt-Cliente",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto16["m_sql"] = "`Cedula/NIt-Cliente`";
$proto16["m_srcTableName"] = "datos de red";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto Potencia",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto18["m_sql"] = "`Foto Potencia`";
$proto18["m_srcTableName"] = "datos de red";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto20["m_sql"] = "Estado";
$proto20["m_srcTableName"] = "datos de red";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio",
	"m_strTable" => "datos de red",
	"m_srcTableName" => "datos de red"
));

$proto22["m_sql"] = "Municipio";
$proto22["m_srcTableName"] = "datos de red";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "datos de red";
$proto25["m_srcTableName"] = "datos de red";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Cto";
$proto25["m_columns"][] = "Spliter";
$proto25["m_columns"][] = "Cable";
$proto25["m_columns"][] = "Puerto CTO";
$proto25["m_columns"][] = "Serial ONT";
$proto25["m_columns"][] = "Cedula/NIt-Cliente";
$proto25["m_columns"][] = "Foto Potencia";
$proto25["m_columns"][] = "Estado";
$proto25["m_columns"][] = "Municipio";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`datos de red`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "datos de red";
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
$proto0["m_srcTableName"]="datos de red";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_datos_de_red = createSqlQuery_datos_de_red();


	
												;

									

$tdatadatos_de_red[".sqlquery"] = $queryData_datos_de_red;



$tdatadatos_de_red[".hasEvents"] = false;

?>