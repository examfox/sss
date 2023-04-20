<?php
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
$sql="SELECT * FROM doctor";
$result=mysqli_query($conn,$sql);
?>
<h1 align="center">Doctors Information</h1>
<table align="center" border="5">
    <tr>
        <th>D ID</th>
        <th>D NAME</th>
        <th>specilization</th>
        <th>Email</th>
        <th>Mobile</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
        <td><?php echo $row['did']?></td>
        <td><?php echo $row['dname']?></td>
        <td><?php echo $row['specilization']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['mobile']?></td>
</tr>
<?php
}?>
</table>
<?php
mysqli_close($conn);
?>
