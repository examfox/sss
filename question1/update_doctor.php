<?php
$did=$_POST['did'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
$sql="UPDATE doctor SET email='$email',mobile='$mobile' where did='$did'";
if(mysqli_query($conn,$sql))
{
    ?>
    <script>
        alert("Record Updated Successfully");
        </script>
    <?php
}
else{
    echo "Error :".$conn->error;
}
mysqli_close($conn);
?>