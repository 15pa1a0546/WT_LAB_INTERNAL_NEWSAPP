<?php
$con=mysqli_connect("localhost","root","","newsapp");
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $re=mysqli_query($con,"SELECT * from login where username='$user' and pass='$pass'");
    $rows=mysqli_fetch_array($re);
    if($rows['username']==$user && $rows['pass']==$pass){
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['pass']=$pass;
        header('Location:user.php');
    }
    else{
        echo "wrong";
    }
}
?>
<html>
<style>
.head{
    text-align:center;
}
.raju{
    text-align:center;
}
.body{
    background-color:skyblue;
    padding-top:60px;
}
</style>
<body class="body">
 <h1 class="head">Login</h1>
 <div class="raju">
 <form action="" method="post">
 username: <input type="text" name="user"><br><br>
 password: <input type="password" name="pass"><br><br>
 <input type="submit" name="login">
</form>
<a href="register.php">register</a>
<a href="admin.php">admin-login</a></div></body>
</html>