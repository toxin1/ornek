<?php
	if ( isset($page) ) {
		if ( file_exists("pages/".$page.".php") ) {
			include"pages/".$page.".php";
		}else{
			include"pages/404.php";
		}
	}else{
		include"pages/anasayfa.php";
	}
?>