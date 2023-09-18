<?php
session_start();
if(isset($_REQUEST['submit']))
{

    $name=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
    if($name=="jahan" && $pass==123)
    {
        $_SESSION['login']=true;
        header('location:login.php');
    }
    else{
        echo "incorrect";
    }
}
?>
<form action="" method="post">
    username:<input type="text" name="username" placeholder="username">
    password:<input type="password" name="password" placeholder="password">
    <input type="submit" name="submit" value="submit">
</form>

<?php



?>
