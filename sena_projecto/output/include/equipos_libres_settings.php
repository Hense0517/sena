<?php
$tdataequipos_libres = array();
$tdataequipos_libres[".searchableFields"] = array();
$tdataequipos_libres[".ShortName"] = "equipos_libres";
$tdataequipos_libres[".OwnerID"] = "tecnico";
$tdataequipos_libres[".OriginalTable"] = "ingreso de equipo";


$tdataequipos_libres[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataequipos_libres[".originalPagesByType"] = $tdataequipos_libres[".pagesByType"];
$tdataequipos_libres[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataequipos_libres[".originalPages"] = $tdataequipos_libres[".pages"];
$tdataequipos_libres[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataequipos_libres[".originalDefaultPages"] = $tdataequipos_libres[".defaultPages"];

//	field labels
$fieldLabelsequipos_libres = array();
$fieldToolTipsequipos_libres = array();
$pageTitlesequipos_libres = array();
$placeHoldersequipos_libres = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsequipos_libres["Spanish"] = array();
	$fieldToolTipsequipos_libres["Spanish"] = array();
	$placeHoldersequipos_libres["Spanish"] = array();
	$pageTitlesequipos_libres["Spanish"] = array();
	$fieldLabelsequipos_libres["Spanish"]["Fecha_de_Entrega"] = "Fecha de Entrega";
	$fieldToolTipsequipos_libres["Spanish"]["Fecha_de_Entrega"] = "";
	$placeHoldersequipos_libres["Spanish"]["Fecha_de_Entrega"] = "";
	$fieldLabelsequipos_libres["Spanish"]["Serial"] = "Serial";
	$fieldToolTipsequipos_libres["Spanish"]["Serial"] = "";
	$placeHoldersequipos_libres["Spanish"]["Serial"] = "";
	$fieldLabelsequipos_libres["Spanish"]["tecnico"] = "Tecnico";
	$fieldToolTipsequipos_libres["Spanish"]["tecnico"] = "";
	$placeHoldersequipos_libres["Spanish"]["tecnico"] = "";
	$fieldLabelsequipos_libres["Spanish"]["Ticket"] = "Ticket";
	$fieldToolTipsequipos_libres["Spanish"]["Ticket"] = "";
	$placeHoldersequipos_libres["Spanish"]["Ticket"] = "";
	if (count($fieldToolTipsequipos_libres["Spanish"]))
		$tdataequipos_libres[".isUseToolTips"] = true;
}


	$tdataequipos_libres[".NCSearch"] = true;



$tdataequipos_libres[".shortTableName"] = "equipos_libres";
$tdataequipos_libres[".nSecOptions"] = 1;

$tdataequipos_libres[".mainTableOwnerID"] = "tecnico";
$tdataequipos_libres[".entityType"] = 1;
$tdataequipos_libres[".connId"] = "mega_ya_at_localhost";


$tdataequipos_libres[".strOriginalTableName"] = "ingreso de equipo";

	



$tdataequipos_libres[".showAddInPopup"] = false;

$tdataequipos_libres[".showEditInPopup"] = false;

$tdataequipos_libres[".showViewInPopup"] = false;

$tdataequipos_libres[".listAjax"] = false;
//	temporary
//$tdataequipos_libres[".listAjax"] = false;

	$tdataequipos_libres[".audit"] = true;

	$tdataequipos_libres[".locking"] = false;


$pages = $tdataequipos_libres[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataequipos_libres[".edit"] = true;
	$tdataequipos_libres[".afterEditAction"] = 1;
	$tdataequipos_libres[".closePopupAfterEdit"] = 1;
	$tdataequipos_libres[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataequipos_libres[".add"] = true;
$tdataequipos_libres[".afterAddAction"] = 1;
$tdataequipos_libres[".closePopupAfterAdd"] = 1;
$tdataequipos_libres[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataequipos_libres[".list"] = true;
}



$tdataequipos_libres[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataequipos_libres[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataequipos_libres[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataequipos_libres[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataequipos_libres[".printFriendly"] = true;
}



$tdataequipos_libres[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataequipos_libres[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataequipos_libres[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataequipos_libres[".isUseAjaxSuggest"] = true;



						

$tdataequipos_libres[".ajaxCodeSnippetAdded"] = false;

$tdataequipos_libres[".buttonsAdded"] = false;

$tdataequipos_libres[".addPageEvents"] = false;

// use timepicker for search panel
$tdataequipos_libres[".isUseTimeForSearch"] = false;


$tdataequipos_libres[".badgeColor"] = "bc8f8f";


$tdataequipos_libres[".allSearchFields"] = array();
$tdataequipos_libres[".filterFields"] = array();
$tdataequipos_libres[".requiredSearchFields"] = array();

$tdataequipos_libres[".googleLikeFields"] = array();
$tdataequipos_libres[".googleLikeFields"][] = "Fecha de Entrega";
$tdataequipos_libres[".googleLikeFields"][] = "Serial";
$tdataequipos_libres[".googleLikeFields"][] = "tecnico";
$tdataequipos_libres[".googleLikeFields"][] = "Ticket";



$tdataequipos_libres[".tableType"] = "list";

$tdataequipos_libres[".printerPageOrientation"] = 0;
$tdataequipos_libres[".nPrinterPageScale"] = 100;

$tdataequipos_libres[".nPrinterSplitRecords"] = 40;

$tdataequipos_libres[".geocodingEnabled"] = false;




$tdataequipos_libres[".isDisplayLoading"] = true;






$tdataequipos_libres[".pageSize"] = 20;

$tdataequipos_libres[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Fecha de Entrega` DESC";
$tdataequipos_libres[".strOrderBy"] = $tstrOrderBy;

$tdataequipos_libres[".orderindexes"] = array();
	$tdataequipos_libres[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Fecha de Entrega`");



$tdataequipos_libres[".sqlHead"] = "SELECT `Fecha de Entrega`,  Serial,  tecnico,  Ticket";
$tdataequipos_libres[".sqlFrom"] = "FROM `ingreso de equipo`";
$tdataequipos_libres[".sqlWhereExpr"] = "(Ticket ='' OR Ticket IS NULL)";
$tdataequipos_libres[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataequipos_libres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataequipos_libres[".arrGroupsPerPage"] = $arrGPP;

$tdataequipos_libres[".highlightSearchResults"] = true;

$tableKeysequipos_libres = array();
$tableKeysequipos_libres[] = "tecnico";
$tdataequipos_libres[".Keys"] = $tableKeysequipos_libres;


$tdataequipos_libres[".hideMobileList"] = array();




//	Fecha de Entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fecha de Entrega";
	$fdata["GoodName"] = "Fecha_de_Entrega";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Equipos_Libres","Fecha_de_Entrega");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Entrega";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Entrega`";

	
	
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


	$tdataequipos_libres["Fecha de Entrega"] = $fdata;
		$tdataequipos_libres[".searchableFields"][] = "Fecha de Entrega";
//	Serial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Serial";
	$fdata["GoodName"] = "Serial";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Equipos_Libres","Serial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Serial";

	
	
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


	$tdataequipos_libres["Serial"] = $fdata;
		$tdataequipos_libres[".searchableFields"][] = "Serial";
//	tecnico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tecnico";
	$fdata["GoodName"] = "tecnico";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Equipos_Libres","tecnico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tecnico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tecnico";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Cedula";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Nombre y Apellido";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataequipos_libres["tecnico"] = $fdata;
		$tdataequipos_libres[".searchableFields"][] = "tecnico";
//	Ticket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Ticket";
	$fdata["GoodName"] = "Ticket";
	$fdata["ownerTable"] = "ingreso de equipo";
	$fdata["Label"] = GetFieldLabel("Equipos_Libres","Ticket");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ticket";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ticket";

	
	
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


	$tdataequipos_libres["Ticket"] = $fdata;
		$tdataequipos_libres[".searchableFields"][] = "Ticket";


$tables_data["Equipos Libres"]=&$tdataequipos_libres;
$field_labels["Equipos_Libres"] = &$fieldLabelsequipos_libres;
$fieldToolTips["Equipos_Libres"] = &$fieldToolTipsequipos_libres;
$placeHolders["Equipos_Libres"] = &$placeHoldersequipos_libres;
$page_titles["Equipos_Libres"] = &$pageTitlesequipos_libres;


changeTextControlsToDate( "Equipos Libres" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Equipos Libres"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Equipos Libres"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_equipos_libres()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Fecha de Entrega`,  Serial,  tecnico,  Ticket";
$proto0["m_strFrom"] = "FROM `ingreso de equipo`";
$proto0["m_strWhere"] = "(Ticket ='' OR Ticket IS NULL)";
$proto0["m_strOrderBy"] = "ORDER BY `Fecha de Entrega` DESC";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "Ticket ='' OR Ticket IS NULL";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "Ticket ='' OR Ticket IS NULL"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "Ticket =''";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=''";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "Ticket IS NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
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
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto10["m_sql"] = "`Fecha de Entrega`";
$proto10["m_srcTableName"] = "Equipos Libres";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto12["m_sql"] = "Serial";
$proto12["m_srcTableName"] = "Equipos Libres";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tecnico",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto14["m_sql"] = "tecnico";
$proto14["m_srcTableName"] = "Equipos Libres";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto16["m_sql"] = "Ticket";
$proto16["m_srcTableName"] = "Equipos Libres";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ingreso de equipo";
$proto19["m_srcTableName"] = "Equipos Libres";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id Ingresp";
$proto19["m_columns"][] = "Fecha de Entrega";
$proto19["m_columns"][] = "Serial";
$proto19["m_columns"][] = "tecnico";
$proto19["m_columns"][] = "Ticket";
$proto19["m_columns"][] = "Fecha de Consumo";
$proto19["m_columns"][] = "Empresa";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`ingreso de equipo`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Equipos Libres";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "Serial",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "tecnico",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "Ticket",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "Fecha de Entrega",
	"m_strTable" => "ingreso de equipo",
	"m_srcTableName" => "Equipos Libres"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Equipos Libres";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_equipos_libres = createSqlQuery_equipos_libres();


	
												;

				

$tdataequipos_libres[".sqlquery"] = $queryData_equipos_libres;



$tdataequipos_libres[".hasEvents"] = false;

?>