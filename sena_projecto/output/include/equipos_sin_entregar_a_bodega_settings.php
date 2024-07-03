<?php
$tdataequipos_sin_entregar_a_bodega = array();
$tdataequipos_sin_entregar_a_bodega[".searchableFields"] = array();
$tdataequipos_sin_entregar_a_bodega[".ShortName"] = "equipos_sin_entregar_a_bodega";
$tdataequipos_sin_entregar_a_bodega[".OwnerID"] = "Tecnico";
$tdataequipos_sin_entregar_a_bodega[".OriginalTable"] = "logistica inversa";


$tdataequipos_sin_entregar_a_bodega[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" );
$tdataequipos_sin_entregar_a_bodega[".originalPagesByType"] = $tdataequipos_sin_entregar_a_bodega[".pagesByType"];
$tdataequipos_sin_entregar_a_bodega[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"view\":[\"view\"]}" ) );
$tdataequipos_sin_entregar_a_bodega[".originalPages"] = $tdataequipos_sin_entregar_a_bodega[".pages"];
$tdataequipos_sin_entregar_a_bodega[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"view\":\"view\"}" );
$tdataequipos_sin_entregar_a_bodega[".originalDefaultPages"] = $tdataequipos_sin_entregar_a_bodega[".defaultPages"];

//	field labels
$fieldLabelsequipos_sin_entregar_a_bodega = array();
$fieldToolTipsequipos_sin_entregar_a_bodega = array();
$pageTitlesequipos_sin_entregar_a_bodega = array();
$placeHoldersequipos_sin_entregar_a_bodega = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"] = array();
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"] = array();
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"] = array();
	$pageTitlesequipos_sin_entregar_a_bodega["Spanish"] = array();
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Id_Logistica"] = "Id Logistica";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Id_Logistica"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Id_Logistica"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Tecnico"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Tecnico"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Serial"] = "Serial";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Serial"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Serial"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Entregado_en_Bodega"] = "Entregado en Bodega";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Entregado_en_Bodega"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Entregado_en_Bodega"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Fecha_de_Entrega"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Empresa"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Empresa"] = "";
	$fieldLabelsequipos_sin_entregar_a_bodega["Spanish"]["Tipo_de_Tramite"] = "Tipo de Tramite";
	$fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]["Tipo_de_Tramite"] = "";
	$placeHoldersequipos_sin_entregar_a_bodega["Spanish"]["Tipo_de_Tramite"] = "";
	if (count($fieldToolTipsequipos_sin_entregar_a_bodega["Spanish"]))
		$tdataequipos_sin_entregar_a_bodega[".isUseToolTips"] = true;
}


	$tdataequipos_sin_entregar_a_bodega[".NCSearch"] = true;



$tdataequipos_sin_entregar_a_bodega[".shortTableName"] = "equipos_sin_entregar_a_bodega";
$tdataequipos_sin_entregar_a_bodega[".nSecOptions"] = 1;

$tdataequipos_sin_entregar_a_bodega[".mainTableOwnerID"] = "Tecnico";
$tdataequipos_sin_entregar_a_bodega[".entityType"] = 1;
$tdataequipos_sin_entregar_a_bodega[".connId"] = "mega_ya_at_localhost";


$tdataequipos_sin_entregar_a_bodega[".strOriginalTableName"] = "logistica inversa";

	



$tdataequipos_sin_entregar_a_bodega[".showAddInPopup"] = false;

$tdataequipos_sin_entregar_a_bodega[".showEditInPopup"] = false;

$tdataequipos_sin_entregar_a_bodega[".showViewInPopup"] = false;

$tdataequipos_sin_entregar_a_bodega[".listAjax"] = false;
//	temporary
//$tdataequipos_sin_entregar_a_bodega[".listAjax"] = false;

	$tdataequipos_sin_entregar_a_bodega[".audit"] = true;

	$tdataequipos_sin_entregar_a_bodega[".locking"] = false;


$pages = $tdataequipos_sin_entregar_a_bodega[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataequipos_sin_entregar_a_bodega[".edit"] = true;
	$tdataequipos_sin_entregar_a_bodega[".afterEditAction"] = 1;
	$tdataequipos_sin_entregar_a_bodega[".closePopupAfterEdit"] = 1;
	$tdataequipos_sin_entregar_a_bodega[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataequipos_sin_entregar_a_bodega[".add"] = true;
$tdataequipos_sin_entregar_a_bodega[".afterAddAction"] = 1;
$tdataequipos_sin_entregar_a_bodega[".closePopupAfterAdd"] = 1;
$tdataequipos_sin_entregar_a_bodega[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataequipos_sin_entregar_a_bodega[".list"] = true;
}



$tdataequipos_sin_entregar_a_bodega[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataequipos_sin_entregar_a_bodega[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataequipos_sin_entregar_a_bodega[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataequipos_sin_entregar_a_bodega[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataequipos_sin_entregar_a_bodega[".printFriendly"] = true;
}



$tdataequipos_sin_entregar_a_bodega[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataequipos_sin_entregar_a_bodega[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataequipos_sin_entregar_a_bodega[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataequipos_sin_entregar_a_bodega[".isUseAjaxSuggest"] = true;



						

$tdataequipos_sin_entregar_a_bodega[".ajaxCodeSnippetAdded"] = false;

$tdataequipos_sin_entregar_a_bodega[".buttonsAdded"] = false;

$tdataequipos_sin_entregar_a_bodega[".addPageEvents"] = false;

// use timepicker for search panel
$tdataequipos_sin_entregar_a_bodega[".isUseTimeForSearch"] = false;


$tdataequipos_sin_entregar_a_bodega[".badgeColor"] = "8FBC8B";


$tdataequipos_sin_entregar_a_bodega[".allSearchFields"] = array();
$tdataequipos_sin_entregar_a_bodega[".filterFields"] = array();
$tdataequipos_sin_entregar_a_bodega[".requiredSearchFields"] = array();

$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"] = array();
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Serial";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Entregado en Bodega";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Fecha de Entrega";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Tecnico";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Empresa";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Id_Logistica";
$tdataequipos_sin_entregar_a_bodega[".googleLikeFields"][] = "Tipo de Tramite";



$tdataequipos_sin_entregar_a_bodega[".tableType"] = "list";

$tdataequipos_sin_entregar_a_bodega[".printerPageOrientation"] = 0;
$tdataequipos_sin_entregar_a_bodega[".nPrinterPageScale"] = 100;

$tdataequipos_sin_entregar_a_bodega[".nPrinterSplitRecords"] = 40;

$tdataequipos_sin_entregar_a_bodega[".geocodingEnabled"] = false;




$tdataequipos_sin_entregar_a_bodega[".isDisplayLoading"] = true;






$tdataequipos_sin_entregar_a_bodega[".pageSize"] = 20;

$tdataequipos_sin_entregar_a_bodega[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Id_Logistica DESC";
$tdataequipos_sin_entregar_a_bodega[".strOrderBy"] = $tstrOrderBy;

$tdataequipos_sin_entregar_a_bodega[".orderindexes"] = array();
	$tdataequipos_sin_entregar_a_bodega[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "`Id_Logistica`");



$tdataequipos_sin_entregar_a_bodega[".sqlHead"] = "SELECT Serial,  `Entregado en Bodega`,  `Fecha de Entrega`,  Tecnico,  Empresa,  Id_Logistica,  `Tipo de Tramite`";
$tdataequipos_sin_entregar_a_bodega[".sqlFrom"] = "FROM `logistica inversa`";
$tdataequipos_sin_entregar_a_bodega[".sqlWhereExpr"] = "(`Entregado en Bodega` like'N%')";
$tdataequipos_sin_entregar_a_bodega[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataequipos_sin_entregar_a_bodega[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataequipos_sin_entregar_a_bodega[".arrGroupsPerPage"] = $arrGPP;

$tdataequipos_sin_entregar_a_bodega[".highlightSearchResults"] = true;

$tableKeysequipos_sin_entregar_a_bodega = array();
$tableKeysequipos_sin_entregar_a_bodega[] = "Id_Logistica";
$tdataequipos_sin_entregar_a_bodega[".Keys"] = $tableKeysequipos_sin_entregar_a_bodega;


$tdataequipos_sin_entregar_a_bodega[".hideMobileList"] = array();




//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Serial");
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


	$tdataequipos_sin_entregar_a_bodega["Serial"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Serial";
//	Entregado en Bodega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Entregado en Bodega";
	$fdata["GoodName"] = "Entregado_en_Bodega";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Entregado_en_Bodega");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entregado en Bodega";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entregado en Bodega`";

	
	
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
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Si";
	$edata["LookupValues"][] = "No";

		$edata["Multiselect"] = true;

	
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
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
			$fdata["filterTotalFields"] = "Id_Logistica";
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdataequipos_sin_entregar_a_bodega["Entregado en Bodega"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Entregado en Bodega";
//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Fecha_de_Entrega");
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


	$tdataequipos_sin_entregar_a_bodega["Fecha de Entrega"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Fecha de Entrega";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Tecnico");
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

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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


	$tdataequipos_sin_entregar_a_bodega["Tecnico"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Empresa");
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


	$tdataequipos_sin_entregar_a_bodega["Empresa"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Empresa";
//	Id_Logistica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Id_Logistica";
	$fdata["GoodName"] = "Id_Logistica";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Id_Logistica");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Logistica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Logistica";

	
	
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


	$tdataequipos_sin_entregar_a_bodega["Id_Logistica"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Id_Logistica";
//	Tipo de Tramite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tipo de Tramite";
	$fdata["GoodName"] = "Tipo_de_Tramite";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("Equipos_sin_entregar_a_Bodega","Tipo_de_Tramite");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo de Tramite";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo de Tramite`";

	
	
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
	$edata["LookupValues"][] = "Mantenimiento";
	$edata["LookupValues"][] = "Retiro";

	
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


	$tdataequipos_sin_entregar_a_bodega["Tipo de Tramite"] = $fdata;
		$tdataequipos_sin_entregar_a_bodega[".searchableFields"][] = "Tipo de Tramite";


$tables_data["Equipos sin entregar a Bodega"]=&$tdataequipos_sin_entregar_a_bodega;
$field_labels["Equipos_sin_entregar_a_Bodega"] = &$fieldLabelsequipos_sin_entregar_a_bodega;
$fieldToolTips["Equipos_sin_entregar_a_Bodega"] = &$fieldToolTipsequipos_sin_entregar_a_bodega;
$placeHolders["Equipos_sin_entregar_a_Bodega"] = &$placeHoldersequipos_sin_entregar_a_bodega;
$page_titles["Equipos_sin_entregar_a_Bodega"] = &$pageTitlesequipos_sin_entregar_a_bodega;


changeTextControlsToDate( "Equipos sin entregar a Bodega" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Equipos sin entregar a Bodega"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Equipos sin entregar a Bodega"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_equipos_sin_entregar_a_bodega()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Serial,  `Entregado en Bodega`,  `Fecha de Entrega`,  Tecnico,  Empresa,  Id_Logistica,  `Tipo de Tramite`";
$proto0["m_strFrom"] = "FROM `logistica inversa`";
$proto0["m_strWhere"] = "(`Entregado en Bodega` like'N%')";
$proto0["m_strOrderBy"] = "ORDER BY Id_Logistica DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Entregado en Bodega` like'N%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Entregado en Bodega",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like'N%'";
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
	"m_strName" => "Serial",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto6["m_sql"] = "Serial";
$proto6["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Entregado en Bodega",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto8["m_sql"] = "`Entregado en Bodega`";
$proto8["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto10["m_sql"] = "`Fecha de Entrega`";
$proto10["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto12["m_sql"] = "Tecnico";
$proto12["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Logistica",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto16["m_sql"] = "Id_Logistica";
$proto16["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Tramite",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto18["m_sql"] = "`Tipo de Tramite`";
$proto18["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "logistica inversa";
$proto21["m_srcTableName"] = "Equipos sin entregar a Bodega";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id_Logistica";
$proto21["m_columns"][] = "Ticket";
$proto21["m_columns"][] = "Tecnico";
$proto21["m_columns"][] = "Serial";
$proto21["m_columns"][] = "Observación";
$proto21["m_columns"][] = "Empresa";
$proto21["m_columns"][] = "Tipo de Tramite";
$proto21["m_columns"][] = "CedulaCliente";
$proto21["m_columns"][] = "Entregado en Bodega";
$proto21["m_columns"][] = "Fecha de Entrega";
$proto21["m_columns"][] = "Fecha de Atencón";
$proto21["m_columns"][] = "Acta";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`logistica inversa`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Equipos sin entregar a Bodega";
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
	"m_strName" => "Id_Logistica",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "Equipos sin entregar a Bodega"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Equipos sin entregar a Bodega";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_equipos_sin_entregar_a_bodega = createSqlQuery_equipos_sin_entregar_a_bodega();


	
												;

							

$tdataequipos_sin_entregar_a_bodega[".sqlquery"] = $queryData_equipos_sin_entregar_a_bodega;



include_once(getabspath("include/equipos_sin_entregar_a_bodega_events.php"));
$tdataequipos_sin_entregar_a_bodega[".hasEvents"] = true;

?>