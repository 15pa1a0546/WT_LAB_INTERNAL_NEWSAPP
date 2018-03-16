<?php
session_start();
$con=mysqli_connect("localhost","root","","newsapp");
$re=mysqli_query($con,"SELECT * from news");
if(isset($_POST['logout'])){
   session_destroy();
   header('Location:login.php');
}
if(isset($_POST['add'])){
    $new=$_POST['new'];
    mysqli_query($con,"INSERT INTO comments (news,comment) VALUES (3,'$new')");
    header('Location:success.php');
}
while ($r=mysqli_fetch_assoc($re)){
    echo ("NEWS: {$r['news']}.<br>");
}
?>
<html>
<form action="" method="post">
<input type="text" name="new">
<input type="submit" name="add" value="add comment">   
</form>
<form action="" method="post">
<input type="submit" name="logout" value="logout">
</form>
</html>