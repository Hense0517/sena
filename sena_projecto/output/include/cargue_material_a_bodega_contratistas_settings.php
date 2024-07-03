<?php
$tdatacargue_material_a_bodega_contratistas = array();
$tdatacargue_material_a_bodega_contratistas[".searchableFields"] = array();
$tdatacargue_material_a_bodega_contratistas[".ShortName"] = "cargue_material_a_bodega_contratistas";
$tdatacargue_material_a_bodega_contratistas[".OwnerID"] = "Empresa";
$tdatacargue_material_a_bodega_contratistas[".OriginalTable"] = "cargue de materiales";


$tdatacargue_material_a_bodega_contratistas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacargue_material_a_bodega_contratistas[".originalPagesByType"] = $tdatacargue_material_a_bodega_contratistas[".pagesByType"];
$tdatacargue_material_a_bodega_contratistas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacargue_material_a_bodega_contratistas[".originalPages"] = $tdatacargue_material_a_bodega_contratistas[".pages"];
$tdatacargue_material_a_bodega_contratistas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacargue_material_a_bodega_contratistas[".originalDefaultPages"] = $tdatacargue_material_a_bodega_contratistas[".defaultPages"];

//	field labels
$fieldLabelscargue_material_a_bodega_contratistas = array();
$fieldToolTipscargue_material_a_bodega_contratistas = array();
$pageTitlescargue_material_a_bodega_contratistas = array();
$placeHolderscargue_material_a_bodega_contratistas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"] = array();
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"] = array();
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"] = array();
	$pageTitlescargue_material_a_bodega_contratistas["Spanish"] = array();
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["id_carga"] = "Id Carga";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["id_carga"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["id_carga"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Fecha"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Fecha"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Material"] = "Material";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Material"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Material"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Tecnico"] = "Bodega";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Tecnico"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Tecnico"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Observacion"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Observacion"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Empresa"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Empresa"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Cantidad"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Cantidad"] = "";
	$fieldLabelscargue_material_a_bodega_contratistas["Spanish"]["Cargue_o_Descargue"] = "Cargue o Descargue";
	$fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]["Cargue_o_Descargue"] = "";
	$placeHolderscargue_material_a_bodega_contratistas["Spanish"]["Cargue_o_Descargue"] = "";
	if (count($fieldToolTipscargue_material_a_bodega_contratistas["Spanish"]))
		$tdatacargue_material_a_bodega_contratistas[".isUseToolTips"] = true;
}


	$tdatacargue_material_a_bodega_contratistas[".NCSearch"] = true;



$tdatacargue_material_a_bodega_contratistas[".shortTableName"] = "cargue_material_a_bodega_contratistas";
$tdatacargue_material_a_bodega_contratistas[".nSecOptions"] = 1;

$tdatacargue_material_a_bodega_contratistas[".mainTableOwnerID"] = "Empresa";
$tdatacargue_material_a_bodega_contratistas[".entityType"] = 1;
$tdatacargue_material_a_bodega_contratistas[".connId"] = "mega_ya_at_localhost";


$tdatacargue_material_a_bodega_contratistas[".strOriginalTableName"] = "cargue de materiales";

	



$tdatacargue_material_a_bodega_contratistas[".showAddInPopup"] = false;

$tdatacargue_material_a_bodega_contratistas[".showEditInPopup"] = false;

$tdatacargue_material_a_bodega_contratistas[".showViewInPopup"] = false;

$tdatacargue_material_a_bodega_contratistas[".listAjax"] = false;
//	temporary
//$tdatacargue_material_a_bodega_contratistas[".listAjax"] = false;

	$tdatacargue_material_a_bodega_contratistas[".audit"] = true;

	$tdatacargue_material_a_bodega_contratistas[".locking"] = false;


$pages = $tdatacargue_material_a_bodega_contratistas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargue_material_a_bodega_contratistas[".edit"] = true;
	$tdatacargue_material_a_bodega_contratistas[".afterEditAction"] = 1;
	$tdatacargue_material_a_bodega_contratistas[".closePopupAfterEdit"] = 1;
	$tdatacargue_material_a_bodega_contratistas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargue_material_a_bodega_contratistas[".add"] = true;
$tdatacargue_material_a_bodega_contratistas[".afterAddAction"] = 1;
$tdatacargue_material_a_bodega_contratistas[".closePopupAfterAdd"] = 1;
$tdatacargue_material_a_bodega_contratistas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargue_material_a_bodega_contratistas[".list"] = true;
}



$tdatacargue_material_a_bodega_contratistas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargue_material_a_bodega_contratistas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargue_material_a_bodega_contratistas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargue_material_a_bodega_contratistas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargue_material_a_bodega_contratistas[".printFriendly"] = true;
}



$tdatacargue_material_a_bodega_contratistas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargue_material_a_bodega_contratistas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargue_material_a_bodega_contratistas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargue_material_a_bodega_contratistas[".isUseAjaxSuggest"] = true;



						

$tdatacargue_material_a_bodega_contratistas[".ajaxCodeSnippetAdded"] = false;

$tdatacargue_material_a_bodega_contratistas[".buttonsAdded"] = false;

$tdatacargue_material_a_bodega_contratistas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargue_material_a_bodega_contratistas[".isUseTimeForSearch"] = false;


$tdatacargue_material_a_bodega_contratistas[".badgeColor"] = "3CB371";


$tdatacargue_material_a_bodega_contratistas[".allSearchFields"] = array();
$tdatacargue_material_a_bodega_contratistas[".filterFields"] = array();
$tdatacargue_material_a_bodega_contratistas[".requiredSearchFields"] = array();

$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"] = array();
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "id carga";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Fecha";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Material";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Tecnico";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Observacion";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Empresa";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Cantidad";
$tdatacargue_material_a_bodega_contratistas[".googleLikeFields"][] = "Cargue o Descargue";



$tdatacargue_material_a_bodega_contratistas[".tableType"] = "list";

$tdatacargue_material_a_bodega_contratistas[".printerPageOrientation"] = 0;
$tdatacargue_material_a_bodega_contratistas[".nPrinterPageScale"] = 100;

$tdatacargue_material_a_bodega_contratistas[".nPrinterSplitRecords"] = 40;

$tdatacargue_material_a_bodega_contratistas[".geocodingEnabled"] = false;




$tdatacargue_material_a_bodega_contratistas[".isDisplayLoading"] = true;






$tdatacargue_material_a_bodega_contratistas[".pageSize"] = 20;

$tdatacargue_material_a_bodega_contratistas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id carga` DESC, Fecha DESC";
$tdatacargue_material_a_bodega_contratistas[".strOrderBy"] = $tstrOrderBy;

$tdatacargue_material_a_bodega_contratistas[".orderindexes"] = array();
	$tdatacargue_material_a_bodega_contratistas[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id carga`");

	$tdatacargue_material_a_bodega_contratistas[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha`");



$tdatacargue_material_a_bodega_contratistas[".sqlHead"] = "SELECT `id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Empresa,  Cantidad,  `Cargue o Descargue`";
$tdatacargue_material_a_bodega_contratistas[".sqlFrom"] = "FROM `cargue de materiales`";
$tdatacargue_material_a_bodega_contratistas[".sqlWhereExpr"] = "(Tecnico =123123 OR Tecnico =1122334455)";
$tdatacargue_material_a_bodega_contratistas[".sqlTail"] = "";

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
$tdatacargue_material_a_bodega_contratistas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargue_material_a_bodega_contratistas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargue_material_a_bodega_contratistas[".arrGroupsPerPage"] = $arrGPP;

$tdatacargue_material_a_bodega_contratistas[".highlightSearchResults"] = true;

$tableKeyscargue_material_a_bodega_contratistas = array();
$tableKeyscargue_material_a_bodega_contratistas[] = "id carga";
$tdatacargue_material_a_bodega_contratistas[".Keys"] = $tableKeyscargue_material_a_bodega_contratistas;


$tdatacargue_material_a_bodega_contratistas[".hideMobileList"] = array();




//	id carga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id carga";
	$fdata["GoodName"] = "id_carga";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","id_carga");
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


	$tdatacargue_material_a_bodega_contratistas["id carga"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "id carga";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Fecha");
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


	$tdatacargue_material_a_bodega_contratistas["Fecha"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Fecha";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Material");
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


	$tdatacargue_material_a_bodega_contratistas["Material"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Material";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Tecnico");
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
	$edata["LookupTable"] = "Bodegas Contratista";
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


	$tdatacargue_material_a_bodega_contratistas["Tecnico"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Tecnico";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Observacion");
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


	$tdatacargue_material_a_bodega_contratistas["Observacion"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Observacion";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Empresa");
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


	$tdatacargue_material_a_bodega_contratistas["Empresa"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Empresa";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Cantidad");
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


	$tdatacargue_material_a_bodega_contratistas["Cantidad"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Cantidad";
//	Cargue o Descargue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cargue o Descargue";
	$fdata["GoodName"] = "Cargue_o_Descargue";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Cargue_Material_A_Bodega_Contratistas","Cargue_o_Descargue");
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


	$tdatacargue_material_a_bodega_contratistas["Cargue o Descargue"] = $fdata;
		$tdatacargue_material_a_bodega_contratistas[".searchableFields"][] = "Cargue o Descargue";


$tables_data["Cargue Material A Bodega Contratistas"]=&$tdatacargue_material_a_bodega_contratistas;
$field_labels["Cargue_Material_A_Bodega_Contratistas"] = &$fieldLabelscargue_material_a_bodega_contratistas;
$fieldToolTips["Cargue_Material_A_Bodega_Contratistas"] = &$fieldToolTipscargue_material_a_bodega_contratistas;
$placeHolders["Cargue_Material_A_Bodega_Contratistas"] = &$placeHolderscargue_material_a_bodega_contratistas;
$page_titles["Cargue_Material_A_Bodega_Contratistas"] = &$pageTitlescargue_material_a_bodega_contratistas;


changeTextControlsToDate( "Cargue Material A Bodega Contratistas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Cargue Material A Bodega Contratistas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Cargue Material A Bodega Contratistas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargue_material_a_bodega_contratistas()
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
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
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
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
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
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto10["m_sql"] = "`id carga`";
$proto10["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto12["m_sql"] = "Fecha";
$proto12["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto14["m_sql"] = "Material";
$proto14["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto16["m_sql"] = "Tecnico";
$proto16["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto18["m_sql"] = "Observacion";
$proto18["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto20["m_sql"] = "Empresa";
$proto20["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto22["m_sql"] = "Cantidad";
$proto22["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Cargue o Descargue",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto24["m_sql"] = "`Cargue o Descargue`";
$proto24["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cargue de materiales";
$proto27["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
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
$proto26["m_srcTableName"] = "Cargue Material A Bodega Contratistas";
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
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
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
	"m_srcTableName" => "Cargue Material A Bodega Contratistas"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Cargue Material A Bodega Contratistas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargue_material_a_bodega_contratistas = createSqlQuery_cargue_material_a_bodega_contratistas();


	
												;

								

$tdatacargue_material_a_bodega_contratistas[".sqlquery"] = $queryData_cargue_material_a_bodega_contratistas;



include_once(getabspath("include/cargue_material_a_bodega_contratistas_events.php"));
$tdatacargue_material_a_bodega_contratistas[".hasEvents"] = true;

?>