<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) ||
	strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE {
		echo 'You are using Internet Explorer.<br />';
	}
?>