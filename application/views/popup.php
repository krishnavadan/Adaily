<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit PHP Forms without Page Refresh using jQuery and Ajax</title>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{	
	//using $.ajax() function
	
	$(document).on('submit', '#reg-form', function()
	{
		if($.trim($('#first_name').val()) == ''){
			alert('Please enter first name.');
			$('#first_name').focus()
			return false;
		}
		if($.trim($('#last_name').val()) == ''){
			alert('Please enter last name.');
			$('#last_name').focus()
			return false;
		}
			
		var data = $(this).serialize();
		$.ajax({
		type : 'POST',
		url  : 'submit.php',
		data : data,
		success :  function(data)
				   {						
						$("#reg-form").fadeOut(500).hide(function()
						{
							$(".result").fadeIn(500).show(function()
							{
								$(".result").html(data);
							});
						});
						
				   }
		});
		return false;
	});
	
	//using $.post() function
	/*$(document).on('submit', '#reg-form', function()
	{		
		$.post('submit.php', $(this).serialize())
		.done(function(data)
		{
			$("#reg-form").fadeOut('slow', function()
			{
				$(".result").fadeIn('slow', function()
				{
					$(".result").html(data);	
				});
			});
		})
		.fail(function()
		{
			alert('fail to submit the data');
		});
		return false;
	});	*/
});
</script>
<style type="text/css">
*{margin:0;padding:0;}
#main-container
{
	margin:50px auto;
	padding:15px;
	border:solid #cdcdcd 1px;
	width:500px;
	background:#f9f9f9;
}
table,td
{
	font-family:Verdana, Geneva, sans-serif;
	width:100%;
	border-collapse:collapse;
	padding:10px;
}
input
{
	width:100%;
	height:35px;
	text-align:left;
	padding-left:10px;
	border:solid #cddcdc 2px;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
}
button
{
	text-align:center;
	width:40%;
	height:35px;
	border:0;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
	background:#364956;
	color:#fff;
	font-weight:bolder;
	font-size:18px;
	border-radius:10px;
}
hr
{
	border:solid #cecece 1px;
}
#header
{
	width:100%;
	height:50px;
	background:#364956;
	text-align:center;
}
#header h1
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	color:#f9f9f9;
	padding-top:10px;
}
a{
	font-family:Verdana, Geneva, sans-serif;
	color:#364956;
	text-decoration:none;
}
</style>
</head>

<body>

<div id="header">
	<h1>StepBlogging.com - Submit Form Without Page Refresh Using jQuery, Ajax and PHP</h1>
</div>
<br /><br />
<center><a href="http://www.stepblogging.com/submit-form-without-page-refresh-using-jquery-ajax-and-php" target='_blank' title='Submit Form Without Page Refresh Using jQuery, Ajax and PHP'>Tutorial Link</a></center>

<div id="main-container">
	<div id="form" class="result">
    	<form method="post" id="reg-form">
			<table border="0">
				<tr>
					<td><input type="text" name="first_name" id="first_name" placeholder="First Name" /></td>
				</tr>
				<tr>
					<td><input type="text" name="last_name" id="last_name" placeholder="Last Name" /></td>
				</tr>
				<tr>
					<td align="center"><button type="submit">Submit</button></td>
				</tr>
			</table>
        </form>
    </div>
</div>
</body>
</html>