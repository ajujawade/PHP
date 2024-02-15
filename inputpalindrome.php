<html>
<title><head>Palindrome</head></title>
<body>
<form method="POST";>
Enter a String
<input type="text" name="num">
<button type="submit">Check</button>
</form>
</body>
</html>
<?php
if($_POST)
{
	//get the value from form
	$num=$_POST['num'];
	//reversing the number
	$reverse=strrev($num);
	//checking if the number and reverse is equal
	if($num==$reverse)
	{
		echo"$num is Palindrome.";
	}
	else
	{
		echo"$num is not a Palindrome.";
	}
}
?>