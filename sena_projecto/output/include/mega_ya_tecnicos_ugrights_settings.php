<?php
$tdatamega_ya_tecnicos_ugrights = array();
$tdatamega_ya_tecnicos_ugrights[".searchableFields"] = array();
$tdatamega_ya_tecnicos_ugrights[".ShortName"] = "mega_ya_tecnicos_ugrights";
$tdatamega_ya_tecnicos_ugrights[".OwnerID"] = "";
$tdatamega_ya_tecnicos_ugrights[".OriginalTable"] = "mega_ya_tecnicos_ugrights";


$tdatamega_ya_tecnicos_ugrights[".pagesByType"] = my_json_decode( "{}" );
$tdatamega_ya_tecnicos_ugrights[".originalPagesByType"] = $tdatamega_ya_tecnicos_ugrights[".pagesByType"];
$tdatamega_ya_tecnicos_ugrights[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatamega_ya_tecnicos_ugrights[".originalPages"] = $tdatamega_ya_tecnicos_ugrights[".pages"];
$tdatamega_ya_tecnicos_ugrights[".defaultPages"] = my_json_decode( "{}" );
$tdatamega_ya_tecnicos_ugrights[".originalDefaultPages"] = $tdatamega_ya_tecnicos_ugrights[".defaultPages"];

//	field labels
$fieldLabelsmega_ya_tecnicos_ugrights = array();
$fieldToolTipsmega_ya_tecnicos_ugrights = array();
$pageTitlesmega_ya_tecnicos_ugrights = array();
$placeHoldersmega_ya_tecnicos_ugrights = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmega_ya_tecnicos_ugrights["Spanish"] = array();
	$fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"] = array();
	$placeHoldersmega_ya_tecnicos_ugrights["Spanish"] = array();
	$pageTitlesmega_ya_tecnicos_ugrights["Spanish"] = array();
	$fieldLabelsmega_ya_tecnicos_ugrights["Spanish"]["TableName"] = "Table Name";
	$fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"]["TableName"] = "";
	$placeHoldersmega_ya_tecnicos_ugrights["Spanish"]["TableName"] = "";
	$fieldLabelsmega_ya_tecnicos_ugrights["Spanish"]["GroupID"] = "Group ID";
	$fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"]["GroupID"] = "";
	$placeHoldersmega_ya_tecnicos_ugrights["Spanish"]["GroupID"] = "";
	$fieldLabelsmega_ya_tecnicos_ugrights["Spanish"]["AccessMask"] = "Access Mask";
	$fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"]["AccessMask"] = "";
	$placeHoldersmega_ya_tecnicos_ugrights["Spanish"]["AccessMask"] = "";
	$fieldLabelsmega_ya_tecnicos_ugrights["Spanish"]["Page"] = "Page";
	$fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"]["Page"] = "";
	$placeHoldersmega_ya_tecnicos_ugrights["Spanish"]["Page"] = "";
	if (count($fieldToolTipsmega_ya_tecnicos_ugrights["Spanish"]))
		$tdatamega_ya_tecnicos_ugrights[".isUseToolTips"] = true;
}


	$tdatamega_ya_tecnicos_ugrights[".NCSearch"] = true;



$tdatamega_ya_tecnicos_ugrights[".shortTableName"] = "mega_ya_tecnicos_ugrights";
$tdatamega_ya_tecnicos_ugrights[".nSecOptions"] = 0;

$tdatamega_ya_tecnicos_ugrights[".mainTableOwnerID"] = "";
$tdatamega_ya_tecnicos_ugrights[".entityType"] = 1;
$tdatamega_ya_tecnicos_ugrights[".connId"] = "mega_ya_at_localhost";


$tdatamega_ya_tecnicos_ugrights[".strOriginalTableName"] = "mega_ya_tecnicos_ugrights";

	



$tdatamega_ya_tecnicos_ugrights[".showAddInPopup"] = false;

$tdatamega_ya_tecnicos_ugrights[".showEditInPopup"] = false;

$tdatamega_ya_tecnicos_ugrights[".showViewInPopup"] = false;

$tdatamega_ya_tecnicos_ugrights[".listAjax"] = false;
//	temporary
//$tdatamega_ya_tecnicos_ugrights[".listAjax"] = false;

	$tdatamega_ya_tecnicos_ugrights[".audit"] = false;

	$tdatamega_ya_tecnicos_ugrights[".locking"] = false;


$pages = $tdatamega_ya_tecnicos_ugrights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamega_ya_tecnicos_ugrights[".edit"] = true;
	$tdatamega_ya_tecnicos_ugrights[".afterEditAction"] = 1;
	$tdatamega_ya_tecnicos_ugrights[".closePopupAfterEdit"] = 1;
	$tdatamega_ya_tecnicos_ugrights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamega_ya_tecnicos_ugrights[".add"] = true;
$tdatamega_ya_tecnicos_ugrights[".afterAddAction"] = 1;
$tdatamega_ya_tecnicos_ugrights[".closePopupAfterAdd"] = 1;
$tdatamega_ya_tecnicos_ugrights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamega_ya_tecnicos_ugrights[".list"] = true;
}



$tdatamega_ya_tecnicos_ugrights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamega_ya_tecnicos_ugrights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamega_ya_tecnicos_ugrights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamega_ya_tecnicos_ugrights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamega_ya_tecnicos_ugrights[".printFriendly"] = true;
}



$tdatamega_ya_tecnicos_ugrights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamega_ya_tecnicos_ugrights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamega_ya_tecnicos_ugrights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamega_ya_tecnicos_ugrights[".isUseAjaxSuggest"] = true;



						

$tdatamega_ya_tecnicos_ugrights[".ajaxCodeSnippetAdded"] = false;

$tdatamega_ya_tecnicos_ugrights[".buttonsAdded"] = false;

$tdatamega_ya_tecnicos_ugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamega_ya_tecnicos_ugrights[".isUseTimeForSearch"] = false;


$tdatamega_ya_tecnicos_ugrights[".badgeColor"] = "4169E1";


$tdatamega_ya_tecnicos_ugrights[".allSearchFields"] = array();
$tdatamega_ya_tecnicos_ugrights[".filterFields"] = array();
$tdatamega_ya_tecnicos_ugrights[".requiredSearchFields"] = array();

$tdatamega_ya_tecnicos_ugrights[".googleLikeFields"] = array();
$tdatamega_ya_tecnicos_ugrights[".googleLikeFields"][] = "TableName";
$tdatamega_ya_tecnicos_ugrights[".googleLikeFields"][] = "GroupID";
$tdatamega_ya_tecnicos_ugrights[".googleLikeFields"][] = "AccessMask";
$tdatamega_ya_tecnicos_ugrights[".googleLikeFields"][] = "Page";



$tdatamega_ya_tecnicos_ugrights[".tableType"] = "list";

$tdatamega_ya_tecnicos_ugrights[".printerPageOrientation"] = 0;
$tdatamega_ya_tecnicos_ugrights[".nPrinterPageScale"] = 100;

$tdatamega_ya_tecnicos_ugrights[".nPrinterSplitRecords"] = 40;

$tdatamega_ya_tecnicos_ugrights[".geocodingEnabled"] = false;










$tdatamega_ya_tecnicos_ugrights[".pageSize"] = 20;

$tdatamega_ya_tecnicos_ugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamega_ya_tecnicos_ugrights[".strOrderBy"] = $tstrOrderBy;

$tdatamega_ya_tecnicos_ugrights[".orderindexes"] = array();


$tdatamega_ya_tecnicos_ugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask,  	Page";
$tdatamega_ya_tecnicos_ugrights[".sqlFrom"] = "FROM mega_ya_tecnicos_ugrights";
$tdatamega_ya_tecnicos_ugrights[".sqlWhereExpr"] = "";
$tdatamega_ya_tecnicos_ugrights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamega_ya_tecnicos_ugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamega_ya_tecnicos_ugrights[".arrGroupsPerPage"] = $arrGPP;

$tdatamega_ya_tecnicos_ugrights[".highlightSearchResults"] = true;

$tableKeysmega_ya_tecnicos_ugrights = array();
$tableKeysmega_ya_tecnicos_ugrights[] = "TableName";
$tableKeysmega_ya_tecnicos_ugrights[] = "GroupID";
$tdatamega_ya_tecnicos_ugrights[".Keys"] = $tableKeysmega_ya_tecnicos_ugrights;


$tdatamega_ya_tecnicos_ugrights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugrights";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugrights","TableName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TableName";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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


	$tdatamega_ya_tecnicos_ugrights["TableName"] = $fdata;
		$tdatamega_ya_tecnicos_ugrights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugrights";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugrights","GroupID");
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


	$tdatamega_ya_tecnicos_ugrights["GroupID"] = $fdata;
		$tdatamega_ya_tecnicos_ugrights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugrights";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugrights","AccessMask");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AccessMask";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatamega_ya_tecnicos_ugrights["AccessMask"] = $fdata;
		$tdatamega_ya_tecnicos_ugrights[".searchableFields"][] = "AccessMask";
//	Page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Page";
	$fdata["GoodName"] = "Page";
	$fdata["ownerTable"] = "mega_ya_tecnicos_ugrights";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_ugrights","Page");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Page";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Page";

	
	
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


	$tdatamega_ya_tecnicos_ugrights["Page"] = $fdata;
		$tdatamega_ya_tecnicos_ugrights[".searchableFields"][] = "Page";


$tables_data["mega_ya_tecnicos_ugrights"]=&$tdatamega_ya_tecnicos_ugrights;
$field_labels["mega_ya_tecnicos_ugrights"] = &$fieldLabelsmega_ya_tecnicos_ugrights;
$fieldToolTips["mega_ya_tecnicos_ugrights"] = &$fieldToolTipsmega_ya_tecnicos_ugrights;
$placeHolders["mega_ya_tecnicos_ugrights"] = &$placeHoldersmega_ya_tecnicos_ugrights;
$page_titles["mega_ya_tecnicos_ugrights"] = &$pageTitlesmega_ya_tecnicos_ugrights;


changeTextControlsToDate( "mega_ya_tecnicos_ugrights" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mega_ya_tecnicos_ugrights"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mega_ya_tecnicos_ugrights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mega_ya_tecnicos_ugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask,  	Page";
$proto0["m_strFrom"] = "FROM mega_ya_tecnicos_ugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "mega_ya_tecnicos_ugrights",
	"m_srcTableName" => "mega_ya_tecnicos_ugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "mega_ya_tecnicos_ugrights",
	"m_srcTableName" => "mega_ya_tecnicos_ugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "mega_ya_tecnicos_ugrights",
	"m_srcTableName" => "mega_ya_tecnicos_ugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Page",
	"m_strTable" => "mega_ya_tecnicos_ugrights",
	"m_srcTableName" => "mega_ya_tecnicos_ugrights"
));

$proto12["m_sql"] = "Page";
$proto12["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "mega_ya_tecnicos_ugrights";
$proto15["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TableName";
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "AccessMask";
$proto15["m_columns"][] = "Page";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "mega_ya_tecnicos_ugrights";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mega_ya_tecnicos_ugrights";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mega_ya_tecnicos_ugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mega_ya_tecnicos_ugrights = createSqlQuery_mega_ya_tecnicos_ugrights();


	
												;

				

$tdatamega_ya_tecnicos_ugrights[".sqlquery"] = $queryData_mega_ya_tecnicos_ugrights;



$tdatamega_ya_tecnicos_ugrights[".hasEvents"] = false;

?>