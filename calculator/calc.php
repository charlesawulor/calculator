<!doctype html>
<html>
<head>
<title>calculator</title>
<link rel="stylesheet" type="text/css" href="calc.css">
</head>

<body>

<div id ="head">
CALCULATOR
</div>

<div id="container">
  <form  action="calc.php" method="post" >
    First value<br><input  type="text" name="first" > <br>
	Second value<br><input  type="text" name="second"> <br>

   
      +<input type="radio" name="group1" id="add" value="add"><br/>
      -<input type="radio" name="group1" id="subtract" value="subtract"><br/>
      *<input type="radio" name="group1" id="times" value="times"><br/>
      /<input type="radio" name="group1" id="divide" value="divide"><br/>

     <input type="submit" name="answer" id="answer "value="Result">
  </form>

</div>



<?php
if (isset ($_POST["answer"]))
{
$first=$_POST["first"];
$second=$_POST["second"];

if($_POST["group1"]=="add")

{
echo $first+$second	;
}

if($_POST["group1"]=="subtract")

{
echo $first-$second	;
}

if($_POST["group1"]=="times")

{
echo $first*$second	;
}


if($_POST["group1"]=="divide")

{
echo $first/$second	;
}
}







?>



</body>
</html>