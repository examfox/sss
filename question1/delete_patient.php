<?php
$pid=$_POST['pid'];
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
$sql="DELETE FROM patient Where pid='$pid'";
if(mysqli_query($conn,$sql))
{
    ?>
    <script>
        alert("Record Deleted Successfully");
        </script>
<?php
}
else{
    echo "Error:".$conn->error;
}
mysqli_close($conn);
?>