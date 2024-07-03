<?php
$tdatausiarios_contratista = array();
$tdatausiarios_contratista[".searchableFields"] = array();
$tdatausiarios_contratista[".ShortName"] = "usiarios_contratista";
$tdatausiarios_contratista[".OwnerID"] = "Empresa";
$tdatausiarios_contratista[".OriginalTable"] = "usuarios";


$tdatausiarios_contratista[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatausiarios_contratista[".originalPagesByType"] = $tdatausiarios_contratista[".pagesByType"];
$tdatausiarios_contratista[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatausiarios_contratista[".originalPages"] = $tdatausiarios_contratista[".pages"];
$tdatausiarios_contratista[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatausiarios_contratista[".originalDefaultPages"] = $tdatausiarios_contratista[".defaultPages"];

//	field labels
$fieldLabelsusiarios_contratista = array();
$fieldToolTipsusiarios_contratista = array();
$pageTitlesusiarios_contratista = array();
$placeHoldersusiarios_contratista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusiarios_contratista["Spanish"] = array();
	$fieldToolTipsusiarios_contratista["Spanish"] = array();
	$placeHoldersusiarios_contratista["Spanish"] = array();
	$pageTitlesusiarios_contratista["Spanish"] = array();
	$fieldLabelsusiarios_contratista["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsusiarios_contratista["Spanish"]["Cedula"] = "";
	$placeHoldersusiarios_contratista["Spanish"]["Cedula"] = "";
	$fieldLabelsusiarios_contratista["Spanish"]["Nombre_y_Apellido"] = "Nombre y Apellido";
	$fieldToolTipsusiarios_contratista["Spanish"]["Nombre_y_Apellido"] = "";
	$placeHoldersusiarios_contratista["Spanish"]["Nombre_y_Apellido"] = "";
	$fieldLabelsusiarios_contratista["Spanish"]["Celular"] = "Celular";
	$fieldToolTipsusiarios_contratista["Spanish"]["Celular"] = "";
	$placeHoldersusiarios_contratista["Spanish"]["Celular"] = "";
	$fieldLabelsusiarios_contratista["Spanish"]["Pass"] = "Pass";
	$fieldToolTipsusiarios_contratista["Spanish"]["Pass"] = "";
	$placeHoldersusiarios_contratista["Spanish"]["Pass"] = "";
	$fieldLabelsusiarios_contratista["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsusiarios_contratista["Spanish"]["Empresa"] = "";
	$placeHoldersusiarios_contratista["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipsusiarios_contratista["Spanish"]))
		$tdatausiarios_contratista[".isUseToolTips"] = true;
}


	$tdatausiarios_contratista[".NCSearch"] = true;



$tdatausiarios_contratista[".shortTableName"] = "usiarios_contratista";
$tdatausiarios_contratista[".nSecOptions"] = 1;

$tdatausiarios_contratista[".mainTableOwnerID"] = "Empresa";
$tdatausiarios_contratista[".entityType"] = 1;
$tdatausiarios_contratista[".connId"] = "mega_ya_at_localhost";


$tdatausiarios_contratista[".strOriginalTableName"] = "usuarios";

	



$tdatausiarios_contratista[".showAddInPopup"] = false;

$tdatausiarios_contratista[".showEditInPopup"] = false;

$tdatausiarios_contratista[".showViewInPopup"] = false;

$tdatausiarios_contratista[".listAjax"] = false;
//	temporary
//$tdatausiarios_contratista[".listAjax"] = false;

	$tdatausiarios_contratista[".audit"] = false;

	$tdatausiarios_contratista[".locking"] = false;


$pages = $tdatausiarios_contratista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausiarios_contratista[".edit"] = true;
	$tdatausiarios_contratista[".afterEditAction"] = 1;
	$tdatausiarios_contratista[".closePopupAfterEdit"] = 1;
	$tdatausiarios_contratista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausiarios_contratista[".add"] = true;
$tdatausiarios_contratista[".afterAddAction"] = 1;
$tdatausiarios_contratista[".closePopupAfterAdd"] = 1;
$tdatausiarios_contratista[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausiarios_contratista[".list"] = true;
}



$tdatausiarios_contratista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausiarios_contratista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausiarios_contratista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausiarios_contratista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausiarios_contratista[".printFriendly"] = true;
}



$tdatausiarios_contratista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausiarios_contratista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausiarios_contratista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausiarios_contratista[".isUseAjaxSuggest"] = true;



						

$tdatausiarios_contratista[".ajaxCodeSnippetAdded"] = false;

$tdatausiarios_contratista[".buttonsAdded"] = false;

$tdatausiarios_contratista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausiarios_contratista[".isUseTimeForSearch"] = false;


$tdatausiarios_contratista[".badgeColor"] = "9ACD32";


$tdatausiarios_contratista[".allSearchFields"] = array();
$tdatausiarios_contratista[".filterFields"] = array();
$tdatausiarios_contratista[".requiredSearchFields"] = array();

$tdatausiarios_contratista[".googleLikeFields"] = array();
$tdatausiarios_contratista[".googleLikeFields"][] = "Cedula";
$tdatausiarios_contratista[".googleLikeFields"][] = "Nombre y Apellido";
$tdatausiarios_contratista[".googleLikeFields"][] = "Celular";
$tdatausiarios_contratista[".googleLikeFields"][] = "Pass";
$tdatausiarios_contratista[".googleLikeFields"][] = "Empresa";



$tdatausiarios_contratista[".tableType"] = "list";

$tdatausiarios_contratista[".printerPageOrientation"] = 0;
$tdatausiarios_contratista[".nPrinterPageScale"] = 100;

$tdatausiarios_contratista[".nPrinterSplitRecords"] = 40;

$tdatausiarios_contratista[".geocodingEnabled"] = false;










$tdatausiarios_contratista[".pageSize"] = 20;

$tdatausiarios_contratista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausiarios_contratista[".strOrderBy"] = $tstrOrderBy;

$tdatausiarios_contratista[".orderindexes"] = array();


$tdatausiarios_contratista[".sqlHead"] = "SELECT Cedula,  	`Nombre y Apellido`,  	Celular,  	Pass,  	Empresa";
$tdatausiarios_contratista[".sqlFrom"] = "FROM usuarios";
$tdatausiarios_contratista[".sqlWhereExpr"] = "";
$tdatausiarios_contratista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausiarios_contratista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausiarios_contratista[".arrGroupsPerPage"] = $arrGPP;

$tdatausiarios_contratista[".highlightSearchResults"] = true;

$tableKeysusiarios_contratista = array();
$tableKeysusiarios_contratista[] = "Cedula";
$tdatausiarios_contratista[".Keys"] = $tableKeysusiarios_contratista;


$tdatausiarios_contratista[".hideMobileList"] = array();




//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Usiarios_Contratista","Cedula");
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


	$tdatausiarios_contratista["Cedula"] = $fdata;
		$tdatausiarios_contratista[".searchableFields"][] = "Cedula";
//	Nombre y Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre y Apellido";
	$fdata["GoodName"] = "Nombre_y_Apellido";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Usiarios_Contratista","Nombre_y_Apellido");
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


	$tdatausiarios_contratista["Nombre y Apellido"] = $fdata;
		$tdatausiarios_contratista[".searchableFields"][] = "Nombre y Apellido";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Usiarios_Contratista","Celular");
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


	$tdatausiarios_contratista["Celular"] = $fdata;
		$tdatausiarios_contratista[".searchableFields"][] = "Celular";
//	Pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pass";
	$fdata["GoodName"] = "Pass";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Usiarios_Contratista","Pass");
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


	$tdatausiarios_contratista["Pass"] = $fdata;
		$tdatausiarios_contratista[".searchableFields"][] = "Pass";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Usiarios_Contratista","Empresa");
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


	$tdatausiarios_contratista["Empresa"] = $fdata;
		$tdatausiarios_contratista[".searchableFields"][] = "Empresa";


$tables_data["Usiarios_Contratista"]=&$tdatausiarios_contratista;
$field_labels["Usiarios_Contratista"] = &$fieldLabelsusiarios_contratista;
$fieldToolTips["Usiarios_Contratista"] = &$fieldToolTipsusiarios_contratista;
$placeHolders["Usiarios_Contratista"] = &$placeHoldersusiarios_contratista;
$page_titles["Usiarios_Contratista"] = &$pageTitlesusiarios_contratista;


changeTextControlsToDate( "Usiarios_Contratista" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Usiarios_Contratista"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Usiarios_Contratista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usiarios_contratista()
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
	"m_srcTableName" => "Usiarios_Contratista"
));

$proto6["m_sql"] = "Cedula";
$proto6["m_srcTableName"] = "Usiarios_Contratista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Usiarios_Contratista"
));

$proto8["m_sql"] = "`Nombre y Apellido`";
$proto8["m_srcTableName"] = "Usiarios_Contratista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Usiarios_Contratista"
));

$proto10["m_sql"] = "Celular";
$proto10["m_srcTableName"] = "Usiarios_Contratista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Pass",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Usiarios_Contratista"
));

$proto12["m_sql"] = "Pass";
$proto12["m_srcTableName"] = "Usiarios_Contratista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Usiarios_Contratista"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "Usiarios_Contratista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "Usiarios_Contratista";
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
$proto16["m_srcTableName"] = "Usiarios_Contratista";
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
$proto0["m_srcTableName"]="Usiarios_Contratista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usiarios_contratista = createSqlQuery_usiarios_contratista();


	
												;

					

$tdatausiarios_contratista[".sqlquery"] = $queryData_usiarios_contratista;



$tdatausiarios_contratista[".hasEvents"] = false;

?>