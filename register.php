<?php
$con=mysqli_connect("localhost","root","","newsapp");
if (isset($_POST['register'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    mysqli_query($con,"INSERT INTO login (username,pass) VALUES ('$user','$pass')");
}
?>
<html>
<style>
.heads{
    text-align:center;
}
.forum{
    text-align:center;
}
.body{
    background-color:gray;
    color:white;
    padding-top:60px;
}
</style>
<body class="body">
 <h1 class="heads">Register</h1>
 <div class="forum">
 <form action="" method="post">
 username:<input type="text" name="user"><br><br>
 password:<input type="password" name="pass"><br><br>
 <input type="submit" name="register">
</form>
<a href="login.php">login</a></div>
</body>
</html>