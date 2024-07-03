<?php
$tdatamaterial_reintegrado_a_bodega1 = array();
$tdatamaterial_reintegrado_a_bodega1[".searchableFields"] = array();
$tdatamaterial_reintegrado_a_bodega1[".ShortName"] = "material_reintegrado_a_bodega1";
$tdatamaterial_reintegrado_a_bodega1[".OwnerID"] = "Tecnico";
$tdatamaterial_reintegrado_a_bodega1[".OriginalTable"] = "cargue de materiales";


$tdatamaterial_reintegrado_a_bodega1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" );
$tdatamaterial_reintegrado_a_bodega1[".originalPagesByType"] = $tdatamaterial_reintegrado_a_bodega1[".pagesByType"];
$tdatamaterial_reintegrado_a_bodega1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"view\":[\"view\"]}" ) );
$tdatamaterial_reintegrado_a_bodega1[".originalPages"] = $tdatamaterial_reintegrado_a_bodega1[".pages"];
$tdatamaterial_reintegrado_a_bodega1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"view\":\"view\"}" );
$tdatamaterial_reintegrado_a_bodega1[".originalDefaultPages"] = $tdatamaterial_reintegrado_a_bodega1[".defaultPages"];

//	field labels
$fieldLabelsmaterial_reintegrado_a_bodega1 = array();
$fieldToolTipsmaterial_reintegrado_a_bodega1 = array();
$pageTitlesmaterial_reintegrado_a_bodega1 = array();
$placeHoldersmaterial_reintegrado_a_bodega1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"] = array();
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"] = array();
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"] = array();
	$pageTitlesmaterial_reintegrado_a_bodega1["Spanish"] = array();
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["id_carga"] = "Id Carga";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["id_carga"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["id_carga"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Fecha"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Fecha"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Material"] = "Material";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Material"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Material"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Tecnico"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Tecnico"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Observacion"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Observacion"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Foto"] = "Foto";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Foto"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Foto"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Empresa"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Empresa"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Cargue_o_Descargue"] = "Cargue o Descargue";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Cargue_o_Descargue"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Cargue_o_Descargue"] = "";
	$fieldLabelsmaterial_reintegrado_a_bodega1["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]["Cantidad"] = "";
	$placeHoldersmaterial_reintegrado_a_bodega1["Spanish"]["Cantidad"] = "";
	if (count($fieldToolTipsmaterial_reintegrado_a_bodega1["Spanish"]))
		$tdatamaterial_reintegrado_a_bodega1[".isUseToolTips"] = true;
}


	$tdatamaterial_reintegrado_a_bodega1[".NCSearch"] = true;



$tdatamaterial_reintegrado_a_bodega1[".shortTableName"] = "material_reintegrado_a_bodega1";
$tdatamaterial_reintegrado_a_bodega1[".nSecOptions"] = 1;

$tdatamaterial_reintegrado_a_bodega1[".mainTableOwnerID"] = "Tecnico";
$tdatamaterial_reintegrado_a_bodega1[".entityType"] = 1;
$tdatamaterial_reintegrado_a_bodega1[".connId"] = "mega_ya_at_localhost";


$tdatamaterial_reintegrado_a_bodega1[".strOriginalTableName"] = "cargue de materiales";

	



$tdatamaterial_reintegrado_a_bodega1[".showAddInPopup"] = false;

$tdatamaterial_reintegrado_a_bodega1[".showEditInPopup"] = false;

$tdatamaterial_reintegrado_a_bodega1[".showViewInPopup"] = false;

$tdatamaterial_reintegrado_a_bodega1[".listAjax"] = false;
//	temporary
//$tdatamaterial_reintegrado_a_bodega1[".listAjax"] = false;

	$tdatamaterial_reintegrado_a_bodega1[".audit"] = true;

	$tdatamaterial_reintegrado_a_bodega1[".locking"] = false;


$pages = $tdatamaterial_reintegrado_a_bodega1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamaterial_reintegrado_a_bodega1[".edit"] = true;
	$tdatamaterial_reintegrado_a_bodega1[".afterEditAction"] = 1;
	$tdatamaterial_reintegrado_a_bodega1[".closePopupAfterEdit"] = 1;
	$tdatamaterial_reintegrado_a_bodega1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamaterial_reintegrado_a_bodega1[".add"] = true;
$tdatamaterial_reintegrado_a_bodega1[".afterAddAction"] = 1;
$tdatamaterial_reintegrado_a_bodega1[".closePopupAfterAdd"] = 1;
$tdatamaterial_reintegrado_a_bodega1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamaterial_reintegrado_a_bodega1[".list"] = true;
}



$tdatamaterial_reintegrado_a_bodega1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamaterial_reintegrado_a_bodega1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamaterial_reintegrado_a_bodega1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamaterial_reintegrado_a_bodega1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamaterial_reintegrado_a_bodega1[".printFriendly"] = true;
}



$tdatamaterial_reintegrado_a_bodega1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamaterial_reintegrado_a_bodega1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamaterial_reintegrado_a_bodega1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamaterial_reintegrado_a_bodega1[".isUseAjaxSuggest"] = true;



						

$tdatamaterial_reintegrado_a_bodega1[".ajaxCodeSnippetAdded"] = false;

$tdatamaterial_reintegrado_a_bodega1[".buttonsAdded"] = false;

$tdatamaterial_reintegrado_a_bodega1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamaterial_reintegrado_a_bodega1[".isUseTimeForSearch"] = false;


$tdatamaterial_reintegrado_a_bodega1[".badgeColor"] = "DAA520";


$tdatamaterial_reintegrado_a_bodega1[".allSearchFields"] = array();
$tdatamaterial_reintegrado_a_bodega1[".filterFields"] = array();
$tdatamaterial_reintegrado_a_bodega1[".requiredSearchFields"] = array();

$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"] = array();
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "id carga";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Fecha";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Material";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Tecnico";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Observacion";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Empresa";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Cantidad";
$tdatamaterial_reintegrado_a_bodega1[".googleLikeFields"][] = "Cargue o Descargue";



$tdatamaterial_reintegrado_a_bodega1[".tableType"] = "list";

$tdatamaterial_reintegrado_a_bodega1[".printerPageOrientation"] = 0;
$tdatamaterial_reintegrado_a_bodega1[".nPrinterPageScale"] = 100;

$tdatamaterial_reintegrado_a_bodega1[".nPrinterSplitRecords"] = 40;

$tdatamaterial_reintegrado_a_bodega1[".geocodingEnabled"] = false;




$tdatamaterial_reintegrado_a_bodega1[".isDisplayLoading"] = true;






$tdatamaterial_reintegrado_a_bodega1[".pageSize"] = 20;

$tdatamaterial_reintegrado_a_bodega1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Fecha DESC";
$tdatamaterial_reintegrado_a_bodega1[".strOrderBy"] = $tstrOrderBy;

$tdatamaterial_reintegrado_a_bodega1[".orderindexes"] = array();
	$tdatamaterial_reintegrado_a_bodega1[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha`");



$tdatamaterial_reintegrado_a_bodega1[".sqlHead"] = "SELECT `id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Foto,  Empresa,  Cantidad,  `Cargue o Descargue`";
$tdatamaterial_reintegrado_a_bodega1[".sqlFrom"] = "FROM `cargue de materiales`";
$tdatamaterial_reintegrado_a_bodega1[".sqlWhereExpr"] = "(`Cargue o Descargue` like'D%')";
$tdatamaterial_reintegrado_a_bodega1[".sqlTail"] = "";

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
$tdatamaterial_reintegrado_a_bodega1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamaterial_reintegrado_a_bodega1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamaterial_reintegrado_a_bodega1[".arrGroupsPerPage"] = $arrGPP;

$tdatamaterial_reintegrado_a_bodega1[".highlightSearchResults"] = true;

$tableKeysmaterial_reintegrado_a_bodega1 = array();
$tableKeysmaterial_reintegrado_a_bodega1[] = "id carga";
$tdatamaterial_reintegrado_a_bodega1[".Keys"] = $tableKeysmaterial_reintegrado_a_bodega1;


$tdatamaterial_reintegrado_a_bodega1[".hideMobileList"] = array();




//	id carga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id carga";
	$fdata["GoodName"] = "id_carga";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","id_carga");
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


	$tdatamaterial_reintegrado_a_bodega1["id carga"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "id carga";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Fecha");
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


	$tdatamaterial_reintegrado_a_bodega1["Fecha"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Fecha";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Material");
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


	$tdatamaterial_reintegrado_a_bodega1["Material"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Material";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Tecnico");
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


	$tdatamaterial_reintegrado_a_bodega1["Tecnico"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Tecnico";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Observacion");
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


	$tdatamaterial_reintegrado_a_bodega1["Observacion"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Observacion";
//	Foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Foto";
	$fdata["GoodName"] = "Foto";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Foto");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 1;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("bmp");
						$edata["acceptFileTypesHtml"] = ".bmp";
			$edata["acceptFileTypes"][] = strtoupper("gif");
						$edata["acceptFileTypesHtml"] .= ",.gif";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 800;

	
	
	
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


	$tdatamaterial_reintegrado_a_bodega1["Foto"] = $fdata;
	//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Empresa");
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


	$tdatamaterial_reintegrado_a_bodega1["Empresa"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Empresa";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Cantidad");
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


	$tdatamaterial_reintegrado_a_bodega1["Cantidad"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Cantidad";
//	Cargue o Descargue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cargue o Descargue";
	$fdata["GoodName"] = "Cargue_o_Descargue";
	$fdata["ownerTable"] = "cargue de materiales";
	$fdata["Label"] = GetFieldLabel("Material_Reintegrado_a_Bodega","Cargue_o_Descargue");
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


	$tdatamaterial_reintegrado_a_bodega1["Cargue o Descargue"] = $fdata;
		$tdatamaterial_reintegrado_a_bodega1[".searchableFields"][] = "Cargue o Descargue";


$tables_data["Material Reintegrado a Bodega"]=&$tdatamaterial_reintegrado_a_bodega1;
$field_labels["Material_Reintegrado_a_Bodega"] = &$fieldLabelsmaterial_reintegrado_a_bodega1;
$fieldToolTips["Material_Reintegrado_a_Bodega"] = &$fieldToolTipsmaterial_reintegrado_a_bodega1;
$placeHolders["Material_Reintegrado_a_Bodega"] = &$placeHoldersmaterial_reintegrado_a_bodega1;
$page_titles["Material_Reintegrado_a_Bodega"] = &$pageTitlesmaterial_reintegrado_a_bodega1;


changeTextControlsToDate( "Material Reintegrado a Bodega" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Material Reintegrado a Bodega"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Material Reintegrado a Bodega"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_material_reintegrado_a_bodega1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id carga`,  Fecha,  Material,  Tecnico,  Observacion,  Foto,  Empresa,  Cantidad,  `Cargue o Descargue`";
$proto0["m_strFrom"] = "FROM `cargue de materiales`";
$proto0["m_strWhere"] = "(`Cargue o Descargue` like'D%')";
$proto0["m_strOrderBy"] = "ORDER BY Fecha DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Cargue o Descargue` like'D%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cargue o Descargue",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like'D%'";
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
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto6["m_sql"] = "`id carga`";
$proto6["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto12["m_sql"] = "Tecnico";
$proto12["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto14["m_sql"] = "Observacion";
$proto14["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto16["m_sql"] = "Foto";
$proto16["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto18["m_sql"] = "Empresa";
$proto18["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto20["m_sql"] = "Cantidad";
$proto20["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cargue o Descargue",
	"m_strTable" => "cargue de materiales",
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto22["m_sql"] = "`Cargue o Descargue`";
$proto22["m_srcTableName"] = "Material Reintegrado a Bodega";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cargue de materiales";
$proto25["m_srcTableName"] = "Material Reintegrado a Bodega";
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
$proto24["m_srcTableName"] = "Material Reintegrado a Bodega";
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
	"m_srcTableName" => "Material Reintegrado a Bodega"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Material Reintegrado a Bodega";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_material_reintegrado_a_bodega1 = createSqlQuery_material_reintegrado_a_bodega1();


	
												;

									

$tdatamaterial_reintegrado_a_bodega1[".sqlquery"] = $queryData_material_reintegrado_a_bodega1;



include_once(getabspath("include/material_reintegrado_a_bodega1_events.php"));
$tdatamaterial_reintegrado_a_bodega1[".hasEvents"] = true;

?>