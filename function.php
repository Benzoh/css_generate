<!-- function.php -->

<?php

	function home_url(){
		return $_SERVER['SERVER_NAME'];
	}

	function code_escape($html){
		$code = htmlspecialchars( $html, ENT_QUOTES );
		return $code;
	}