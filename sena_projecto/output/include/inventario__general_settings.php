<?php
$tdatainventario__general = array();
$tdatainventario__general[".searchableFields"] = array();
$tdatainventario__general[".ShortName"] = "inventario__general";
$tdatainventario__general[".OwnerID"] = "Tecnico";
$tdatainventario__general[".OriginalTable"] = "inventario_ general";


$tdatainventario__general[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainventario__general[".originalPagesByType"] = $tdatainventario__general[".pagesByType"];
$tdatainventario__general[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainventario__general[".originalPages"] = $tdatainventario__general[".pages"];
$tdatainventario__general[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainventario__general[".originalDefaultPages"] = $tdatainventario__general[".defaultPages"];

//	field labels
$fieldLabelsinventario__general = array();
$fieldToolTipsinventario__general = array();
$pageTitlesinventario__general = array();
$placeHoldersinventario__general = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventario__general["Spanish"] = array();
	$fieldToolTipsinventario__general["Spanish"] = array();
	$placeHoldersinventario__general["Spanish"] = array();
	$pageTitlesinventario__general["Spanish"] = array();
	$fieldLabelsinventario__general["Spanish"]["Id_Inventario"] = "Id Inventario";
	$fieldToolTipsinventario__general["Spanish"]["Id_Inventario"] = "";
	$placeHoldersinventario__general["Spanish"]["Id_Inventario"] = "";
	$fieldLabelsinventario__general["Spanish"]["Material"] = "Material";
	$fieldToolTipsinventario__general["Spanish"]["Material"] = "";
	$placeHoldersinventario__general["Spanish"]["Material"] = "";
	$fieldLabelsinventario__general["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsinventario__general["Spanish"]["Cantidad"] = "";
	$placeHoldersinventario__general["Spanish"]["Cantidad"] = "";
	$fieldLabelsinventario__general["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsinventario__general["Spanish"]["Tecnico"] = "";
	$placeHoldersinventario__general["Spanish"]["Tecnico"] = "";
	$fieldLabelsinventario__general["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsinventario__general["Spanish"]["Empresa"] = "";
	$placeHoldersinventario__general["Spanish"]["Empresa"] = "";
	$fieldLabelsinventario__general["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsinventario__general["Spanish"]["Fecha"] = "";
	$placeHoldersinventario__general["Spanish"]["Fecha"] = "";
	$fieldLabelsinventario__general["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsinventario__general["Spanish"]["Ticket"] = "";
	$placeHoldersinventario__general["Spanish"]["Ticket"] = "";
	$fieldLabelsinventario__general["Spanish"]["Id_Ingreso"] = "Id Ingreso";
	$fieldToolTipsinventario__general["Spanish"]["Id_Ingreso"] = "";
	$placeHoldersinventario__general["Spanish"]["Id_Ingreso"] = "";
	if (count($fieldToolTipsinventario__general["Spanish"]))
		$tdatainventario__general[".isUseToolTips"] = true;
}


	$tdatainventario__general[".NCSearch"] = true;



$tdatainventario__general[".shortTableName"] = "inventario__general";
$tdatainventario__general[".nSecOptions"] = 1;

$tdatainventario__general[".mainTableOwnerID"] = "Tecnico";
$tdatainventario__general[".entityType"] = 0;
$tdatainventario__general[".connId"] = "mega_ya_at_localhost";


$tdatainventario__general[".strOriginalTableName"] = "inventario_ general";

	



$tdatainventario__general[".showAddInPopup"] = false;

$tdatainventario__general[".showEditInPopup"] = false;

$tdatainventario__general[".showViewInPopup"] = false;

$tdatainventario__general[".listAjax"] = false;
//	temporary
//$tdatainventario__general[".listAjax"] = false;

	$tdatainventario__general[".audit"] = true;

	$tdatainventario__general[".locking"] = false;


$pages = $tdatainventario__general[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainventario__general[".edit"] = true;
	$tdatainventario__general[".afterEditAction"] = 1;
	$tdatainventario__general[".closePopupAfterEdit"] = 1;
	$tdatainventario__general[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainventario__general[".add"] = true;
$tdatainventario__general[".afterAddAction"] = 1;
$tdatainventario__general[".closePopupAfterAdd"] = 1;
$tdatainventario__general[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainventario__general[".list"] = true;
}



$tdatainventario__general[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainventario__general[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainventario__general[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainventario__general[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainventario__general[".printFriendly"] = true;
}



$tdatainventario__general[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainventario__general[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainventario__general[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainventario__general[".isUseAjaxSuggest"] = true;



						

$tdatainventario__general[".ajaxCodeSnippetAdded"] = false;

$tdatainventario__general[".buttonsAdded"] = false;

$tdatainventario__general[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventario__general[".isUseTimeForSearch"] = false;


$tdatainventario__general[".badgeColor"] = "2f4f4f";


$tdatainventario__general[".allSearchFields"] = array();
$tdatainventario__general[".filterFields"] = array();
$tdatainventario__general[".requiredSearchFields"] = array();

$tdatainventario__general[".googleLikeFields"] = array();
$tdatainventario__general[".googleLikeFields"][] = "Id_Inventario";
$tdatainventario__general[".googleLikeFields"][] = "Material";
$tdatainventario__general[".googleLikeFields"][] = "Cantidad";
$tdatainventario__general[".googleLikeFields"][] = "Tecnico";
$tdatainventario__general[".googleLikeFields"][] = "Empresa";
$tdatainventario__general[".googleLikeFields"][] = "Fecha";
$tdatainventario__general[".googleLikeFields"][] = "Ticket";
$tdatainventario__general[".googleLikeFields"][] = "Id Ingreso";



$tdatainventario__general[".tableType"] = "list";

$tdatainventario__general[".printerPageOrientation"] = 0;
$tdatainventario__general[".nPrinterPageScale"] = 100;

$tdatainventario__general[".nPrinterSplitRecords"] = 40;

$tdatainventario__general[".geocodingEnabled"] = false;










$tdatainventario__general[".pageSize"] = 20;

$tdatainventario__general[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Id_Inventario DESC";
$tdatainventario__general[".strOrderBy"] = $tstrOrderBy;

$tdatainventario__general[".orderindexes"] = array();
	$tdatainventario__general[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Id_Inventario`");



$tdatainventario__general[".sqlHead"] = "SELECT Id_Inventario,  Material,  Cantidad,  Tecnico,  Empresa,  Fecha,  Ticket,  `Id Ingreso`";
$tdatainventario__general[".sqlFrom"] = "FROM `inventario_ general`";
$tdatainventario__general[".sqlWhereExpr"] = "";
$tdatainventario__general[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventario__general[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventario__general[".arrGroupsPerPage"] = $arrGPP;

$tdatainventario__general[".highlightSearchResults"] = true;

$tableKeysinventario__general = array();
$tableKeysinventario__general[] = "Id_Inventario";
$tdatainventario__general[".Keys"] = $tableKeysinventario__general;


$tdatainventario__general[".hideMobileList"] = array();




//	Id_Inventario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Inventario";
	$fdata["GoodName"] = "Id_Inventario";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Id_Inventario");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Inventario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Inventario";

	
	
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


	$tdatainventario__general["Id_Inventario"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Id_Inventario";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Material");
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

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario__general["Material"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Material";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatainventario__general["Cantidad"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Cantidad";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Tecnico");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cedula";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nombre y Apellido";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario__general["Tecnico"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Empresa");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idempresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Empresa";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario__general["Empresa"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Empresa";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
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


	$tdatainventario__general["Fecha"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Fecha";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Ticket");
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


	$tdatainventario__general["Ticket"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Ticket";
//	Id Ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Id Ingreso";
	$fdata["GoodName"] = "Id_Ingreso";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general","Id_Ingreso");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatainventario__general["Id Ingreso"] = $fdata;
		$tdatainventario__general[".searchableFields"][] = "Id Ingreso";


$tables_data["inventario_ general"]=&$tdatainventario__general;
$field_labels["inventario__general"] = &$fieldLabelsinventario__general;
$fieldToolTips["inventario__general"] = &$fieldToolTipsinventario__general;
$placeHolders["inventario__general"] = &$placeHoldersinventario__general;
$page_titles["inventario__general"] = &$pageTitlesinventario__general;


changeTextControlsToDate( "inventario_ general" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["inventario_ general"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["inventario_ general"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_inventario__general()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Inventario,  Material,  Cantidad,  Tecnico,  Empresa,  Fecha,  Ticket,  `Id Ingreso`";
$proto0["m_strFrom"] = "FROM `inventario_ general`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Id_Inventario DESC";
	
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
	"m_strName" => "Id_Inventario",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto6["m_sql"] = "Id_Inventario";
$proto6["m_srcTableName"] = "inventario_ general";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto8["m_sql"] = "Material";
$proto8["m_srcTableName"] = "inventario_ general";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto10["m_sql"] = "Cantidad";
$proto10["m_srcTableName"] = "inventario_ general";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto12["m_sql"] = "Tecnico";
$proto12["m_srcTableName"] = "inventario_ general";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "inventario_ general";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto16["m_sql"] = "Fecha";
$proto16["m_srcTableName"] = "inventario_ general";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto18["m_sql"] = "Ticket";
$proto18["m_srcTableName"] = "inventario_ general";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Id Ingreso",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto20["m_sql"] = "`Id Ingreso`";
$proto20["m_srcTableName"] = "inventario_ general";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "inventario_ general";
$proto23["m_srcTableName"] = "inventario_ general";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Id_Inventario";
$proto23["m_columns"][] = "Material";
$proto23["m_columns"][] = "Cantidad";
$proto23["m_columns"][] = "Tecnico";
$proto23["m_columns"][] = "Empresa";
$proto23["m_columns"][] = "Fecha";
$proto23["m_columns"][] = "Ticket";
$proto23["m_columns"][] = "Id Ingreso";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`inventario_ general`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "inventario_ general";
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
	"m_strName" => "Id_Inventario",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventario_ general";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventario__general = createSqlQuery_inventario__general();


	
												;

								

$tdatainventario__general[".sqlquery"] = $queryData_inventario__general;



$tdatainventario__general[".hasEvents"] = false;

?>