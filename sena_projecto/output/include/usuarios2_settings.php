<?php
$tdatausuarios2 = array();
$tdatausuarios2[".searchableFields"] = array();
$tdatausuarios2[".ShortName"] = "usuarios2";
$tdatausuarios2[".OwnerID"] = "";
$tdatausuarios2[".OriginalTable"] = "usuarios";


$tdatausuarios2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuarios2[".originalPagesByType"] = $tdatausuarios2[".pagesByType"];
$tdatausuarios2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuarios2[".originalPages"] = $tdatausuarios2[".pages"];
$tdatausuarios2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuarios2[".originalDefaultPages"] = $tdatausuarios2[".defaultPages"];

//	field labels
$fieldLabelsusuarios2 = array();
$fieldToolTipsusuarios2 = array();
$pageTitlesusuarios2 = array();
$placeHoldersusuarios2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios2["Spanish"] = array();
	$fieldToolTipsusuarios2["Spanish"] = array();
	$placeHoldersusuarios2["Spanish"] = array();
	$pageTitlesusuarios2["Spanish"] = array();
	$fieldLabelsusuarios2["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsusuarios2["Spanish"]["Cedula"] = "";
	$placeHoldersusuarios2["Spanish"]["Cedula"] = "";
	$fieldLabelsusuarios2["Spanish"]["Nombre_y_Apellido"] = "Nombre y Apellido";
	$fieldToolTipsusuarios2["Spanish"]["Nombre_y_Apellido"] = "";
	$placeHoldersusuarios2["Spanish"]["Nombre_y_Apellido"] = "";
	$fieldLabelsusuarios2["Spanish"]["Celular"] = "Celular";
	$fieldToolTipsusuarios2["Spanish"]["Celular"] = "";
	$placeHoldersusuarios2["Spanish"]["Celular"] = "";
	$fieldLabelsusuarios2["Spanish"]["Pass"] = "Pass";
	$fieldToolTipsusuarios2["Spanish"]["Pass"] = "";
	$placeHoldersusuarios2["Spanish"]["Pass"] = "";
	$fieldLabelsusuarios2["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsusuarios2["Spanish"]["Empresa"] = "";
	$placeHoldersusuarios2["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsusuarios2["Spanish"]))
		$tdatausuarios2[".isUseToolTips"] = true;
}


	$tdatausuarios2[".NCSearch"] = true;



$tdatausuarios2[".shortTableName"] = "usuarios2";
$tdatausuarios2[".nSecOptions"] = 0;

$tdatausuarios2[".mainTableOwnerID"] = "";
$tdatausuarios2[".entityType"] = 1;
$tdatausuarios2[".connId"] = "mega_ya_at_localhost";


$tdatausuarios2[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios2[".showAddInPopup"] = false;

$tdatausuarios2[".showEditInPopup"] = false;

$tdatausuarios2[".showViewInPopup"] = false;

$tdatausuarios2[".listAjax"] = false;
//	temporary
//$tdatausuarios2[".listAjax"] = false;

	$tdatausuarios2[".audit"] = false;

	$tdatausuarios2[".locking"] = false;


$pages = $tdatausuarios2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios2[".edit"] = true;
	$tdatausuarios2[".afterEditAction"] = 1;
	$tdatausuarios2[".closePopupAfterEdit"] = 1;
	$tdatausuarios2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios2[".add"] = true;
$tdatausuarios2[".afterAddAction"] = 1;
$tdatausuarios2[".closePopupAfterAdd"] = 1;
$tdatausuarios2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios2[".list"] = true;
}



$tdatausuarios2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios2[".printFriendly"] = true;
}



$tdatausuarios2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios2[".isUseAjaxSuggest"] = true;



						

$tdatausuarios2[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios2[".buttonsAdded"] = false;

$tdatausuarios2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios2[".isUseTimeForSearch"] = false;


$tdatausuarios2[".badgeColor"] = "9ACD32";


$tdatausuarios2[".allSearchFields"] = array();
$tdatausuarios2[".filterFields"] = array();
$tdatausuarios2[".requiredSearchFields"] = array();

$tdatausuarios2[".googleLikeFields"] = array();
$tdatausuarios2[".googleLikeFields"][] = "Cedula";
$tdatausuarios2[".googleLikeFields"][] = "Nombre y Apellido";
$tdatausuarios2[".googleLikeFields"][] = "Celular";
$tdatausuarios2[".googleLikeFields"][] = "Pass";
$tdatausuarios2[".googleLikeFields"][] = "Empresa";



$tdatausuarios2[".tableType"] = "list";

$tdatausuarios2[".printerPageOrientation"] = 0;
$tdatausuarios2[".nPrinterPageScale"] = 100;

$tdatausuarios2[".nPrinterSplitRecords"] = 40;

$tdatausuarios2[".geocodingEnabled"] = false;










$tdatausuarios2[".pageSize"] = 20;

$tdatausuarios2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarios2[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios2[".orderindexes"] = array();


$tdatausuarios2[".sqlHead"] = "SELECT Cedula,  	`Nombre y Apellido`,  	Celular,  	Pass,  	Empresa";
$tdatausuarios2[".sqlFrom"] = "FROM usuarios";
$tdatausuarios2[".sqlWhereExpr"] = "";
$tdatausuarios2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios2[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios2[".highlightSearchResults"] = true;

$tableKeysusuarios2 = array();
$tableKeysusuarios2[] = "Cedula";
$tdatausuarios2[".Keys"] = $tableKeysusuarios2;


$tdatausuarios2[".hideMobileList"] = array();




//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios2","Cedula");
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


	$tdatausuarios2["Cedula"] = $fdata;
		$tdatausuarios2[".searchableFields"][] = "Cedula";
//	Nombre y Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre y Apellido";
	$fdata["GoodName"] = "Nombre_y_Apellido";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios2","Nombre_y_Apellido");
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


	$tdatausuarios2["Nombre y Apellido"] = $fdata;
		$tdatausuarios2[".searchableFields"][] = "Nombre y Apellido";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios2","Celular");
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


	$tdatausuarios2["Celular"] = $fdata;
		$tdatausuarios2[".searchableFields"][] = "Celular";
//	Pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pass";
	$fdata["GoodName"] = "Pass";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios2","Pass");
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


	$tdatausuarios2["Pass"] = $fdata;
		$tdatausuarios2[".searchableFields"][] = "Pass";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios2","Empresa");
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


	$tdatausuarios2["Empresa"] = $fdata;
		$tdatausuarios2[".searchableFields"][] = "Empresa";


$tables_data["usuarios2"]=&$tdatausuarios2;
$field_labels["usuarios2"] = &$fieldLabelsusuarios2;
$fieldToolTips["usuarios2"] = &$fieldToolTipsusuarios2;
$placeHolders["usuarios2"] = &$placeHoldersusuarios2;
$page_titles["usuarios2"] = &$pageTitlesusuarios2;


changeTextControlsToDate( "usuarios2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuarios2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuarios2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios2()
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
	"m_srcTableName" => "usuarios2"
));

$proto6["m_sql"] = "Cedula";
$proto6["m_srcTableName"] = "usuarios2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios2"
));

$proto8["m_sql"] = "`Nombre y Apellido`";
$proto8["m_srcTableName"] = "usuarios2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios2"
));

$proto10["m_sql"] = "Celular";
$proto10["m_srcTableName"] = "usuarios2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Pass",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios2"
));

$proto12["m_sql"] = "Pass";
$proto12["m_srcTableName"] = "usuarios2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios2"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "usuarios2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "usuarios2";
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
$proto16["m_srcTableName"] = "usuarios2";
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
$proto0["m_srcTableName"]="usuarios2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios2 = createSqlQuery_usuarios2();


	
												;

					

$tdatausuarios2[".sqlquery"] = $queryData_usuarios2;



$tdatausuarios2[".hasEvents"] = false;

?>