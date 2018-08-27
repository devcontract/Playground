<!DOCTYPE html>
<html>
<body>

<form action="/index.php" method="get" target="_blank">
  First name: <input type="text" name="fname"><br></br>
  Last name: <input type="text" name="lname"><br></br>
  <input type="submit" value="Submit get">
</form>
<br></br>
<form action="/index.php" method="post" target="_blank">
  First name: <input type="text" name="fname"><br></br>
  Last name: <input type="text" name="lname"><br></br>

Имя  сюда: post <input type="text" name="input" value="<?php echo $_POST["fname"]; ?>"><br></br>
Фамилия  сюда: post <input type="text" name="input" value="<?php echo $_POST["lname"]; ?>"><br></br>
  <input type="submit" value="Submit post">
</form>
<br><br>
<form class="" action="index.html" method="post">

</form>

</body>
</html>
<!-- test-->
