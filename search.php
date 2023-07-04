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
 // create query to search form values into database
$sql="SELECT * FROM details WHERE name='$name'";
//run select query
$result=mysqli_query($conn,$sql);
if(!($result)){
    echo"Sorry no data found.";
}
else
$num_row=mysqli_num_rows($result);
echo $num_row;
echo " records found in the Database<br>";
for($i=0;$i<$num_row;$i++){
    $rname=mysqli_fetch_row($result);
    echo "<h1>";
    echo  "Name is ".$rname[0];
    echo "<br>";
    echo  "Class is ".$rname[1];
    echo "<br>";
    echo  "Roll no. is ".$rname[2];
    echo "<br>";
    echo  "DOB is ".$rname[3];
    echo "<br>";
    echo "</h1>";
}
 
mysqli_close($conn);
?>

