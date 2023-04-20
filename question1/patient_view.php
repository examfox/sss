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
$sql="SELECT *FROM patient where pid='$pid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        ?>
        <table align="center" border=5>
            <tr>
                <th>P ID</th>
                <td><?php echo $row['pid']?></td>
            </tr>
            <tr>
                <th>P NAME</th>
                <td><?php echo $row['pname']?></td>
            </tr><tr>
                <th>Gender</th>
                <td><?php echo $row['gen']?></td>
            </tr><tr>
                <th>Age</th>
                <td><?php echo $row['age']?></td>
            </tr>
            <tr>
                <th>Disease</th>
                <td><?php echo $row['disease']?></td>
            </tr>
            <tr>
                <th>D NAME</th>
                <td><?php echo $row['dname']?></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><?php echo $row['mobile']?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $row['address']?></td>
            </tr>
            <?php 
    }
}
else
{
    ?>
    <script>
        alert("invalid user");
    </script>
    <?php
    include("patient_view.html");
}
mysqli_close($conn);
?>
