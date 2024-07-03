<?php
$tdatamega_ya_tecnicos_locking = array();
$tdatamega_ya_tecnicos_locking[".searchableFields"] = array();
$tdatamega_ya_tecnicos_locking[".ShortName"] = "mega_ya_tecnicos_locking";
$tdatamega_ya_tecnicos_locking[".OwnerID"] = "";
$tdatamega_ya_tecnicos_locking[".OriginalTable"] = "mega_ya_tecnicos_locking";


$tdatamega_ya_tecnicos_locking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamega_ya_tecnicos_locking[".originalPagesByType"] = $tdatamega_ya_tecnicos_locking[".pagesByType"];
$tdatamega_ya_tecnicos_locking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamega_ya_tecnicos_locking[".originalPages"] = $tdatamega_ya_tecnicos_locking[".pages"];
$tdatamega_ya_tecnicos_locking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamega_ya_tecnicos_locking[".originalDefaultPages"] = $tdatamega_ya_tecnicos_locking[".defaultPages"];

//	field labels
$fieldLabelsmega_ya_tecnicos_locking = array();
$fieldToolTipsmega_ya_tecnicos_locking = array();
$pageTitlesmega_ya_tecnicos_locking = array();
$placeHoldersmega_ya_tecnicos_locking = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"] = array();
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"] = array();
	$placeHoldersmega_ya_tecnicos_locking["Spanish"] = array();
	$pageTitlesmega_ya_tecnicos_locking["Spanish"] = array();
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["id"] = "Id";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["id"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["id"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["table"] = "Table";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["table"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["table"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["startdatetime"] = "Startdatetime";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["startdatetime"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["startdatetime"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["confirmdatetime"] = "Confirmdatetime";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["confirmdatetime"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["confirmdatetime"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["keys"] = "Keys";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["keys"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["keys"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["sessionid"] = "Sessionid";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["sessionid"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["sessionid"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["userid"] = "Userid";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["userid"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["userid"] = "";
	$fieldLabelsmega_ya_tecnicos_locking["Spanish"]["action"] = "Action";
	$fieldToolTipsmega_ya_tecnicos_locking["Spanish"]["action"] = "";
	$placeHoldersmega_ya_tecnicos_locking["Spanish"]["action"] = "";
	if (count($fieldToolTipsmega_ya_tecnicos_locking["Spanish"]))
		$tdatamega_ya_tecnicos_locking[".isUseToolTips"] = true;
}


	$tdatamega_ya_tecnicos_locking[".NCSearch"] = true;



$tdatamega_ya_tecnicos_locking[".shortTableName"] = "mega_ya_tecnicos_locking";
$tdatamega_ya_tecnicos_locking[".nSecOptions"] = 0;

$tdatamega_ya_tecnicos_locking[".mainTableOwnerID"] = "";
$tdatamega_ya_tecnicos_locking[".entityType"] = 0;
$tdatamega_ya_tecnicos_locking[".connId"] = "mega_ya_at_localhost";


$tdatamega_ya_tecnicos_locking[".strOriginalTableName"] = "mega_ya_tecnicos_locking";

	



$tdatamega_ya_tecnicos_locking[".showAddInPopup"] = false;

$tdatamega_ya_tecnicos_locking[".showEditInPopup"] = false;

$tdatamega_ya_tecnicos_locking[".showViewInPopup"] = false;

$tdatamega_ya_tecnicos_locking[".listAjax"] = false;
//	temporary
//$tdatamega_ya_tecnicos_locking[".listAjax"] = false;

	$tdatamega_ya_tecnicos_locking[".audit"] = false;

	$tdatamega_ya_tecnicos_locking[".locking"] = false;


$pages = $tdatamega_ya_tecnicos_locking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamega_ya_tecnicos_locking[".edit"] = true;
	$tdatamega_ya_tecnicos_locking[".afterEditAction"] = 1;
	$tdatamega_ya_tecnicos_locking[".closePopupAfterEdit"] = 1;
	$tdatamega_ya_tecnicos_locking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamega_ya_tecnicos_locking[".add"] = true;
$tdatamega_ya_tecnicos_locking[".afterAddAction"] = 1;
$tdatamega_ya_tecnicos_locking[".closePopupAfterAdd"] = 1;
$tdatamega_ya_tecnicos_locking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamega_ya_tecnicos_locking[".list"] = true;
}



$tdatamega_ya_tecnicos_locking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamega_ya_tecnicos_locking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamega_ya_tecnicos_locking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamega_ya_tecnicos_locking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamega_ya_tecnicos_locking[".printFriendly"] = true;
}



$tdatamega_ya_tecnicos_locking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamega_ya_tecnicos_locking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamega_ya_tecnicos_locking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamega_ya_tecnicos_locking[".isUseAjaxSuggest"] = true;



						

$tdatamega_ya_tecnicos_locking[".ajaxCodeSnippetAdded"] = false;

$tdatamega_ya_tecnicos_locking[".buttonsAdded"] = false;

$tdatamega_ya_tecnicos_locking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamega_ya_tecnicos_locking[".isUseTimeForSearch"] = false;


$tdatamega_ya_tecnicos_locking[".badgeColor"] = "4169E1";


$tdatamega_ya_tecnicos_locking[".allSearchFields"] = array();
$tdatamega_ya_tecnicos_locking[".filterFields"] = array();
$tdatamega_ya_tecnicos_locking[".requiredSearchFields"] = array();

$tdatamega_ya_tecnicos_locking[".googleLikeFields"] = array();
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "id";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "table";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "startdatetime";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "confirmdatetime";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "keys";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "sessionid";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "userid";
$tdatamega_ya_tecnicos_locking[".googleLikeFields"][] = "action";



$tdatamega_ya_tecnicos_locking[".tableType"] = "list";

$tdatamega_ya_tecnicos_locking[".printerPageOrientation"] = 0;
$tdatamega_ya_tecnicos_locking[".nPrinterPageScale"] = 100;

$tdatamega_ya_tecnicos_locking[".nPrinterSplitRecords"] = 40;

$tdatamega_ya_tecnicos_locking[".geocodingEnabled"] = false;










$tdatamega_ya_tecnicos_locking[".pageSize"] = 20;

$tdatamega_ya_tecnicos_locking[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `table` DESC";
$tdatamega_ya_tecnicos_locking[".strOrderBy"] = $tstrOrderBy;

$tdatamega_ya_tecnicos_locking[".orderindexes"] = array();
	$tdatamega_ya_tecnicos_locking[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`table`");



$tdatamega_ya_tecnicos_locking[".sqlHead"] = "SELECT id,  `table`,  startdatetime,  confirmdatetime,  `keys`,  sessionid,  userid,  `action`";
$tdatamega_ya_tecnicos_locking[".sqlFrom"] = "FROM mega_ya_tecnicos_locking";
$tdatamega_ya_tecnicos_locking[".sqlWhereExpr"] = "";
$tdatamega_ya_tecnicos_locking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamega_ya_tecnicos_locking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamega_ya_tecnicos_locking[".arrGroupsPerPage"] = $arrGPP;

$tdatamega_ya_tecnicos_locking[".highlightSearchResults"] = true;

$tableKeysmega_ya_tecnicos_locking = array();
$tableKeysmega_ya_tecnicos_locking[] = "id";
$tdatamega_ya_tecnicos_locking[".Keys"] = $tableKeysmega_ya_tecnicos_locking;


$tdatamega_ya_tecnicos_locking[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamega_ya_tecnicos_locking["id"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "id";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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


	$tdatamega_ya_tecnicos_locking["table"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "table";
//	startdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startdatetime";
	$fdata["GoodName"] = "startdatetime";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","startdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "startdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdatetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamega_ya_tecnicos_locking["startdatetime"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "startdatetime";
//	confirmdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "confirmdatetime";
	$fdata["GoodName"] = "confirmdatetime";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","confirmdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "confirmdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confirmdatetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatamega_ya_tecnicos_locking["confirmdatetime"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "confirmdatetime";
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","keys");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keys";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`keys`";

	
	
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


	$tdatamega_ya_tecnicos_locking["keys"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "keys";
//	sessionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sessionid";
	$fdata["GoodName"] = "sessionid";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","sessionid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sessionid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sessionid";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatamega_ya_tecnicos_locking["sessionid"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "sessionid";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdatamega_ya_tecnicos_locking["userid"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "userid";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "mega_ya_tecnicos_locking";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_locking","action");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatamega_ya_tecnicos_locking["action"] = $fdata;
		$tdatamega_ya_tecnicos_locking[".searchableFields"][] = "action";


$tables_data["mega_ya_tecnicos_locking"]=&$tdatamega_ya_tecnicos_locking;
$field_labels["mega_ya_tecnicos_locking"] = &$fieldLabelsmega_ya_tecnicos_locking;
$fieldToolTips["mega_ya_tecnicos_locking"] = &$fieldToolTipsmega_ya_tecnicos_locking;
$placeHolders["mega_ya_tecnicos_locking"] = &$placeHoldersmega_ya_tecnicos_locking;
$page_titles["mega_ya_tecnicos_locking"] = &$pageTitlesmega_ya_tecnicos_locking;


changeTextControlsToDate( "mega_ya_tecnicos_locking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mega_ya_tecnicos_locking"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mega_ya_tecnicos_locking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mega_ya_tecnicos_locking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `table`,  startdatetime,  confirmdatetime,  `keys`,  sessionid,  userid,  `action`";
$proto0["m_strFrom"] = "FROM mega_ya_tecnicos_locking";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `table` DESC";
	
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
	"m_strName" => "id",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto8["m_sql"] = "`table`";
$proto8["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startdatetime",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto10["m_sql"] = "startdatetime";
$proto10["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmdatetime",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto12["m_sql"] = "confirmdatetime";
$proto12["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto14["m_sql"] = "`keys`";
$proto14["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sessionid",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto16["m_sql"] = "sessionid";
$proto16["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto18["m_sql"] = "userid";
$proto18["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto20["m_sql"] = "`action`";
$proto20["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mega_ya_tecnicos_locking";
$proto23["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "table";
$proto23["m_columns"][] = "startdatetime";
$proto23["m_columns"][] = "confirmdatetime";
$proto23["m_columns"][] = "keys";
$proto23["m_columns"][] = "sessionid";
$proto23["m_columns"][] = "userid";
$proto23["m_columns"][] = "action";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "mega_ya_tecnicos_locking";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mega_ya_tecnicos_locking";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "mega_ya_tecnicos_locking",
	"m_srcTableName" => "mega_ya_tecnicos_locking"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mega_ya_tecnicos_locking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mega_ya_tecnicos_locking = createSqlQuery_mega_ya_tecnicos_locking();


	
												;

								

$tdatamega_ya_tecnicos_locking[".sqlquery"] = $queryData_mega_ya_tecnicos_locking;



$tdatamega_ya_tecnicos_locking[".hasEvents"] = false;

?>