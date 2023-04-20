<?php
$did=$_POST['did'];
$dname=$_POST['dname'];
$specilization=$_POST['specilization'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error);
}
$sql="INSERT INTO doctor(did,dname,specilization,email,mobile)VALUES('$did','$dname','$specilization','$email','$mobile')";
if(mysqli_query($conn,$sql))
{
    echo "<center><h1>NEW RECORD INSERTED SUCCESSFULLY</h1></center>";
}
else{
    echo "Error:".$sql."<br>".mysql_error($conn);
}
mysqli_close($conn);
?>