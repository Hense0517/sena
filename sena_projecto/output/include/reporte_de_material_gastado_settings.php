<?php
$tdatareporte_de_material_gastado = array();
$tdatareporte_de_material_gastado[".searchableFields"] = array();
$tdatareporte_de_material_gastado[".ShortName"] = "reporte_de_material_gastado";
$tdatareporte_de_material_gastado[".OwnerID"] = "Tecnico";
$tdatareporte_de_material_gastado[".OriginalTable"] = "ingreso de materiales";


$tdatareporte_de_material_gastado[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatareporte_de_material_gastado[".originalPagesByType"] = $tdatareporte_de_material_gastado[".pagesByType"];
$tdatareporte_de_material_gastado[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatareporte_de_material_gastado[".originalPages"] = $tdatareporte_de_material_gastado[".pages"];
$tdatareporte_de_material_gastado[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatareporte_de_material_gastado[".originalDefaultPages"] = $tdatareporte_de_material_gastado[".defaultPages"];

//	field labels
$fieldLabelsreporte_de_material_gastado = array();
$fieldToolTipsreporte_de_material_gastado = array();
$pageTitlesreporte_de_material_gastado = array();
$placeHoldersreporte_de_material_gastado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreporte_de_material_gastado["Spanish"] = array();
	$fieldToolTipsreporte_de_material_gastado["Spanish"] = array();
	$placeHoldersreporte_de_material_gastado["Spanish"] = array();
	$pageTitlesreporte_de_material_gastado["Spanish"] = array();
	$fieldLabelsreporte_de_material_gastado["Spanish"]["Fecha_de_Consumo"] = "Fecha de Consumo";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["Fecha_de_Consumo"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["Fecha_de_Consumo"] = "";
	$fieldLabelsreporte_de_material_gastado["Spanish"]["Material"] = "Material";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["Material"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["Material"] = "";
	$fieldLabelsreporte_de_material_gastado["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["Cantidad"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["Cantidad"] = "";
	$fieldLabelsreporte_de_material_gastado["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["Tecnico"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["Tecnico"] = "";
	$fieldLabelsreporte_de_material_gastado["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["Empresa"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["Empresa"] = "";
	$fieldLabelsreporte_de_material_gastado["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsreporte_de_material_gastado["Spanish"]["cedula"] = "";
	$placeHoldersreporte_de_material_gastado["Spanish"]["cedula"] = "";
	if (count($fieldToolTipsreporte_de_material_gastado["Spanish"]))
		$tdatareporte_de_material_gastado[".isUseToolTips"] = true;
}


	$tdatareporte_de_material_gastado[".NCSearch"] = true;



$tdatareporte_de_material_gastado[".shortTableName"] = "reporte_de_material_gastado";
$tdatareporte_de_material_gastado[".nSecOptions"] = 1;

$tdatareporte_de_material_gastado[".mainTableOwnerID"] = "Tecnico";
$tdatareporte_de_material_gastado[".entityType"] = 2;
$tdatareporte_de_material_gastado[".connId"] = "mega_ya_at_localhost";


$tdatareporte_de_material_gastado[".strOriginalTableName"] = "ingreso de materiales";

	



$tdatareporte_de_material_gastado[".showAddInPopup"] = false;

$tdatareporte_de_material_gastado[".showEditInPopup"] = false;

$tdatareporte_de_material_gastado[".showViewInPopup"] = false;

$tdatareporte_de_material_gastado[".listAjax"] = false;
//	temporary
//$tdatareporte_de_material_gastado[".listAjax"] = false;

	$tdatareporte_de_material_gastado[".audit"] = false;

	$tdatareporte_de_material_gastado[".locking"] = false;


$pages = $tdatareporte_de_material_gastado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareporte_de_material_gastado[".edit"] = true;
	$tdatareporte_de_material_gastado[".afterEditAction"] = 1;
	$tdatareporte_de_material_gastado[".closePopupAfterEdit"] = 1;
	$tdatareporte_de_material_gastado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareporte_de_material_gastado[".add"] = true;
$tdatareporte_de_material_gastado[".afterAddAction"] = 1;
$tdatareporte_de_material_gastado[".closePopupAfterAdd"] = 1;
$tdatareporte_de_material_gastado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareporte_de_material_gastado[".list"] = true;
}



$tdatareporte_de_material_gastado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareporte_de_material_gastado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareporte_de_material_gastado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareporte_de_material_gastado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareporte_de_material_gastado[".printFriendly"] = true;
}



$tdatareporte_de_material_gastado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareporte_de_material_gastado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareporte_de_material_gastado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareporte_de_material_gastado[".isUseAjaxSuggest"] = true;



						

$tdatareporte_de_material_gastado[".ajaxCodeSnippetAdded"] = false;

$tdatareporte_de_material_gastado[".buttonsAdded"] = false;

$tdatareporte_de_material_gastado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareporte_de_material_gastado[".isUseTimeForSearch"] = false;


$tdatareporte_de_material_gastado[".badgeColor"] = "1E90FF";


$tdatareporte_de_material_gastado[".allSearchFields"] = array();
$tdatareporte_de_material_gastado[".filterFields"] = array();
$tdatareporte_de_material_gastado[".requiredSearchFields"] = array();

$tdatareporte_de_material_gastado[".googleLikeFields"] = array();
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "Tecnico";
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "Fecha de Consumo";
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "Material";
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "Cantidad";
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "Empresa";
$tdatareporte_de_material_gastado[".googleLikeFields"][] = "cedula";



$tdatareporte_de_material_gastado[".tableType"] = "report";

$tdatareporte_de_material_gastado[".printerPageOrientation"] = 0;
$tdatareporte_de_material_gastado[".nPrinterPageScale"] = 100;

$tdatareporte_de_material_gastado[".nPrinterSplitRecords"] = 40;

$tdatareporte_de_material_gastado[".geocodingEnabled"] = false;

//report settings

$tdatareporte_de_material_gastado[".reportPrintGroupsPerPage"] = 3;
$tdatareporte_de_material_gastado[".reportPrintRecordsPerPage"] = 40;

$tdatareporte_de_material_gastado[".pageSizeGroups"] = 5;
$tdatareporte_de_material_gastado[".pageSizeRecords"] = 20;


//end of report settings



$tdatareporte_de_material_gastado[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY `Fecha de Consumo` DESC";
$tdatareporte_de_material_gastado[".strOrderBy"] = $tstrOrderBy;

$tdatareporte_de_material_gastado[".orderindexes"] = array();
	$tdatareporte_de_material_gastado[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Fecha de Consumo`");



$tdatareporte_de_material_gastado[".sqlHead"] = "SELECT Tecnico,  `Fecha de Consumo`,  Material,  Cantidad,  Empresa,  Tecnico AS cedula";
$tdatareporte_de_material_gastado[".sqlFrom"] = "FROM `ingreso de materiales`";
$tdatareporte_de_material_gastado[".sqlWhereExpr"] = "";
$tdatareporte_de_material_gastado[".sqlTail"] = "";

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
$tdatareporte_de_material_gastado[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareporte_de_material_gastado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareporte_de_material_gastado[".arrGroupsPerPage"] = $arrGPP;

$tdatareporte_de_material_gastado[".highlightSearchResults"] = true;

$tableKeysreporte_de_material_gastado = array();
$tdatareporte_de_material_gastado[".Keys"] = $tableKeysreporte_de_material_gastado;


$tdatareporte_de_material_gastado[".hideMobileList"] = array();




//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","Tecnico");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	

	
	$edata["LookupOrderBy"] = "Nombre y Apellido";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["Tecnico"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "Tecnico";
//	Fecha de Consumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha de Consumo";
	$fdata["GoodName"] = "Fecha_de_Consumo";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","Fecha_de_Consumo");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["Fecha de Consumo"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "Fecha de Consumo";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","Material");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	

	
	$edata["LookupOrderBy"] = "Material";

		$edata["LookupDesc"] = true;

	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["Material"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "Material";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","Cantidad");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["Cantidad"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "Cantidad";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","Empresa");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	

	
	$edata["LookupOrderBy"] = "Empresa";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["Empresa"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "Empresa";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "ingreso de materiales";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Material_Gastado","cedula");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatareporte_de_material_gastado["cedula"] = $fdata;
		$tdatareporte_de_material_gastado[".searchableFields"][] = "cedula";


$tables_data["Reporte de Material Gastado"]=&$tdatareporte_de_material_gastado;
$field_labels["Reporte_de_Material_Gastado"] = &$fieldLabelsreporte_de_material_gastado;
$fieldToolTips["Reporte_de_Material_Gastado"] = &$fieldToolTipsreporte_de_material_gastado;
$placeHolders["Reporte_de_Material_Gastado"] = &$placeHoldersreporte_de_material_gastado;
$page_titles["Reporte_de_Material_Gastado"] = &$pageTitlesreporte_de_material_gastado;


changeTextControlsToDate( "Reporte de Material Gastado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Reporte de Material Gastado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Reporte de Material Gastado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reporte_de_material_gastado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Tecnico,  `Fecha de Consumo`,  Material,  Cantidad,  Empresa,  Tecnico AS cedula";
$proto0["m_strFrom"] = "FROM `ingreso de materiales`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de Consumo` DESC";
	
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
	"m_strName" => "Tecnico",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto6["m_sql"] = "Tecnico";
$proto6["m_srcTableName"] = "Reporte de Material Gastado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto8["m_sql"] = "`Fecha de Consumo`";
$proto8["m_srcTableName"] = "Reporte de Material Gastado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto10["m_sql"] = "Material";
$proto10["m_srcTableName"] = "Reporte de Material Gastado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "Reporte de Material Gastado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "Reporte de Material Gastado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto16["m_sql"] = "Tecnico";
$proto16["m_srcTableName"] = "Reporte de Material Gastado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "cedula";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ingreso de materiales";
$proto19["m_srcTableName"] = "Reporte de Material Gastado";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id Ingreso";
$proto19["m_columns"][] = "Fecha de Consumo";
$proto19["m_columns"][] = "Material";
$proto19["m_columns"][] = "Cantidad";
$proto19["m_columns"][] = "Ticket";
$proto19["m_columns"][] = "Tecnico";
$proto19["m_columns"][] = "Empresa";
$proto19["m_columns"][] = "Tipo de Actividad";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`ingreso de materiales`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Reporte de Material Gastado";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Consumo",
	"m_strTable" => "ingreso de materiales",
	"m_srcTableName" => "Reporte de Material Gastado"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Reporte de Material Gastado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reporte_de_material_gastado = createSqlQuery_reporte_de_material_gastado();


	
												;

						

$tdatareporte_de_material_gastado[".sqlquery"] = $queryData_reporte_de_material_gastado;



$tdatareporte_de_material_gastado[".hasEvents"] = false;

?>