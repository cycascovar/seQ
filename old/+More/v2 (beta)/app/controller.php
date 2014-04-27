<?php

	function encode($str){	
		$result= base64_encode($str);
		return $result; 
	}
	
	function decode($str){	
		$result= base64_decode($str);
		return $result; 
	}


?>