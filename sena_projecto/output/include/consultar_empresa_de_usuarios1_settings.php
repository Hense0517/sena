<?php
$tdataconsultar_empresa_de_usuarios1 = array();
$tdataconsultar_empresa_de_usuarios1[".searchableFields"] = array();
$tdataconsultar_empresa_de_usuarios1[".ShortName"] = "consultar_empresa_de_usuarios1";
$tdataconsultar_empresa_de_usuarios1[".OwnerID"] = "Cedula";
$tdataconsultar_empresa_de_usuarios1[".OriginalTable"] = "empresas";


$tdataconsultar_empresa_de_usuarios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsultar_empresa_de_usuarios1[".originalPagesByType"] = $tdataconsultar_empresa_de_usuarios1[".pagesByType"];
$tdataconsultar_empresa_de_usuarios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsultar_empresa_de_usuarios1[".originalPages"] = $tdataconsultar_empresa_de_usuarios1[".pages"];
$tdataconsultar_empresa_de_usuarios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsultar_empresa_de_usuarios1[".originalDefaultPages"] = $tdataconsultar_empresa_de_usuarios1[".defaultPages"];

//	field labels
$fieldLabelsconsultar_empresa_de_usuarios1 = array();
$fieldToolTipsconsultar_empresa_de_usuarios1 = array();
$pageTitlesconsultar_empresa_de_usuarios1 = array();
$placeHoldersconsultar_empresa_de_usuarios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsultar_empresa_de_usuarios1["Spanish"] = array();
	$fieldToolTipsconsultar_empresa_de_usuarios1["Spanish"] = array();
	$placeHoldersconsultar_empresa_de_usuarios1["Spanish"] = array();
	$pageTitlesconsultar_empresa_de_usuarios1["Spanish"] = array();
	$fieldLabelsconsultar_empresa_de_usuarios1["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsconsultar_empresa_de_usuarios1["Spanish"]["Cedula"] = "";
	$placeHoldersconsultar_empresa_de_usuarios1["Spanish"]["Cedula"] = "";
	$fieldLabelsconsultar_empresa_de_usuarios1["Spanish"]["Empresa"] = "Empresa";
	$fieldToolTipsconsultar_empresa_de_usuarios1["Spanish"]["Empresa"] = "";
	$placeHoldersconsultar_empresa_de_usuarios1["Spanish"]["Empresa"] = "";
	$fieldLabelsconsultar_empresa_de_usuarios1["Spanish"]["Empresa1"] = "Empresa1";
	$fieldToolTipsconsultar_empresa_de_usuarios1["Spanish"]["Empresa1"] = "";
	$placeHoldersconsultar_empresa_de_usuarios1["Spanish"]["Empresa1"] = "";
	if (count($fieldToolTipsconsultar_empresa_de_usuarios1["Spanish"]))
		$tdataconsultar_empresa_de_usuarios1[".isUseToolTips"] = true;
}


	$tdataconsultar_empresa_de_usuarios1[".NCSearch"] = true;



$tdataconsultar_empresa_de_usuarios1[".shortTableName"] = "consultar_empresa_de_usuarios1";
$tdataconsultar_empresa_de_usuarios1[".nSecOptions"] = 1;

$tdataconsultar_empresa_de_usuarios1[".mainTableOwnerID"] = "Cedula";
$tdataconsultar_empresa_de_usuarios1[".entityType"] = 1;
$tdataconsultar_empresa_de_usuarios1[".connId"] = "mega_ya_at_localhost";


$tdataconsultar_empresa_de_usuarios1[".strOriginalTableName"] = "empresas";

	



$tdataconsultar_empresa_de_usuarios1[".showAddInPopup"] = false;

$tdataconsultar_empresa_de_usuarios1[".showEditInPopup"] = false;

$tdataconsultar_empresa_de_usuarios1[".showViewInPopup"] = false;

$tdataconsultar_empresa_de_usuarios1[".listAjax"] = false;
//	temporary
//$tdataconsultar_empresa_de_usuarios1[".listAjax"] = false;

	$tdataconsultar_empresa_de_usuarios1[".audit"] = true;

	$tdataconsultar_empresa_de_usuarios1[".locking"] = false;


$pages = $tdataconsultar_empresa_de_usuarios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsultar_empresa_de_usuarios1[".edit"] = true;
	$tdataconsultar_empresa_de_usuarios1[".afterEditAction"] = 1;
	$tdataconsultar_empresa_de_usuarios1[".closePopupAfterEdit"] = 1;
	$tdataconsultar_empresa_de_usuarios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsultar_empresa_de_usuarios1[".add"] = true;
$tdataconsultar_empresa_de_usuarios1[".afterAddAction"] = 1;
$tdataconsultar_empresa_de_usuarios1[".closePopupAfterAdd"] = 1;
$tdataconsultar_empresa_de_usuarios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsultar_empresa_de_usuarios1[".list"] = true;
}



$tdataconsultar_empresa_de_usuarios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsultar_empresa_de_usuarios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsultar_empresa_de_usuarios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsultar_empresa_de_usuarios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsultar_empresa_de_usuarios1[".printFriendly"] = true;
}



$tdataconsultar_empresa_de_usuarios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsultar_empresa_de_usuarios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsultar_empresa_de_usuarios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsultar_empresa_de_usuarios1[".isUseAjaxSuggest"] = true;



						

$tdataconsultar_empresa_de_usuarios1[".ajaxCodeSnippetAdded"] = false;

$tdataconsultar_empresa_de_usuarios1[".buttonsAdded"] = false;

$tdataconsultar_empresa_de_usuarios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultar_empresa_de_usuarios1[".isUseTimeForSearch"] = false;


$tdataconsultar_empresa_de_usuarios1[".badgeColor"] = "D2691E";


$tdataconsultar_empresa_de_usuarios1[".allSearchFields"] = array();
$tdataconsultar_empresa_de_usuarios1[".filterFields"] = array();
$tdataconsultar_empresa_de_usuarios1[".requiredSearchFields"] = array();

$tdataconsultar_empresa_de_usuarios1[".googleLikeFields"] = array();
$tdataconsultar_empresa_de_usuarios1[".googleLikeFields"][] = "Cedula";
$tdataconsultar_empresa_de_usuarios1[".googleLikeFields"][] = "Empresa";
$tdataconsultar_empresa_de_usuarios1[".googleLikeFields"][] = "Empresa1";



$tdataconsultar_empresa_de_usuarios1[".tableType"] = "list";

$tdataconsultar_empresa_de_usuarios1[".printerPageOrientation"] = 0;
$tdataconsultar_empresa_de_usuarios1[".nPrinterPageScale"] = 100;

$tdataconsultar_empresa_de_usuarios1[".nPrinterSplitRecords"] = 40;

$tdataconsultar_empresa_de_usuarios1[".geocodingEnabled"] = false;




$tdataconsultar_empresa_de_usuarios1[".isDisplayLoading"] = true;






$tdataconsultar_empresa_de_usuarios1[".pageSize"] = 20;

$tdataconsultar_empresa_de_usuarios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsultar_empresa_de_usuarios1[".strOrderBy"] = $tstrOrderBy;

$tdataconsultar_empresa_de_usuarios1[".orderindexes"] = array();


$tdataconsultar_empresa_de_usuarios1[".sqlHead"] = "SELECT usuarios.Cedula,  usuarios.Empresa,  empresas.Empresa AS Empresa1";
$tdataconsultar_empresa_de_usuarios1[".sqlFrom"] = "FROM usuarios  INNER JOIN empresas ON usuarios.Empresa = empresas.idempresa";
$tdataconsultar_empresa_de_usuarios1[".sqlWhereExpr"] = "";
$tdataconsultar_empresa_de_usuarios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultar_empresa_de_usuarios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultar_empresa_de_usuarios1[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultar_empresa_de_usuarios1[".highlightSearchResults"] = true;

$tableKeysconsultar_empresa_de_usuarios1 = array();
$tdataconsultar_empresa_de_usuarios1[".Keys"] = $tableKeysconsultar_empresa_de_usuarios1;


$tdataconsultar_empresa_de_usuarios1[".hideMobileList"] = array();




//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Consultar_empresa_de_Usuarios1","Cedula");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "Cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuarios.Cedula";

	
	
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


	$tdataconsultar_empresa_de_usuarios1["Cedula"] = $fdata;
		$tdataconsultar_empresa_de_usuarios1[".searchableFields"][] = "Cedula";
//	Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Empresa";
	$fdata["GoodName"] = "Empresa";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("Consultar_empresa_de_Usuarios1","Empresa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuarios.Empresa";

	
	
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


	$tdataconsultar_empresa_de_usuarios1["Empresa"] = $fdata;
		$tdataconsultar_empresa_de_usuarios1[".searchableFields"][] = "Empresa";
//	Empresa1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Empresa1";
	$fdata["GoodName"] = "Empresa1";
	$fdata["ownerTable"] = "empresas";
	$fdata["Label"] = GetFieldLabel("Consultar_empresa_de_Usuarios1","Empresa1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "empresas.Empresa";

	
	
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


	$tdataconsultar_empresa_de_usuarios1["Empresa1"] = $fdata;
		$tdataconsultar_empresa_de_usuarios1[".searchableFields"][] = "Empresa1";


$tables_data["Consultar empresa de Usuarios1"]=&$tdataconsultar_empresa_de_usuarios1;
$field_labels["Consultar_empresa_de_Usuarios1"] = &$fieldLabelsconsultar_empresa_de_usuarios1;
$fieldToolTips["Consultar_empresa_de_Usuarios1"] = &$fieldToolTipsconsultar_empresa_de_usuarios1;
$placeHolders["Consultar_empresa_de_Usuarios1"] = &$placeHoldersconsultar_empresa_de_usuarios1;
$page_titles["Consultar_empresa_de_Usuarios1"] = &$pageTitlesconsultar_empresa_de_usuarios1;


changeTextControlsToDate( "Consultar empresa de Usuarios1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consultar empresa de Usuarios1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consultar empresa de Usuarios1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consultar_empresa_de_usuarios1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usuarios.Cedula,  usuarios.Empresa,  empresas.Empresa AS Empresa1";
$proto0["m_strFrom"] = "FROM usuarios  INNER JOIN empresas ON usuarios.Empresa = empresas.idempresa";
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
	"m_srcTableName" => "Consultar empresa de Usuarios1"
));

$proto6["m_sql"] = "usuarios.Cedula";
$proto6["m_srcTableName"] = "Consultar empresa de Usuarios1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "Consultar empresa de Usuarios1"
));

$proto8["m_sql"] = "usuarios.Empresa";
$proto8["m_srcTableName"] = "Consultar empresa de Usuarios1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Empresa",
	"m_strTable" => "empresas",
	"m_srcTableName" => "Consultar empresa de Usuarios1"
));

$proto10["m_sql"] = "empresas.Empresa";
$proto10["m_srcTableName"] = "Consultar empresa de Usuarios1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Empresa1";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "usuarios";
$proto13["m_srcTableName"] = "Consultar empresa de Usuarios1";
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
$proto12["m_srcTableName"] = "Consultar empresa de Usuarios1";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "empresas";
$proto17["m_srcTableName"] = "Consultar empresa de Usuarios1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idempresa";
$proto17["m_columns"][] = "Empresa";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN empresas ON usuarios.Empresa = empresas.idempresa";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Consultar empresa de Usuarios1";
$proto18=array();
$proto18["m_sql"] = "`empresas`.`idempresa` = `usuarios`.`Empresa`";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "idempresa",
	"m_strTable" => "empresas",
	"m_srcTableName" => "Consultar empresa de Usuarios1"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= `usuarios`.`Empresa`";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Consultar empresa de Usuarios1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultar_empresa_de_usuarios1 = createSqlQuery_consultar_empresa_de_usuarios1();


	
												;

			

$tdataconsultar_empresa_de_usuarios1[".sqlquery"] = $queryData_consultar_empresa_de_usuarios1;



$tdataconsultar_empresa_de_usuarios1[".hasEvents"] = false;

?>