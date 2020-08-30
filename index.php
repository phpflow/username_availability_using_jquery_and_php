<?php session_start() ?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<title>phpflow.com : How to check live username availability with jQuery & PHP</title>
</head>
<body>
<div class="container" style="padding:50px 250px;">
<h1>Simple Example to check live username availability with jQuery & PHP</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="user Name">
	<span id="usercheck" class="help-block"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$('#username').keyup(function() {
	var usercheck = $(this).val();
		    $('#usercheck').html('<img src="loading.gif" width="150" />');
			$.post("check.php", {user_name: usercheck} , function(data)
			{
			if (data.status == true)
			{
			$('#usercheck').parent('div').removeClass('has-error').addClass('has-success');
			
			} else {
			$('#usercheck').parent('div').removeClass('has-success').addClass('has-error');
			}
			$('#usercheck').html(data.msg);
			},'json');
	});
});
</script>