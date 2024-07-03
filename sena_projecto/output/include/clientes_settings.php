<?php
$tdataclientes = array();
$tdataclientes[".searchableFields"] = array();
$tdataclientes[".ShortName"] = "clientes";
$tdataclientes[".OwnerID"] = "";
$tdataclientes[".OriginalTable"] = "clientes";


$tdataclientes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataclientes[".originalPagesByType"] = $tdataclientes[".pagesByType"];
$tdataclientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataclientes[".originalPages"] = $tdataclientes[".pages"];
$tdataclientes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataclientes[".originalDefaultPages"] = $tdataclientes[".defaultPages"];

//	field labels
$fieldLabelsclientes = array();
$fieldToolTipsclientes = array();
$pageTitlesclientes = array();
$placeHoldersclientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclientes["Spanish"] = array();
	$fieldToolTipsclientes["Spanish"] = array();
	$placeHoldersclientes["Spanish"] = array();
	$pageTitlesclientes["Spanish"] = array();
	$fieldLabelsclientes["Spanish"]["id"] = "Id";
	$fieldToolTipsclientes["Spanish"]["id"] = "";
	$placeHoldersclientes["Spanish"]["id"] = "";
	$fieldLabelsclientes["Spanish"]["preventa"] = "Preventa";
	$fieldToolTipsclientes["Spanish"]["preventa"] = "";
	$placeHoldersclientes["Spanish"]["preventa"] = "";
	$fieldLabelsclientes["Spanish"]["cliente"] = "Cliente";
	$fieldToolTipsclientes["Spanish"]["cliente"] = "";
	$placeHoldersclientes["Spanish"]["cliente"] = "";
	$fieldLabelsclientes["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsclientes["Spanish"]["cedula"] = "";
	$placeHoldersclientes["Spanish"]["cedula"] = "";
	$fieldLabelsclientes["Spanish"]["ciudad"] = "Ciudad";
	$fieldToolTipsclientes["Spanish"]["ciudad"] = "";
	$placeHoldersclientes["Spanish"]["ciudad"] = "";
	$fieldLabelsclientes["Spanish"]["barrio"] = "Barrio";
	$fieldToolTipsclientes["Spanish"]["barrio"] = "";
	$placeHoldersclientes["Spanish"]["barrio"] = "";
	$fieldLabelsclientes["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsclientes["Spanish"]["direccion"] = "";
	$placeHoldersclientes["Spanish"]["direccion"] = "";
	$fieldLabelsclientes["Spanish"]["latitud"] = "Latitud";
	$fieldToolTipsclientes["Spanish"]["latitud"] = "";
	$placeHoldersclientes["Spanish"]["latitud"] = "";
	$fieldLabelsclientes["Spanish"]["longitud"] = "Longitud";
	$fieldToolTipsclientes["Spanish"]["longitud"] = "";
	$placeHoldersclientes["Spanish"]["longitud"] = "";
	$fieldLabelsclientes["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsclientes["Spanish"]["telefono"] = "";
	$placeHoldersclientes["Spanish"]["telefono"] = "";
	$fieldLabelsclientes["Spanish"]["email"] = "Email";
	$fieldToolTipsclientes["Spanish"]["email"] = "";
	$placeHoldersclientes["Spanish"]["email"] = "";
	$fieldLabelsclientes["Spanish"]["estado"] = "Estado";
	$fieldToolTipsclientes["Spanish"]["estado"] = "";
	$placeHoldersclientes["Spanish"]["estado"] = "";
	$fieldLabelsclientes["Spanish"]["mapa"] = "Mapa";
	$fieldToolTipsclientes["Spanish"]["mapa"] = "";
	$placeHoldersclientes["Spanish"]["mapa"] = "";
	if (count($fieldToolTipsclientes["Spanish"]))
		$tdataclientes[".isUseToolTips"] = true;
}





$tdataclientes[".shortTableName"] = "clientes";
$tdataclientes[".nSecOptions"] = 0;

$tdataclientes[".mainTableOwnerID"] = "";
$tdataclientes[".entityType"] = 0;
$tdataclientes[".connId"] = "mega_ya_at_localhost";


$tdataclientes[".strOriginalTableName"] = "clientes";

	



$tdataclientes[".showAddInPopup"] = false;

$tdataclientes[".showEditInPopup"] = false;

$tdataclientes[".showViewInPopup"] = false;

$tdataclientes[".listAjax"] = false;
//	temporary
//$tdataclientes[".listAjax"] = false;

	$tdataclientes[".audit"] = true;

	$tdataclientes[".locking"] = false;


$pages = $tdataclientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataclientes[".edit"] = true;
	$tdataclientes[".afterEditAction"] = 1;
	$tdataclientes[".closePopupAfterEdit"] = 1;
	$tdataclientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataclientes[".add"] = true;
$tdataclientes[".afterAddAction"] = 1;
$tdataclientes[".closePopupAfterAdd"] = 1;
$tdataclientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataclientes[".list"] = true;
}



$tdataclientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataclientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataclientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataclientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataclientes[".printFriendly"] = true;
}



$tdataclientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataclientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataclientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataclientes[".isUseAjaxSuggest"] = true;



						

$tdataclientes[".ajaxCodeSnippetAdded"] = false;

$tdataclientes[".buttonsAdded"] = false;

$tdataclientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclientes[".isUseTimeForSearch"] = false;

$tdataclientes[".isUseFieldsMaps"] = true;

$tdataclientes[".badgeColor"] = "6B8E23";


$tdataclientes[".allSearchFields"] = array();
$tdataclientes[".filterFields"] = array();
$tdataclientes[".requiredSearchFields"] = array();




$tdataclientes[".tableType"] = "list";

$tdataclientes[".printerPageOrientation"] = 0;
$tdataclientes[".nPrinterPageScale"] = 100;

$tdataclientes[".nPrinterSplitRecords"] = 40;

$tdataclientes[".geocodingEnabled"] = false;




$tdataclientes[".isDisplayLoading"] = true;


$tdataclientes[".searchIsRequiredForFilters"] = true;

$tdataclientes[".noRecordsFirstPage"] = true;



$tdataclientes[".pageSize"] = 20;

$tdataclientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataclientes[".strOrderBy"] = $tstrOrderBy;

$tdataclientes[".orderindexes"] = array();


$tdataclientes[".sqlHead"] = "SELECT id,  preventa,  cliente,  cedula,  ciudad,  barrio,  direccion,  latitud,  longitud,  telefono,  email,  estado,  mapa";
$tdataclientes[".sqlFrom"] = "FROM clientes";
$tdataclientes[".sqlWhereExpr"] = "";
$tdataclientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclientes[".arrGroupsPerPage"] = $arrGPP;

$tdataclientes[".highlightSearchResults"] = true;

$tableKeysclientes = array();
$tableKeysclientes[] = "id";
$tdataclientes[".Keys"] = $tableKeysclientes;


$tdataclientes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["id"] = $fdata;
		$tdataclientes[".searchableFields"][] = "id";
//	preventa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "preventa";
	$fdata["GoodName"] = "preventa";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","preventa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "preventa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preventa";

	
	
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


	$tdataclientes["preventa"] = $fdata;
		$tdataclientes[".searchableFields"][] = "preventa";
//	cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cliente";
	$fdata["GoodName"] = "cliente";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","cliente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cliente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cliente";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["cliente"] = $fdata;
		$tdataclientes[".searchableFields"][] = "cliente";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","cedula");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["cedula"] = $fdata;
		$tdataclientes[".searchableFields"][] = "cedula";
//	ciudad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ciudad";
	$fdata["GoodName"] = "ciudad";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","ciudad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ciudad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ciudad";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["ciudad"] = $fdata;
		$tdataclientes[".searchableFields"][] = "ciudad";
//	barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "barrio";
	$fdata["GoodName"] = "barrio";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "barrio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "barrio";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["barrio"] = $fdata;
		$tdataclientes[".searchableFields"][] = "barrio";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["direccion"] = $fdata;
		$tdataclientes[".searchableFields"][] = "direccion";
//	latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "latitud";
	$fdata["GoodName"] = "latitud";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "latitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitud";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["latitud"] = $fdata;
		$tdataclientes[".searchableFields"][] = "latitud";
//	longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "longitud";
	$fdata["GoodName"] = "longitud";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "longitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitud";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["longitud"] = $fdata;
		$tdataclientes[".searchableFields"][] = "longitud";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["telefono"] = $fdata;
		$tdataclientes[".searchableFields"][] = "telefono";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["email"] = $fdata;
		$tdataclientes[".searchableFields"][] = "email";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["estado"] = $fdata;
		$tdataclientes[".searchableFields"][] = "estado";
//	mapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mapa";
	$fdata["GoodName"] = "mapa";
	$fdata["ownerTable"] = "clientes";
	$fdata["Label"] = GetFieldLabel("clientes","mapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mapa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mapa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 400;
	$vdata["mapData"]['height'] = 325;
	$vdata["mapData"]['address'] = "barrio";
	$vdata["mapData"]['lat'] = "latitud";
	$vdata["mapData"]['lng'] = "longitud";
	$vdata["mapData"]['desc'] = "direccion";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataclientes["mapa"] = $fdata;
		$tdataclientes[".searchableFields"][] = "mapa";


$tables_data["clientes"]=&$tdataclientes;
$field_labels["clientes"] = &$fieldLabelsclientes;
$fieldToolTips["clientes"] = &$fieldToolTipsclientes;
$placeHolders["clientes"] = &$placeHoldersclientes;
$page_titles["clientes"] = &$pageTitlesclientes;


changeTextControlsToDate( "clientes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["clientes"] = array();
//	datos de red
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="datos de red";
		$detailsParam["dOriginalTable"] = "datos de red";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "datos_de_red";
	$detailsParam["dCaptionTable"] = GetTableCaption("datos_de_red");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["clientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["clientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clientes"][$dIndex]["masterKeys"][]="cedula";

				$detailsTablesData["clientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clientes"][$dIndex]["detailKeys"][]="Cedula/NIt-Cliente";
//	tickets
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tickets";
		$detailsParam["dOriginalTable"] = "tickets";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tickets";
	$detailsParam["dCaptionTable"] = GetTableCaption("tickets");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["clientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["clientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["clientes"][$dIndex]["masterKeys"][]="cedula";

				$detailsTablesData["clientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["clientes"][$dIndex]["detailKeys"][]="Cedula/nit-Cliente";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["clientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  preventa,  cliente,  cedula,  ciudad,  barrio,  direccion,  latitud,  longitud,  telefono,  email,  estado,  mapa";
$proto0["m_strFrom"] = "FROM clientes";
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
	"m_strName" => "id",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "clientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "preventa",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto8["m_sql"] = "preventa";
$proto8["m_srcTableName"] = "clientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cliente",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto10["m_sql"] = "cliente";
$proto10["m_srcTableName"] = "clientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto12["m_sql"] = "cedula";
$proto12["m_srcTableName"] = "clientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ciudad",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto14["m_sql"] = "ciudad";
$proto14["m_srcTableName"] = "clientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto16["m_sql"] = "barrio";
$proto16["m_srcTableName"] = "clientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto18["m_sql"] = "direccion";
$proto18["m_srcTableName"] = "clientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "latitud",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto20["m_sql"] = "latitud";
$proto20["m_srcTableName"] = "clientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "longitud",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto22["m_sql"] = "longitud";
$proto22["m_srcTableName"] = "clientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto24["m_sql"] = "telefono";
$proto24["m_srcTableName"] = "clientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto26["m_sql"] = "email";
$proto26["m_srcTableName"] = "clientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto28["m_sql"] = "estado";
$proto28["m_srcTableName"] = "clientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mapa",
	"m_strTable" => "clientes",
	"m_srcTableName" => "clientes"
));

$proto30["m_sql"] = "mapa";
$proto30["m_srcTableName"] = "clientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "clientes";
$proto33["m_srcTableName"] = "clientes";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "preventa";
$proto33["m_columns"][] = "cliente";
$proto33["m_columns"][] = "cedula";
$proto33["m_columns"][] = "ciudad";
$proto33["m_columns"][] = "barrio";
$proto33["m_columns"][] = "direccion";
$proto33["m_columns"][] = "latitud";
$proto33["m_columns"][] = "longitud";
$proto33["m_columns"][] = "telefono";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "estado";
$proto33["m_columns"][] = "mapa";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "clientes";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "clientes";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="clientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clientes = createSqlQuery_clientes();


	
												;

													

$tdataclientes[".sqlquery"] = $queryData_clientes;



$tdataclientes[".hasEvents"] = false;

?>