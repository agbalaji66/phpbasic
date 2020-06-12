<html>
<header>
<link rel="stylesheet" href="st.css">
</header>
<body>
<form method="POST">
    <div id="master">
<h1>Enter user name</h1>
<input type="text" name="uname">
</br>
<h1>Enter Password</h1>
<input type="password" name="pass">
</br>
<input type="submit" name="submit" value="Login">
</div>
</form>
</body>
</html>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql="SELECT `pass` FROM login WHERE user='$user'";
    if($result=$conn->query($sql))
    {
        while($row=$result->fetch_assoc())
        {
            $newpass=$row['pass'];
           
            
            if($newpass==$pass)
            {   session_start();
                $_SESSION['name']=$user;
                $_SESSION['status']="Active";
             
               header("location:index.php");
            }
        }
        
    }
}

?>