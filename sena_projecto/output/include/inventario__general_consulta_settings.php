<?php
$tdatainventario__general_consulta = array();
$tdatainventario__general_consulta[".searchableFields"] = array();
$tdatainventario__general_consulta[".ShortName"] = "inventario__general_consulta";
$tdatainventario__general_consulta[".OwnerID"] = "Tecnico";
$tdatainventario__general_consulta[".OriginalTable"] = "inventario_ general";


$tdatainventario__general_consulta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainventario__general_consulta[".originalPagesByType"] = $tdatainventario__general_consulta[".pagesByType"];
$tdatainventario__general_consulta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainventario__general_consulta[".originalPages"] = $tdatainventario__general_consulta[".pages"];
$tdatainventario__general_consulta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainventario__general_consulta[".originalDefaultPages"] = $tdatainventario__general_consulta[".defaultPages"];

//	field labels
$fieldLabelsinventario__general_consulta = array();
$fieldToolTipsinventario__general_consulta = array();
$pageTitlesinventario__general_consulta = array();
$placeHoldersinventario__general_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinventario__general_consulta["Spanish"] = array();
	$fieldToolTipsinventario__general_consulta["Spanish"] = array();
	$placeHoldersinventario__general_consulta["Spanish"] = array();
	$pageTitlesinventario__general_consulta["Spanish"] = array();
	$fieldLabelsinventario__general_consulta["Spanish"]["Material"] = "Material";
	$fieldToolTipsinventario__general_consulta["Spanish"]["Material"] = "";
	$placeHoldersinventario__general_consulta["Spanish"]["Material"] = "";
	$fieldLabelsinventario__general_consulta["Spanish"]["Tecnico"] = "Tecnico";
	$fieldToolTipsinventario__general_consulta["Spanish"]["Tecnico"] = "";
	$placeHoldersinventario__general_consulta["Spanish"]["Tecnico"] = "";
	$fieldLabelsinventario__general_consulta["Spanish"]["SUM_Cantidad_"] = "SUM(Cantidad)";
	$fieldToolTipsinventario__general_consulta["Spanish"]["SUM_Cantidad_"] = "";
	$placeHoldersinventario__general_consulta["Spanish"]["SUM_Cantidad_"] = "";
	if (count($fieldToolTipsinventario__general_consulta["Spanish"]))
		$tdatainventario__general_consulta[".isUseToolTips"] = true;
}


	$tdatainventario__general_consulta[".NCSearch"] = true;



$tdatainventario__general_consulta[".shortTableName"] = "inventario__general_consulta";
$tdatainventario__general_consulta[".nSecOptions"] = 1;

$tdatainventario__general_consulta[".mainTableOwnerID"] = "Tecnico";
$tdatainventario__general_consulta[".entityType"] = 1;
$tdatainventario__general_consulta[".connId"] = "mega_ya_at_localhost";


$tdatainventario__general_consulta[".strOriginalTableName"] = "inventario_ general";

	



$tdatainventario__general_consulta[".showAddInPopup"] = false;

$tdatainventario__general_consulta[".showEditInPopup"] = false;

$tdatainventario__general_consulta[".showViewInPopup"] = false;

$tdatainventario__general_consulta[".listAjax"] = false;
//	temporary
//$tdatainventario__general_consulta[".listAjax"] = false;

	$tdatainventario__general_consulta[".audit"] = true;

	$tdatainventario__general_consulta[".locking"] = false;


$pages = $tdatainventario__general_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainventario__general_consulta[".edit"] = true;
	$tdatainventario__general_consulta[".afterEditAction"] = 1;
	$tdatainventario__general_consulta[".closePopupAfterEdit"] = 1;
	$tdatainventario__general_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainventario__general_consulta[".add"] = true;
$tdatainventario__general_consulta[".afterAddAction"] = 1;
$tdatainventario__general_consulta[".closePopupAfterAdd"] = 1;
$tdatainventario__general_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainventario__general_consulta[".list"] = true;
}



$tdatainventario__general_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainventario__general_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainventario__general_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainventario__general_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainventario__general_consulta[".printFriendly"] = true;
}



$tdatainventario__general_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainventario__general_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainventario__general_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainventario__general_consulta[".isUseAjaxSuggest"] = true;



						

$tdatainventario__general_consulta[".ajaxCodeSnippetAdded"] = false;

$tdatainventario__general_consulta[".buttonsAdded"] = false;

$tdatainventario__general_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainventario__general_consulta[".isUseTimeForSearch"] = false;


$tdatainventario__general_consulta[".badgeColor"] = "CD853F";


$tdatainventario__general_consulta[".allSearchFields"] = array();
$tdatainventario__general_consulta[".filterFields"] = array();
$tdatainventario__general_consulta[".requiredSearchFields"] = array();

$tdatainventario__general_consulta[".googleLikeFields"] = array();
$tdatainventario__general_consulta[".googleLikeFields"][] = "Material";
$tdatainventario__general_consulta[".googleLikeFields"][] = "SUM(Cantidad)";
$tdatainventario__general_consulta[".googleLikeFields"][] = "Tecnico";



$tdatainventario__general_consulta[".tableType"] = "list";

$tdatainventario__general_consulta[".printerPageOrientation"] = 0;
$tdatainventario__general_consulta[".isPrinterPageFitToPage"] = 0;
$tdatainventario__general_consulta[".nPrinterPageScale"] = 90;

$tdatainventario__general_consulta[".nPrinterSplitRecords"] = 50;

$tdatainventario__general_consulta[".geocodingEnabled"] = false;










$tdatainventario__general_consulta[".pageSize"] = 20;

$tdatainventario__general_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Material";
$tdatainventario__general_consulta[".strOrderBy"] = $tstrOrderBy;

$tdatainventario__general_consulta[".orderindexes"] = array();
	$tdatainventario__general_consulta[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`Material`");



$tdatainventario__general_consulta[".sqlHead"] = "SELECT Material,  SUM(Cantidad) AS `SUM(Cantidad)`,  Tecnico";
$tdatainventario__general_consulta[".sqlFrom"] = "FROM `inventario_ general`";
$tdatainventario__general_consulta[".sqlWhereExpr"] = "";
$tdatainventario__general_consulta[".sqlTail"] = "";

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
$tdatainventario__general_consulta[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainventario__general_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainventario__general_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdatainventario__general_consulta[".highlightSearchResults"] = true;

$tableKeysinventario__general_consulta = array();
$tableKeysinventario__general_consulta[] = "Material";
$tdatainventario__general_consulta[".Keys"] = $tableKeysinventario__general_consulta;


$tdatainventario__general_consulta[".hideMobileList"] = array();




//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general_consulta","Material");
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
		$fdata["filterTotalFields"] = "Material";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainventario__general_consulta["Material"] = $fdata;
		$tdatainventario__general_consulta[".searchableFields"][] = "Material";
//	SUM(Cantidad)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SUM(Cantidad)";
	$fdata["GoodName"] = "SUM_Cantidad_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("inventario__general_consulta","SUM_Cantidad_");
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


	$tdatainventario__general_consulta["SUM(Cantidad)"] = $fdata;
		$tdatainventario__general_consulta[".searchableFields"][] = "SUM(Cantidad)";
//	Tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tecnico";
	$fdata["GoodName"] = "Tecnico";
	$fdata["ownerTable"] = "inventario_ general";
	$fdata["Label"] = GetFieldLabel("inventario__general_consulta","Tecnico");
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


	$tdatainventario__general_consulta["Tecnico"] = $fdata;
		$tdatainventario__general_consulta[".searchableFields"][] = "Tecnico";


$tables_data["inventario_ general_consulta"]=&$tdatainventario__general_consulta;
$field_labels["inventario__general_consulta"] = &$fieldLabelsinventario__general_consulta;
$fieldToolTips["inventario__general_consulta"] = &$fieldToolTipsinventario__general_consulta;
$placeHolders["inventario__general_consulta"] = &$placeHoldersinventario__general_consulta;
$page_titles["inventario__general_consulta"] = &$pageTitlesinventario__general_consulta;


changeTextControlsToDate( "inventario_ general_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["inventario_ general_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["inventario_ general_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_inventario__general_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Material,  SUM(Cantidad) AS `SUM(Cantidad)`,  Tecnico";
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
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto6["m_sql"] = "Material";
$proto6["m_srcTableName"] = "inventario_ general_consulta";
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
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(Cantidad)";
$proto8["m_srcTableName"] = "inventario_ general_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "SUM(Cantidad)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto11["m_sql"] = "Tecnico";
$proto11["m_srcTableName"] = "inventario_ general_consulta";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "inventario_ general";
$proto14["m_srcTableName"] = "inventario_ general_consulta";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "Id_Inventario";
$proto14["m_columns"][] = "Material";
$proto14["m_columns"][] = "Cantidad";
$proto14["m_columns"][] = "Tecnico";
$proto14["m_columns"][] = "Empresa";
$proto14["m_columns"][] = "Fecha";
$proto14["m_columns"][] = "Ticket";
$proto14["m_columns"][] = "Id Ingreso";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "`inventario_ general`";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "inventario_ general_consulta";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "Tecnico",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "inventario_ general",
	"m_srcTableName" => "inventario_ general_consulta"
));

$proto21["m_column"]=$obj;
$proto21["m_bAsc"] = 1;
$proto21["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto21);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="inventario_ general_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_inventario__general_consulta = createSqlQuery_inventario__general_consulta();


	
												;

			

$tdatainventario__general_consulta[".sqlquery"] = $queryData_inventario__general_consulta;



$tdatainventario__general_consulta[".hasEvents"] = false;

?>