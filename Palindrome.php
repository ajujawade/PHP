<?php
function palindrome($n)
{
   $sum=0;
   $num=$n;
while(floor($num))
{
	$rem=$num%10;
	$sum=$sum*10+$rem;
	$num=$num/10;
}
return $sum;
}
$input=1234321;
$num=palindrome($input);
if($input=$num)
{
	echo"$input is a Palindrome Number.";
}
 else
 {
	 echo"$input is not a Palindrome.";
 }
 ?>