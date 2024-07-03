<?php
$tdatacargue_de_onts_contratista = array();
$tdatacargue_de_onts_contratista[".searchableFields"] = array();
$tdatacargue_de_onts_contratista[".ShortName"] = "cargue_de_onts_contratista";
$tdatacargue_de_onts_contratista[".OwnerID"] = "Empresa";
$tdatacargue_de_onts_contratista[".OriginalTable"] = "ingreso de equipo";


$tdatacargue_de_onts_contratista[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacargue_de_onts_contratista[".originalPagesByType"] = $tdatacargue_de_onts_contratista[".pagesByType"];
$tdatacargue_de_onts_contratista[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacargue_de_onts_contratista[".originalPages"] = $tdatacargue_de_onts_contratista[".pages"];
$tdatacargue_de_onts_contratista[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacargue_de_onts_contratista[".originalDefaultPages"] = $tdatacargue_de_onts_contratista[".defaultPages"];

//	field labels
$fieldLabelscargue_de_onts_contratista = array();
$fieldToolTipscargue_de_onts_contratista = array();
$pageTitlescargue_de_onts_contratista = array();
$placeHolderscargue_de_onts_contratista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargue_de_onts_contratista["Spanish"] = array();
	$fieldToolTipscargue_de_onts_contratista["Spanish"] = array();
	$placeHolderscargue_de_onts_contratista["Spanish"] = array();
	$pageTitlescargue_de_onts_contratista["Spanish"] = array();
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Id_Ingresp"] = "Id Ingresp";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Id_Ingresp"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Id_Ingresp"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Fecha_de_Entrega"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Serial"] = "Serial";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Serial"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Serial"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["tecnico"] = "Tecnico";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["tecnico"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["tecnico"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Ticket"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Ticket"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelscargue_de_onts_contratista["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipscargue_de_onts_contratista["Spanish"]["Empresa"] = "";
	$placeHolderscargue_de_onts_contratista["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipscargue_de_onts_contratista["Spanish"]))
		$tdatacargue_de_onts_contratista[".isUseToolTips"] = true;
}


	$tdatacargue_de_onts_contratista[".NCSearch"] = true;



$tdatacargue_de_onts_contratista[".shortTableName"] = "cargue_de_onts_contratista";
$tdatacargue_de_onts_contratista[".nSecOptions"] = 1;

$tdatacargue_de_onts_contratista[".mainTableOwnerID"] = "Empresa";
$tdatacargue_de_onts_contratista[".entityType"] = 1;
$tdatacargue_de_onts_contratista[".connId"] = "mega_ya_at_localhost";


$tdatacargue_de_onts_contratista[".strOriginalTableName"] = "ingreso de equipo";

	



$tdatacargue_de_onts_contratista[".showAddInPopup"] = false;

$tdatacargue_de_onts_contratista[".showEditInPopup"] = false;

$tdatacargue_de_onts_contratista[".showViewInPopup"] = false;

$tdatacargue_de_onts_contratista[".listAjax"] = false;
//	temporary
//$tdatacargue_de_onts_contratista[".listAjax"] = false;

	$tdatacargue_de_onts_contratista[".audit"] = true;

	$tdatacargue_de_onts_contratista[".locking"] = false;


$pages = $tdatacargue_de_onts_contratista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargue_de_onts_contratista[".edit"] = true;
	$tdatacargue_de_onts_contratista[".afterEditAction"] = 1;
	$tdatacargue_de_onts_contratista[".closePopupAfterEdit"] = 1;
	$tdatacargue_de_onts_contratista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargue_de_onts_contratista[".add"] = true;
$tdatacargue_de_onts_contratista[".afterAddAction"] = 1;
$tdatacargue_de_onts_contratista[".closePopupAfterAdd"] = 1;
$tdatacargue_de_onts_contratista[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargue_de_onts_contratista[".list"] = true;
}



$tdatacargue_de_onts_contratista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargue_de_onts_contratista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargue_de_onts_contratista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargue_de_onts_contratista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargue_de_onts_contratista[".printFriendly"] = true;
}



$tdatacargue_de_onts_contratista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargue_de_onts_contratista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargue_de_onts_contratista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargue_de_onts_contratista[".isUseAjaxSuggest"] = true;



						

$tdatacargue_de_onts_contratista[".ajaxCodeSnippetAdded"] = false;

$tdatacargue_de_onts_contratista[".buttonsAdded"] = false;

$tdatacargue_de_onts_contratista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargue_de_onts_contratista[".isUseTimeForSearch"] = false;


$tdatacargue_de_onts_contratista[".badgeColor"] = "E8926F";


$tdatacargue_de_onts_contratista[".allSearchFields"] = array();
$tdatacargue_de_onts_contratista[".filterFields"] = array();
$tdatacargue_de_onts_contratista[".requiredSearchFields"] = array();

$tdatacargue_de_onts_contratista[".googleLikeFields"] = array();
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Id Ingresp";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Fecha de Entrega";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Serial";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "tecnico";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Ticket";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Fecha de Consumo";
$tdatacargue_de_onts_contratista[".googleLikeFields"][] = "Empresa";



$tdatacargue_de_onts_contratista[".tableType"] = "list";

$tdatacargue_de_onts_contratista[".printerPageOrientation"] = 0;
$tdatacargue_de_onts_contratista[".nPrinterPageScale"] = 100;

$tdatacargue_de_onts_contratista[".nPrinterSplitRecords"] = 40;

$tdatacargue_de_onts_contratista[".geocodingEnabled"] = false;




$tdatacargue_de_onts_contratista[".isDisplayLoading"] = true;






$tdatacargue_de_onts_contratista[".pageSize"] = 20;

$tdatacargue_de_onts_contratista[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Entrega` DESC";
$tdatacargue_de_onts_contratista[".strOrderBy"] = $tstrOrderBy;

$tdatacargue_de_onts_contratista[".orderindexes"] = array();
	$tdatacargue_de_onts_contratista[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Entrega`");



$tdatacargue_de_onts_contratista[".sqlHead"] = "SELECT `Id Ingresp`,  `Fecha de Entrega`,  Serial,  tecnico,  Ticket,  `Fecha de Consumo`,  Empresa";
$tdatacargue_de_onts_contratista[".sqlFrom"] = "FROM `ingreso de equipo`";
$tdatacargue_de_onts_contratista[".sqlWhereExpr"] = "";
$tdatacargue_de_onts_contratista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargue_de_onts_contratista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargue_de_onts_contratista[".arrGroupsPerPage"] = $arrGPP;

$tdatacargue_de_onts_contratista[".highlightSearchResults"] = true;

$tableKeyscargue_de_onts_contratista = array();
$tableKeyscargue_de_onts_contratista[] = "Id Ingresp";
$tdatacargue_de_onts_contratista[".Keys"] = $tableKeyscargue_de_onts_contratista;


$tdatacargue_de_onts_contratista[".hideMobileList"] = array();




//	Id Ingresp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Ingresp";
	$fdata["GoodName"] = "Id_Ingresp";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Id_Ingresp");
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


	$tdatacargue_de_onts_contratista["Id Ingresp"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Id Ingresp";
//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Fecha_de_Entrega");
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


	$tdatacargue_de_onts_contratista["Fecha de Entrega"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Fecha de Entrega";
//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Serial");
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


	$tdatacargue_de_onts_contratista["Serial"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Serial";
//	tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tecnico";
	$fdata["GoodName"] = "tecnico";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","tecnico");
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
	$edata["LookupTable"] = "Usiarios_Contratista";
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


	$tdatacargue_de_onts_contratista["tecnico"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "tecnico";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Ticket");
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


	$tdatacargue_de_onts_contratista["Ticket"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Ticket";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Fecha_de_Consumo");
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


	$tdatacargue_de_onts_contratista["Fecha de Consumo"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Fecha de Consumo";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Cargue_de_Onts_Contratista","Empresa");
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


	$tdatacargue_de_onts_contratista["Empresa"] = $fdata;
		$tdatacargue_de_onts_contratista[".searchableFields"][] = "Empresa";


$tables_data["Cargue de Onts Contratista"]=&$tdatacargue_de_onts_contratista;
$field_labels["Cargue_de_Onts_Contratista"] = &$fieldLabelscargue_de_onts_contratista;
$fieldToolTips["Cargue_de_Onts_Contratista"] = &$fieldToolTipscargue_de_onts_contratista;
$placeHolders["Cargue_de_Onts_Contratista"] = &$placeHolderscargue_de_onts_contratista;
$page_titles["Cargue_de_Onts_Contratista"] = &$pageTitlescargue_de_onts_contratista;


changeTextControlsToDate( "Cargue de Onts Contratista" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cargue de Onts Contratista"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cargue de Onts Contratista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargue_de_onts_contratista()
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
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto6["m_sql"] = "`Id Ingresp`";
$proto6["m_srcTableName"] = "Cargue de Onts Contratista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto8["m_sql"] = "`Fecha de Entrega`";
$proto8["m_srcTableName"] = "Cargue de Onts Contratista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto10["m_sql"] = "Serial";
$proto10["m_srcTableName"] = "Cargue de Onts Contratista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tecnico",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto12["m_sql"] = "tecnico";
$proto12["m_srcTableName"] = "Cargue de Onts Contratista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto14["m_sql"] = "Ticket";
$proto14["m_srcTableName"] = "Cargue de Onts Contratista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto16["m_sql"] = "`Fecha de Consumo`";
$proto16["m_srcTableName"] = "Cargue de Onts Contratista";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "Cargue de Onts Contratista";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ingreso de equipo";
$proto21["m_srcTableName"] = "Cargue de Onts Contratista";
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
$proto20["m_srcTableName"] = "Cargue de Onts Contratista";
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
	"m_srcTableName" => "Cargue de Onts Contratista"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Cargue de Onts Contratista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargue_de_onts_contratista = createSqlQuery_cargue_de_onts_contratista();


	
												;

							

$tdatacargue_de_onts_contratista[".sqlquery"] = $queryData_cargue_de_onts_contratista;



$tdatacargue_de_onts_contratista[".hasEvents"] = false;

?>