<html>
<body>
<h1>NUMBER OF VISITORS</h1>
<?php 
$count=file_get_contents("lab6.txt");
echo((int)$count)+1;
file_put_contents("lab6.txt",(int)$count+1);
?>
</body>
<html>
