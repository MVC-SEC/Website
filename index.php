<!DOCTYPE html>
<?php require_once('init.php'); ?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--Pure-CSS mobile view-->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"> <!--Pure-CSS main code-->
	<link rel="stylesheet" type="text/css" href="stylesheets/main.css"> <!-- MAIN STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="stylesheets/mainHeader.css"> <!-- MAINHEADER STYLESHEET: fenrirAB -->
	<script type="text/javascript" src="scripts/jquery-2.1.1.min.js"></script>
	<script language="javascript" type="text/javascript" src="scripts/headerScript.js"></script> <!--HEADERSCRIPT: fenrirAB-->
	<?php getCSS($pages, $pageNum); ?> <!--Body Stylesheet-->
	

	<title><?php getTitle($pageNum); ?></title>
  		   <?php getMeta(); ?>
</head>
<body style="height: 100%; 
	background-image: url("");
	background-repeat: repeat-y;
	background-size: auto%;">
<?php include ("display\body\mainHeader.html"); ?>
<?php getBody($pages, $pageNum); ?>
</body>
</html>
<!--http://cdn.wonderfulengineering.com/wp-content/uploads/2014/04/code-wallpaper-17.jpg-->