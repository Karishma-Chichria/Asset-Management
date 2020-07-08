<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$self = WEB_ROOT . 'index.php';
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT;?>css/screen.css" rel="stylesheet" type="text/css">
<link href="<?php echo WEB_ROOT;?>css/menu.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/lab.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/jquery.min.js" ></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/software.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT;?>library/assignment.js"></script>
<?php
$n = count($script);
for ($i = 0; $i < $n; $i++) {
	if ($script[$i] != '') {
		echo '<script language="JavaScript" type="text/javascript" src="' . WEB_ROOT. 'library/' . $script[$i]. '"></script>';
	}
}
?>
<style>
body{margin-top:20px; margin-bottom:20px;background-color:#EEEEEE;}
a {text-decoration:none;}
</style>
</head>
<body>
<div class="container" style="border: 1px solid #999999; margin-bottom:20px;">
<div class="span-24">
<img src="<?php echo WEB_ROOT; ?>images/VESITHEADER.png" width="950"/>
</div>

<div class="span-24">
	<?php include_once("mymenu.php"); ?>
</div>
<div class="span-3">

<p>&nbsp;</p>
	<?php //include_once("left.php"); ?>
</div>
<div class="span-19 ">
<?php
$view = $_SESSION['asset_user_type'];
$subv=$_GET['v'];

$content = $view.'/'.$subv.".php";
//print_r($content);
if($subv==""){
	$content="main.php";
}
require_once $content;

	 
?>
</div>

<div class="prepend-5 span-15 append-4" style="background-color:#F8F8F8; border-top:dashed 1px #181818;">
	<?php include_once("footer.php"); ?>
</div>

</div>
</body>
</html>
