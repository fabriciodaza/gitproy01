<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CSV Generator01</title>
<style>
body{ font-family: arial; font-size:14px; }
p{line-height: 10px;}
</style>
</head>
<body>
<?php
	echo "esta es la primera modificacion";
	echo "esta es la segunda modificacion";
	echo "esta es la tercera modificacion";
	echo "<p><strong>PHP_SELF:</strong> ".$_SERVER['PHP_SELF']."</p>";
	echo "<p><strong>SERVER_NAME:</strong> ".$_SERVER['SERVER_NAME']."</p>";
	echo "<p><strong>DOCUMENT_ROOT:</strong> ".$_SERVER['DOCUMENT_ROOT']."</p>";
	echo "<p><strong>HTTP_HOST:</strong> ".$_SERVER['HTTP_HOST']."</p>";
	echo "<p><strong>REQUEST_URI:</strong> ".$_SERVER['REQUEST_URI']."</p>";

	echo "<p><strong>DIRNAME:</strong> ".dirname($_SERVER['REQUEST_URI'])."</p>";
	echo "<p><strong>DIRNAME:</strong> ".basename($_SERVER['REQUEST_URI'])."</p>";

	echo "<hr />";
	$filedir = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'];
	$filedir = 'C:/xampp/htdocs/jupiterwebdesign.dev/hurricanefabric/wp-admin/admin.php?page=fdq-hf-csv-gen.php';
	$filedir = 'C:/xampp/htdocs/jupiterwebdesign.dev/hurricanefabric/wp-admin/admin.php';

	echo "<p><strong>filedir:</strong> ".$filedir."</p>";
	echo "<p><strong>realpath:</strong> ".realpath($filedir)."</p>";

?>
</body>
</html>