<?php
$did=$_POST['did'];
$servername="localhost"; //local server name default localhost
$username="root"; //mysql username default is root.
$password=""; //blank if no password is set for mysql.
$dbname = "lbrce";// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);// Check connection
if(!$conn)
{
die("Connection failed:".mysqli_connect_error());
}
$sql = "DELETE from doctor WHERE did='$did'";
if (mysqli_query($conn,$sql))
{
?>
<script>
alert("Record Deleted Successfully");
</script>
 <?php 
}
else
{
echo "Error Deleting record: " . $conn->error;
}
mysqli_close($conn);
?>
