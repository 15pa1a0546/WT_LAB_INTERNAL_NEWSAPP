<?php
$con=mysqli_connect("localhost","root","","newsapp");
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $re=mysqli_query($con,"SELECT * from admin where username='$user' and pass='$pass'");
    $rows=mysqli_fetch_array($re);
    if($rows['username']==$user && $rows['pass']==$pass){
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['pass']=$pass;
        header('Location:adminchange.php');
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
.forum{
    text-align:center;
}
.body{
    background-color:gray;
    background-image:url(d.png);
    color:white;
}
.bdy{
    padding-top:60px;
}
</style>
<body class="body">
<div class="bdy">
 <h1 class="head">Admin Login</h1>
 <div class="forum">
 <form action="" method="post">
 username: <input type="text" name="user"><br><br>
 password: <input type="password" name="pass"><br><br>
 <input type="submit" name="login">
</form>
<a href="login.php">login</a></div>
</bdy>
</body>
</html>