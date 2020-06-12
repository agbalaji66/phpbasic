
<?php
include 'connection.php';
if(isset($_POST['login']))
{
    $user=$_POST['user'];
   // $sql="UPDATE login set user='open' WHERE user='$user'";
    $sql="DELETE FROM login WHERE user='$user'";
    if($conn->query($sql))
    {
        echo"success";
    }
else{
    echo"failed";
}

}
?>