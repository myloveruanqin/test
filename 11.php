
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
$array=array(1,2,3,4,5,6,7,8);
$sum=0;
for($i=0;$i<5;$i++)
{
$sum=$sum+$array[$array[$i]];
}

echo $sum;
echo "</br>"
?>
<?php
define("UU","loveyou");
echo UU;
echo "</br >";
?>

  <?php
$t=date("H");

if ($t<"10") {
   echo "Have a good morning!";
} elseif ($t<"20") {
   echo "Have a good day!";
} else {
   echo "Have a good night!";
}
?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
</body>
</html>
