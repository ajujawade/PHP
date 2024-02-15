<html>
<head><title>Switch Statement</title></head>
<body>
<?php
$d=date("D");
Switch($d)
{
	case "Mon";
	     echo"Today is Monday!";
	break;

    case "Tue";
	     echo"Today is Tuesday!";
	break;
	case "Wed";
	     echo"Today is Wednesday!";
	break;

    case "Thru";
	     echo"Today is Thruday!";
	break;
	case "Fri";
	     echo"Today is Friday!";
	break;

    case "Sat";
	     echo"Today is Saturday!";
	break;
	default;
	        echo"Wonder which day is this?";
}
?>
</body></html>