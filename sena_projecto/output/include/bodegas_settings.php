<?php
$tdatabodegas = array();
$tdatabodegas[".searchableFields"] = array();
$tdatabodegas[".ShortName"] = "bodegas";
$tdatabodegas[".OwnerID"] = "Cedula";
$tdatabodegas[".OriginalTable"] = "usuarios";


$tdatabodegas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabodegas[".originalPagesByType"] = $tdatabodegas[".pagesByType"];
$tdatabodegas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabodegas[".originalPages"] = $tdatabodegas[".pages"];
$tdatabodegas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabodegas[".originalDefaultPages"] = $tdatabodegas[".defaultPages"];

//	field labels
$fieldLabelsbodegas = array();
$fieldToolTipsbodegas = array();
$pageTitlesbodegas = array();
$placeHoldersbodegas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbodegas["Spanish"] = array();
	$fieldToolTipsbodegas["Spanish"] = array();
	$placeHoldersbodegas["Spanish"] = array();
	$pageTitlesbodegas["Spanish"] = array();
	$fieldLabelsbodegas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsbodegas["Spanish"]["Empresa"] = "";
	$placeHoldersbodegas["Spanish"]["Empresa"] = "";
	$fieldLabelsbodegas["Spanish"]["identificador"] = "Identificador";
	$fieldToolTipsbodegas["Spanish"]["identificador"] = "";
	$placeHoldersbodegas["Spanish"]["identificador"] = "";
	$fieldLabelsbodegas["Spanish"]["bodega"] = "Bodega";
	$fieldToolTipsbodegas["Spanish"]["bodega"] = "";
	$placeHoldersbodegas["Spanish"]["bodega"] = "";
	if (count($fieldToolTipsbodegas["Spanish"]))
		$tdatabodegas[".isUseToolTips"] = true;
}


	$tdatabodegas[".NCSearch"] = true;



$tdatabodegas[".shortTableName"] = "bodegas";
$tdatabodegas[".nSecOptions"] = 0;

$tdatabodegas[".mainTableOwnerID"] = "Cedula";
$tdatabodegas[".entityType"] = 1;
$tdatabodegas[".connId"] = "mega_ya_at_localhost";


$tdatabodegas[".strOriginalTableName"] = "usuarios";

	



$tdatabodegas[".showAddInPopup"] = false;

$tdatabodegas[".showEditInPopup"] = false;

$tdatabodegas[".showViewInPopup"] = false;

$tdatabodegas[".listAjax"] = false;
//	temporary
//$tdatabodegas[".listAjax"] = false;

	$tdatabodegas[".audit"] = false;

	$tdatabodegas[".locking"] = false;


$pages = $tdatabodegas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabodegas[".edit"] = true;
	$tdatabodegas[".afterEditAction"] = 1;
	$tdatabodegas[".closePopupAfterEdit"] = 1;
	$tdatabodegas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabodegas[".add"] = true;
$tdatabodegas[".afterAddAction"] = 1;
$tdatabodegas[".closePopupAfterAdd"] = 1;
$tdatabodegas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabodegas[".list"] = true;
}



$tdatabodegas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabodegas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabodegas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabodegas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabodegas[".printFriendly"] = true;
}



$tdatabodegas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabodegas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabodegas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabodegas[".isUseAjaxSuggest"] = true;



						

$tdatabodegas[".ajaxCodeSnippetAdded"] = false;

$tdatabodegas[".buttonsAdded"] = false;

$tdatabodegas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabodegas[".isUseTimeForSearch"] = false;


$tdatabodegas[".badgeColor"] = "B22222";


$tdatabodegas[".allSearchFields"] = array();
$tdatabodegas[".filterFields"] = array();
$tdatabodegas[".requiredSearchFields"] = array();

$tdatabodegas[".googleLikeFields"] = array();
$tdatabodegas[".googleLikeFields"][] = "identificador";
$tdatabodegas[".googleLikeFields"][] = "bodega";
$tdatabodegas[".googleLikeFields"][] = "Empresa";



$tdatabodegas[".tableType"] = "list";

$tdatabodegas[".printerPageOrientation"] = 0;
$tdatabodegas[".nPrinterPageScale"] = 100;

$tdatabodegas[".nPrinterSplitRecords"] = 40;

$tdatabodegas[".geocodingEnabled"] = false;










$tdatabodegas[".pageSize"] = 20;

$tdatabodegas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabodegas[".strOrderBy"] = $tstrOrderBy;

$tdatabodegas[".orderindexes"] = array();


$tdatabodegas[".sqlHead"] = "SELECT Cedula AS identificador,  `Nombre y Apellido` AS bodega,  Empresa";
$tdatabodegas[".sqlFrom"] = "FROM usuarios";
$tdatabodegas[".sqlWhereExpr"] = "(`Nombre y Apellido` like  \"%Bodega%\")";
$tdatabodegas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabodegas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabodegas[".arrGroupsPerPage"] = $arrGPP;

$tdatabodegas[".highlightSearchResults"] = true;

$tableKeysbodegas = array();
$tableKeysbodegas[] = "Empresa";
$tdatabodegas[".Keys"] = $tableKeysbodegas;


$tdatabodegas[".hideMobileList"] = array();




//	identificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "identificador";
	$fdata["GoodName"] = "identificador";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas","identificador");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "Cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cedula";

	
	
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


	$tdatabodegas["identificador"] = $fdata;
		$tdatabodegas[".searchableFields"][] = "identificador";
//	bodega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bodega";
	$fdata["GoodName"] = "bodega";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas","bodega");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre y Apellido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre y Apellido`";

	
	
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


	$tdatabodegas["bodega"] = $fdata;
		$tdatabodegas[".searchableFields"][] = "bodega";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas","Empresa");
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


	$tdatabodegas["Empresa"] = $fdata;
		$tdatabodegas[".searchableFields"][] = "Empresa";


$tables_data["Bodegas"]=&$tdatabodegas;
$field_labels["Bodegas"] = &$fieldLabelsbodegas;
$fieldToolTips["Bodegas"] = &$fieldToolTipsbodegas;
$placeHolders["Bodegas"] = &$placeHoldersbodegas;
$page_titles["Bodegas"] = &$pageTitlesbodegas;


changeTextControlsToDate( "Bodegas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Bodegas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Bodegas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bodegas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cedula AS identificador,  `Nombre y Apellido` AS bodega,  Empresa";
$proto0["m_strFrom"] = "FROM usuarios";
$proto0["m_strWhere"] = "(`Nombre y Apellido` like  \"%Bodega%\")";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Nombre y Apellido` like  \"%Bodega%\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like  \"%Bodega%\"";
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
	"m_strName" => "Cedula",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas"
));

$proto6["m_sql"] = "Cedula";
$proto6["m_srcTableName"] = "Bodegas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "identificador";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas"
));

$proto8["m_sql"] = "`Nombre y Apellido`";
$proto8["m_srcTableName"] = "Bodegas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "bodega";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas"
));

$proto10["m_sql"] = "Empresa";
$proto10["m_srcTableName"] = "Bodegas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "usuarios";
$proto13["m_srcTableName"] = "Bodegas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Cedula";
$proto13["m_columns"][] = "Nombre y Apellido";
$proto13["m_columns"][] = "Celular";
$proto13["m_columns"][] = "Pass";
$proto13["m_columns"][] = "Empresa";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "usuarios";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Bodegas";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Bodegas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bodegas = createSqlQuery_bodegas();


	
												;

			

$tdatabodegas[".sqlquery"] = $queryData_bodegas;



$tdatabodegas[".hasEvents"] = false;

?>