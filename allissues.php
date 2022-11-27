<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "mydb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
$image_query = mysqli_query($con,"select description,location,time from issues");
$k=0;
?>
<html>
<head>
<script>
function myf(){
//$q="update issues set upvotes=upvotes+1 where sno=$k";
 //$r=mysqli_query($con,$res);
//($r)
alert( "upvoted");
}
</script>
</head>
<body>
         <section>
          <h1>EXISTING ISSUES</h1>
          <table>
        <tr>
       <th>IMAGE</th>
       <th>DESCRIPTION</th>
      <th>LOCATION</th>
<th>DATE AND TIME</th>
<th>ADD DESCRIPTION</th>
<th>UPVOTE</th></tr>
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
$k=1;
 

	while($rows = $image_query->fetch_assoc())
	{  ?>
                       <tr>        <!--form method="post" action="upvot.php"-->
                                         <td><img src="<? php echo $rows['image'];?>" width="75" height="50"/></td>
		<td><?php echo  $rows['description'];?></td>
                                          <td><?php echo $rows['location'];?></td>
                                          <td><?php echo $rows['time'];?></td>
                                        <td><form method="post" action=""><input type="text" name="extra"> </td>
                                        <td><input type="submit" value="upvote" name="but" onclick="myf()"></input></td>

                                         
                                        
</tr> 
                    <?php
 $k=$k+1;}
	?>
</table>
</section>

<br>
<center><input type="submit" value="update" onclick="op()" ></input></center>
</body>
</html>