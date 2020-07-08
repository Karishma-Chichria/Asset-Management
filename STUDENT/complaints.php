
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
</script>
<script>


$(document).ready(function() {
 
  $('#first_form').submit(function(e) {
    e.preventDefault();
    var name = $('name').val();
    var room_no = $('#room_no').val();
    
    var remarks = $('#remarks').val();
 
    $(".error").remove();
 
    if (first_name.length < 1) {
      $('#name').after('<span class="error">This field is required</span>');
    }
    if (last_name.length < 1) {
      $('#room_no').after('<span class="error">This field is required</span>');
    }
    if (room_no.length < 1) {
      $('#room_no').after('<span class="error">This field is required</span>');
    } else {
      var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
      
     
      }
    }
    if (remarks.length < 1 ) {
      $('#remarks').after('<span class="error">reenter the remark</span>');
    }
  });
 
});
</script>
<style>
form label {
  display: inline-block;
  width: 100px;
}
 
form div {
  margin-bottom: 10px;
}
 
.error {
  color: red;
  margin-left: 5px;
}
 
label.error {
  display: inline;
}
</style>
</head>
<?php 
if($_POST['s']==1){
	print_r($_POST);
	
$sql="INSERT INTO complaints (name,rmno,remark) VALUES ('$_POST[name]','$_POST[room_no]','$_POST[remarks]') ";

$result = dbQuery($sql);
if($result){
	
}else{
echo $sql;
}

	
}

?>


<form id="first_form" method="post" action="">
  <div>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"></input>
  </div>
  <div>
    <label for="room_no">Room Number:</label>
    <input type="text" id="room_no" name="room_no"></input>
  </div>
  <div>
    <label for="remarks">Remarks:</label>
    <input type="text" id="remarks" name="remarks"></input>
  </div>
 
  <input type="text" hidden name="s" value="1">
  <div>
    <input type="submit" value="Submit" />
  </div>
</form>
