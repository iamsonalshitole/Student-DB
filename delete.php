<?php
//retrieving form value using form variable
$name=$_POST['name'];
 
$servername="localhost";
$username="root";
$password="";
$dbname="phpmysql";
 //create connection
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 //check connection
 if(!$conn){
     die("connection failed: ".mysqli_connect_error());
 }
 // create query to delete form values into database
$sql="DELETE FROM details WHERE name='$name'";
//run select query
$result=mysqli_query($conn,$sql);
if(!($result)){
    echo"Sorry no data found.";
}
else
{
    echo "Record deleted successfully!!";
}
 
mysqli_close($conn);
?>
