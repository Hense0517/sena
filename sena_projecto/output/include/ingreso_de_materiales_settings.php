<?php
$tdataingreso_de_materiales = array();
$tdataingreso_de_materiales[".searchableFields"] = array();
$tdataingreso_de_materiales[".ShortName"] = "ingreso_de_materiales";
$tdataingreso_de_materiales[".OwnerID"] = "Tecnico";
$tdataingreso_de_materiales[".OriginalTable"] = "ingreso de materiales";


$tdataingreso_de_materiales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataingreso_de_materiales[".originalPagesByType"] = $tdataingreso_de_materiales[".pagesByType"];
$tdataingreso_de_materiales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataingreso_de_materiales[".originalPages"] = $tdataingreso_de_materiales[".pages"];
$tdataingreso_de_materiales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataingreso_de_materiales[".originalDefaultPages"] = $tdataingreso_de_materiales[".defaultPages"];

//	field labels
$fieldLabelsingreso_de_materiales = array();
$fieldToolTipsingreso_de_materiales = array();
$pageTitlesingreso_de_materiales = array();
$placeHoldersingreso_de_materiales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsingreso_de_materiales["Spanish"] = array();
	$fieldToolTipsingreso_de_materiales["Spanish"] = array();
	$placeHoldersingreso_de_materiales["Spanish"] = array();
	$pageTitlesingreso_de_materiales["Spanish"] = array();
	$fieldLabelsingreso_de_materiales["Spanish"]["Id_Ingreso"] = "Id Ingreso";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Id_Ingreso"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Id_Ingreso"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Material"] = "Material";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Material"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Material"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Cantidad"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Cantidad"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Ticket"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Ticket"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Tecnico"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Tecnico"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Empresa"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Empresa"] = "";
	$fieldLabelsingreso_de_materiales["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsingreso_de_materiales["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersingreso_de_materiales["Spanish"]["Tipo_de_Actividad"] = "";
	if (count($fieldToolTipsingreso_de_materiales["Spanish"]))
		$tdataingreso_de_materiales[".isUseToolTips"] = true;
}


	$tdataingreso_de_materiales[".NCSearch"] = true;



$tdataingreso_de_materiales[".shortTableName"] = "ingreso_de_materiales";
$tdataingreso_de_materiales[".nSecOptions"] = 1;

$tdataingreso_de_materiales[".mainTableOwnerID"] = "Tecnico";
$tdataingreso_de_materiales[".entityType"] = 0;
$tdataingreso_de_materiales[".connId"] = "mega_ya_at_localhost";


$tdataingreso_de_materiales[".strOriginalTableName"] = "ingreso de materiales";

	



$tdataingreso_de_materiales[".showAddInPopup"] = false;

$tdataingreso_de_materiales[".showEditInPopup"] = false;

$tdataingreso_de_materiales[".showViewInPopup"] = false;

$tdataingreso_de_materiales[".listAjax"] = false;
//	temporary
//$tdataingreso_de_materiales[".listAjax"] = false;

	$tdataingreso_de_materiales[".audit"] = true;

	$tdataingreso_de_materiales[".locking"] = false;


$pages = $tdataingreso_de_materiales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataingreso_de_materiales[".edit"] = true;
	$tdataingreso_de_materiales[".afterEditAction"] = 1;
	$tdataingreso_de_materiales[".closePopupAfterEdit"] = 1;
	$tdataingreso_de_materiales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataingreso_de_materiales[".add"] = true;
$tdataingreso_de_materiales[".afterAddAction"] = 1;
$tdataingreso_de_materiales[".closePopupAfterAdd"] = 1;
$tdataingreso_de_materiales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataingreso_de_materiales[".list"] = true;
}



$tdataingreso_de_materiales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataingreso_de_materiales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataingreso_de_materiales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataingreso_de_materiales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataingreso_de_materiales[".printFriendly"] = true;
}



$tdataingreso_de_materiales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataingreso_de_materiales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataingreso_de_materiales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataingreso_de_materiales[".isUseAjaxSuggest"] = true;



																														

$tdataingreso_de_materiales[".ajaxCodeSnippetAdded"] = false;

$tdataingreso_de_materiales[".buttonsAdded"] = false;

$tdataingreso_de_materiales[".addPageEvents"] = false;

// use timepicker for search panel
$tdataingreso_de_materiales[".isUseTimeForSearch"] = false;


$tdataingreso_de_materiales[".badgeColor"] = "d2691e";


$tdataingreso_de_materiales[".allSearchFields"] = array();
$tdataingreso_de_materiales[".filterFields"] = array();
$tdataingreso_de_materiales[".requiredSearchFields"] = array();

$tdataingreso_de_materiales[".googleLikeFields"] = array();
$tdataingreso_de_materiales[".googleLikeFields"][] = "Id Ingreso";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Fecha de Consumo";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Material";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Cantidad";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Ticket";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Tecnico";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Empresa";
$tdataingreso_de_materiales[".googleLikeFields"][] = "Tipo de Actividad";



$tdataingreso_de_materiales[".tableType"] = "list";

$tdataingreso_de_materiales[".printerPageOrientation"] = 0;
$tdataingreso_de_materiales[".nPrinterPageScale"] = 100;

$tdataingreso_de_materiales[".nPrinterSplitRecords"] = 40;

$tdataingreso_de_materiales[".geocodingEnabled"] = false;




$tdataingreso_de_materiales[".isDisplayLoading"] = true;






$tdataingreso_de_materiales[".pageSize"] = 20;

$tdataingreso_de_materiales[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Consumo` DESC";
$tdataingreso_de_materiales[".strOrderBy"] = $tstrOrderBy;

$tdataingreso_de_materiales[".orderindexes"] = array();
	$tdataingreso_de_materiales[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Consumo`");



$tdataingreso_de_materiales[".sqlHead"] = "SELECT `Id Ingreso`,  `Fecha de Consumo`,  Material,  Cantidad,  Ticket,  Tecnico,  Empresa,  `Tipo de Actividad`";
$tdataingreso_de_materiales[".sqlFrom"] = "FROM `ingreso de materiales`";
$tdataingreso_de_materiales[".sqlWhereExpr"] = "";
$tdataingreso_de_materiales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataingreso_de_materiales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataingreso_de_materiales[".arrGroupsPerPage"] = $arrGPP;

$tdataingreso_de_materiales[".highlightSearchResults"] = true;

$tableKeysingreso_de_materiales = array();
$tableKeysingreso_de_materiales[] = "Id Ingreso";
$tdataingreso_de_materiales[".Keys"] = $tableKeysingreso_de_materiales;


$tdataingreso_de_materiales[".hideMobileList"] = array();




//	Id Ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Ingreso";
	$fdata["GoodName"] = "Id_Ingreso";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Id_Ingreso");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id Ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id Ingreso`";

	
	
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


	$tdataingreso_de_materiales["Id Ingreso"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Id Ingreso";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Fecha_de_Consumo");
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


	$tdataingreso_de_materiales["Fecha de Consumo"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Fecha de Consumo";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Material");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataingreso_de_materiales["Material"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Material";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Cantidad");
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


	$tdataingreso_de_materiales["Cantidad"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Cantidad";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Ticket");
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

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tickets";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Tickets";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tickets";

	

	
	$edata["LookupOrderBy"] = "Tickets";

	
	
	
	

	
	
	
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


	$tdataingreso_de_materiales["Ticket"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Ticket";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Tecnico");
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


	$tdataingreso_de_materiales["Tecnico"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Empresa");
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


	$tdataingreso_de_materiales["Empresa"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Empresa";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("ingreso_de_materiales","Tipo_de_Actividad");
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
	$edata["LookupValues"][] = "Instalación";
	$edata["LookupValues"][] = "Mantenimiento ";
	$edata["LookupValues"][] = "Retiro";

	
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


	$tdataingreso_de_materiales["Tipo de Actividad"] = $fdata;
		$tdataingreso_de_materiales[".searchableFields"][] = "Tipo de Actividad";


$tables_data["ingreso de materiales"]=&$tdataingreso_de_materiales;
$field_labels["ingreso_de_materiales"] = &$fieldLabelsingreso_de_materiales;
$fieldToolTips["ingreso_de_materiales"] = &$fieldToolTipsingreso_de_materiales;
$placeHolders["ingreso_de_materiales"] = &$placeHoldersingreso_de_materiales;
$page_titles["ingreso_de_materiales"] = &$pageTitlesingreso_de_materiales;


changeTextControlsToDate( "ingreso de materiales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ingreso de materiales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ingreso de materiales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tickets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tickets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ingreso de materiales"][0] = $masterParams;
				$masterTablesData["ingreso de materiales"][0]["masterKeys"] = array();
	$masterTablesData["ingreso de materiales"][0]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de materiales"][0]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de materiales"][0]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][0]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][0]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["ingreso de materiales"][0]["detailKeys"] = array();
	$masterTablesData["ingreso de materiales"][0]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de materiales"][0]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de materiales"][0]["detailKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][0]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][0]["detailKeys"][]="Tipo de Actividad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Instalaciones";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "instalaciones";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ingreso de materiales"][1] = $masterParams;
				$masterTablesData["ingreso de materiales"][1]["masterKeys"] = array();
	$masterTablesData["ingreso de materiales"][1]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de materiales"][1]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de materiales"][1]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][1]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][1]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["ingreso de materiales"][1]["detailKeys"] = array();
	$masterTablesData["ingreso de materiales"][1]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de materiales"][1]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de materiales"][1]["detailKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][1]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][1]["detailKeys"][]="Tipo de Actividad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Mantenimientos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mantenimientos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ingreso de materiales"][2] = $masterParams;
				$masterTablesData["ingreso de materiales"][2]["masterKeys"] = array();
	$masterTablesData["ingreso de materiales"][2]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de materiales"][2]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de materiales"][2]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][2]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][2]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["ingreso de materiales"][2]["detailKeys"] = array();
	$masterTablesData["ingreso de materiales"][2]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de materiales"][2]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de materiales"][2]["detailKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][2]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][2]["detailKeys"][]="Tipo de Actividad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Consultar Ticket Para Modificarlo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "consultar_ticket_para_modificarlo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ingreso de materiales"][3] = $masterParams;
				$masterTablesData["ingreso de materiales"][3]["masterKeys"] = array();
	$masterTablesData["ingreso de materiales"][3]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de materiales"][3]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de materiales"][3]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][3]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][3]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["ingreso de materiales"][3]["detailKeys"] = array();
	$masterTablesData["ingreso de materiales"][3]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de materiales"][3]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de materiales"][3]["detailKeys"][]="Tecnico";
				$masterTablesData["ingreso de materiales"][3]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de materiales"][3]["detailKeys"][]="Tipo de Actividad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ingreso_de_materiales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id Ingreso`,  `Fecha de Consumo`,  Material,  Cantidad,  Ticket,  Tecnico,  Empresa,  `Tipo de Actividad`";
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
	"m_strName" => "Id Ingreso",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto6["m_sql"] = "`Id Ingreso`";
$proto6["m_srcTableName"] = "ingreso de materiales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto8["m_sql"] = "`Fecha de Consumo`";
$proto8["m_srcTableName"] = "ingreso de materiales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "ingreso de materiales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "ingreso de materiales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto14["m_sql"] = "Ticket";
$proto14["m_srcTableName"] = "ingreso de materiales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto16["m_sql"] = "Tecnico";
$proto16["m_srcTableName"] = "ingreso de materiales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "ingreso de materiales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto20["m_sql"] = "`Tipo de Actividad`";
$proto20["m_srcTableName"] = "ingreso de materiales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ingreso de materiales";
$proto23["m_srcTableName"] = "ingreso de materiales";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Id Ingreso";
$proto23["m_columns"][] = "Fecha de Consumo";
$proto23["m_columns"][] = "Material";
$proto23["m_columns"][] = "Cantidad";
$proto23["m_columns"][] = "Ticket";
$proto23["m_columns"][] = "Tecnico";
$proto23["m_columns"][] = "Empresa";
$proto23["m_columns"][] = "Tipo de Actividad";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`ingreso de materiales`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "ingreso de materiales";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "ingreso de materiales"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ingreso de materiales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ingreso_de_materiales = createSqlQuery_ingreso_de_materiales();


	
												;

								

$tdataingreso_de_materiales[".sqlquery"] = $queryData_ingreso_de_materiales;



include_once(getabspath("include/ingreso_de_materiales_events.php"));
$tdataingreso_de_materiales[".hasEvents"] = true;

?>