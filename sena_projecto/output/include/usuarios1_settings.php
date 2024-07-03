<?php
$tdatausuarios1 = array();
$tdatausuarios1[".searchableFields"] = array();
$tdatausuarios1[".ShortName"] = "usuarios1";
$tdatausuarios1[".OwnerID"] = "";
$tdatausuarios1[".OriginalTable"] = "usuarios";


$tdatausuarios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuarios1[".originalPagesByType"] = $tdatausuarios1[".pagesByType"];
$tdatausuarios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuarios1[".originalPages"] = $tdatausuarios1[".pages"];
$tdatausuarios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuarios1[".originalDefaultPages"] = $tdatausuarios1[".defaultPages"];

//	field labels
$fieldLabelsusuarios1 = array();
$fieldToolTipsusuarios1 = array();
$pageTitlesusuarios1 = array();
$placeHoldersusuarios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios1["Spanish"] = array();
	$fieldToolTipsusuarios1["Spanish"] = array();
	$placeHoldersusuarios1["Spanish"] = array();
	$pageTitlesusuarios1["Spanish"] = array();
	$fieldLabelsusuarios1["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsusuarios1["Spanish"]["Cedula"] = "";
	$placeHoldersusuarios1["Spanish"]["Cedula"] = "";
	$fieldLabelsusuarios1["Spanish"]["Nombre_y_Apellido"] = "Nombre y Apellido";
	$fieldToolTipsusuarios1["Spanish"]["Nombre_y_Apellido"] = "";
	$placeHoldersusuarios1["Spanish"]["Nombre_y_Apellido"] = "";
	$fieldLabelsusuarios1["Spanish"]["Celular"] = "Celular";
	$fieldToolTipsusuarios1["Spanish"]["Celular"] = "";
	$placeHoldersusuarios1["Spanish"]["Celular"] = "";
	$fieldLabelsusuarios1["Spanish"]["Pass"] = "Pass";
	$fieldToolTipsusuarios1["Spanish"]["Pass"] = "";
	$placeHoldersusuarios1["Spanish"]["Pass"] = "";
	$fieldLabelsusuarios1["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsusuarios1["Spanish"]["Empresa"] = "";
	$placeHoldersusuarios1["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsusuarios1["Spanish"]))
		$tdatausuarios1[".isUseToolTips"] = true;
}


	$tdatausuarios1[".NCSearch"] = true;



$tdatausuarios1[".shortTableName"] = "usuarios1";
$tdatausuarios1[".nSecOptions"] = 0;

$tdatausuarios1[".mainTableOwnerID"] = "";
$tdatausuarios1[".entityType"] = 1;
$tdatausuarios1[".connId"] = "mega_ya_at_localhost";


$tdatausuarios1[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios1[".showAddInPopup"] = false;

$tdatausuarios1[".showEditInPopup"] = false;

$tdatausuarios1[".showViewInPopup"] = false;

$tdatausuarios1[".listAjax"] = false;
//	temporary
//$tdatausuarios1[".listAjax"] = false;

	$tdatausuarios1[".audit"] = false;

	$tdatausuarios1[".locking"] = false;


$pages = $tdatausuarios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios1[".edit"] = true;
	$tdatausuarios1[".afterEditAction"] = 1;
	$tdatausuarios1[".closePopupAfterEdit"] = 1;
	$tdatausuarios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios1[".add"] = true;
$tdatausuarios1[".afterAddAction"] = 1;
$tdatausuarios1[".closePopupAfterAdd"] = 1;
$tdatausuarios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios1[".list"] = true;
}



$tdatausuarios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios1[".printFriendly"] = true;
}



$tdatausuarios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios1[".isUseAjaxSuggest"] = true;



						

$tdatausuarios1[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios1[".buttonsAdded"] = false;

$tdatausuarios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios1[".isUseTimeForSearch"] = false;


$tdatausuarios1[".badgeColor"] = "DC143C";


$tdatausuarios1[".allSearchFields"] = array();
$tdatausuarios1[".filterFields"] = array();
$tdatausuarios1[".requiredSearchFields"] = array();

$tdatausuarios1[".googleLikeFields"] = array();
$tdatausuarios1[".googleLikeFields"][] = "Cedula";
$tdatausuarios1[".googleLikeFields"][] = "Nombre y Apellido";
$tdatausuarios1[".googleLikeFields"][] = "Celular";
$tdatausuarios1[".googleLikeFields"][] = "Pass";
$tdatausuarios1[".googleLikeFields"][] = "Empresa";



$tdatausuarios1[".tableType"] = "list";

$tdatausuarios1[".printerPageOrientation"] = 0;
$tdatausuarios1[".nPrinterPageScale"] = 100;

$tdatausuarios1[".nPrinterSplitRecords"] = 40;

$tdatausuarios1[".geocodingEnabled"] = false;










$tdatausuarios1[".pageSize"] = 20;

$tdatausuarios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarios1[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios1[".orderindexes"] = array();


$tdatausuarios1[".sqlHead"] = "SELECT Cedula,  	`Nombre y Apellido`,  	Celular,  	Pass,  	Empresa";
$tdatausuarios1[".sqlFrom"] = "FROM usuarios";
$tdatausuarios1[".sqlWhereExpr"] = "";
$tdatausuarios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios1[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios1[".highlightSearchResults"] = true;

$tableKeysusuarios1 = array();
$tableKeysusuarios1[] = "Cedula";
$tdatausuarios1[".Keys"] = $tableKeysusuarios1;


$tdatausuarios1[".hideMobileList"] = array();




//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios1","Cedula");
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


	$tdatausuarios1["Cedula"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "Cedula";
//	Nombre y Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre y Apellido";
	$fdata["GoodName"] = "Nombre_y_Apellido";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios1","Nombre_y_Apellido");
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


	$tdatausuarios1["Nombre y Apellido"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "Nombre y Apellido";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios1","Celular");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Celular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdatausuarios1["Celular"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "Celular";
//	Pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pass";
	$fdata["GoodName"] = "Pass";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios1","Pass");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pass";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pass";

	
	
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


	$tdatausuarios1["Pass"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "Pass";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios1","Empresa");
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


	$tdatausuarios1["Empresa"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "Empresa";


$tables_data["usuarios1"]=&$tdatausuarios1;
$field_labels["usuarios1"] = &$fieldLabelsusuarios1;
$fieldToolTips["usuarios1"] = &$fieldToolTipsusuarios1;
$placeHolders["usuarios1"] = &$placeHoldersusuarios1;
$page_titles["usuarios1"] = &$pageTitlesusuarios1;


changeTextControlsToDate( "usuarios1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuarios1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuarios1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cedula,  	`Nombre y Apellido`,  	Celular,  	Pass,  	Empresa";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strName" => "Cedula",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios1"
));

$proto6["m_sql"] = "Cedula";
$proto6["m_srcTableName"] = "usuarios1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios1"
));

$proto8["m_sql"] = "`Nombre y Apellido`";
$proto8["m_srcTableName"] = "usuarios1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios1"
));

$proto10["m_sql"] = "Celular";
$proto10["m_srcTableName"] = "usuarios1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Pass",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios1"
));

$proto12["m_sql"] = "Pass";
$proto12["m_srcTableName"] = "usuarios1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios1"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "usuarios1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "usuarios1";
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
$proto16["m_srcTableName"] = "usuarios1";
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
$proto0["m_srcTableName"]="usuarios1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios1 = createSqlQuery_usuarios1();


	
												;

					

$tdatausuarios1[".sqlquery"] = $queryData_usuarios1;



$tdatausuarios1[".hasEvents"] = false;

?>