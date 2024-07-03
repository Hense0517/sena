<?php
$tdatamega_ya_tecnicos_audit = array();
$tdatamega_ya_tecnicos_audit[".searchableFields"] = array();
$tdatamega_ya_tecnicos_audit[".ShortName"] = "mega_ya_tecnicos_audit";
$tdatamega_ya_tecnicos_audit[".OwnerID"] = "";
$tdatamega_ya_tecnicos_audit[".OriginalTable"] = "mega_ya_tecnicos_audit";


$tdatamega_ya_tecnicos_audit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamega_ya_tecnicos_audit[".originalPagesByType"] = $tdatamega_ya_tecnicos_audit[".pagesByType"];
$tdatamega_ya_tecnicos_audit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamega_ya_tecnicos_audit[".originalPages"] = $tdatamega_ya_tecnicos_audit[".pages"];
$tdatamega_ya_tecnicos_audit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamega_ya_tecnicos_audit[".originalDefaultPages"] = $tdatamega_ya_tecnicos_audit[".defaultPages"];

//	field labels
$fieldLabelsmega_ya_tecnicos_audit = array();
$fieldToolTipsmega_ya_tecnicos_audit = array();
$pageTitlesmega_ya_tecnicos_audit = array();
$placeHoldersmega_ya_tecnicos_audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"] = array();
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"] = array();
	$placeHoldersmega_ya_tecnicos_audit["Spanish"] = array();
	$pageTitlesmega_ya_tecnicos_audit["Spanish"] = array();
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["id"] = "Id";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["id"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["id"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["datetime"] = "Datetime";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["datetime"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["datetime"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["ip"] = "Ip";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["ip"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["ip"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["user"] = "User";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["user"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["user"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["table"] = "Table";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["table"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["table"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["action"] = "Action";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["action"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["action"] = "";
	$fieldLabelsmega_ya_tecnicos_audit["Spanish"]["description"] = "Description";
	$fieldToolTipsmega_ya_tecnicos_audit["Spanish"]["description"] = "";
	$placeHoldersmega_ya_tecnicos_audit["Spanish"]["description"] = "";
	if (count($fieldToolTipsmega_ya_tecnicos_audit["Spanish"]))
		$tdatamega_ya_tecnicos_audit[".isUseToolTips"] = true;
}


	$tdatamega_ya_tecnicos_audit[".NCSearch"] = true;



$tdatamega_ya_tecnicos_audit[".shortTableName"] = "mega_ya_tecnicos_audit";
$tdatamega_ya_tecnicos_audit[".nSecOptions"] = 0;

$tdatamega_ya_tecnicos_audit[".mainTableOwnerID"] = "";
$tdatamega_ya_tecnicos_audit[".entityType"] = 0;
$tdatamega_ya_tecnicos_audit[".connId"] = "mega_ya_at_localhost";


$tdatamega_ya_tecnicos_audit[".strOriginalTableName"] = "mega_ya_tecnicos_audit";

	



$tdatamega_ya_tecnicos_audit[".showAddInPopup"] = false;

$tdatamega_ya_tecnicos_audit[".showEditInPopup"] = false;

$tdatamega_ya_tecnicos_audit[".showViewInPopup"] = false;

$tdatamega_ya_tecnicos_audit[".listAjax"] = false;
//	temporary
//$tdatamega_ya_tecnicos_audit[".listAjax"] = false;

	$tdatamega_ya_tecnicos_audit[".audit"] = false;

	$tdatamega_ya_tecnicos_audit[".locking"] = false;


$pages = $tdatamega_ya_tecnicos_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamega_ya_tecnicos_audit[".edit"] = true;
	$tdatamega_ya_tecnicos_audit[".afterEditAction"] = 1;
	$tdatamega_ya_tecnicos_audit[".closePopupAfterEdit"] = 1;
	$tdatamega_ya_tecnicos_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamega_ya_tecnicos_audit[".add"] = true;
$tdatamega_ya_tecnicos_audit[".afterAddAction"] = 1;
$tdatamega_ya_tecnicos_audit[".closePopupAfterAdd"] = 1;
$tdatamega_ya_tecnicos_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamega_ya_tecnicos_audit[".list"] = true;
}



$tdatamega_ya_tecnicos_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamega_ya_tecnicos_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamega_ya_tecnicos_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamega_ya_tecnicos_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamega_ya_tecnicos_audit[".printFriendly"] = true;
}



$tdatamega_ya_tecnicos_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamega_ya_tecnicos_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamega_ya_tecnicos_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamega_ya_tecnicos_audit[".isUseAjaxSuggest"] = true;



						

$tdatamega_ya_tecnicos_audit[".ajaxCodeSnippetAdded"] = false;

$tdatamega_ya_tecnicos_audit[".buttonsAdded"] = false;

$tdatamega_ya_tecnicos_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamega_ya_tecnicos_audit[".isUseTimeForSearch"] = false;


$tdatamega_ya_tecnicos_audit[".badgeColor"] = "CFAE83";


$tdatamega_ya_tecnicos_audit[".allSearchFields"] = array();
$tdatamega_ya_tecnicos_audit[".filterFields"] = array();
$tdatamega_ya_tecnicos_audit[".requiredSearchFields"] = array();

$tdatamega_ya_tecnicos_audit[".googleLikeFields"] = array();
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "id";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "datetime";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "ip";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "user";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "table";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "action";
$tdatamega_ya_tecnicos_audit[".googleLikeFields"][] = "description";



$tdatamega_ya_tecnicos_audit[".tableType"] = "list";

$tdatamega_ya_tecnicos_audit[".printerPageOrientation"] = 0;
$tdatamega_ya_tecnicos_audit[".nPrinterPageScale"] = 100;

$tdatamega_ya_tecnicos_audit[".nPrinterSplitRecords"] = 40;

$tdatamega_ya_tecnicos_audit[".geocodingEnabled"] = false;










$tdatamega_ya_tecnicos_audit[".pageSize"] = 20;

$tdatamega_ya_tecnicos_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `datetime` DESC";
$tdatamega_ya_tecnicos_audit[".strOrderBy"] = $tstrOrderBy;

$tdatamega_ya_tecnicos_audit[".orderindexes"] = array();
	$tdatamega_ya_tecnicos_audit[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`datetime`");



$tdatamega_ya_tecnicos_audit[".sqlHead"] = "SELECT id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$tdatamega_ya_tecnicos_audit[".sqlFrom"] = "FROM mega_ya_tecnicos_audit";
$tdatamega_ya_tecnicos_audit[".sqlWhereExpr"] = "";
$tdatamega_ya_tecnicos_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamega_ya_tecnicos_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamega_ya_tecnicos_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatamega_ya_tecnicos_audit[".highlightSearchResults"] = true;

$tableKeysmega_ya_tecnicos_audit = array();
$tableKeysmega_ya_tecnicos_audit[] = "id";
$tdatamega_ya_tecnicos_audit[".Keys"] = $tableKeysmega_ya_tecnicos_audit;


$tdatamega_ya_tecnicos_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","id");
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


	$tdatamega_ya_tecnicos_audit["id"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamega_ya_tecnicos_audit["datetime"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatamega_ya_tecnicos_audit["ip"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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


	$tdatamega_ya_tecnicos_audit["user"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","table");
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


	$tdatamega_ya_tecnicos_audit["table"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","action");
	$fdata["FieldType"] = 200;


	
	
			

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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatamega_ya_tecnicos_audit["action"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "mega_ya_tecnicos_audit";
	$fdata["Label"] = GetFieldLabel("mega_ya_tecnicos_audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdatamega_ya_tecnicos_audit["description"] = $fdata;
		$tdatamega_ya_tecnicos_audit[".searchableFields"][] = "description";


$tables_data["mega_ya_tecnicos_audit"]=&$tdatamega_ya_tecnicos_audit;
$field_labels["mega_ya_tecnicos_audit"] = &$fieldLabelsmega_ya_tecnicos_audit;
$fieldToolTips["mega_ya_tecnicos_audit"] = &$fieldToolTipsmega_ya_tecnicos_audit;
$placeHolders["mega_ya_tecnicos_audit"] = &$placeHoldersmega_ya_tecnicos_audit;
$page_titles["mega_ya_tecnicos_audit"] = &$pageTitlesmega_ya_tecnicos_audit;


changeTextControlsToDate( "mega_ya_tecnicos_audit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mega_ya_tecnicos_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mega_ya_tecnicos_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mega_ya_tecnicos_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  `datetime`,  ip,  `user`,  `table`,  `action`,  description";
$proto0["m_strFrom"] = "FROM mega_ya_tecnicos_audit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `datetime` DESC";
	
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
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mega_ya_tecnicos_audit";
$proto21["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mega_ya_tecnicos_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mega_ya_tecnicos_audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "mega_ya_tecnicos_audit",
	"m_srcTableName" => "mega_ya_tecnicos_audit"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mega_ya_tecnicos_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mega_ya_tecnicos_audit = createSqlQuery_mega_ya_tecnicos_audit();


	
												;

							

$tdatamega_ya_tecnicos_audit[".sqlquery"] = $queryData_mega_ya_tecnicos_audit;



$tdatamega_ya_tecnicos_audit[".hasEvents"] = false;

?>