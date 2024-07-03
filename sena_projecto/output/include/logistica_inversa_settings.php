<?php
$tdatalogistica_inversa = array();
$tdatalogistica_inversa[".searchableFields"] = array();
$tdatalogistica_inversa[".ShortName"] = "logistica_inversa";
$tdatalogistica_inversa[".OwnerID"] = "Tecnico";
$tdatalogistica_inversa[".OriginalTable"] = "logistica inversa";


$tdatalogistica_inversa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalogistica_inversa[".originalPagesByType"] = $tdatalogistica_inversa[".pagesByType"];
$tdatalogistica_inversa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalogistica_inversa[".originalPages"] = $tdatalogistica_inversa[".pages"];
$tdatalogistica_inversa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalogistica_inversa[".originalDefaultPages"] = $tdatalogistica_inversa[".defaultPages"];

//	field labels
$fieldLabelslogistica_inversa = array();
$fieldToolTipslogistica_inversa = array();
$pageTitleslogistica_inversa = array();
$placeHolderslogistica_inversa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslogistica_inversa["Spanish"] = array();
	$fieldToolTipslogistica_inversa["Spanish"] = array();
	$placeHolderslogistica_inversa["Spanish"] = array();
	$pageTitleslogistica_inversa["Spanish"] = array();
	$fieldLabelslogistica_inversa["Spanish"]["Id_Logistica"] = "Id Logistica";
	$fieldToolTipslogistica_inversa["Spanish"]["Id_Logistica"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Id_Logistica"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipslogistica_inversa["Spanish"]["Ticket"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Ticket"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipslogistica_inversa["Spanish"]["Tecnico"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Tecnico"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Serial"] = "Serial";
	$fieldToolTipslogistica_inversa["Spanish"]["Serial"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Serial"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Observaci_n"] = "Observación";
	$fieldToolTipslogistica_inversa["Spanish"]["Observaci_n"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Observaci_n"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipslogistica_inversa["Spanish"]["Empresa"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Empresa"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Tipo_de_Tramite"] = "Tipo de Tramite";
	$fieldToolTipslogistica_inversa["Spanish"]["Tipo_de_Tramite"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Tipo_de_Tramite"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Entregado_en_Bodega"] = "Entregado en Bodega";
	$fieldToolTipslogistica_inversa["Spanish"]["Entregado_en_Bodega"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Entregado_en_Bodega"] = "";
	$fieldLabelslogistica_inversa["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipslogistica_inversa["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHolderslogistica_inversa["Spanish"]["Fecha_de_Entrega"] = "";
	if (count($fieldToolTipslogistica_inversa["Spanish"]))
		$tdatalogistica_inversa[".isUseToolTips"] = true;
}


	$tdatalogistica_inversa[".NCSearch"] = true;



$tdatalogistica_inversa[".shortTableName"] = "logistica_inversa";
$tdatalogistica_inversa[".nSecOptions"] = 1;

$tdatalogistica_inversa[".mainTableOwnerID"] = "Tecnico";
$tdatalogistica_inversa[".entityType"] = 0;
$tdatalogistica_inversa[".connId"] = "mega_ya_at_localhost";


$tdatalogistica_inversa[".strOriginalTableName"] = "logistica inversa";

	



$tdatalogistica_inversa[".showAddInPopup"] = false;

$tdatalogistica_inversa[".showEditInPopup"] = false;

$tdatalogistica_inversa[".showViewInPopup"] = false;

$tdatalogistica_inversa[".listAjax"] = false;
//	temporary
//$tdatalogistica_inversa[".listAjax"] = false;

	$tdatalogistica_inversa[".audit"] = true;

	$tdatalogistica_inversa[".locking"] = false;


$pages = $tdatalogistica_inversa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalogistica_inversa[".edit"] = true;
	$tdatalogistica_inversa[".afterEditAction"] = 1;
	$tdatalogistica_inversa[".closePopupAfterEdit"] = 1;
	$tdatalogistica_inversa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalogistica_inversa[".add"] = true;
$tdatalogistica_inversa[".afterAddAction"] = 1;
$tdatalogistica_inversa[".closePopupAfterAdd"] = 1;
$tdatalogistica_inversa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalogistica_inversa[".list"] = true;
}



$tdatalogistica_inversa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalogistica_inversa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalogistica_inversa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalogistica_inversa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalogistica_inversa[".printFriendly"] = true;
}



$tdatalogistica_inversa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalogistica_inversa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalogistica_inversa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalogistica_inversa[".isUseAjaxSuggest"] = true;



																														

$tdatalogistica_inversa[".ajaxCodeSnippetAdded"] = false;

$tdatalogistica_inversa[".buttonsAdded"] = false;

$tdatalogistica_inversa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogistica_inversa[".isUseTimeForSearch"] = false;


$tdatalogistica_inversa[".badgeColor"] = "778899";


$tdatalogistica_inversa[".allSearchFields"] = array();
$tdatalogistica_inversa[".filterFields"] = array();
$tdatalogistica_inversa[".requiredSearchFields"] = array();

$tdatalogistica_inversa[".googleLikeFields"] = array();
$tdatalogistica_inversa[".googleLikeFields"][] = "Ticket";
$tdatalogistica_inversa[".googleLikeFields"][] = "Tecnico";
$tdatalogistica_inversa[".googleLikeFields"][] = "Serial";
$tdatalogistica_inversa[".googleLikeFields"][] = "Observación";
$tdatalogistica_inversa[".googleLikeFields"][] = "Empresa";
$tdatalogistica_inversa[".googleLikeFields"][] = "Tipo de Tramite";
$tdatalogistica_inversa[".googleLikeFields"][] = "Entregado en Bodega";
$tdatalogistica_inversa[".googleLikeFields"][] = "Fecha de Entrega";



$tdatalogistica_inversa[".tableType"] = "list";

$tdatalogistica_inversa[".printerPageOrientation"] = 0;
$tdatalogistica_inversa[".nPrinterPageScale"] = 100;

$tdatalogistica_inversa[".nPrinterSplitRecords"] = 40;

$tdatalogistica_inversa[".geocodingEnabled"] = false;




$tdatalogistica_inversa[".isDisplayLoading"] = true;






$tdatalogistica_inversa[".pageSize"] = 20;

$tdatalogistica_inversa[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Id_Logistica DESC";
$tdatalogistica_inversa[".strOrderBy"] = $tstrOrderBy;

$tdatalogistica_inversa[".orderindexes"] = array();
	$tdatalogistica_inversa[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Id_Logistica`");



$tdatalogistica_inversa[".sqlHead"] = "SELECT Id_Logistica,  Ticket,  Tecnico,  Serial,  `Observación`,  Empresa,  `Tipo de Tramite`,  `Entregado en Bodega`,  `Fecha de Entrega`";
$tdatalogistica_inversa[".sqlFrom"] = "FROM `logistica inversa`";
$tdatalogistica_inversa[".sqlWhereExpr"] = "";
$tdatalogistica_inversa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogistica_inversa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogistica_inversa[".arrGroupsPerPage"] = $arrGPP;

$tdatalogistica_inversa[".highlightSearchResults"] = true;

$tableKeyslogistica_inversa = array();
$tableKeyslogistica_inversa[] = "Id_Logistica";
$tdatalogistica_inversa[".Keys"] = $tableKeyslogistica_inversa;


$tdatalogistica_inversa[".hideMobileList"] = array();




//	Id_Logistica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Logistica";
	$fdata["GoodName"] = "Id_Logistica";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Id_Logistica");
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


	$tdatalogistica_inversa["Id_Logistica"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Id_Logistica";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Ticket");
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


	$tdatalogistica_inversa["Ticket"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Ticket";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Tecnico");
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


	$tdatalogistica_inversa["Tecnico"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Tecnico";
//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Serial");
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
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value%Este Equipo ya se re integro.", "messageType" => "Text");

	
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


	$tdatalogistica_inversa["Serial"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Serial";
//	Observación
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observación";
	$fdata["GoodName"] = "Observaci_n";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Observaci_n");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observación";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Observación`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalogistica_inversa["Observación"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Observación";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Empresa");
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


	$tdatalogistica_inversa["Empresa"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Empresa";
//	Tipo de Tramite
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tipo de Tramite";
	$fdata["GoodName"] = "Tipo_de_Tramite";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Tipo_de_Tramite");
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


	$tdatalogistica_inversa["Tipo de Tramite"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Tipo de Tramite";
//	Entregado en Bodega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Entregado en Bodega";
	$fdata["GoodName"] = "Entregado_en_Bodega";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Entregado_en_Bodega");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
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


	$tdatalogistica_inversa["Entregado en Bodega"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Entregado en Bodega";
//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "logistica inversa";
	$fdata["Label"] = GetFieldLabel("logistica_inversa","Fecha_de_Entrega");
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


	$tdatalogistica_inversa["Fecha de Entrega"] = $fdata;
		$tdatalogistica_inversa[".searchableFields"][] = "Fecha de Entrega";


$tables_data["logistica inversa"]=&$tdatalogistica_inversa;
$field_labels["logistica_inversa"] = &$fieldLabelslogistica_inversa;
$fieldToolTips["logistica_inversa"] = &$fieldToolTipslogistica_inversa;
$placeHolders["logistica_inversa"] = &$placeHolderslogistica_inversa;
$page_titles["logistica_inversa"] = &$pageTitleslogistica_inversa;


changeTextControlsToDate( "logistica inversa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["logistica inversa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["logistica inversa"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tickets";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tickets";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["logistica inversa"][0] = $masterParams;
				$masterTablesData["logistica inversa"][0]["masterKeys"] = array();
	$masterTablesData["logistica inversa"][0]["masterKeys"][]="Tickets";
				$masterTablesData["logistica inversa"][0]["masterKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][0]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["logistica inversa"][0]["detailKeys"] = array();
	$masterTablesData["logistica inversa"][0]["detailKeys"][]="Ticket";
				$masterTablesData["logistica inversa"][0]["detailKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][0]["detailKeys"][]="Tipo de Tramite";
		
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
					$masterTablesData["logistica inversa"][1] = $masterParams;
				$masterTablesData["logistica inversa"][1]["masterKeys"] = array();
	$masterTablesData["logistica inversa"][1]["masterKeys"][]="Tickets";
				$masterTablesData["logistica inversa"][1]["masterKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][1]["masterKeys"][]="Empresa";
				$masterTablesData["logistica inversa"][1]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["logistica inversa"][1]["detailKeys"] = array();
	$masterTablesData["logistica inversa"][1]["detailKeys"][]="Ticket";
				$masterTablesData["logistica inversa"][1]["detailKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][1]["detailKeys"][]="Empresa";
				$masterTablesData["logistica inversa"][1]["detailKeys"][]="Tipo de Tramite";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tickets";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Retiros";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "retiros";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["logistica inversa"][2] = $masterParams;
				$masterTablesData["logistica inversa"][2]["masterKeys"] = array();
	$masterTablesData["logistica inversa"][2]["masterKeys"][]="Tickets";
				$masterTablesData["logistica inversa"][2]["masterKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][2]["masterKeys"][]="Empresa";
				$masterTablesData["logistica inversa"][2]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["logistica inversa"][2]["detailKeys"] = array();
	$masterTablesData["logistica inversa"][2]["detailKeys"][]="Ticket";
				$masterTablesData["logistica inversa"][2]["detailKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][2]["detailKeys"][]="Empresa";
				$masterTablesData["logistica inversa"][2]["detailKeys"][]="Tipo de Tramite";
		
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
					$masterTablesData["logistica inversa"][3] = $masterParams;
				$masterTablesData["logistica inversa"][3]["masterKeys"] = array();
	$masterTablesData["logistica inversa"][3]["masterKeys"][]="Tickets";
				$masterTablesData["logistica inversa"][3]["masterKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][3]["masterKeys"][]="Tipo de Actividad";
				$masterTablesData["logistica inversa"][3]["detailKeys"] = array();
	$masterTablesData["logistica inversa"][3]["detailKeys"][]="Ticket";
				$masterTablesData["logistica inversa"][3]["detailKeys"][]="Tecnico";
				$masterTablesData["logistica inversa"][3]["detailKeys"][]="Tipo de Tramite";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_logistica_inversa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Logistica,  Ticket,  Tecnico,  Serial,  `Observación`,  Empresa,  `Tipo de Tramite`,  `Entregado en Bodega`,  `Fecha de Entrega`";
$proto0["m_strFrom"] = "FROM `logistica inversa`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Id_Logistica DESC";
	
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
	"m_strName" => "Id_Logistica",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto6["m_sql"] = "Id_Logistica";
$proto6["m_srcTableName"] = "logistica inversa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto8["m_sql"] = "Ticket";
$proto8["m_srcTableName"] = "logistica inversa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto10["m_sql"] = "Tecnico";
$proto10["m_srcTableName"] = "logistica inversa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto12["m_sql"] = "Serial";
$proto12["m_srcTableName"] = "logistica inversa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Observación",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto14["m_sql"] = "`Observación`";
$proto14["m_srcTableName"] = "logistica inversa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto16["m_sql"] = "Empresa";
$proto16["m_srcTableName"] = "logistica inversa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de Tramite",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto18["m_sql"] = "`Tipo de Tramite`";
$proto18["m_srcTableName"] = "logistica inversa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Entregado en Bodega",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto20["m_sql"] = "`Entregado en Bodega`";
$proto20["m_srcTableName"] = "logistica inversa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto22["m_sql"] = "`Fecha de Entrega`";
$proto22["m_srcTableName"] = "logistica inversa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "logistica inversa";
$proto25["m_srcTableName"] = "logistica inversa";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Id_Logistica";
$proto25["m_columns"][] = "Ticket";
$proto25["m_columns"][] = "Tecnico";
$proto25["m_columns"][] = "Serial";
$proto25["m_columns"][] = "Observación";
$proto25["m_columns"][] = "Empresa";
$proto25["m_columns"][] = "Tipo de Tramite";
$proto25["m_columns"][] = "CedulaCliente";
$proto25["m_columns"][] = "Entregado en Bodega";
$proto25["m_columns"][] = "Fecha de Entrega";
$proto25["m_columns"][] = "Fecha de Atencón";
$proto25["m_columns"][] = "Acta";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`logistica inversa`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "logistica inversa";
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
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Id_Logistica",
	"m_strTable" => "logistica inversa",
	"m_srcTableName" => "logistica inversa"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="logistica inversa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_logistica_inversa = createSqlQuery_logistica_inversa();


	
												;

									

$tdatalogistica_inversa[".sqlquery"] = $queryData_logistica_inversa;



include_once(getabspath("include/logistica_inversa_events.php"));
$tdatalogistica_inversa[".hasEvents"] = true;

?>