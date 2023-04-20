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
$sql="SELECT * FROM patient";
$result=mysqli_query($conn,$sql);
?>
<h1 align="center">Patient View All</h1>
<table align="center" border="5">
    <tr>
        <th>P ID</th>
        <th>P name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>disease</th>
        <th>dname</th>
        <th>mobile</th>
        <th>Address</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
    ?>
    <tr>
    <td><?php echo $row['pid']?></td>
    <td><?php echo $row['pname']?></td>
    <td><?php echo $row['gen']?></td>
    <td><?php echo $row['age']?></td>
    <td><?php echo $row['disease']?></td>
    <td><?php echo $row['dname']?></td>
    <td><?php echo $row['mobile']?></td>
    <td><?php echo $row['address']?></td>
</tr>
<?php
}?>
</table>
<?php
mysqli_close($conn);
?>

