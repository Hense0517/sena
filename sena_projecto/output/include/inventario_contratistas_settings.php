<?php
$tdatainventario_contratistas = array();
$tdatainventario_contratistas[".searchableFields"] = array();
$tdatainventario_contratistas[".ShortName"] = "inventario_contratistas";
$tdatainventario_contratistas[".OwnerID"] = "Empresa";
$tdatainventario_contratistas[".OriginalTable"] = "inventario_ general";


$tdatainventario_contratistas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainventario_contratistas[".originalPagesByType"] = $tdatainventario_contratistas[".pagesByType"];
$tdatainventario_contratistas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainventario_contratistas[".originalPages"] = $tdatainventario_contratistas[".pages"];
$tdatainventario_contratistas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainventario_contratistas[".originalDefaultPages"] = $tdatainventario_contratistas[".defaultPages"];

//	field labels
$fieldLabelsinventario_contratistas = array();
$fieldToolTipsinventario_contratistas = array();
$pageTitlesinventario_contratistas = array();
$placeHoldersinventario_contratistas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventario_contratistas["Spanish"] = array();
	$fieldToolTipsinventario_contratistas["Spanish"] = array();
	$placeHoldersinventario_contratistas["Spanish"] = array();
	$pageTitlesinventario_contratistas["Spanish"] = array();
	$fieldLabelsinventario_contratistas["Spanish"]["Material"] = "Material";
	$fieldToolTipsinventario_contratistas["Spanish"]["Material"] = "";
	$placeHoldersinventario_contratistas["Spanish"]["Material"] = "";
	$fieldLabelsinventario_contratistas["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsinventario_contratistas["Spanish"]["Tecnico"] = "";
	$placeHoldersinventario_contratistas["Spanish"]["Tecnico"] = "";
	$fieldLabelsinventario_contratistas["Spanish"]["SUM_Cantidad_"] = "SUM(Cantidad)";
	$fieldToolTipsinventario_contratistas["Spanish"]["SUM_Cantidad_"] = "";
	$placeHoldersinventario_contratistas["Spanish"]["SUM_Cantidad_"] = "";
	$fieldLabelsinventario_contratistas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsinventario_contratistas["Spanish"]["Empresa"] = "";
	$placeHoldersinventario_contratistas["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsinventario_contratistas["Spanish"]))
		$tdatainventario_contratistas[".isUseToolTips"] = true;
}


	$tdatainventario_contratistas[".NCSearch"] = true;



$tdatainventario_contratistas[".shortTableName"] = "inventario_contratistas";
$tdatainventario_contratistas[".nSecOptions"] = 1;

$tdatainventario_contratistas[".mainTableOwnerID"] = "Empresa";
$tdatainventario_contratistas[".entityType"] = 1;
$tdatainventario_contratistas[".connId"] = "mega_ya_at_localhost";


$tdatainventario_contratistas[".strOriginalTableName"] = "inventario_ general";

	



$tdatainventario_contratistas[".showAddInPopup"] = false;

$tdatainventario_contratistas[".showEditInPopup"] = false;

$tdatainventario_contratistas[".showViewInPopup"] = false;

$tdatainventario_contratistas[".listAjax"] = false;
//	temporary
//$tdatainventario_contratistas[".listAjax"] = false;

	$tdatainventario_contratistas[".audit"] = true;

	$tdatainventario_contratistas[".locking"] = false;


$pages = $tdatainventario_contratistas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainventario_contratistas[".edit"] = true;
	$tdatainventario_contratistas[".afterEditAction"] = 1;
	$tdatainventario_contratistas[".closePopupAfterEdit"] = 1;
	$tdatainventario_contratistas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainventario_contratistas[".add"] = true;
$tdatainventario_contratistas[".afterAddAction"] = 1;
$tdatainventario_contratistas[".closePopupAfterAdd"] = 1;
$tdatainventario_contratistas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainventario_contratistas[".list"] = true;
}



$tdatainventario_contratistas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainventario_contratistas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainventario_contratistas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainventario_contratistas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainventario_contratistas[".printFriendly"] = true;
}



$tdatainventario_contratistas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainventario_contratistas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainventario_contratistas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainventario_contratistas[".isUseAjaxSuggest"] = true;



						

$tdatainventario_contratistas[".ajaxCodeSnippetAdded"] = false;

$tdatainventario_contratistas[".buttonsAdded"] = false;

$tdatainventario_contratistas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventario_contratistas[".isUseTimeForSearch"] = false;


$tdatainventario_contratistas[".badgeColor"] = "1E90FF";


$tdatainventario_contratistas[".allSearchFields"] = array();
$tdatainventario_contratistas[".filterFields"] = array();
$tdatainventario_contratistas[".requiredSearchFields"] = array();

$tdatainventario_contratistas[".googleLikeFields"] = array();
$tdatainventario_contratistas[".googleLikeFields"][] = "Material";
$tdatainventario_contratistas[".googleLikeFields"][] = "SUM(Cantidad)";
$tdatainventario_contratistas[".googleLikeFields"][] = "Tecnico";
$tdatainventario_contratistas[".googleLikeFields"][] = "Empresa";



$tdatainventario_contratistas[".tableType"] = "list";

$tdatainventario_contratistas[".printerPageOrientation"] = 0;
$tdatainventario_contratistas[".nPrinterPageScale"] = 100;

$tdatainventario_contratistas[".nPrinterSplitRecords"] = 40;

$tdatainventario_contratistas[".geocodingEnabled"] = false;










$tdatainventario_contratistas[".pageSize"] = 20;

$tdatainventario_contratistas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Material";
$tdatainventario_contratistas[".strOrderBy"] = $tstrOrderBy;

$tdatainventario_contratistas[".orderindexes"] = array();
	$tdatainventario_contratistas[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`Material`");



$tdatainventario_contratistas[".sqlHead"] = "SELECT Material,  SUM(Cantidad) AS `SUM(Cantidad)`,  Tecnico,  Empresa";
$tdatainventario_contratistas[".sqlFrom"] = "FROM `inventario_ general`";
$tdatainventario_contratistas[".sqlWhereExpr"] = "";
$tdatainventario_contratistas[".sqlTail"] = "";

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
$tdatainventario_contratistas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventario_contratistas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventario_contratistas[".arrGroupsPerPage"] = $arrGPP;

$tdatainventario_contratistas[".highlightSearchResults"] = true;

$tableKeysinventario_contratistas = array();
$tableKeysinventario_contratistas[] = "Material";
$tdatainventario_contratistas[".Keys"] = $tableKeysinventario_contratistas;


$tdatainventario_contratistas[".hideMobileList"] = array();




//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("Inventario_Contratistas","Material");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id Materales";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Material";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario_contratistas["Material"] = $fdata;
		$tdatainventario_contratistas[".searchableFields"][] = "Material";
//	SUM(Cantidad)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SUM(Cantidad)";
	$fdata["GoodName"] = "SUM_Cantidad_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Inventario_Contratistas","SUM_Cantidad_");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUM(Cantidad)";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(Cantidad)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatainventario_contratistas["SUM(Cantidad)"] = $fdata;
		$tdatainventario_contratistas[".searchableFields"][] = "SUM(Cantidad)";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("Inventario_Contratistas","Tecnico");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cedula";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nombre y Apellido";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario_contratistas["Tecnico"] = $fdata;
		$tdatainventario_contratistas[".searchableFields"][] = "Tecnico";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("Inventario_Contratistas","Empresa");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idempresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Empresa";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainventario_contratistas["Empresa"] = $fdata;
		$tdatainventario_contratistas[".searchableFields"][] = "Empresa";


$tables_data["Inventario_Contratistas"]=&$tdatainventario_contratistas;
$field_labels["Inventario_Contratistas"] = &$fieldLabelsinventario_contratistas;
$fieldToolTips["Inventario_Contratistas"] = &$fieldToolTipsinventario_contratistas;
$placeHolders["Inventario_Contratistas"] = &$placeHoldersinventario_contratistas;
$page_titles["Inventario_Contratistas"] = &$pageTitlesinventario_contratistas;


changeTextControlsToDate( "Inventario_Contratistas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Inventario_Contratistas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Inventario_Contratistas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_inventario_contratistas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Material,  SUM(Cantidad) AS `SUM(Cantidad)`,  Tecnico,  Empresa";
$proto0["m_strFrom"] = "FROM `inventario_ general`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Material";
	
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
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto6["m_sql"] = "Material";
$proto6["m_srcTableName"] = "Inventario_Contratistas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(Cantidad)";
$proto8["m_srcTableName"] = "Inventario_Contratistas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "SUM(Cantidad)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto11["m_sql"] = "Tecnico";
$proto11["m_srcTableName"] = "Inventario_Contratistas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto13["m_sql"] = "Empresa";
$proto13["m_srcTableName"] = "Inventario_Contratistas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "inventario_ general";
$proto16["m_srcTableName"] = "Inventario_Contratistas";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Id_Inventario";
$proto16["m_columns"][] = "Material";
$proto16["m_columns"][] = "Cantidad";
$proto16["m_columns"][] = "Tecnico";
$proto16["m_columns"][] = "Empresa";
$proto16["m_columns"][] = "Fecha";
$proto16["m_columns"][] = "Ticket";
$proto16["m_columns"][] = "Id Ingreso";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "`inventario_ general`";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "Inventario_Contratistas";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "Inventario_Contratistas"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Inventario_Contratistas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventario_contratistas = createSqlQuery_inventario_contratistas();


	
												;

				

$tdatainventario_contratistas[".sqlquery"] = $queryData_inventario_contratistas;



$tdatainventario_contratistas[".hasEvents"] = false;

?>