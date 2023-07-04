<?php
//retrieving form value using form variable
$name=$_POST['name'];
$class=$_POST['class'];
$roll_no=$_POST['roll_no'];
$DOB=$_POST['DOB'];
 
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
 
 //create sql insert query to insert form values into database
$sql="INSERT INTO details(name,class,roll_no,DOB) VALUES('$name','$class','$roll_no','$DOB')";
//run insert query
if(mysqli_query($conn,$sql)){
    echo"New data inserted successfully.";
}
else{
    echo"Unsuccessful operation,sorry!";
}
mysqli_close($conn);
?>
