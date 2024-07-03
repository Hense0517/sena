<?php
$tdataempresas = array();
$tdataempresas[".searchableFields"] = array();
$tdataempresas[".ShortName"] = "empresas";
$tdataempresas[".OwnerID"] = "";
$tdataempresas[".OriginalTable"] = "empresas";


$tdataempresas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataempresas[".originalPagesByType"] = $tdataempresas[".pagesByType"];
$tdataempresas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataempresas[".originalPages"] = $tdataempresas[".pages"];
$tdataempresas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataempresas[".originalDefaultPages"] = $tdataempresas[".defaultPages"];

//	field labels
$fieldLabelsempresas = array();
$fieldToolTipsempresas = array();
$pageTitlesempresas = array();
$placeHoldersempresas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsempresas["Spanish"] = array();
	$fieldToolTipsempresas["Spanish"] = array();
	$placeHoldersempresas["Spanish"] = array();
	$pageTitlesempresas["Spanish"] = array();
	$fieldLabelsempresas["Spanish"]["idempresa"] = "Idempresa";
	$fieldToolTipsempresas["Spanish"]["idempresa"] = "";
	$placeHoldersempresas["Spanish"]["idempresa"] = "";
	$fieldLabelsempresas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsempresas["Spanish"]["Empresa"] = "";
	$placeHoldersempresas["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsempresas["Spanish"]))
		$tdataempresas[".isUseToolTips"] = true;
}


	$tdataempresas[".NCSearch"] = true;



$tdataempresas[".shortTableName"] = "empresas";
$tdataempresas[".nSecOptions"] = 0;

$tdataempresas[".mainTableOwnerID"] = "";
$tdataempresas[".entityType"] = 0;
$tdataempresas[".connId"] = "mega_ya_at_localhost";


$tdataempresas[".strOriginalTableName"] = "empresas";

	



$tdataempresas[".showAddInPopup"] = false;

$tdataempresas[".showEditInPopup"] = false;

$tdataempresas[".showViewInPopup"] = false;

$tdataempresas[".listAjax"] = false;
//	temporary
//$tdataempresas[".listAjax"] = false;

	$tdataempresas[".audit"] = true;

	$tdataempresas[".locking"] = false;


$pages = $tdataempresas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataempresas[".edit"] = true;
	$tdataempresas[".afterEditAction"] = 1;
	$tdataempresas[".closePopupAfterEdit"] = 1;
	$tdataempresas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataempresas[".add"] = true;
$tdataempresas[".afterAddAction"] = 1;
$tdataempresas[".closePopupAfterAdd"] = 1;
$tdataempresas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataempresas[".list"] = true;
}



$tdataempresas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataempresas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataempresas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataempresas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataempresas[".printFriendly"] = true;
}



$tdataempresas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataempresas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataempresas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataempresas[".isUseAjaxSuggest"] = true;



						

$tdataempresas[".ajaxCodeSnippetAdded"] = false;

$tdataempresas[".buttonsAdded"] = false;

$tdataempresas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataempresas[".isUseTimeForSearch"] = false;


$tdataempresas[".badgeColor"] = "6B8E23";


$tdataempresas[".allSearchFields"] = array();
$tdataempresas[".filterFields"] = array();
$tdataempresas[".requiredSearchFields"] = array();

$tdataempresas[".googleLikeFields"] = array();
$tdataempresas[".googleLikeFields"][] = "idempresa";
$tdataempresas[".googleLikeFields"][] = "Empresa";



$tdataempresas[".tableType"] = "list";

$tdataempresas[".printerPageOrientation"] = 0;
$tdataempresas[".nPrinterPageScale"] = 100;

$tdataempresas[".nPrinterSplitRecords"] = 40;

$tdataempresas[".geocodingEnabled"] = false;




$tdataempresas[".isDisplayLoading"] = true;






$tdataempresas[".pageSize"] = 20;

$tdataempresas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataempresas[".strOrderBy"] = $tstrOrderBy;

$tdataempresas[".orderindexes"] = array();


$tdataempresas[".sqlHead"] = "SELECT idempresa,  	Empresa";
$tdataempresas[".sqlFrom"] = "FROM empresas";
$tdataempresas[".sqlWhereExpr"] = "";
$tdataempresas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataempresas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataempresas[".arrGroupsPerPage"] = $arrGPP;

$tdataempresas[".highlightSearchResults"] = true;

$tableKeysempresas = array();
$tableKeysempresas[] = "idempresa";
$tdataempresas[".Keys"] = $tableKeysempresas;


$tdataempresas[".hideMobileList"] = array();




//	idempresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idempresa";
	$fdata["GoodName"] = "idempresa";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","idempresa");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idempresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idempresa";

	
	
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


	$tdataempresas["idempresa"] = $fdata;
		$tdataempresas[".searchableFields"][] = "idempresa";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("empresas","Empresa");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdataempresas["Empresa"] = $fdata;
		$tdataempresas[".searchableFields"][] = "Empresa";


$tables_data["empresas"]=&$tdataempresas;
$field_labels["empresas"] = &$fieldLabelsempresas;
$fieldToolTips["empresas"] = &$fieldToolTipsempresas;
$placeHolders["empresas"] = &$placeHoldersempresas;
$page_titles["empresas"] = &$pageTitlesempresas;


changeTextControlsToDate( "empresas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["empresas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["empresas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_empresas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idempresa,  	Empresa";
$proto0["m_strFrom"] = "FROM empresas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "idempresa",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto6["m_sql"] = "idempresa";
$proto6["m_srcTableName"] = "empresas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "empresas",
	"m_srcTableName" => "empresas"
));

$proto8["m_sql"] = "Empresa";
$proto8["m_srcTableName"] = "empresas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "empresas";
$proto11["m_srcTableName"] = "empresas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idempresa";
$proto11["m_columns"][] = "Empresa";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "empresas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "empresas";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="empresas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_empresas = createSqlQuery_empresas();


	
												;

		

$tdataempresas[".sqlquery"] = $queryData_empresas;



$tdataempresas[".hasEvents"] = false;

?>