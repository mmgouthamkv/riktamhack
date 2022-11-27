<html>
<head>
</head>
<body>
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "mydb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
$img = $_POST['image'];  
    $description= $_POST['dis'];  
   if(isset($_POST['location'])){
$loc=$_POST['location'];}
else
$loc='hyderbad';
    $dat= $_POST['dat'];

$qry2="INSERT INTO issues(image,description,location,time,upvotes) 
VALUES('$img','$description','$loc','$dat',0)"; 
    $ins = mysqli_query($con, $qry2);
    if(!$ins)
        echo"<br>Login data Not inserted successfully";
    else
         echo"<br>POSTED SUCCESSFULLY!!</br>";
  
    mysqli_close($con);
   ?>   
<input type="submit" value="delete last post"></input>
      </body>
</html>
