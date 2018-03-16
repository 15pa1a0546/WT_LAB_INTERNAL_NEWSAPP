<?php
 echo "successfully added a new news";
 if(isset($_POST['view'])){
     header('Location:adminchange.php');
 }
?>
<html>
<form action="" method="post">
 <input type="submit" name="view" value="view">
</form>
</html>