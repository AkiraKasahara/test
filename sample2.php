<?php
?>
<html>
	<head>
		<meta meta charaset="UTF-8">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
		<script type="text/javascript" src="http://ajax.ggleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
		<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
	</head>
	<body>
		<input type="text" id="datepicker">
		<script type="text/javascript">
			$(function(){
				$("#datepicker").datepicker();
			});
	</script>
	</body>