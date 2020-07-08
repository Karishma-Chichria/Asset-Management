<div class="span-24">
   <div id="underlinemenu">
	<ul>
	<?php
	$user=$_SESSION['asset_user_type'];
	print_r($user);
	if($user=='STUDENT'){?>
		<li><a href="<?php echo WEB_ROOT."?user=".$user; ?>" title="Home">Home</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=complaints" title="Manage Users">Complaints</a></li>
	<?php }
	if($user=='LABIN'){?>
		<li><a href="<?php echo WEB_ROOT."?user=".$user; ?>" title="Home">Home</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=Asrq" title="Asset Request">Asset Request</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=ReqS" title="Request Status">Request Status</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=Main" title="Maintenance">Maintenance</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=Dep" title="Manage Stocks">Depart</a></li>
	<?php } ?>
	
	</ul>
	</div>
</div>