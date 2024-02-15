<html>
<body>
<form method="POST">
Enter a Number
<input type="text" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if($_POST)
 {
   $number=$_POST['number'];
   if($number%2==0)
{
  echo "$number is Even.";
}
 else
      {
        echo "$number is Odd.";
      }
}
?>