<?php
$tdataingreso_de_equipo = array();
$tdataingreso_de_equipo[".searchableFields"] = array();
$tdataingreso_de_equipo[".ShortName"] = "ingreso_de_equipo";
$tdataingreso_de_equipo[".OwnerID"] = "tecnico";
$tdataingreso_de_equipo[".OriginalTable"] = "ingreso de equipo";


$tdataingreso_de_equipo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataingreso_de_equipo[".originalPagesByType"] = $tdataingreso_de_equipo[".pagesByType"];
$tdataingreso_de_equipo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataingreso_de_equipo[".originalPages"] = $tdataingreso_de_equipo[".pages"];
$tdataingreso_de_equipo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataingreso_de_equipo[".originalDefaultPages"] = $tdataingreso_de_equipo[".defaultPages"];

//	field labels
$fieldLabelsingreso_de_equipo = array();
$fieldToolTipsingreso_de_equipo = array();
$pageTitlesingreso_de_equipo = array();
$placeHoldersingreso_de_equipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsingreso_de_equipo["Spanish"] = array();
	$fieldToolTipsingreso_de_equipo["Spanish"] = array();
	$placeHoldersingreso_de_equipo["Spanish"] = array();
	$pageTitlesingreso_de_equipo["Spanish"] = array();
	$fieldLabelsingreso_de_equipo["Spanish"]["Id_Ingresp"] = "Id Ingreso";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Id_Ingresp"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Id_Ingresp"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Fecha_de_Entrega"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["Serial"] = "Serial";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Serial"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Serial"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["tecnico"] = "Tecnico";
	$fieldToolTipsingreso_de_equipo["Spanish"]["tecnico"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["tecnico"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Ticket"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Ticket"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsingreso_de_equipo["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsingreso_de_equipo["Spanish"]["Empresa"] = "";
	$placeHoldersingreso_de_equipo["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsingreso_de_equipo["Spanish"]))
		$tdataingreso_de_equipo[".isUseToolTips"] = true;
}


	$tdataingreso_de_equipo[".NCSearch"] = true;



$tdataingreso_de_equipo[".shortTableName"] = "ingreso_de_equipo";
$tdataingreso_de_equipo[".nSecOptions"] = 1;

$tdataingreso_de_equipo[".mainTableOwnerID"] = "tecnico";
$tdataingreso_de_equipo[".entityType"] = 0;
$tdataingreso_de_equipo[".connId"] = "mega_ya_at_localhost";


$tdataingreso_de_equipo[".strOriginalTableName"] = "ingreso de equipo";

	



$tdataingreso_de_equipo[".showAddInPopup"] = false;

$tdataingreso_de_equipo[".showEditInPopup"] = false;

$tdataingreso_de_equipo[".showViewInPopup"] = false;

$tdataingreso_de_equipo[".listAjax"] = false;
//	temporary
//$tdataingreso_de_equipo[".listAjax"] = false;

	$tdataingreso_de_equipo[".audit"] = true;

	$tdataingreso_de_equipo[".locking"] = false;


$pages = $tdataingreso_de_equipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataingreso_de_equipo[".edit"] = true;
	$tdataingreso_de_equipo[".afterEditAction"] = 0;
	$tdataingreso_de_equipo[".closePopupAfterEdit"] = 1;
	$tdataingreso_de_equipo[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataingreso_de_equipo[".add"] = true;
$tdataingreso_de_equipo[".afterAddAction"] = 1;
$tdataingreso_de_equipo[".closePopupAfterAdd"] = 1;
$tdataingreso_de_equipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataingreso_de_equipo[".list"] = true;
}



$tdataingreso_de_equipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataingreso_de_equipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataingreso_de_equipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataingreso_de_equipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataingreso_de_equipo[".printFriendly"] = true;
}



$tdataingreso_de_equipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataingreso_de_equipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataingreso_de_equipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataingreso_de_equipo[".isUseAjaxSuggest"] = true;



																														

$tdataingreso_de_equipo[".ajaxCodeSnippetAdded"] = false;

$tdataingreso_de_equipo[".buttonsAdded"] = false;

$tdataingreso_de_equipo[".addPageEvents"] = true;

// use timepicker for search panel
$tdataingreso_de_equipo[".isUseTimeForSearch"] = false;


$tdataingreso_de_equipo[".badgeColor"] = "edca00";


$tdataingreso_de_equipo[".allSearchFields"] = array();
$tdataingreso_de_equipo[".filterFields"] = array();
$tdataingreso_de_equipo[".requiredSearchFields"] = array();

$tdataingreso_de_equipo[".googleLikeFields"] = array();
$tdataingreso_de_equipo[".googleLikeFields"][] = "Id Ingresp";
$tdataingreso_de_equipo[".googleLikeFields"][] = "Fecha de Entrega";
$tdataingreso_de_equipo[".googleLikeFields"][] = "Serial";
$tdataingreso_de_equipo[".googleLikeFields"][] = "tecnico";
$tdataingreso_de_equipo[".googleLikeFields"][] = "Ticket";
$tdataingreso_de_equipo[".googleLikeFields"][] = "Fecha de Consumo";
$tdataingreso_de_equipo[".googleLikeFields"][] = "Empresa";



$tdataingreso_de_equipo[".tableType"] = "list";

$tdataingreso_de_equipo[".printerPageOrientation"] = 0;
$tdataingreso_de_equipo[".nPrinterPageScale"] = 100;

$tdataingreso_de_equipo[".nPrinterSplitRecords"] = 40;

$tdataingreso_de_equipo[".geocodingEnabled"] = false;




$tdataingreso_de_equipo[".isDisplayLoading"] = true;






$tdataingreso_de_equipo[".pageSize"] = 20;

$tdataingreso_de_equipo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Entrega` DESC";
$tdataingreso_de_equipo[".strOrderBy"] = $tstrOrderBy;

$tdataingreso_de_equipo[".orderindexes"] = array();
	$tdataingreso_de_equipo[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Entrega`");



$tdataingreso_de_equipo[".sqlHead"] = "SELECT `Id Ingresp`,  `Fecha de Entrega`,  Serial,  tecnico,  Ticket,  `Fecha de Consumo`,  Empresa";
$tdataingreso_de_equipo[".sqlFrom"] = "FROM `ingreso de equipo`";
$tdataingreso_de_equipo[".sqlWhereExpr"] = "";
$tdataingreso_de_equipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataingreso_de_equipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataingreso_de_equipo[".arrGroupsPerPage"] = $arrGPP;

$tdataingreso_de_equipo[".highlightSearchResults"] = true;

$tableKeysingreso_de_equipo = array();
$tableKeysingreso_de_equipo[] = "Id Ingresp";
$tdataingreso_de_equipo[".Keys"] = $tableKeysingreso_de_equipo;


$tdataingreso_de_equipo[".hideMobileList"] = array();




//	Id Ingresp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Ingresp";
	$fdata["GoodName"] = "Id_Ingresp";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Id_Ingresp");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id Ingresp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id Ingresp`";

	
	
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


	$tdataingreso_de_equipo["Id Ingresp"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Id Ingresp";
//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Fecha_de_Entrega");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Entrega";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Entrega`";

	
	
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


	$tdataingreso_de_equipo["Fecha de Entrega"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Fecha de Entrega";
//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Serial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Serial";

	
	
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
	$edata["LookupTable"] = "ingreso de equipo";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Serial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Serial";

	

	
	$edata["LookupOrderBy"] = "Serial";

		$edata["LookupDesc"] = true;

	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% Este Equipo ya existe.", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataingreso_de_equipo["Serial"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Serial";
//	tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tecnico";
	$fdata["GoodName"] = "tecnico";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","tecnico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tecnico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tecnico";

	
	
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


	$tdataingreso_de_equipo["tecnico"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "tecnico";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Ticket");
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


	$tdataingreso_de_equipo["Ticket"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Ticket";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Fecha_de_Consumo");
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
		$fdata["filterTotalFields"] = "Id Ingresp";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataingreso_de_equipo["Fecha de Consumo"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Fecha de Consumo";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("ingreso_de_equipo","Empresa");
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

	

	
	$edata["LookupOrderBy"] = "idempresa";

	
	
	
	

	
	
	
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


	$tdataingreso_de_equipo["Empresa"] = $fdata;
		$tdataingreso_de_equipo[".searchableFields"][] = "Empresa";


$tables_data["ingreso de equipo"]=&$tdataingreso_de_equipo;
$field_labels["ingreso_de_equipo"] = &$fieldLabelsingreso_de_equipo;
$fieldToolTips["ingreso_de_equipo"] = &$fieldToolTipsingreso_de_equipo;
$placeHolders["ingreso_de_equipo"] = &$placeHoldersingreso_de_equipo;
$page_titles["ingreso_de_equipo"] = &$pageTitlesingreso_de_equipo;


changeTextControlsToDate( "ingreso de equipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ingreso de equipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ingreso de equipo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tickets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tickets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ingreso de equipo"][0] = $masterParams;
				$masterTablesData["ingreso de equipo"][0]["masterKeys"] = array();
	$masterTablesData["ingreso de equipo"][0]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de equipo"][0]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de equipo"][0]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][0]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de equipo"][0]["detailKeys"] = array();
	$masterTablesData["ingreso de equipo"][0]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de equipo"][0]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de equipo"][0]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][0]["detailKeys"][]="tecnico";
		
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
					$masterTablesData["ingreso de equipo"][1] = $masterParams;
				$masterTablesData["ingreso de equipo"][1]["masterKeys"] = array();
	$masterTablesData["ingreso de equipo"][1]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de equipo"][1]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de equipo"][1]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de equipo"][1]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][1]["detailKeys"] = array();
	$masterTablesData["ingreso de equipo"][1]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de equipo"][1]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de equipo"][1]["detailKeys"][]="tecnico";
				$masterTablesData["ingreso de equipo"][1]["detailKeys"][]="Empresa";
		
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
					$masterTablesData["ingreso de equipo"][2] = $masterParams;
				$masterTablesData["ingreso de equipo"][2]["masterKeys"] = array();
	$masterTablesData["ingreso de equipo"][2]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de equipo"][2]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de equipo"][2]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de equipo"][2]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][2]["detailKeys"] = array();
	$masterTablesData["ingreso de equipo"][2]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de equipo"][2]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de equipo"][2]["detailKeys"][]="tecnico";
				$masterTablesData["ingreso de equipo"][2]["detailKeys"][]="Empresa";
		
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
					$masterTablesData["ingreso de equipo"][3] = $masterParams;
				$masterTablesData["ingreso de equipo"][3]["masterKeys"] = array();
	$masterTablesData["ingreso de equipo"][3]["masterKeys"][]="Tickets";
				$masterTablesData["ingreso de equipo"][3]["masterKeys"][]="Fecha de atencioón";
				$masterTablesData["ingreso de equipo"][3]["masterKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][3]["masterKeys"][]="Tecnico";
				$masterTablesData["ingreso de equipo"][3]["detailKeys"] = array();
	$masterTablesData["ingreso de equipo"][3]["detailKeys"][]="Ticket";
				$masterTablesData["ingreso de equipo"][3]["detailKeys"][]="Fecha de Consumo";
				$masterTablesData["ingreso de equipo"][3]["detailKeys"][]="Empresa";
				$masterTablesData["ingreso de equipo"][3]["detailKeys"][]="tecnico";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ingreso_de_equipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id Ingresp`,  `Fecha de Entrega`,  Serial,  tecnico,  Ticket,  `Fecha de Consumo`,  Empresa";
$proto0["m_strFrom"] = "FROM `ingreso de equipo`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de Entrega` DESC";
	
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
	"m_strName" => "Id Ingresp",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto6["m_sql"] = "`Id Ingresp`";
$proto6["m_srcTableName"] = "ingreso de equipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto8["m_sql"] = "`Fecha de Entrega`";
$proto8["m_srcTableName"] = "ingreso de equipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto10["m_sql"] = "Serial";
$proto10["m_srcTableName"] = "ingreso de equipo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tecnico",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto12["m_sql"] = "tecnico";
$proto12["m_srcTableName"] = "ingreso de equipo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto14["m_sql"] = "Ticket";
$proto14["m_srcTableName"] = "ingreso de equipo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto16["m_sql"] = "`Fecha de Consumo`";
$proto16["m_srcTableName"] = "ingreso de equipo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "ingreso de equipo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ingreso de equipo";
$proto21["m_srcTableName"] = "ingreso de equipo";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id Ingresp";
$proto21["m_columns"][] = "Fecha de Entrega";
$proto21["m_columns"][] = "Serial";
$proto21["m_columns"][] = "tecnico";
$proto21["m_columns"][] = "Ticket";
$proto21["m_columns"][] = "Fecha de Consumo";
$proto21["m_columns"][] = "Empresa";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`ingreso de equipo`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ingreso de equipo";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "ingreso de equipo"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ingreso de equipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ingreso_de_equipo = createSqlQuery_ingreso_de_equipo();


	
												;

							

$tdataingreso_de_equipo[".sqlquery"] = $queryData_ingreso_de_equipo;



include_once(getabspath("include/ingreso_de_equipo_events.php"));
$tdataingreso_de_equipo[".hasEvents"] = true;

?>