<!doctype html>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="log.css">
</head>

<body>

<div id="container">
<form  action="log.php" method="post" >
Username<br> <input type="text" name="usname"><br>
Password <br> <input type="text" name="psword"><br>

<input type="submit" name="submit" id="submit" value="LOGIN">

</form>



</div>

<?php
if (isset ($_POST["submit"])) 
{
	$user="oge";
	$pswd="123";
	$usname=$_POST["usname"];
	$psword=$_POST["psword"];
	
	if($usname=="$user" AND $psword==$pswd)
		
	   {
		
          header("Location:calc.php");	
			
		}
	else 
	{
		echo "Incorrect Credentials";
	}
	
	
	
}
	






?>






</body>
</html>