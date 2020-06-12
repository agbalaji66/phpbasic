<html>
<head>
    <link rel="stylesheet" href="st.css">
</head>

<body>
    <form method="post">
        <?php
        include "connection.php";
        session_start();
        
 
        if($_SESSION['status']!="Active"){
            header("location:login.php");
        }        
        echo"Welcome  ".$_SESSION['name']."  To my page</br>";
        
        $sql="SELECT `dob` FROM login WHERE user = '$_SESSION[name]'";
        if($result=$conn->query($sql))
        {
            while($row=$result->fetch_assoc())
            {
                $newdob=$row['dob'];
                echo"DOB is".$newdob;
                echo"</br>";
                $today=date('today');
                echo $today;
                
            }
        }
        else{
            echo"query error";
        }
        $sql1="SELECT  dob, TIMESTAMPDIFF(YEAR, dob, CURDATE()) AS age FROM login";
        
        if($age=$conn->query($sql1))
        {
            while($row1=$age->fetch_array())
            {
          echo "this is my". $row1['age'];
            }
        }
        else
        {
            echo"AGE error";
        }


        ?>
    <input type="submit" name="logout">
    </form>
</body>
</html>
<?php
if(isset($_POST['logout']))
{
    session_start();
    session_destroy();
    header("location:login.php");
}

?>