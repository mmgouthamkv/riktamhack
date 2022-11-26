<html>
<head>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
</head>
<body>
<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;">
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "mydb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
$username = $_POST['user'];  
    $password = $_POST['pass'];  
     
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from usertable where email= '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          #echo "$count";
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
           echo "<script> window.location.assign('upload.php'); </script>";
        }
 #echo "<center><input type="submit" name="submit"></center>";   
 else
echo"<h1>invalid</h1>";


?>




</body>
</html>