<?php
$did=$_POST['did'];
$servername="localhost";
$username="root";
$password="";
$dbname="lbrce";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
$sql="SELECT *FROM doctor WHERE did='$did'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <table align="center" border=5>
            <tr>
                <th>D ID </th>
                <td><?php echo $row['did']?></td>
            </tr>
            <tr>
                <th>D NAME</th>
                <td><?php echo $row['dname']?></td>
    </tr>
    <tr>
        <th>specilization</th>
        <td><?php echo $row['specilization']?></td>
    </tr>
    <tr>
        <th>Email </th>
        <td><?php echo $row['email']?></td>
    </tr>
    <tr>
        <th>Address</th>
        <td><?php echo $row['mobile']?></td>
    </tr>
    </table>
    <?php


    }
}
else{
    ?>
    <script>
        alert("Invalid id number");
        </script>
        <?php
        include("doctor_view.html");
}
mysqli_close($conn);
?>