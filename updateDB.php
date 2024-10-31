<?php
	// check this file's MD5 to make sure it wasn't called before
	$prevMD5=@implode('', @file(dirname(__FILE__).'/setup.md5'));
	$thisMD5=md5(@implode('', @file("./updateDB.php")));
	if($thisMD5==$prevMD5){
		$setupAlreadyRun=true;
	}else{
		// set up tables
		if(!isset($silent)){
			$silent=true;
		}

		// set up tables
		setupTable('books', "create table if not exists `books` (   `id` INT unsigned not null auto_increment , primary key (`id`), `ISBN_NO` VARCHAR(100) , `Book_Title` VARCHAR(200) , `Book_Type` INT unsigned , `Author_Name` VARCHAR(100) , `Quantity` INT , `Purchase_Date` DATE , `Edition` VARCHAR(40) , `Price` DECIMAL(10,2) default '0.00' , `Pages` INT , `Publisher` VARCHAR(140) ) CHARSET utf8", $silent);
		setupIndexes('books', array('Book_Type'));
		setupTable('NewsPapers', "create table if not exists `NewsPapers` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Language` VARCHAR(40) , `Name` VARCHAR(100) , `Date_Of_Receipt` DATE , `Date_Published` DATE , `Pages` INT , `Price` DECIMAL(10,2) default '0.00' , `Type` VARCHAR(40) , `Publisher` VARCHAR(100) ) CHARSET utf8", $silent);
		setupTable('Magazines', "create table if not exists `Magazines` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Type` VARCHAR(40) , `Name` VARCHAR(100) , `Date_Of_Receipt` DATE , `Date_Published` DATE , `Pages` INT , `Price` DECIMAL(10,2) default '0.00' , `Publisher` VARCHAR(140) ) CHARSET utf8", $silent);
		setupTable('Users', "create table if not exists `Users` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Membership_Number` VARCHAR(40) , `Name` VARCHAR(140) , `Contact` VARCHAR(40) , `ID_Number` INT ) CHARSET utf8", $silent);
		setupTable('Book_Issue', "create table if not exists `Book_Issue` (   `id` INT unsigned not null auto_increment , primary key (`id`), `issue_id` VARCHAR(40) , `Member` INT unsigned , `Number` INT unsigned , `Book_Number` INT unsigned , `Book_Title` INT unsigned , `Issue_Date` DATE , `Return_Date` DATE , `Status` VARCHAR(40) ) CHARSET utf8", $silent);
		setupIndexes('Book_Issue', array('Member','Book_Number'));
		setupTable('Return_Book', "create table if not exists `Return_Book` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Book_Number` INT unsigned , `Book_Title` INT unsigned , `Issue_Date` INT unsigned default '1' , `Due_Date` INT unsigned default '1' , `Return_Date` DATE , `Member` INT unsigned , `Number` INT unsigned , `Fine` DECIMAL(10,2) default '0.0' , `Status` VARCHAR(40) ) CHARSET utf8", $silent);
		setupIndexes('Return_Book', array('Book_Number','Member'));
		setupTable('Types', "create table if not exists `Types` (   `id` INT unsigned not null auto_increment , primary key (`id`), `Name` VARCHAR(40) ) CHARSET utf8", $silent);


		// save MD5
		if($fp=@fopen(dirname(__FILE__).'/setup.md5', 'w')){
			fwrite($fp, $thisMD5);
			fclose($fp);
		}
	}


	function setupIndexes($tableName, $arrFields){
		if(!is_array($arrFields)){
			return false;
		}

		foreach($arrFields as $fieldName){
			if(!$res=@db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")){
				continue;
			}
			if(!$row=@db_fetch_assoc($res)){
				continue;
			}
			if($row['Key']==''){
				@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
			}
		}
	}


	function setupTable($tableName, $createSQL='', $silent=true, $arrAlter=''){
		global $Translation;
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)){
			$matches=array();
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/", $arrAlter[0], $matches)){
				$oldTableName=$matches[1];
			}
		}

		if($res=@db_query("select count(1) from `$tableName`")){ // table already exists
			if($row = @db_fetch_array($res)){
				echo str_replace("<TableName>", $tableName, str_replace("<NumRecords>", $row[0],$Translation["table exists"]));
				if(is_array($arrAlter)){
					echo '<br>';
					foreach($arrAlter as $alter){
						if($alter!=''){
							echo "$alter ... ";
							if(!@db_query($alter)){
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							}else{
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				}else{
					echo $Translation["table uptodate"];
				}
			}else{
				echo str_replace("<TableName>", $tableName, $Translation["couldnt count"]);
			}
		}else{ // given tableName doesn't exist

			if($oldTableName!=''){ // if we have a table rename query
				if($ro=@db_query("select count(1) from `$oldTableName`")){ // if old table exists, rename it.
					$renameQuery=array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)){
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					}else{
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				}else{ // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			}else{ // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)){
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';
				}else{
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}
		}

		echo "</div>";

		$out=ob_get_contents();
		ob_end_clean();
		if(!$silent){
			echo $out;
		}
	}
?>