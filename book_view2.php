<?php
$page='books'; 
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/books.php");
	include("$currDir/books_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('books');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "books";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`books`.`id`" => "id",
		"`books`.`ISBN_NO`" => "ISBN_NO",
		"`books`.`Book_Title`" => "Book_Title",
		"IF(    CHAR_LENGTH(`Types1`.`Name`), CONCAT_WS('',   `Types1`.`Name`), '') /* Book Type */" => "Book_Type",
		"`books`.`Author_Name`" => "Author_Name",
		"`books`.`Quantity`" => "Quantity",
		"if(`books`.`Purchase_Date`,date_format(`books`.`Purchase_Date`,'%m/%d/%Y'),'')" => "Purchase_Date",
		"`books`.`Edition`" => "Edition",
		"`books`.`Price`" => "Price",
		"`books`.`Pages`" => "Pages",
		"`books`.`Publisher`" => "Publisher"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`books`.`id`',
		2 => 2,
		3 => 3,
		4 => '`Types1`.`Name`',
		5 => 5,
		6 => '`books`.`Quantity`',
		7 => '`books`.`Purchase_Date`',
		8 => 8,
		9 => '`books`.`Price`',
		10 => '`books`.`Pages`',
		11 => 11
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`books`.`id`" => "id",
		"`books`.`ISBN_NO`" => "ISBN_NO",
		"`books`.`Book_Title`" => "Book_Title",
		"IF(    CHAR_LENGTH(`Types1`.`Name`), CONCAT_WS('',   `Types1`.`Name`), '') /* Book Type */" => "Book_Type",
		"`books`.`Author_Name`" => "Author_Name",
		"`books`.`Quantity`" => "Quantity",
		"if(`books`.`Purchase_Date`,date_format(`books`.`Purchase_Date`,'%m/%d/%Y'),'')" => "Purchase_Date",
		"`books`.`Edition`" => "Edition",
		"`books`.`Price`" => "Price",
		"`books`.`Pages`" => "Pages",
		"`books`.`Publisher`" => "Publisher"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`books`.`id`" => "ID",
		"`books`.`ISBN_NO`" => "ISBN NO",
		"`books`.`Book_Title`" => "Book Title",
		"IF(    CHAR_LENGTH(`Types1`.`Name`), CONCAT_WS('',   `Types1`.`Name`), '') /* Book Type */" => "Book Type",
		"`books`.`Author_Name`" => "Author Name",
		"`books`.`Quantity`" => "Quantity",
		"`books`.`Purchase_Date`" => "Purchase Date",
		"`books`.`Edition`" => "Edition",
		"`books`.`Price`" => "Price",
		"`books`.`Pages`" => "Pages",
		"`books`.`Publisher`" => "Publisher"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`books`.`id`" => "id",
		"`books`.`ISBN_NO`" => "ISBN_NO",
		"`books`.`Book_Title`" => "Book_Title",
		"IF(    CHAR_LENGTH(`Types1`.`Name`), CONCAT_WS('',   `Types1`.`Name`), '') /* Book Type */" => "Book_Type",
		"`books`.`Author_Name`" => "Author_Name",
		"`books`.`Quantity`" => "Quantity",
		"if(`books`.`Purchase_Date`,date_format(`books`.`Purchase_Date`,'%m/%d/%Y'),'')" => "Purchase_Date",
		"`books`.`Edition`" => "Edition",
		"`books`.`Price`" => "Price",
		"`books`.`Pages`" => "Pages",
		"`books`.`Publisher`" => "Publisher"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array(  'Book_Type' => 'Book Type');

	$x->QueryFrom = "`books` LEFT JOIN `Types` as Types1 ON `Types1`.`id`=`books`.`Book_Type` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = true;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 1;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "books_view.php";
	$x->RedirectAfterInsert = "books_view.php?SelectedID=#ID#";
	$x->TableTitle = "Books";
	$x->TableIcon = "resources/table_icons/books.png";
	$x->PrimaryKey = "`books`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 80, 150, 150);
	$x->ColCaption = array("ISBN NO", "Book Title", "Book Type", "Author Name", "Quantity", "Purchase Date", "Edition", "Price", "Pages", "Publisher");
	$x->ColFieldName = array('ISBN_NO', 'Book_Title', 'Book_Type', 'Author_Name', 'Quantity', 'Purchase_Date', 'Edition', 'Price', 'Pages', 'Publisher');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11);

	// template paths below are based on the app main directory
	$x->Template = 'templates/books_templateTV.html';
	$x->SelectedTemplate = 'templates/books_templateTVS.html';
	$x->TemplateDV = 'templates/books_templateDV.html';
	$x->TemplateDVP = 'templates/books_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `books`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='books' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `books`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='books' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`books`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
    // Hook: books_init
    $render = TRUE;
    if (function_exists('books_init')) {
        $args = array();
        $render = books_init($x, getMemberInfo(), $args);
    }

    // Render the application if allowed by books_init
    if ($render) {
        $x->Render();
    }

	echo $x->HTML;
	// hook: books_footer
	$footerCode='';
	if(function_exists('books_footer')){
		$args=array();
		$footerCode=books_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>