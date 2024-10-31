<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function Return_Book_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function Return_Book_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function Return_Book_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function Return_Book_after_delete($selectedID, $memberInfo, &$args){

	}

	function Return_Book_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function Return_Book_csv($query, $memberInfo, &$args){

		return $query;
	}
	function Return_Book_batch_actions(&$args){

		return array();
	}
