<?php
$tdatacargue_material_a_bodega = array();
$tdatacargue_material_a_bodega[".searchableFields"] = array();
$tdatacargue_material_a_bodega[".ShortName"] = "cargue_material_a_bodega";
$tdatacargue_material_a_bodega[".OwnerID"] = "Tecnico";
$tdatacargue_material_a_bodega[".OriginalTable"] = "cargue de materiales";


$tdatacargue_material_a_bodega[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacargue_material_a_bodega[".originalPagesByType"] = $tdatacargue_material_a_bodega[".pagesByType"];
$tdatacargue_material_a_bodega[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacargue_material_a_bodega[".originalPages"] = $tdatacargue_material_a_bodega[".pages"];
$tdatacargue_material_a_bodega[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacargue_material_a_bodega[".originalDefaultPages"] = $tdatacargue_material_a_bodega[".defaultPages"];

//	field labels
$fieldLabelscargue_material_a_bodega = array();
$fieldToolTipscargue_material_a_bodega = array();
$pageTitlescargue_material_a_bodega = array();
$placeHolderscargue_material_a_bodega = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargue_material_a_bodega["Spanish"] = array();
	$fieldToolTipscargue_material_a_bodega["Spanish"] = array();
	$placeHolderscargue_material_a_bodega["Spanish"] = array();
	$pageTitlescargue_material_a_bodega["Spanish"] = array();
	$fieldLabelscargue_material_a_bodega["Spanish"]["id_carga"] = "Id Carga";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["id_carga"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["id_carga"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Fecha"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Fecha"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Material"] = "Material";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Material"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Material"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Tecnico"] = "Bodega";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Tecnico"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Tecnico"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Observacion"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Observacion"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Empresa"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Empresa"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Cantidad"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Cantidad"] = "";
	$fieldLabelscargue_material_a_bodega["Spanish"]["Cargue_o_Descargue"] = "Cargue o Descargue";
	$fieldToolTipscargue_material_a_bodega["Spanish"]["Cargue_o_Descargue"] = "";
	$placeHolderscargue_material_a_bodega["Spanish"]["Cargue_o_Descargue"] = "";
	if (count($fieldToolTipscargue_material_a_bodega["Spanish"]))
		$tdatacargue_material_a_bodega[".isUseToolTips"] = true;
}


	$tdatacargue_material_a_bodega[".NCSearch"] = true;



$tdatacargue_material_a_bodega[".shortTableName"] = "cargue_material_a_bodega";
$tdatacargue_material_a_bodega[".nSecOptions"] = 0;

$tdatacargue_material_a_bodega[".mainTableOwnerID"] = "Tecnico";
$tdatacargue_material_a_bodega[".entityType"] = 1;
$tdatacargue_material_a_bodega[".connId"] = "mega_ya_at_localhost";


$tdatacargue_material_a_bodega[".strOriginalTableName"] = "cargue de materiales";

	



$tdatacargue_material_a_bodega[".showAddInPopup"] = false;

$tdatacargue_material_a_bodega[".showEditInPopup"] = false;

$tdatacargue_material_a_bodega[".showViewInPopup"] = false;

$tdatacargue_material_a_bodega[".listAjax"] = false;
//	temporary
//$tdatacargue_material_a_bodega[".listAjax"] = false;

	$tdatacargue_material_a_bodega[".audit"] = true;

	$tdatacargue_material_a_bodega[".locking"] = false;


$pages = $tdatacargue_material_a_bodega[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargue_material_a_bodega[".edit"] = true;
	$tdatacargue_material_a_bodega[".afterEditAction"] = 1;
	$tdatacargue_material_a_bodega[".closePopupAfterEdit"] = 1;
	$tdatacargue_material_a_bodega[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargue_material_a_bodega[".add"] = true;
$tdatacargue_material_a_bodega[".afterAddAction"] = 1;
$tdatacargue_material_a_bodega[".closePopupAfterAdd"] = 1;
$tdatacargue_material_a_bodega[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargue_material_a_bodega[".list"] = true;
}



$tdatacargue_material_a_bodega[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargue_material_a_bodega[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargue_material_a_bodega[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargue_material_a_bodega[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargue_material_a_bodega[".printFriendly"] = true;
}



$tdatacargue_material_a_bodega[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargue_material_a_bodega[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargue_material_a_bodega[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargue_material_a_bodega[".isUseAjaxSuggest"] = true;



						

$tdatacargue_material_a_bodega[".ajaxCodeSnippetAdded"] = false;

$tdatacargue_material_a_bodega[".buttonsAdded"] = false;

$tdatacargue_material_a_bodega[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargue_material_a_bodega[".isUseTimeForSearch"] = false;


$tdatacargue_material_a_bodega[".badgeColor"] = "00C2C5";


$tdatacargue_material_a_bodega[".allSearchFields"] = array();
$tdatacargue_material_a_bodega[".filterFields"] = array();
$tdatacargue_material_a_bodega[".requiredSearchFields"] = array();

$tdatacargue_material_a_bodega[".googleLikeFields"] = array();
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "id carga";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Fecha";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Material";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Tecnico";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Observacion";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Empresa";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Cantidad";
$tdatacargue_material_a_bodega[".googleLikeFields"][] = "Cargue o Descargue";



$tdatacargue_material_a_bodega[".tableType"] = "list";

$tdatacargue_material_a_bodega[".printerPageOrientation"] = 0;
$tdatacargue_material_a_bodega[".nPrinterPageScale"] = 100;

$tdatacargue_material_a_bodega[".nPrinterSplitRecords"] = 40;

$tdatacargue_material_a_bodega[".geocodingEnabled"] = false;




$tdatacargue_material_a_bodega[".isDisplayLoading"] = true;






$tdatacargue_material_a_bodega[".pageSize"] = 20;

$tdatacargue_material_a_bodega[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id carga` DESC, Fecha DESC";
$tdatacargue_material_a_bodega[".strOrderBy"] = $tstrOrderBy;

$tdatacargue_material_a_bodega[".orderindexes"] = array();
	$tdatacargue_material_a_bodega[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id carga`");

	$tdatacargue_material_a_bodega[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha`");



$tdatacargue_material_a_bodega[".sqlHead"] = "SELECT `id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Empresa,  Cantidad,  `Cargue o Descargue`";
$tdatacargue_material_a_bodega[".sqlFrom"] = "FROM `cargue de materiales`";
$tdatacargue_material_a_bodega[".sqlWhereExpr"] = "(Tecnico =123123 OR Tecnico =1122334455)";
$tdatacargue_material_a_bodega[".sqlTail"] = "";

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
$tdatacargue_material_a_bodega[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargue_material_a_bodega[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargue_material_a_bodega[".arrGroupsPerPage"] = $arrGPP;

$tdatacargue_material_a_bodega[".highlightSearchResults"] = true;

$tableKeyscargue_material_a_bodega = array();
$tableKeyscargue_material_a_bodega[] = "id carga";
$tdatacargue_material_a_bodega[".Keys"] = $tableKeyscargue_material_a_bodega;


$tdatacargue_material_a_bodega[".hideMobileList"] = array();




//	id carga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id carga";
	$fdata["GoodName"] = "id_carga";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","id_carga");
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


	$tdatacargue_material_a_bodega["id carga"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "id carga";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Fecha");
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


	$tdatacargue_material_a_bodega["Fecha"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Fecha";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Material");
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


	$tdatacargue_material_a_bodega["Material"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Material";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Tecnico");
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
	$edata["LookupTable"] = "Bodegas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "identificador";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "bodega";

	

	
	$edata["LookupOrderBy"] = "bodega";

	
	
	
	

	
	
	
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
		$fdata["filterTotalFields"] = "id carga";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacargue_material_a_bodega["Tecnico"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Tecnico";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Observacion");
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


	$tdatacargue_material_a_bodega["Observacion"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Observacion";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Empresa");
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


	$tdatacargue_material_a_bodega["Empresa"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Empresa";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Cantidad");
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


	$tdatacargue_material_a_bodega["Cantidad"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Cantidad";
//	Cargue o Descargue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cargue o Descargue";
	$fdata["GoodName"] = "Cargue_o_Descargue";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega","Cargue_o_Descargue");
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


	$tdatacargue_material_a_bodega["Cargue o Descargue"] = $fdata;
		$tdatacargue_material_a_bodega[".searchableFields"][] = "Cargue o Descargue";


$tables_data["Cargue Material A Bodega"]=&$tdatacargue_material_a_bodega;
$field_labels["Cargue_Material_A_Bodega"] = &$fieldLabelscargue_material_a_bodega;
$fieldToolTips["Cargue_Material_A_Bodega"] = &$fieldToolTipscargue_material_a_bodega;
$placeHolders["Cargue_Material_A_Bodega"] = &$placeHolderscargue_material_a_bodega;
$page_titles["Cargue_Material_A_Bodega"] = &$pageTitlescargue_material_a_bodega;


changeTextControlsToDate( "Cargue Material A Bodega" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cargue Material A Bodega"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cargue Material A Bodega"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargue_material_a_bodega()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Empresa,  Cantidad,  `Cargue o Descargue`";
$proto0["m_strFrom"] = "FROM `cargue de materiales`";
$proto0["m_strWhere"] = "(Tecnico =123123 OR Tecnico =1122334455)";
$proto0["m_strOrderBy"] = "ORDER BY `id carga` DESC, Fecha DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Tecnico =123123 OR Tecnico =1122334455";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Tecnico =123123 OR Tecnico =1122334455"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Tecnico =123123";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=123123";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Tecnico =1122334455";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1122334455";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id carga",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto10["m_sql"] = "`id carga`";
$proto10["m_srcTableName"] = "Cargue Material A Bodega";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "Cargue Material A Bodega";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto14["m_sql"] = "Material";
$proto14["m_srcTableName"] = "Cargue Material A Bodega";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto16["m_sql"] = "Tecnico";
$proto16["m_srcTableName"] = "Cargue Material A Bodega";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto18["m_sql"] = "Observacion";
$proto18["m_srcTableName"] = "Cargue Material A Bodega";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Cargue Material A Bodega";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto22["m_sql"] = "Cantidad";
$proto22["m_srcTableName"] = "Cargue Material A Bodega";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Cargue o Descargue",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto24["m_sql"] = "`Cargue o Descargue`";
$proto24["m_srcTableName"] = "Cargue Material A Bodega";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cargue de materiales";
$proto27["m_srcTableName"] = "Cargue Material A Bodega";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id carga";
$proto27["m_columns"][] = "Fecha";
$proto27["m_columns"][] = "Material";
$proto27["m_columns"][] = "Cantidad";
$proto27["m_columns"][] = "Tecnico";
$proto27["m_columns"][] = "Observacion";
$proto27["m_columns"][] = "Foto";
$proto27["m_columns"][] = "Empresa";
$proto27["m_columns"][] = "Cargue o Descargue";
$proto27["m_columns"][] = "Bodega";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`cargue de materiales`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Cargue Material A Bodega";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id carga",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Cargue Material A Bodega";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargue_material_a_bodega = createSqlQuery_cargue_material_a_bodega();


	
												;

								

$tdatacargue_material_a_bodega[".sqlquery"] = $queryData_cargue_material_a_bodega;



include_once(getabspath("include/cargue_material_a_bodega_events.php"));
$tdatacargue_material_a_bodega[".hasEvents"] = true;

?>