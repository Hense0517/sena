<?php
$tdatalocalidades = array();
$tdatalocalidades[".searchableFields"] = array();
$tdatalocalidades[".ShortName"] = "localidades";
$tdatalocalidades[".OwnerID"] = "";
$tdatalocalidades[".OriginalTable"] = "localidades";


$tdatalocalidades[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalocalidades[".originalPagesByType"] = $tdatalocalidades[".pagesByType"];
$tdatalocalidades[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalocalidades[".originalPages"] = $tdatalocalidades[".pages"];
$tdatalocalidades[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalocalidades[".originalDefaultPages"] = $tdatalocalidades[".defaultPages"];

//	field labels
$fieldLabelslocalidades = array();
$fieldToolTipslocalidades = array();
$pageTitleslocalidades = array();
$placeHolderslocalidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslocalidades["Spanish"] = array();
	$fieldToolTipslocalidades["Spanish"] = array();
	$placeHolderslocalidades["Spanish"] = array();
	$pageTitleslocalidades["Spanish"] = array();
	$fieldLabelslocalidades["Spanish"]["Id_Licalidad"] = "Id Localidad";
	$fieldToolTipslocalidades["Spanish"]["Id_Licalidad"] = "";
	$placeHolderslocalidades["Spanish"]["Id_Licalidad"] = "";
	$fieldLabelslocalidades["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidades["Spanish"]["Localidad"] = "";
	$placeHolderslocalidades["Spanish"]["Localidad"] = "";
	if (count($fieldToolTipslocalidades["Spanish"]))
		$tdatalocalidades[".isUseToolTips"] = true;
}


	$tdatalocalidades[".NCSearch"] = true;



$tdatalocalidades[".shortTableName"] = "localidades";
$tdatalocalidades[".nSecOptions"] = 0;

$tdatalocalidades[".mainTableOwnerID"] = "";
$tdatalocalidades[".entityType"] = 0;
$tdatalocalidades[".connId"] = "mega_ya_at_localhost";


$tdatalocalidades[".strOriginalTableName"] = "localidades";

	



$tdatalocalidades[".showAddInPopup"] = false;

$tdatalocalidades[".showEditInPopup"] = false;

$tdatalocalidades[".showViewInPopup"] = false;

$tdatalocalidades[".listAjax"] = false;
//	temporary
//$tdatalocalidades[".listAjax"] = false;

	$tdatalocalidades[".audit"] = true;

	$tdatalocalidades[".locking"] = false;


$pages = $tdatalocalidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidades[".edit"] = true;
	$tdatalocalidades[".afterEditAction"] = 1;
	$tdatalocalidades[".closePopupAfterEdit"] = 1;
	$tdatalocalidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidades[".add"] = true;
$tdatalocalidades[".afterAddAction"] = 1;
$tdatalocalidades[".closePopupAfterAdd"] = 1;
$tdatalocalidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidades[".list"] = true;
}



$tdatalocalidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidades[".printFriendly"] = true;
}



$tdatalocalidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidades[".isUseAjaxSuggest"] = true;



						

$tdatalocalidades[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidades[".buttonsAdded"] = false;

$tdatalocalidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocalidades[".isUseTimeForSearch"] = false;


$tdatalocalidades[".badgeColor"] = "778899";


$tdatalocalidades[".allSearchFields"] = array();
$tdatalocalidades[".filterFields"] = array();
$tdatalocalidades[".requiredSearchFields"] = array();

$tdatalocalidades[".googleLikeFields"] = array();
$tdatalocalidades[".googleLikeFields"][] = "Id Licalidad";
$tdatalocalidades[".googleLikeFields"][] = "Localidad";



$tdatalocalidades[".tableType"] = "list";

$tdatalocalidades[".printerPageOrientation"] = 0;
$tdatalocalidades[".nPrinterPageScale"] = 100;

$tdatalocalidades[".nPrinterSplitRecords"] = 40;

$tdatalocalidades[".geocodingEnabled"] = false;




$tdatalocalidades[".isDisplayLoading"] = true;






$tdatalocalidades[".pageSize"] = 20;

$tdatalocalidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalocalidades[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidades[".orderindexes"] = array();


$tdatalocalidades[".sqlHead"] = "SELECT `Id Licalidad`,  	Localidad";
$tdatalocalidades[".sqlFrom"] = "FROM localidades";
$tdatalocalidades[".sqlWhereExpr"] = "";
$tdatalocalidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidades[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidades[".highlightSearchResults"] = true;

$tableKeyslocalidades = array();
$tableKeyslocalidades[] = "Id Licalidad";
$tdatalocalidades[".Keys"] = $tableKeyslocalidades;


$tdatalocalidades[".hideMobileList"] = array();




//	Id Licalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id Licalidad";
	$fdata["GoodName"] = "Id_Licalidad";
	$fdata["ownerTable"] = "localidades";
	$fdata["Label"] = GetFieldLabel("localidades","Id_Licalidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id Licalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id Licalidad`";

	
	
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


	$tdatalocalidades["Id Licalidad"] = $fdata;
		$tdatalocalidades[".searchableFields"][] = "Id Licalidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidades";
	$fdata["Label"] = GetFieldLabel("localidades","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Localidad";

	
	
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


	$tdatalocalidades["Localidad"] = $fdata;
		$tdatalocalidades[".searchableFields"][] = "Localidad";


$tables_data["localidades"]=&$tdatalocalidades;
$field_labels["localidades"] = &$fieldLabelslocalidades;
$fieldToolTips["localidades"] = &$fieldToolTipslocalidades;
$placeHolders["localidades"] = &$placeHolderslocalidades;
$page_titles["localidades"] = &$pageTitleslocalidades;


changeTextControlsToDate( "localidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["localidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["localidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_localidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id Licalidad`,  	Localidad";
$proto0["m_strFrom"] = "FROM localidades";
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
	"m_strName" => "Id Licalidad",
	"m_strTable" => "localidades",
	"m_srcTableName" => "localidades"
));

$proto6["m_sql"] = "`Id Licalidad`";
$proto6["m_srcTableName"] = "localidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidades",
	"m_srcTableName" => "localidades"
));

$proto8["m_sql"] = "Localidad";
$proto8["m_srcTableName"] = "localidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "localidades";
$proto11["m_srcTableName"] = "localidades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Id Licalidad";
$proto11["m_columns"][] = "Localidad";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "localidades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "localidades";
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
$proto0["m_srcTableName"]="localidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_localidades = createSqlQuery_localidades();


	
												;

		

$tdatalocalidades[".sqlquery"] = $queryData_localidades;



$tdatalocalidades[".hasEvents"] = false;

?>