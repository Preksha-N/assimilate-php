<!DOCTYPE html>
<html>
<body>

<?php
$days=array();
$days=["mon","tue","wed","thu","fri"];

echo "before deleting-----<br>";
for($i=0;$i<count($days);$i++)
{
	echo $days[$i]."<br>";
   }

 unset($days[3]);
 print_r($days);
?> 

</body>
</html>
