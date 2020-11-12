<?php
$servername="127.0.0.1";
$dbname="store";
$conn=new mysqli($servername,"root","",$dbname);
if($conn->connect_error)
{
 die("connection failed:".$connect->connect_error);
}
else
{
 extract($_POST);
}
if(isset($_POST['submit']))
{
 $terms=$_POST['terms1'];
 $t1="";
 foreach($terms as $t)
 {
 $t1.=$t.",";
 }
}
$name=$_POST["Username"];
$password=$_POST["Password"];
$email=$_POST["emailid"];
$contact=$_POST["Phone"];
$city=$_POST["city"];
$add=$_POST["Address"];
$sql="INSERT INTO users(name, email, password, contact, city, address) VALUES('$name','$email','$password','$contact','$city','$add')";
if($conn->query($sql) == TRUE)
{
 header('Location:login.html');
 echo "success";
 exit();
}
else{
 header("Location:register.php?msg=failed");
 exit();
}
$conn->close();