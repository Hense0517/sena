<?php
$tdatacargue_de_materiales = array();
$tdatacargue_de_materiales[".searchableFields"] = array();
$tdatacargue_de_materiales[".ShortName"] = "cargue_de_materiales";
$tdatacargue_de_materiales[".OwnerID"] = "Tecnico";
$tdatacargue_de_materiales[".OriginalTable"] = "cargue de materiales";


$tdatacargue_de_materiales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacargue_de_materiales[".originalPagesByType"] = $tdatacargue_de_materiales[".pagesByType"];
$tdatacargue_de_materiales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacargue_de_materiales[".originalPages"] = $tdatacargue_de_materiales[".pages"];
$tdatacargue_de_materiales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacargue_de_materiales[".originalDefaultPages"] = $tdatacargue_de_materiales[".defaultPages"];

//	field labels
$fieldLabelscargue_de_materiales = array();
$fieldToolTipscargue_de_materiales = array();
$pageTitlescargue_de_materiales = array();
$placeHolderscargue_de_materiales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargue_de_materiales["Spanish"] = array();
	$fieldToolTipscargue_de_materiales["Spanish"] = array();
	$placeHolderscargue_de_materiales["Spanish"] = array();
	$pageTitlescargue_de_materiales["Spanish"] = array();
	$fieldLabelscargue_de_materiales["Spanish"]["id_carga"] = "Id Carga";
	$fieldToolTipscargue_de_materiales["Spanish"]["id_carga"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["id_carga"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipscargue_de_materiales["Spanish"]["Fecha"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Fecha"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Material"] = "Material";
	$fieldToolTipscargue_de_materiales["Spanish"]["Material"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Material"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipscargue_de_materiales["Spanish"]["Tecnico"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Tecnico"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipscargue_de_materiales["Spanish"]["Observacion"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Observacion"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipscargue_de_materiales["Spanish"]["Empresa"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Empresa"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipscargue_de_materiales["Spanish"]["Cantidad"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Cantidad"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Cargue_o_Descargue"] = "Cargue o Descargue";
	$fieldToolTipscargue_de_materiales["Spanish"]["Cargue_o_Descargue"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Cargue_o_Descargue"] = "";
	$fieldLabelscargue_de_materiales["Spanish"]["Bodega"] = "Bodega";
	$fieldToolTipscargue_de_materiales["Spanish"]["Bodega"] = "";
	$placeHolderscargue_de_materiales["Spanish"]["Bodega"] = "";
	if (count($fieldToolTipscargue_de_materiales["Spanish"]))
		$tdatacargue_de_materiales[".isUseToolTips"] = true;
}


	$tdatacargue_de_materiales[".NCSearch"] = true;



$tdatacargue_de_materiales[".shortTableName"] = "cargue_de_materiales";
$tdatacargue_de_materiales[".nSecOptions"] = 1;

$tdatacargue_de_materiales[".mainTableOwnerID"] = "Tecnico";
$tdatacargue_de_materiales[".entityType"] = 0;
$tdatacargue_de_materiales[".connId"] = "mega_ya_at_localhost";


$tdatacargue_de_materiales[".strOriginalTableName"] = "cargue de materiales";

	



$tdatacargue_de_materiales[".showAddInPopup"] = false;

$tdatacargue_de_materiales[".showEditInPopup"] = false;

$tdatacargue_de_materiales[".showViewInPopup"] = false;

$tdatacargue_de_materiales[".listAjax"] = false;
//	temporary
//$tdatacargue_de_materiales[".listAjax"] = false;

	$tdatacargue_de_materiales[".audit"] = true;

	$tdatacargue_de_materiales[".locking"] = false;


$pages = $tdatacargue_de_materiales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargue_de_materiales[".edit"] = true;
	$tdatacargue_de_materiales[".afterEditAction"] = 1;
	$tdatacargue_de_materiales[".closePopupAfterEdit"] = 1;
	$tdatacargue_de_materiales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargue_de_materiales[".add"] = true;
$tdatacargue_de_materiales[".afterAddAction"] = 1;
$tdatacargue_de_materiales[".closePopupAfterAdd"] = 1;
$tdatacargue_de_materiales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargue_de_materiales[".list"] = true;
}



$tdatacargue_de_materiales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargue_de_materiales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargue_de_materiales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargue_de_materiales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargue_de_materiales[".printFriendly"] = true;
}



$tdatacargue_de_materiales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargue_de_materiales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargue_de_materiales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargue_de_materiales[".isUseAjaxSuggest"] = true;



												

$tdatacargue_de_materiales[".ajaxCodeSnippetAdded"] = false;

$tdatacargue_de_materiales[".buttonsAdded"] = false;

$tdatacargue_de_materiales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargue_de_materiales[".isUseTimeForSearch"] = false;


$tdatacargue_de_materiales[".badgeColor"] = "e67349";


$tdatacargue_de_materiales[".allSearchFields"] = array();
$tdatacargue_de_materiales[".filterFields"] = array();
$tdatacargue_de_materiales[".requiredSearchFields"] = array();

$tdatacargue_de_materiales[".googleLikeFields"] = array();
$tdatacargue_de_materiales[".googleLikeFields"][] = "id carga";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Fecha";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Material";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Tecnico";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Observacion";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Empresa";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Cantidad";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Cargue o Descargue";
$tdatacargue_de_materiales[".googleLikeFields"][] = "Bodega";



$tdatacargue_de_materiales[".tableType"] = "list";

$tdatacargue_de_materiales[".printerPageOrientation"] = 0;
$tdatacargue_de_materiales[".nPrinterPageScale"] = 100;

$tdatacargue_de_materiales[".nPrinterSplitRecords"] = 40;

$tdatacargue_de_materiales[".geocodingEnabled"] = false;




$tdatacargue_de_materiales[".isDisplayLoading"] = true;






$tdatacargue_de_materiales[".pageSize"] = 20;

$tdatacargue_de_materiales[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Fecha DESC";
$tdatacargue_de_materiales[".strOrderBy"] = $tstrOrderBy;

$tdatacargue_de_materiales[".orderindexes"] = array();
	$tdatacargue_de_materiales[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha`");



$tdatacargue_de_materiales[".sqlHead"] = "SELECT `id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Empresa,  Cantidad,  `Cargue o Descargue`,  Bodega";
$tdatacargue_de_materiales[".sqlFrom"] = "FROM `cargue de materiales`";
$tdatacargue_de_materiales[".sqlWhereExpr"] = "";
$tdatacargue_de_materiales[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacargue_de_materiales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargue_de_materiales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargue_de_materiales[".arrGroupsPerPage"] = $arrGPP;

$tdatacargue_de_materiales[".highlightSearchResults"] = true;

$tableKeyscargue_de_materiales = array();
$tableKeyscargue_de_materiales[] = "id carga";
$tdatacargue_de_materiales[".Keys"] = $tableKeyscargue_de_materiales;


$tdatacargue_de_materiales[".hideMobileList"] = array();




//	id carga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id carga";
	$fdata["GoodName"] = "id_carga";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","id_carga");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id carga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id carga`";

	
	
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


	$tdatacargue_de_materiales["id carga"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "id carga";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Fecha");
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


	$tdatacargue_de_materiales["Fecha"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Fecha";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Material");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Id Materales";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Material";

	

	
	$edata["LookupOrderBy"] = "Material";

	
	
	
	

	
	
	
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


	$tdatacargue_de_materiales["Material"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Material";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Tecnico");
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


	$tdatacargue_de_materiales["Tecnico"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Tecnico";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Observacion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacion";

	
	
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


	$tdatacargue_de_materiales["Observacion"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Observacion";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Empresa");
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


	$tdatacargue_de_materiales["Empresa"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Empresa";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Cantidad");
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


	$tdatacargue_de_materiales["Cantidad"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Cantidad";
//	Cargue o Descargue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cargue o Descargue";
	$fdata["GoodName"] = "Cargue_o_Descargue";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Cargue_o_Descargue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cargue o Descargue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cargue o Descargue`";

	
	
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
	$edata["LookupValues"][] = "Cargado";
	$edata["LookupValues"][] = "Devolución";

	
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


	$tdatacargue_de_materiales["Cargue o Descargue"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Cargue o Descargue";
//	Bodega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Bodega";
	$fdata["GoodName"] = "Bodega";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("cargue_de_materiales","Bodega");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Bodega";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bodega";

	
	
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


	$tdatacargue_de_materiales["Bodega"] = $fdata;
		$tdatacargue_de_materiales[".searchableFields"][] = "Bodega";


$tables_data["cargue de materiales"]=&$tdatacargue_de_materiales;
$field_labels["cargue_de_materiales"] = &$fieldLabelscargue_de_materiales;
$fieldToolTips["cargue_de_materiales"] = &$fieldToolTipscargue_de_materiales;
$placeHolders["cargue_de_materiales"] = &$placeHolderscargue_de_materiales;
$page_titles["cargue_de_materiales"] = &$pageTitlescargue_de_materiales;


changeTextControlsToDate( "cargue de materiales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cargue de materiales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cargue de materiales"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cargue de materiales"][0] = $masterParams;
				$masterTablesData["cargue de materiales"][0]["masterKeys"] = array();
	$masterTablesData["cargue de materiales"][0]["masterKeys"][]="Cedula";
				$masterTablesData["cargue de materiales"][0]["detailKeys"] = array();
	$masterTablesData["cargue de materiales"][0]["detailKeys"][]="Tecnico";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargue_de_materiales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Empresa,  Cantidad,  `Cargue o Descargue`,  Bodega";
$proto0["m_strFrom"] = "FROM `cargue de materiales`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
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
	"m_strName" => "id carga",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto6["m_sql"] = "`id carga`";
$proto6["m_srcTableName"] = "cargue de materiales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "cargue de materiales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "cargue de materiales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto12["m_sql"] = "Tecnico";
$proto12["m_srcTableName"] = "cargue de materiales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto14["m_sql"] = "Observacion";
$proto14["m_srcTableName"] = "cargue de materiales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto16["m_sql"] = "Empresa";
$proto16["m_srcTableName"] = "cargue de materiales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto18["m_sql"] = "Cantidad";
$proto18["m_srcTableName"] = "cargue de materiales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Cargue o Descargue",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto20["m_sql"] = "`Cargue o Descargue`";
$proto20["m_srcTableName"] = "cargue de materiales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Bodega",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto22["m_sql"] = "Bodega";
$proto22["m_srcTableName"] = "cargue de materiales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cargue de materiales";
$proto25["m_srcTableName"] = "cargue de materiales";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id carga";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Material";
$proto25["m_columns"][] = "Cantidad";
$proto25["m_columns"][] = "Tecnico";
$proto25["m_columns"][] = "Observacion";
$proto25["m_columns"][] = "Foto";
$proto25["m_columns"][] = "Empresa";
$proto25["m_columns"][] = "Cargue o Descargue";
$proto25["m_columns"][] = "Bodega";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`cargue de materiales`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cargue de materiales";
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
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "cargue de materiales"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cargue de materiales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargue_de_materiales = createSqlQuery_cargue_de_materiales();


	
												;

									

$tdatacargue_de_materiales[".sqlquery"] = $queryData_cargue_de_materiales;



include_once(getabspath("include/cargue_de_materiales_events.php"));
$tdatacargue_de_materiales[".hasEvents"] = true;

?>