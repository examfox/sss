<?php
$pid=$_POST['pid'];
$disease=$_POST['disease'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$servername="localhost";
$username="root";
$dbname="lbrce";
$password="";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
$sql="UPDATE patient SET disease='$disease',mobile='$mobile',address='$address' WHERE pid='$pid'";
if(mysqli_query($conn,$sql))
{
    ?>
    <script>
        alert("updated successfully");
    </script>
    <?php
}
else{
    echo "error :".$conn->error;
}
mysqli_close($conn);
?>