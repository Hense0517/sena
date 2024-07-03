<?php
$tdataonts_cargadas = array();
$tdataonts_cargadas[".searchableFields"] = array();
$tdataonts_cargadas[".ShortName"] = "onts_cargadas";
$tdataonts_cargadas[".OwnerID"] = "tecnico";
$tdataonts_cargadas[".OriginalTable"] = "ingreso de equipo";


$tdataonts_cargadas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataonts_cargadas[".originalPagesByType"] = $tdataonts_cargadas[".pagesByType"];
$tdataonts_cargadas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataonts_cargadas[".originalPages"] = $tdataonts_cargadas[".pages"];
$tdataonts_cargadas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataonts_cargadas[".originalDefaultPages"] = $tdataonts_cargadas[".defaultPages"];

//	field labels
$fieldLabelsonts_cargadas = array();
$fieldToolTipsonts_cargadas = array();
$pageTitlesonts_cargadas = array();
$placeHoldersonts_cargadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsonts_cargadas["Spanish"] = array();
	$fieldToolTipsonts_cargadas["Spanish"] = array();
	$placeHoldersonts_cargadas["Spanish"] = array();
	$pageTitlesonts_cargadas["Spanish"] = array();
	$fieldLabelsonts_cargadas["Spanish"]["Id_Ingresp"] = "Id Ingresp";
	$fieldToolTipsonts_cargadas["Spanish"]["Id_Ingresp"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Id_Ingresp"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipsonts_cargadas["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Fecha_de_Entrega"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["Serial"] = "Serial";
	$fieldToolTipsonts_cargadas["Spanish"]["Serial"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Serial"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["tecnico"] = "Tecnico";
	$fieldToolTipsonts_cargadas["Spanish"]["tecnico"] = "";
	$placeHoldersonts_cargadas["Spanish"]["tecnico"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsonts_cargadas["Spanish"]["Ticket"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Ticket"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsonts_cargadas["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsonts_cargadas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsonts_cargadas["Spanish"]["Empresa"] = "";
	$placeHoldersonts_cargadas["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsonts_cargadas["Spanish"]))
		$tdataonts_cargadas[".isUseToolTips"] = true;
}


	$tdataonts_cargadas[".NCSearch"] = true;



$tdataonts_cargadas[".shortTableName"] = "onts_cargadas";
$tdataonts_cargadas[".nSecOptions"] = 1;

$tdataonts_cargadas[".mainTableOwnerID"] = "tecnico";
$tdataonts_cargadas[".entityType"] = 1;
$tdataonts_cargadas[".connId"] = "mega_ya_at_localhost";


$tdataonts_cargadas[".strOriginalTableName"] = "ingreso de equipo";

	



$tdataonts_cargadas[".showAddInPopup"] = false;

$tdataonts_cargadas[".showEditInPopup"] = false;

$tdataonts_cargadas[".showViewInPopup"] = false;

$tdataonts_cargadas[".listAjax"] = false;
//	temporary
//$tdataonts_cargadas[".listAjax"] = false;

	$tdataonts_cargadas[".audit"] = true;

	$tdataonts_cargadas[".locking"] = false;


$pages = $tdataonts_cargadas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataonts_cargadas[".edit"] = true;
	$tdataonts_cargadas[".afterEditAction"] = 1;
	$tdataonts_cargadas[".closePopupAfterEdit"] = 1;
	$tdataonts_cargadas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataonts_cargadas[".add"] = true;
$tdataonts_cargadas[".afterAddAction"] = 1;
$tdataonts_cargadas[".closePopupAfterAdd"] = 1;
$tdataonts_cargadas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataonts_cargadas[".list"] = true;
}



$tdataonts_cargadas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataonts_cargadas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataonts_cargadas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataonts_cargadas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataonts_cargadas[".printFriendly"] = true;
}



$tdataonts_cargadas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataonts_cargadas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataonts_cargadas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataonts_cargadas[".isUseAjaxSuggest"] = true;



						

$tdataonts_cargadas[".ajaxCodeSnippetAdded"] = false;

$tdataonts_cargadas[".buttonsAdded"] = false;

$tdataonts_cargadas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataonts_cargadas[".isUseTimeForSearch"] = false;


$tdataonts_cargadas[".badgeColor"] = "B22222";


$tdataonts_cargadas[".allSearchFields"] = array();
$tdataonts_cargadas[".filterFields"] = array();
$tdataonts_cargadas[".requiredSearchFields"] = array();

$tdataonts_cargadas[".googleLikeFields"] = array();
$tdataonts_cargadas[".googleLikeFields"][] = "Id Ingresp";
$tdataonts_cargadas[".googleLikeFields"][] = "Fecha de Entrega";
$tdataonts_cargadas[".googleLikeFields"][] = "Serial";
$tdataonts_cargadas[".googleLikeFields"][] = "tecnico";
$tdataonts_cargadas[".googleLikeFields"][] = "Ticket";
$tdataonts_cargadas[".googleLikeFields"][] = "Fecha de Consumo";
$tdataonts_cargadas[".googleLikeFields"][] = "Empresa";



$tdataonts_cargadas[".tableType"] = "list";

$tdataonts_cargadas[".printerPageOrientation"] = 0;
$tdataonts_cargadas[".nPrinterPageScale"] = 100;

$tdataonts_cargadas[".nPrinterSplitRecords"] = 40;

$tdataonts_cargadas[".geocodingEnabled"] = false;




$tdataonts_cargadas[".isDisplayLoading"] = true;






$tdataonts_cargadas[".pageSize"] = 20;

$tdataonts_cargadas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Entrega` DESC";
$tdataonts_cargadas[".strOrderBy"] = $tstrOrderBy;

$tdataonts_cargadas[".orderindexes"] = array();
	$tdataonts_cargadas[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Entrega`");



$tdataonts_cargadas[".sqlHead"] = "SELECT `Id Ingresp`,  `Fecha de Entrega`,  Serial,  tecnico,  Ticket,  `Fecha de Consumo`,  Empresa";
$tdataonts_cargadas[".sqlFrom"] = "FROM `ingreso de equipo`";
$tdataonts_cargadas[".sqlWhereExpr"] = "";
$tdataonts_cargadas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataonts_cargadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataonts_cargadas[".arrGroupsPerPage"] = $arrGPP;

$tdataonts_cargadas[".highlightSearchResults"] = true;

$tableKeysonts_cargadas = array();
$tableKeysonts_cargadas[] = "Id Ingresp";
$tdataonts_cargadas[".Keys"] = $tableKeysonts_cargadas;


$tdataonts_cargadas[".hideMobileList"] = array();




//	Id Ingresp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Ingresp";
	$fdata["GoodName"] = "Id_Ingresp";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Id_Ingresp");
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


	$tdataonts_cargadas["Id Ingresp"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Id Ingresp";
//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Fecha_de_Entrega");
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


	$tdataonts_cargadas["Fecha de Entrega"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Fecha de Entrega";
//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Serial");
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% Este Equipo ya existe.", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataonts_cargadas["Serial"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Serial";
//	tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tecnico";
	$fdata["GoodName"] = "tecnico";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","tecnico");
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


	$tdataonts_cargadas["tecnico"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "tecnico";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Ticket");
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


	$tdataonts_cargadas["Ticket"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Ticket";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Fecha_de_Consumo");
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


	$tdataonts_cargadas["Fecha de Consumo"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Fecha de Consumo";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Onts_Cargadas","Empresa");
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


	$tdataonts_cargadas["Empresa"] = $fdata;
		$tdataonts_cargadas[".searchableFields"][] = "Empresa";


$tables_data["Onts Cargadas"]=&$tdataonts_cargadas;
$field_labels["Onts_Cargadas"] = &$fieldLabelsonts_cargadas;
$fieldToolTips["Onts_Cargadas"] = &$fieldToolTipsonts_cargadas;
$placeHolders["Onts_Cargadas"] = &$placeHoldersonts_cargadas;
$page_titles["Onts_Cargadas"] = &$pageTitlesonts_cargadas;


changeTextControlsToDate( "Onts Cargadas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Onts Cargadas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Onts Cargadas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_onts_cargadas()
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
	"m_srcTableName" => "Onts Cargadas"
));

$proto6["m_sql"] = "`Id Ingresp`";
$proto6["m_srcTableName"] = "Onts Cargadas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto8["m_sql"] = "`Fecha de Entrega`";
$proto8["m_srcTableName"] = "Onts Cargadas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto10["m_sql"] = "Serial";
$proto10["m_srcTableName"] = "Onts Cargadas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tecnico",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto12["m_sql"] = "tecnico";
$proto12["m_srcTableName"] = "Onts Cargadas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto14["m_sql"] = "Ticket";
$proto14["m_srcTableName"] = "Onts Cargadas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto16["m_sql"] = "`Fecha de Consumo`";
$proto16["m_srcTableName"] = "Onts Cargadas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Onts Cargadas"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "Onts Cargadas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ingreso de equipo";
$proto21["m_srcTableName"] = "Onts Cargadas";
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
$proto20["m_srcTableName"] = "Onts Cargadas";
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
	"m_srcTableName" => "Onts Cargadas"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Onts Cargadas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_onts_cargadas = createSqlQuery_onts_cargadas();


	
												;

							

$tdataonts_cargadas[".sqlquery"] = $queryData_onts_cargadas;



$tdataonts_cargadas[".hasEvents"] = false;

?>