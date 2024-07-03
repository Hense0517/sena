<?php
$tdatamega_ya_tecnicos_ugmembers = array();
$tdatamega_ya_tecnicos_ugmembers[".searchableFields"] = array();
$tdatamega_ya_tecnicos_ugmembers[".ShortName"] = "mega_ya_tecnicos_ugmembers";
$tdatamega_ya_tecnicos_ugmembers[".OwnerID"] = "";
$tdatamega_ya_tecnicos_ugmembers[".OriginalTable"] = "mega_ya_tecnicos_ugmembers";


$tdatamega_ya_tecnicos_ugmembers[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatamega_ya_tecnicos_ugmembers[".originalPagesByType"] = $tdatamega_ya_tecnicos_ugmembers[".pagesByType"];
$tdatamega_ya_tecnicos_ugmembers[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatamega_ya_tecnicos_ugmembers[".originalPages"] = $tdatamega_ya_tecnicos_ugmembers[".pages"];
$tdatamega_ya_tecnicos_ugmembers[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatamega_ya_tecnicos_ugmembers[".originalDefaultPages"] = $tdatamega_ya_tecnicos_ugmembers[".defaultPages"];

//	field labels
$fieldLabelsmega_ya_tecnicos_ugmembers = array();
$fieldToolTipsmega_ya_tecnicos_ugmembers = array();
$pageTitlesmega_ya_tecnicos_ugmembers = array();
$placeHoldersmega_ya_tecnicos_ugmembers = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmega_ya_tecnicos_ugmembers["Spanish"] = array();
	$fieldToolTipsmega_ya_tecnicos_ugmembers["Spanish"] = array();
	$placeHoldersmega_ya_tecnicos_ugmembers["Spanish"] = array();
	$pageTitlesmega_ya_tecnicos_ugmembers["Spanish"] = array();
	$fieldLabelsmega_ya_tecnicos_ugmembers["Spanish"]["UserName"] = "User Name";
	$fieldToolTipsmega_ya_tecnicos_ugmembers["Spanish"]["UserName"] = "";
	$placeHoldersmega_ya_tecnicos_ugmembers["Spanish"]["UserName"] = "";
	$fieldLabelsmega_ya_tecnicos_ugmembers["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsmega_ya_tecnicos_ugmembers["Spanish"]["GroupID"] = "";
	$placeHoldersmega_ya_tecnicos_ugmembers["Spanish"]["GroupID"] = "";
	if (count($fieldToolTipsmega_ya_tecnicos_ugmembers["Spanish"]))
		$tdatamega_ya_tecnicos_ugmembers[".isUseToolTips"] = true;
}


	$tdatamega_ya_tecnicos_ugmembers[".NCSearch"] = true;



$tdatamega_ya_tecnicos_ugmembers[".shortTableName"] = "mega_ya_tecnicos_ugmembers";
$tdatamega_ya_tecnicos_ugmembers[".nSecOptions"] = 0;

$tdatamega_ya_tecnicos_ugmembers[".mainTableOwnerID"] = "";
$tdatamega_ya_tecnicos_ugmembers[".entityType"] = 0;
$tdatamega_ya_tecnicos_ugmembers[".connId"] = "mega_ya_at_localhost";


$tdatamega_ya_tecnicos_ugmembers[".strOriginalTableName"] = "mega_ya_tecnicos_ugmembers";

	



$tdatamega_ya_tecnicos_ugmembers[".showAddInPopup"] = false;

$tdatamega_ya_tecnicos_ugmembers[".showEditInPopup"] = false;

$tdatamega_ya_tecnicos_ugmembers[".showViewInPopup"] = false;

$tdatamega_ya_tecnicos_ugmembers[".listAjax"] = false;
//	temporary
//$tdatamega_ya_tecnicos_ugmembers[".listAjax"] = false;

	$tdatamega_ya_tecnicos_ugmembers[".audit"] = false;

	$tdatamega_ya_tecnicos_ugmembers[".locking"] = false;


$pages = $tdatamega_ya_tecnicos_ugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamega_ya_tecnicos_ugmembers[".edit"] = true;
	$tdatamega_ya_tecnicos_ugmembers[".afterEditAction"] = 1;
	$tdatamega_ya_tecnicos_ugmembers[".closePopupAfterEdit"] = 1;
	$tdatamega_ya_tecnicos_ugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamega_ya_tecnicos_ugmembers[".add"] = true;
$tdatamega_ya_tecnicos_ugmembers[".afterAddAction"] = 1;
$tdatamega_ya_tecnicos_ugmembers[".closePopupAfterAdd"] = 1;
$tdatamega_ya_tecnicos_ugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamega_ya_tecnicos_ugmembers[".list"] = true;
}



$tdatamega_ya_tecnicos_ugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamega_ya_tecnicos_ugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamega_ya_tecnicos_ugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamega_ya_tecnicos_ugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamega_ya_tecnicos_ugmembers[".printFriendly"] = true;
}



$tdatamega_ya_tecnicos_ugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamega_ya_tecnicos_ugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamega_ya_tecnicos_ugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamega_ya_tecnicos_ugmembers[".isUseAjaxSuggest"] = true;



						

$tdatamega_ya_tecnicos_ugmembers[".ajaxCodeSnippetAdded"] = false;

$tdatamega_ya_tecnicos_ugmembers[".buttonsAdded"] = false;

$tdatamega_ya_tecnicos_ugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamega_ya_tecnicos_ugmembers[".isUseTimeForSearch"] = false;


$tdatamega_ya_tecnicos_ugmembers[".badgeColor"] = "DAA520";


$tdatamega_ya_tecnicos_ugmembers[".allSearchFields"] = array();
$tdatamega_ya_tecnicos_ugmembers[".filterFields"] = array();
$tdatamega_ya_tecnicos_ugmembers[".requiredSearchFields"] = array();

$tdatamega_ya_tecnicos_ugmembers[".googleLikeFields"] = array();
$tdatamega_ya_tecnicos_ugmembers[".googleLikeFields"][] = "UserName";
$tdatamega_ya_tecnicos_ugmembers[".googleLikeFields"][] = "GroupID";



$tdatamega_ya_tecnicos_ugmembers[".tableType"] = "list";

$tdatamega_ya_tecnicos_ugmembers[".printerPageOrientation"] = 0;
$tdatamega_ya_tecnicos_ugmembers[".nPrinterPageScale"] = 100;

$tdatamega_ya_tecnicos_ugmembers[".nPrinterSplitRecords"] = 40;

$tdatamega_ya_tecnicos_ugmembers[".geocodingEnabled"] = false;










$tdatamega_ya_tecnicos_ugmembers[".pageSize"] = 20;

$tdatamega_ya_tecnicos_ugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamega_ya_tecnicos_ugmembers[".strOrderBy"] = $tstrOrderBy;

$tdatamega_ya_tecnicos_ugmembers[".orderindexes"] = array();


$tdatamega_ya_tecnicos_ugmembers[".sqlHead"] = "SELECT UserName,  	GroupID";
$tdatamega_ya_tecnicos_ugmembers[".sqlFrom"] = "FROM mega_ya_tecnicos_ugmembers";
$tdatamega_ya_tecnicos_ugmembers[".sqlWhereExpr"] = "";
$tdatamega_ya_tecnicos_ugmembers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamega_ya_tecnicos_ugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamega_ya_tecnicos_ugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdatamega_ya_tecnicos_ugmembers[".highlightSearchResults"] = true;

$tableKeysmega_ya_tecnicos_ugmembers = array();
$tableKeysmega_ya_tecnicos_ugmembers[] = "UserName";
$tableKeysmega_ya_tecnicos_ugmembers[] = "GroupID";
$tdatamega_ya_tecnicos_ugmembers[".Keys"] = $tableKeysmega_ya_tecnicos_ugmembers;


$tdatamega_ya_tecnicos_ugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugmembers";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugmembers","UserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UserName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatamega_ya_tecnicos_ugmembers["UserName"] = $fdata;
		$tdatamega_ya_tecnicos_ugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugmembers";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugmembers","GroupID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "GroupID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdatamega_ya_tecnicos_ugmembers["GroupID"] = $fdata;
		$tdatamega_ya_tecnicos_ugmembers[".searchableFields"][] = "GroupID";


$tables_data["mega_ya_tecnicos_ugmembers"]=&$tdatamega_ya_tecnicos_ugmembers;
$field_labels["mega_ya_tecnicos_ugmembers"] = &$fieldLabelsmega_ya_tecnicos_ugmembers;
$fieldToolTips["mega_ya_tecnicos_ugmembers"] = &$fieldToolTipsmega_ya_tecnicos_ugmembers;
$placeHolders["mega_ya_tecnicos_ugmembers"] = &$placeHoldersmega_ya_tecnicos_ugmembers;
$page_titles["mega_ya_tecnicos_ugmembers"] = &$pageTitlesmega_ya_tecnicos_ugmembers;


changeTextControlsToDate( "mega_ya_tecnicos_ugmembers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mega_ya_tecnicos_ugmembers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mega_ya_tecnicos_ugmembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mega_ya_tecnicos_ugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID";
$proto0["m_strFrom"] = "FROM mega_ya_tecnicos_ugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "mega_ya_tecnicos_ugmembers",
	"m_srcTableName" => "mega_ya_tecnicos_ugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "mega_ya_tecnicos_ugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "mega_ya_tecnicos_ugmembers",
	"m_srcTableName" => "mega_ya_tecnicos_ugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "mega_ya_tecnicos_ugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mega_ya_tecnicos_ugmembers";
$proto11["m_srcTableName"] = "mega_ya_tecnicos_ugmembers";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "UserName";
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Provider";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "mega_ya_tecnicos_ugmembers";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mega_ya_tecnicos_ugmembers";
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
$proto0["m_srcTableName"]="mega_ya_tecnicos_ugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mega_ya_tecnicos_ugmembers = createSqlQuery_mega_ya_tecnicos_ugmembers();


	
												;

		

$tdatamega_ya_tecnicos_ugmembers[".sqlquery"] = $queryData_mega_ya_tecnicos_ugmembers;



$tdatamega_ya_tecnicos_ugmembers[".hasEvents"] = false;

?>