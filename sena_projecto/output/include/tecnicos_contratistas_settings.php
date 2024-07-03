<?php
$tdatatecnicos_contratistas = array();
$tdatatecnicos_contratistas[".searchableFields"] = array();
$tdatatecnicos_contratistas[".ShortName"] = "tecnicos_contratistas";
$tdatatecnicos_contratistas[".OwnerID"] = "Empresa";
$tdatatecnicos_contratistas[".OriginalTable"] = "usuarios";


$tdatatecnicos_contratistas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatecnicos_contratistas[".originalPagesByType"] = $tdatatecnicos_contratistas[".pagesByType"];
$tdatatecnicos_contratistas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatecnicos_contratistas[".originalPages"] = $tdatatecnicos_contratistas[".pages"];
$tdatatecnicos_contratistas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatecnicos_contratistas[".originalDefaultPages"] = $tdatatecnicos_contratistas[".defaultPages"];

//	field labels
$fieldLabelstecnicos_contratistas = array();
$fieldToolTipstecnicos_contratistas = array();
$pageTitlestecnicos_contratistas = array();
$placeHolderstecnicos_contratistas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstecnicos_contratistas["Spanish"] = array();
	$fieldToolTipstecnicos_contratistas["Spanish"] = array();
	$placeHolderstecnicos_contratistas["Spanish"] = array();
	$pageTitlestecnicos_contratistas["Spanish"] = array();
	$fieldLabelstecnicos_contratistas["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipstecnicos_contratistas["Spanish"]["Cedula"] = "";
	$placeHolderstecnicos_contratistas["Spanish"]["Cedula"] = "";
	$fieldLabelstecnicos_contratistas["Spanish"]["Nombre_y_Apellido"] = "Nombre y Apellido";
	$fieldToolTipstecnicos_contratistas["Spanish"]["Nombre_y_Apellido"] = "";
	$placeHolderstecnicos_contratistas["Spanish"]["Nombre_y_Apellido"] = "";
	$fieldLabelstecnicos_contratistas["Spanish"]["Celular"] = "Celular";
	$fieldToolTipstecnicos_contratistas["Spanish"]["Celular"] = "";
	$placeHolderstecnicos_contratistas["Spanish"]["Celular"] = "";
	$fieldLabelstecnicos_contratistas["Spanish"]["Pass"] = "Pass";
	$fieldToolTipstecnicos_contratistas["Spanish"]["Pass"] = "";
	$placeHolderstecnicos_contratistas["Spanish"]["Pass"] = "";
	$fieldLabelstecnicos_contratistas["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipstecnicos_contratistas["Spanish"]["Empresa"] = "";
	$placeHolderstecnicos_contratistas["Spanish"]["Empresa"] = "";
	if (count($fieldToolTipstecnicos_contratistas["Spanish"]))
		$tdatatecnicos_contratistas[".isUseToolTips"] = true;
}


	$tdatatecnicos_contratistas[".NCSearch"] = true;



$tdatatecnicos_contratistas[".shortTableName"] = "tecnicos_contratistas";
$tdatatecnicos_contratistas[".nSecOptions"] = 1;

$tdatatecnicos_contratistas[".mainTableOwnerID"] = "Empresa";
$tdatatecnicos_contratistas[".entityType"] = 1;
$tdatatecnicos_contratistas[".connId"] = "mega_ya_at_localhost";


$tdatatecnicos_contratistas[".strOriginalTableName"] = "usuarios";

	



$tdatatecnicos_contratistas[".showAddInPopup"] = false;

$tdatatecnicos_contratistas[".showEditInPopup"] = false;

$tdatatecnicos_contratistas[".showViewInPopup"] = false;

$tdatatecnicos_contratistas[".listAjax"] = false;
//	temporary
//$tdatatecnicos_contratistas[".listAjax"] = false;

	$tdatatecnicos_contratistas[".audit"] = false;

	$tdatatecnicos_contratistas[".locking"] = false;


$pages = $tdatatecnicos_contratistas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatecnicos_contratistas[".edit"] = true;
	$tdatatecnicos_contratistas[".afterEditAction"] = 1;
	$tdatatecnicos_contratistas[".closePopupAfterEdit"] = 1;
	$tdatatecnicos_contratistas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatecnicos_contratistas[".add"] = true;
$tdatatecnicos_contratistas[".afterAddAction"] = 1;
$tdatatecnicos_contratistas[".closePopupAfterAdd"] = 1;
$tdatatecnicos_contratistas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatecnicos_contratistas[".list"] = true;
}



$tdatatecnicos_contratistas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatecnicos_contratistas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatecnicos_contratistas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatecnicos_contratistas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatecnicos_contratistas[".printFriendly"] = true;
}



$tdatatecnicos_contratistas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatecnicos_contratistas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatecnicos_contratistas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatecnicos_contratistas[".isUseAjaxSuggest"] = true;



						

$tdatatecnicos_contratistas[".ajaxCodeSnippetAdded"] = false;

$tdatatecnicos_contratistas[".buttonsAdded"] = false;

$tdatatecnicos_contratistas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatecnicos_contratistas[".isUseTimeForSearch"] = false;


$tdatatecnicos_contratistas[".badgeColor"] = "2F4F4F";


$tdatatecnicos_contratistas[".allSearchFields"] = array();
$tdatatecnicos_contratistas[".filterFields"] = array();
$tdatatecnicos_contratistas[".requiredSearchFields"] = array();

$tdatatecnicos_contratistas[".googleLikeFields"] = array();
$tdatatecnicos_contratistas[".googleLikeFields"][] = "Cedula";
$tdatatecnicos_contratistas[".googleLikeFields"][] = "Nombre y Apellido";
$tdatatecnicos_contratistas[".googleLikeFields"][] = "Celular";
$tdatatecnicos_contratistas[".googleLikeFields"][] = "Pass";
$tdatatecnicos_contratistas[".googleLikeFields"][] = "Empresa";



$tdatatecnicos_contratistas[".tableType"] = "list";

$tdatatecnicos_contratistas[".printerPageOrientation"] = 0;
$tdatatecnicos_contratistas[".nPrinterPageScale"] = 100;

$tdatatecnicos_contratistas[".nPrinterSplitRecords"] = 40;

$tdatatecnicos_contratistas[".geocodingEnabled"] = false;










$tdatatecnicos_contratistas[".pageSize"] = 20;

$tdatatecnicos_contratistas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Nombre y Apellido`";
$tdatatecnicos_contratistas[".strOrderBy"] = $tstrOrderBy;

$tdatatecnicos_contratistas[".orderindexes"] = array();
	$tdatatecnicos_contratistas[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`Nombre y Apellido`");



$tdatatecnicos_contratistas[".sqlHead"] = "SELECT Cedula,  `Nombre y Apellido`,  Celular,  Pass,  Empresa";
$tdatatecnicos_contratistas[".sqlFrom"] = "FROM usuarios";
$tdatatecnicos_contratistas[".sqlWhereExpr"] = "";
$tdatatecnicos_contratistas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatecnicos_contratistas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatecnicos_contratistas[".arrGroupsPerPage"] = $arrGPP;

$tdatatecnicos_contratistas[".highlightSearchResults"] = true;

$tableKeystecnicos_contratistas = array();
$tableKeystecnicos_contratistas[] = "Cedula";
$tdatatecnicos_contratistas[".Keys"] = $tableKeystecnicos_contratistas;


$tdatatecnicos_contratistas[".hideMobileList"] = array();




//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Tecnicos_Contratistas","Cedula");
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


	$tdatatecnicos_contratistas["Cedula"] = $fdata;
		$tdatatecnicos_contratistas[".searchableFields"][] = "Cedula";
//	Nombre y Apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre y Apellido";
	$fdata["GoodName"] = "Nombre_y_Apellido";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Tecnicos_Contratistas","Nombre_y_Apellido");
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


	$tdatatecnicos_contratistas["Nombre y Apellido"] = $fdata;
		$tdatatecnicos_contratistas[".searchableFields"][] = "Nombre y Apellido";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Tecnicos_Contratistas","Celular");
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


	$tdatatecnicos_contratistas["Celular"] = $fdata;
		$tdatatecnicos_contratistas[".searchableFields"][] = "Celular";
//	Pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pass";
	$fdata["GoodName"] = "Pass";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Tecnicos_Contratistas","Pass");
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


	$tdatatecnicos_contratistas["Pass"] = $fdata;
		$tdatatecnicos_contratistas[".searchableFields"][] = "Pass";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Tecnicos_Contratistas","Empresa");
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


	$tdatatecnicos_contratistas["Empresa"] = $fdata;
		$tdatatecnicos_contratistas[".searchableFields"][] = "Empresa";


$tables_data["Tecnicos_Contratistas"]=&$tdatatecnicos_contratistas;
$field_labels["Tecnicos_Contratistas"] = &$fieldLabelstecnicos_contratistas;
$fieldToolTips["Tecnicos_Contratistas"] = &$fieldToolTipstecnicos_contratistas;
$placeHolders["Tecnicos_Contratistas"] = &$placeHolderstecnicos_contratistas;
$page_titles["Tecnicos_Contratistas"] = &$pageTitlestecnicos_contratistas;


changeTextControlsToDate( "Tecnicos_Contratistas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Tecnicos_Contratistas"] = array();
//	Tickets_Contratistas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Tickets_Contratistas";
		$detailsParam["dOriginalTable"] = "tickets";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tickets_contratistas";
	$detailsParam["dCaptionTable"] = GetTableCaption("Tickets_Contratistas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Tecnicos_Contratistas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Tecnicos_Contratistas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Tecnicos_Contratistas"][$dIndex]["masterKeys"][]="Cedula";

				$detailsTablesData["Tecnicos_Contratistas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Tecnicos_Contratistas"][$dIndex]["detailKeys"][]="Tecnico";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Tecnicos_Contratistas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tecnicos_contratistas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Cedula,  `Nombre y Apellido`,  Celular,  Pass,  Empresa";
$proto0["m_strFrom"] = "FROM usuarios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Nombre y Apellido`";
	
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
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto6["m_sql"] = "Cedula";
$proto6["m_srcTableName"] = "Tecnicos_Contratistas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto8["m_sql"] = "`Nombre y Apellido`";
$proto8["m_srcTableName"] = "Tecnicos_Contratistas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto10["m_sql"] = "Celular";
$proto10["m_srcTableName"] = "Tecnicos_Contratistas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Pass",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto12["m_sql"] = "Pass";
$proto12["m_srcTableName"] = "Tecnicos_Contratistas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto14["m_sql"] = "Empresa";
$proto14["m_srcTableName"] = "Tecnicos_Contratistas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "usuarios";
$proto17["m_srcTableName"] = "Tecnicos_Contratistas";
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
$proto16["m_srcTableName"] = "Tecnicos_Contratistas";
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
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "Nombre y Apellido",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Tecnicos_Contratistas"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Tecnicos_Contratistas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tecnicos_contratistas = createSqlQuery_tecnicos_contratistas();


	
												;

					

$tdatatecnicos_contratistas[".sqlquery"] = $queryData_tecnicos_contratistas;



$tdatatecnicos_contratistas[".hasEvents"] = false;

?>