<?php
$tdatamaterial_recuperado = array();
$tdatamaterial_recuperado[".searchableFields"] = array();
$tdatamaterial_recuperado[".ShortName"] = "material_recuperado";
$tdatamaterial_recuperado[".OwnerID"] = "Tecnico";
$tdatamaterial_recuperado[".OriginalTable"] = "ingreso de materiales";


$tdatamaterial_recuperado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" );
$tdatamaterial_recuperado[".originalPagesByType"] = $tdatamaterial_recuperado[".pagesByType"];
$tdatamaterial_recuperado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" ) );
$tdatamaterial_recuperado[".originalPages"] = $tdatamaterial_recuperado[".pages"];
$tdatamaterial_recuperado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"view\":\"view\"}" );
$tdatamaterial_recuperado[".originalDefaultPages"] = $tdatamaterial_recuperado[".defaultPages"];

//	field labels
$fieldLabelsmaterial_recuperado = array();
$fieldToolTipsmaterial_recuperado = array();
$pageTitlesmaterial_recuperado = array();
$placeHoldersmaterial_recuperado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaterial_recuperado["Spanish"] = array();
	$fieldToolTipsmaterial_recuperado["Spanish"] = array();
	$placeHoldersmaterial_recuperado["Spanish"] = array();
	$pageTitlesmaterial_recuperado["Spanish"] = array();
	$fieldLabelsmaterial_recuperado["Spanish"]["Id_Ingreso"] = "Id Ingreso";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Id_Ingreso"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Id_Ingreso"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Material"] = "Material";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Material"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Material"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Cantidad"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Cantidad"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Ticket"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Ticket"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Tecnico"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Tecnico"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Empresa"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Empresa"] = "";
	$fieldLabelsmaterial_recuperado["Spanish"]["Tipo_de_Actividad"] = "Tipo de Actividad";
	$fieldToolTipsmaterial_recuperado["Spanish"]["Tipo_de_Actividad"] = "";
	$placeHoldersmaterial_recuperado["Spanish"]["Tipo_de_Actividad"] = "";
	if (count($fieldToolTipsmaterial_recuperado["Spanish"]))
		$tdatamaterial_recuperado[".isUseToolTips"] = true;
}


	$tdatamaterial_recuperado[".NCSearch"] = true;



$tdatamaterial_recuperado[".shortTableName"] = "material_recuperado";
$tdatamaterial_recuperado[".nSecOptions"] = 1;

$tdatamaterial_recuperado[".mainTableOwnerID"] = "Tecnico";
$tdatamaterial_recuperado[".entityType"] = 1;
$tdatamaterial_recuperado[".connId"] = "mega_ya_at_localhost";


$tdatamaterial_recuperado[".strOriginalTableName"] = "ingreso de materiales";

	



$tdatamaterial_recuperado[".showAddInPopup"] = false;

$tdatamaterial_recuperado[".showEditInPopup"] = false;

$tdatamaterial_recuperado[".showViewInPopup"] = false;

$tdatamaterial_recuperado[".listAjax"] = false;
//	temporary
//$tdatamaterial_recuperado[".listAjax"] = false;

	$tdatamaterial_recuperado[".audit"] = true;

	$tdatamaterial_recuperado[".locking"] = false;


$pages = $tdatamaterial_recuperado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamaterial_recuperado[".edit"] = true;
	$tdatamaterial_recuperado[".afterEditAction"] = 1;
	$tdatamaterial_recuperado[".closePopupAfterEdit"] = 1;
	$tdatamaterial_recuperado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamaterial_recuperado[".add"] = true;
$tdatamaterial_recuperado[".afterAddAction"] = 1;
$tdatamaterial_recuperado[".closePopupAfterAdd"] = 1;
$tdatamaterial_recuperado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamaterial_recuperado[".list"] = true;
}



$tdatamaterial_recuperado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamaterial_recuperado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamaterial_recuperado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamaterial_recuperado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamaterial_recuperado[".printFriendly"] = true;
}



$tdatamaterial_recuperado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamaterial_recuperado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamaterial_recuperado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamaterial_recuperado[".isUseAjaxSuggest"] = true;



												

$tdatamaterial_recuperado[".ajaxCodeSnippetAdded"] = false;

$tdatamaterial_recuperado[".buttonsAdded"] = false;

$tdatamaterial_recuperado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaterial_recuperado[".isUseTimeForSearch"] = false;


$tdatamaterial_recuperado[".badgeColor"] = "d2af80";


$tdatamaterial_recuperado[".allSearchFields"] = array();
$tdatamaterial_recuperado[".filterFields"] = array();
$tdatamaterial_recuperado[".requiredSearchFields"] = array();

$tdatamaterial_recuperado[".googleLikeFields"] = array();
$tdatamaterial_recuperado[".googleLikeFields"][] = "Id Ingreso";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Fecha de Consumo";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Material";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Cantidad";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Ticket";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Tecnico";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Empresa";
$tdatamaterial_recuperado[".googleLikeFields"][] = "Tipo de Actividad";



$tdatamaterial_recuperado[".tableType"] = "list";

$tdatamaterial_recuperado[".printerPageOrientation"] = 0;
$tdatamaterial_recuperado[".nPrinterPageScale"] = 100;

$tdatamaterial_recuperado[".nPrinterSplitRecords"] = 40;

$tdatamaterial_recuperado[".geocodingEnabled"] = false;




$tdatamaterial_recuperado[".isDisplayLoading"] = true;






$tdatamaterial_recuperado[".pageSize"] = 20;

$tdatamaterial_recuperado[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Consumo` DESC";
$tdatamaterial_recuperado[".strOrderBy"] = $tstrOrderBy;

$tdatamaterial_recuperado[".orderindexes"] = array();
	$tdatamaterial_recuperado[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Consumo`");



$tdatamaterial_recuperado[".sqlHead"] = "SELECT `Id Ingreso`,  `Fecha de Consumo`,  Material,  Cantidad,  Ticket,  Tecnico,  Empresa,  `Tipo de Actividad`";
$tdatamaterial_recuperado[".sqlFrom"] = "FROM `ingreso de materiales`";
$tdatamaterial_recuperado[".sqlWhereExpr"] = "(`Tipo de Actividad` like'R%')";
$tdatamaterial_recuperado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaterial_recuperado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaterial_recuperado[".arrGroupsPerPage"] = $arrGPP;

$tdatamaterial_recuperado[".highlightSearchResults"] = true;

$tableKeysmaterial_recuperado = array();
$tableKeysmaterial_recuperado[] = "Id Ingreso";
$tdatamaterial_recuperado[".Keys"] = $tableKeysmaterial_recuperado;


$tdatamaterial_recuperado[".hideMobileList"] = array();




//	Id Ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Ingreso";
	$fdata["GoodName"] = "Id_Ingreso";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Id_Ingreso");
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


	$tdatamaterial_recuperado["Id Ingreso"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Id Ingreso";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Fecha_de_Consumo");
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


	$tdatamaterial_recuperado["Fecha de Consumo"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Fecha de Consumo";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Material");
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


	$tdatamaterial_recuperado["Material"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Material";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Cantidad");
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


	$tdatamaterial_recuperado["Cantidad"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Cantidad";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Ticket");
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


	$tdatamaterial_recuperado["Ticket"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Ticket";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Tecnico");
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


	$tdatamaterial_recuperado["Tecnico"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Empresa");
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


	$tdatamaterial_recuperado["Empresa"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Empresa";
//	Tipo de Actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Tipo de Actividad";
	$fdata["GoodName"] = "Tipo_de_Actividad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Recuperado","Tipo_de_Actividad");
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


	$tdatamaterial_recuperado["Tipo de Actividad"] = $fdata;
		$tdatamaterial_recuperado[".searchableFields"][] = "Tipo de Actividad";


$tables_data["Material Recuperado"]=&$tdatamaterial_recuperado;
$field_labels["Material_Recuperado"] = &$fieldLabelsmaterial_recuperado;
$fieldToolTips["Material_Recuperado"] = &$fieldToolTipsmaterial_recuperado;
$placeHolders["Material_Recuperado"] = &$placeHoldersmaterial_recuperado;
$page_titles["Material_Recuperado"] = &$pageTitlesmaterial_recuperado;


changeTextControlsToDate( "Material Recuperado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Material Recuperado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Material Recuperado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Retiros";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "retiros";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Material Recuperado"][0] = $masterParams;
				$masterTablesData["Material Recuperado"][0]["masterKeys"] = array();
	$masterTablesData["Material Recuperado"][0]["masterKeys"][]="Tickets";
				$masterTablesData["Material Recuperado"][0]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["Material Recuperado"][0]["masterKeys"][]="Tecnico";
				$masterTablesData["Material Recuperado"][0]["masterKeys"][]="Empresa";
				$masterTablesData["Material Recuperado"][0]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["Material Recuperado"][0]["detailKeys"] = array();
	$masterTablesData["Material Recuperado"][0]["detailKeys"][]="Ticket";
				$masterTablesData["Material Recuperado"][0]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["Material Recuperado"][0]["detailKeys"][]="Tecnico";
				$masterTablesData["Material Recuperado"][0]["detailKeys"][]="Empresa";
				$masterTablesData["Material Recuperado"][0]["detailKeys"][]="Tipo de Actividad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_material_recuperado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id Ingreso`,  `Fecha de Consumo`,  Material,  Cantidad,  Ticket,  Tecnico,  Empresa,  `Tipo de Actividad`";
$proto0["m_strFrom"] = "FROM `ingreso de materiales`";
$proto0["m_strWhere"] = "(`Tipo de Actividad` like'R%')";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de Consumo` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Tipo de Actividad` like'R%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
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
	"m_strName" => "Id Ingreso",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto6["m_sql"] = "`Id Ingreso`";
$proto6["m_srcTableName"] = "Material Recuperado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto8["m_sql"] = "`Fecha de Consumo`";
$proto8["m_srcTableName"] = "Material Recuperado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "Material Recuperado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "Material Recuperado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto14["m_sql"] = "Ticket";
$proto14["m_srcTableName"] = "Material Recuperado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto16["m_sql"] = "Tecnico";
$proto16["m_srcTableName"] = "Material Recuperado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "Material Recuperado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Actividad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Material Recuperado"
));

$proto20["m_sql"] = "`Tipo de Actividad`";
$proto20["m_srcTableName"] = "Material Recuperado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ingreso de materiales";
$proto23["m_srcTableName"] = "Material Recuperado";
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
$proto22["m_srcTableName"] = "Material Recuperado";
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
	"m_srcTableName" => "Material Recuperado"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Material Recuperado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_material_recuperado = createSqlQuery_material_recuperado();


	
												;

								

$tdatamaterial_recuperado[".sqlquery"] = $queryData_material_recuperado;



include_once(getabspath("include/material_recuperado_events.php"));
$tdatamaterial_recuperado[".hasEvents"] = true;

?>