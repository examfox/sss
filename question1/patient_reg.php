<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$disease=$_POST['disease'];
$dname=$_POST['dname'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$servername='localhost';
$dbname='lbrce';
$username='root';
$password='';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connectuon failed :".mysqli_connect_error());

}
$sql="INSERT INTO patient(pid,pname,gen,age,disease,dname,mobile,address)VALUES('$pid','$pname','$gender','$age','$disease','$dname','$mobile','$address')";
if(mysqli_query($conn,$sql))
{
    echo "<center><h1>NEW RECORD INSERTED SUCCESSFULLY</h1></center>";
}
else{
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>