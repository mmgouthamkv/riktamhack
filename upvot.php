<html>
<head>
</head>
<body>
<?php
$k=$_POST['but'];
echo $k;
$query="UPDATE issues SET `upvotes`=(`upvotes`+1) WHERE `id` = kl";
?>
</body>
</html>
