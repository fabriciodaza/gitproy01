<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Base64-script</title>
<style type="text/css">
<!--
body {
	background-image: url(images/bg01.gif);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	SCROLLBAR-FACE-COLOR: #5A5A5A;
	SCROLLBAR-HIGHLIGHT-COLOR: #777777;
	SCROLLBAR-SHADOW-COLOR: #777777;
	SCROLLBAR-3DLIGHT-COLOR: #777777;
	SCROLLBAR-ARROW-COLOR: #DD8A01;
	SCROLLBAR-TRACK-COLOR: #5A5A5A;
	SCROLLBAR-DARKSHADOW-COLOR: #777777;
}
.SaludoInicial {
	font-family: arial;
	font-size: 36px;
	font-weight: bold;
	color: #FFFFFF;
	text-decoration: none;
}
-->
</style>
<script language="javascript" src="choosedate.js"></script>
<link type="text/css" rel="stylesheet" href="calendar.css">
<link href="estilosadm.css" rel="stylesheet" type="text/css">
</head>
<body>

<?PHP
/*$a= "admin";
$b = base64_encode($a);
echo "Codificado = \"$b\"<br>";*/
$txt01 = "";
$txt02 = "";
if(isset($_POST['btnEncode']) and trim($_POST['txt01']) != "" ):
	$txt01 = $_POST['txt01'];
	$txt02 = base64_encode($txt01);
elseif(isset($_POST['btnDecode']) and trim($_POST['txt01']) != "" ):
	$txt01 = $_POST['txt01'];
	$txt02 = base64_decode($txt01);
endif;
?>
<br /><br />
<form name="form1" method="post" action="<?PHP echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="txt01" id="txt01" value="<?PHP echo $txt01; ?>" style="width:400px; font-family:tahoma; font-size:11px;"><br /><br />
  <input type="text" name="txt02" id="txt02" value="<?PHP echo $txt02; ?>" style="width:400px; font-family:tahoma; font-size:11px;">
  <input type="submit" name="btnEncode" id="btnEncode" value="Encode">
  <input type="submit" name="btnDecode" id="btnDecode" value="Decode">
</form>
<?php echo "esta es la primera modificacion"; ?>
<?php echo "esta es la segunda modificacion"; ?>
</body>
</html>
