<!DOCTYPE html>
<html>
<body>

<?php
$days=array();
$days=["mon","tue","wed","thu","fri"];

echo "before addding-----<br>";
for($i=0;$i<count($days);$i++)
{
	echo $days[$i]."<br>";
   }
 $days[7]="sat";
 print_r($days);
?> 

</body>
</html>
