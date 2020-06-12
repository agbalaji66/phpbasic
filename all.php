<?php
include "connection.php";
$sql="SELECT * FROM login";
if($result=$conn->query($sql))
{
while($row=$result->fetch_assoc())
{
    $newuser=$row['user'];
    $newdob=$row['dob'];
    echo"<table>
    <tr><td>Name</td><td>$newuser</td>
    <td>DOB</td><td>$newdob</td>
    </tr></table>";
}
}
?>