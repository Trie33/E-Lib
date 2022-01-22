<?php
	$file = 'pdf/bintang.pdf' ;
		header('Content-Type: application/pdf');
		header('Content-Disposition: inline; filename="'. $file . '"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Rangers: bytes');
		@readfile($file);
?>