<?php
$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
?>
<style>
.catBox {
	border:#094080 solid 1px;
	float:left;
	background-color:#D2E1E6;
	width:300px;
	margin-right:20px;
	margin-bottom:20px;
	margin-left:20px;
	padding-left:10px;
	padding-top:10px;
	border-radius:10px;
	border-radius:10px;
}

.catBox img.cImage {
	border:0px;
	float:left;
	padding:4px;
}
.catBox a {
	font-size:14px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-weight:bold;
	color:#094080;
}

.catBox a:hover {color:#FF9966;}
.catBox p {
	font-size:12px;
	font-family:Verdana, Arial, Helvetica, sans-serif;
	line-height:18px;
}
</style>

<div style="prepend-1 span-18 last">
<p>&nbsp;</p>
<p align="center" style="font-size:16px;font-weight:bold;">Welcome to VESIT AMS</p>


<div class="span-18">

<div class="catBox">
<img src="<?php echo WEB_ROOT; ?>images/hardware.png"  class="cImage" />
<a href="<?php echo WEB_ROOT; ?>login.php">Login</a>
<p></p>
</div>


</div>

<div style="span-18">



</div>


</div>
<p>&nbsp;</p><p>&nbsp;</p>