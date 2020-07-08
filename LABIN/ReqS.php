<?php

if(isset($_POST)){
print_r($_POST);
}


$sql="SELECT * FROM asrq";

$result = dbQuery($sql);?>

<form method='POST' action='#'>
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
   <tr align="center" id="listTableHeader"> 
   <td >Student Id</td>
   <td >Room No. </td>
   <td >Type</td>
   <td >Quantity</td>
   <td >Date</td>
   <td></td>
	</tr>
<?php
 while($row = dbFetchAssoc($result)) {?>
	 <tr>
	 <td class="label"><?php echo $row['sid'];?></td>
	 <td class="label"><?php echo $row['rmn'];?></td>
	 <td class="label"><?php echo $row['type'];?></td>
	 <td class="label"><?php echo $row['quantity'];?></td>
	 <td class="label"><?php echo $row['adate'];?></td>
	 <td>
	 
	 <input type="text" hidden name="val_<?php echo $row['id'];?>" value="<?php echo $row['id'];?>" >
	 <input type="button" name="<?php $row['id']?>" value="Delete" >

	 </td>


	 <tr>
<?php }
?>




</table>

</form>


