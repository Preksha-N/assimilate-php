<!DOCTYPE html>
<html>
<body>

<?php
$days=array();
$days=["mon","tue","wed","thu","fri"];
print_r($days);
unsort($days);
echo "after sorting<br><br>";
print_r($days);
?> 

</body>
</html>
