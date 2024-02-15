<?php
$original=array('1','2','3','4','5');
echo'Original Array :'."\n";
foreach($original as $x)
{
	echo "$x";
}
$inserted='$';
array_splice($original,3,0,$inserted);
echo"<br/>";
echo "\n After Inserting '$' the Array is :"."\n";
foreach($original as $x)
{
	echo "$x";
}
echo "\n";
?>