<?php
$tdatabodegas_contratista = array();
$tdatabodegas_contratista[".searchableFields"] = array();
$tdatabodegas_contratista[".ShortName"] = "bodegas_contratista";
$tdatabodegas_contratista[".OwnerID"] = "Cedula";
$tdatabodegas_contratista[".OriginalTable"] = "usuarios";


$tdatabodegas_contratista[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabodegas_contratista[".originalPagesByType"] = $tdatabodegas_contratista[".pagesByType"];
$tdatabodegas_contratista[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabodegas_contratista[".originalPages"] = $tdatabodegas_contratista[".pages"];
$tdatabodegas_contratista[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabodegas_contratista[".originalDefaultPages"] = $tdatabodegas_contratista[".defaultPages"];

//	field labels
$fieldLabelsbodegas_contratista = array();
$fieldToolTipsbodegas_contratista = array();
$pageTitlesbodegas_contratista = array();
$placeHoldersbodegas_contratista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbodegas_contratista["Spanish"] = array();
	$fieldToolTipsbodegas_contratista["Spanish"] = array();
	$placeHoldersbodegas_contratista["Spanish"] = array();
	$pageTitlesbodegas_contratista["Spanish"] = array();
	$fieldLabelsbodegas_contratista["Spanish"]["identificador"] = "Identificador";
	$fieldToolTipsbodegas_contratista["Spanish"]["identificador"] = "";
	$placeHoldersbodegas_contratista["Spanish"]["identificador"] = "";
	$fieldLabelsbodegas_contratista["Spanish"]["bodega"] = "Bodega";
	$fieldToolTipsbodegas_contratista["Spanish"]["bodega"] = "";
	$placeHoldersbodegas_contratista["Spanish"]["bodega"] = "";
	$fieldLabelsbodegas_contratista["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsbodegas_contratista["Spanish"]["Empresa"] = "";
	$placeHoldersbodegas_contratista["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsbodegas_contratista["Spanish"]))
		$tdatabodegas_contratista[".isUseToolTips"] = true;
}


	$tdatabodegas_contratista[".NCSearch"] = true;



$tdatabodegas_contratista[".shortTableName"] = "bodegas_contratista";
$tdatabodegas_contratista[".nSecOptions"] = 0;

$tdatabodegas_contratista[".mainTableOwnerID"] = "Cedula";
$tdatabodegas_contratista[".entityType"] = 1;
$tdatabodegas_contratista[".connId"] = "mega_ya_at_localhost";


$tdatabodegas_contratista[".strOriginalTableName"] = "usuarios";

	



$tdatabodegas_contratista[".showAddInPopup"] = false;

$tdatabodegas_contratista[".showEditInPopup"] = false;

$tdatabodegas_contratista[".showViewInPopup"] = false;

$tdatabodegas_contratista[".listAjax"] = false;
//	temporary
//$tdatabodegas_contratista[".listAjax"] = false;

	$tdatabodegas_contratista[".audit"] = false;

	$tdatabodegas_contratista[".locking"] = false;


$pages = $tdatabodegas_contratista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabodegas_contratista[".edit"] = true;
	$tdatabodegas_contratista[".afterEditAction"] = 1;
	$tdatabodegas_contratista[".closePopupAfterEdit"] = 1;
	$tdatabodegas_contratista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabodegas_contratista[".add"] = true;
$tdatabodegas_contratista[".afterAddAction"] = 1;
$tdatabodegas_contratista[".closePopupAfterAdd"] = 1;
$tdatabodegas_contratista[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabodegas_contratista[".list"] = true;
}



$tdatabodegas_contratista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabodegas_contratista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabodegas_contratista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabodegas_contratista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabodegas_contratista[".printFriendly"] = true;
}



$tdatabodegas_contratista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabodegas_contratista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabodegas_contratista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabodegas_contratista[".isUseAjaxSuggest"] = true;



						

$tdatabodegas_contratista[".ajaxCodeSnippetAdded"] = false;

$tdatabodegas_contratista[".buttonsAdded"] = false;

$tdatabodegas_contratista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabodegas_contratista[".isUseTimeForSearch"] = false;


$tdatabodegas_contratista[".badgeColor"] = "CD5C5C";


$tdatabodegas_contratista[".allSearchFields"] = array();
$tdatabodegas_contratista[".filterFields"] = array();
$tdatabodegas_contratista[".requiredSearchFields"] = array();

$tdatabodegas_contratista[".googleLikeFields"] = array();
$tdatabodegas_contratista[".googleLikeFields"][] = "identificador";
$tdatabodegas_contratista[".googleLikeFields"][] = "bodega";
$tdatabodegas_contratista[".googleLikeFields"][] = "Empresa";



$tdatabodegas_contratista[".tableType"] = "list";

$tdatabodegas_contratista[".printerPageOrientation"] = 0;
$tdatabodegas_contratista[".nPrinterPageScale"] = 100;

$tdatabodegas_contratista[".nPrinterSplitRecords"] = 40;

$tdatabodegas_contratista[".geocodingEnabled"] = false;










$tdatabodegas_contratista[".pageSize"] = 20;

$tdatabodegas_contratista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabodegas_contratista[".strOrderBy"] = $tstrOrderBy;

$tdatabodegas_contratista[".orderindexes"] = array();


$tdatabodegas_contratista[".sqlHead"] = "SELECT Cedula AS identificador,  `Nombre y Apellido` AS bodega,  Empresa";
$tdatabodegas_contratista[".sqlFrom"] = "FROM usuarios";
$tdatabodegas_contratista[".sqlWhereExpr"] = "(`Nombre y Apellido` like  \"%Bodega%\") AND (Empresa =2)";
$tdatabodegas_contratista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabodegas_contratista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabodegas_contratista[".arrGroupsPerPage"] = $arrGPP;

$tdatabodegas_contratista[".highlightSearchResults"] = true;

$tableKeysbodegas_contratista = array();
$tableKeysbodegas_contratista[] = "Empresa";
$tdatabodegas_contratista[".Keys"] = $tableKeysbodegas_contratista;


$tdatabodegas_contratista[".hideMobileList"] = array();




//	identificador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "identificador";
	$fdata["GoodName"] = "identificador";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas_Contratista","identificador");
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


	$tdatabodegas_contratista["identificador"] = $fdata;
		$tdatabodegas_contratista[".searchableFields"][] = "identificador";
//	bodega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bodega";
	$fdata["GoodName"] = "bodega";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas_Contratista","bodega");
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


	$tdatabodegas_contratista["bodega"] = $fdata;
		$tdatabodegas_contratista[".searchableFields"][] = "bodega";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Bodegas_Contratista","Empresa");
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


	$tdatabodegas_contratista["Empresa"] = $fdata;
		$tdatabodegas_contratista[".searchableFields"][] = "Empresa";


$tables_data["Bodegas Contratista"]=&$tdatabodegas_contratista;
$field_labels["Bodegas_Contratista"] = &$fieldLabelsbodegas_contratista;
$fieldToolTips["Bodegas_Contratista"] = &$fieldToolTipsbodegas_contratista;
$placeHolders["Bodegas_Contratista"] = &$placeHoldersbodegas_contratista;
$page_titles["Bodegas_Contratista"] = &$pageTitlesbodegas_contratista;


changeTextControlsToDate( "Bodegas Contratista" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Bodegas Contratista"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Bodegas Contratista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bodegas_contratista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cedula AS identificador,  `Nombre y Apellido` AS bodega,  Empresa";
$proto0["m_strFrom"] = "FROM usuarios";
$proto0["m_strWhere"] = "(`Nombre y Apellido` like  \"%Bodega%\") AND (Empresa =2)";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`Nombre y Apellido` like  \"%Bodega%\") AND (Empresa =2)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`Nombre y Apellido` like  \"%Bodega%\") AND (Empresa =2)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Nombre y Apellido` like  \"%Bodega%\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas Contratista"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "like  \"%Bodega%\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Empresa =2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas Contratista"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=2";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas Contratista"
));

$proto10["m_sql"] = "Cedula";
$proto10["m_srcTableName"] = "Bodegas Contratista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "identificador";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas Contratista"
));

$proto12["m_sql"] = "`Nombre y Apellido`";
$proto12["m_srcTableName"] = "Bodegas Contratista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "bodega";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Bodegas Contratista"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "Bodegas Contratista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "Bodegas Contratista";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Cedula";
$proto17["m_columns"][] = "Nombre y Apellido";
$proto17["m_columns"][] = "Celular";
$proto17["m_columns"][] = "Pass";
$proto17["m_columns"][] = "Empresa";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "usuarios";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Bodegas Contratista";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Bodegas Contratista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bodegas_contratista = createSqlQuery_bodegas_contratista();


	
												;

			

$tdatabodegas_contratista[".sqlquery"] = $queryData_bodegas_contratista;



$tdatabodegas_contratista[".hasEvents"] = false;

?>