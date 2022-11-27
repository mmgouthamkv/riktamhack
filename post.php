<html>
<head><title>WELCOME</title>
<style>
h1{
color:green;
text-align:center;}
</style>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','','mydb');
if(!$con)
die('Error in Connection '.mysqli_error());
else
#echo"connection established";
$sel = mysqli_select_db($con, 'mydb');
if(!$sel)
echo"<br> Database not selected";
else
#echo"db selected";
#if(isset($_POST['submit'])){
#secho"<br>hello</br>";
$fn=$_POST['fname'];
$em=$_POST['email'];
$pa=$_POST['pass'];
#echo "<br>$fn</br>";
$qry2="INSERT INTO usertable(fullname,email,password) 
VALUES('$fn','$em','$pa')"; 
    $ins = mysqli_query($con, $qry2);
    if(!$ins)
        echo"<br>Login data Not inserted successfully";
    else
         echo"<br>WELCOME $fn<br>NOW YOU CAN GO BACK AND LOGIN IN</br>";
   # }
    mysqli_close($con);
    ?>
</body>
</html>

