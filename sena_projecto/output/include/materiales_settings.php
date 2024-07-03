<?php
$tdatamateriales = array();
$tdatamateriales[".searchableFields"] = array();
$tdatamateriales[".ShortName"] = "materiales";
$tdatamateriales[".OwnerID"] = "";
$tdatamateriales[".OriginalTable"] = "materiales";


$tdatamateriales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamateriales[".originalPagesByType"] = $tdatamateriales[".pagesByType"];
$tdatamateriales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamateriales[".originalPages"] = $tdatamateriales[".pages"];
$tdatamateriales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamateriales[".originalDefaultPages"] = $tdatamateriales[".defaultPages"];

//	field labels
$fieldLabelsmateriales = array();
$fieldToolTipsmateriales = array();
$pageTitlesmateriales = array();
$placeHoldersmateriales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmateriales["Spanish"] = array();
	$fieldToolTipsmateriales["Spanish"] = array();
	$placeHoldersmateriales["Spanish"] = array();
	$pageTitlesmateriales["Spanish"] = array();
	$fieldLabelsmateriales["Spanish"]["Material"] = "Material";
	$fieldToolTipsmateriales["Spanish"]["Material"] = "";
	$placeHoldersmateriales["Spanish"]["Material"] = "";
	$fieldLabelsmateriales["Spanish"]["Id_Materales"] = "Id Materales";
	$fieldToolTipsmateriales["Spanish"]["Id_Materales"] = "";
	$placeHoldersmateriales["Spanish"]["Id_Materales"] = "";
	if (count($fieldToolTipsmateriales["Spanish"]))
		$tdatamateriales[".isUseToolTips"] = true;
}


	$tdatamateriales[".NCSearch"] = true;



$tdatamateriales[".shortTableName"] = "materiales";
$tdatamateriales[".nSecOptions"] = 0;

$tdatamateriales[".mainTableOwnerID"] = "";
$tdatamateriales[".entityType"] = 0;
$tdatamateriales[".connId"] = "mega_ya_at_localhost";


$tdatamateriales[".strOriginalTableName"] = "materiales";

	



$tdatamateriales[".showAddInPopup"] = false;

$tdatamateriales[".showEditInPopup"] = false;

$tdatamateriales[".showViewInPopup"] = false;

$tdatamateriales[".listAjax"] = false;
//	temporary
//$tdatamateriales[".listAjax"] = false;

	$tdatamateriales[".audit"] = true;

	$tdatamateriales[".locking"] = false;


$pages = $tdatamateriales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamateriales[".edit"] = true;
	$tdatamateriales[".afterEditAction"] = 1;
	$tdatamateriales[".closePopupAfterEdit"] = 1;
	$tdatamateriales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamateriales[".add"] = true;
$tdatamateriales[".afterAddAction"] = 1;
$tdatamateriales[".closePopupAfterAdd"] = 1;
$tdatamateriales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamateriales[".list"] = true;
}



$tdatamateriales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamateriales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamateriales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamateriales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamateriales[".printFriendly"] = true;
}



$tdatamateriales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamateriales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamateriales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamateriales[".isUseAjaxSuggest"] = true;



						

$tdatamateriales[".ajaxCodeSnippetAdded"] = false;

$tdatamateriales[".buttonsAdded"] = false;

$tdatamateriales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamateriales[".isUseTimeForSearch"] = false;


$tdatamateriales[".badgeColor"] = "6493ea";


$tdatamateriales[".allSearchFields"] = array();
$tdatamateriales[".filterFields"] = array();
$tdatamateriales[".requiredSearchFields"] = array();

$tdatamateriales[".googleLikeFields"] = array();
$tdatamateriales[".googleLikeFields"][] = "Id Materales";
$tdatamateriales[".googleLikeFields"][] = "Material";



$tdatamateriales[".tableType"] = "list";

$tdatamateriales[".printerPageOrientation"] = 0;
$tdatamateriales[".nPrinterPageScale"] = 100;

$tdatamateriales[".nPrinterSplitRecords"] = 40;

$tdatamateriales[".geocodingEnabled"] = false;




$tdatamateriales[".isDisplayLoading"] = true;






$tdatamateriales[".pageSize"] = 20;

$tdatamateriales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamateriales[".strOrderBy"] = $tstrOrderBy;

$tdatamateriales[".orderindexes"] = array();


$tdatamateriales[".sqlHead"] = "SELECT `Id Materales`,  	Material";
$tdatamateriales[".sqlFrom"] = "FROM materiales";
$tdatamateriales[".sqlWhereExpr"] = "";
$tdatamateriales[".sqlTail"] = "";

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
$tdatamateriales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamateriales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamateriales[".arrGroupsPerPage"] = $arrGPP;

$tdatamateriales[".highlightSearchResults"] = true;

$tableKeysmateriales = array();
$tableKeysmateriales[] = "Id Materales";
$tdatamateriales[".Keys"] = $tableKeysmateriales;


$tdatamateriales[".hideMobileList"] = array();




//	Id Materales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Materales";
	$fdata["GoodName"] = "Id_Materales";
	$fdata["ownerTable"] = "materiales";
	$fdata["Label"] = GetFieldLabel("materiales","Id_Materales");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id Materales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id Materales`";

	
	
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


	$tdatamateriales["Id Materales"] = $fdata;
		$tdatamateriales[".searchableFields"][] = "Id Materales";
//	Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Material";
	$fdata["GoodName"] = "Material";
	$fdata["ownerTable"] = "materiales";
	$fdata["Label"] = GetFieldLabel("materiales","Material");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatamateriales["Material"] = $fdata;
		$tdatamateriales[".searchableFields"][] = "Material";


$tables_data["materiales"]=&$tdatamateriales;
$field_labels["materiales"] = &$fieldLabelsmateriales;
$fieldToolTips["materiales"] = &$fieldToolTipsmateriales;
$placeHolders["materiales"] = &$placeHoldersmateriales;
$page_titles["materiales"] = &$pageTitlesmateriales;


changeTextControlsToDate( "materiales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["materiales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["materiales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_materiales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id Materales`,  	Material";
$proto0["m_strFrom"] = "FROM materiales";
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
	"m_strName" => "Id Materales",
	"m_strTable" => "materiales",
	"m_srcTableName" => "materiales"
));

$proto6["m_sql"] = "`Id Materales`";
$proto6["m_srcTableName"] = "materiales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Material",
	"m_strTable" => "materiales",
	"m_srcTableName" => "materiales"
));

$proto8["m_sql"] = "Material";
$proto8["m_srcTableName"] = "materiales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "materiales";
$proto11["m_srcTableName"] = "materiales";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Id Materales";
$proto11["m_columns"][] = "Material";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "materiales";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "materiales";
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
$proto0["m_srcTableName"]="materiales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_materiales = createSqlQuery_materiales();


	
												;

		

$tdatamateriales[".sqlquery"] = $queryData_materiales;



$tdatamateriales[".hasEvents"] = false;

?>