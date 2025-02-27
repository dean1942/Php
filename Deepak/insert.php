<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Deep</title>
 </head>
 <body>
<div class="card text-white bg-dark">
  <div class="card-body">
  <center> <h4 class="card-title"><picture>
      <source srcset="sourceset" type="image/svg+xml">
      <img src="image source" class="img-fluid" alt="image desc">
    </picture></h4></center>
   <center> <p class="card-text">Welcome to my site</p></center><br>
  </div>
</div>
  <form method="post" action="">
	<center><table>
<tr>
	<td>Name</td>
	<td><input type="text" name="name"></td>
</tr>
<tr>
	<td>Age</td>
	<td><input type="number" name="age"></td>
</tr>
<tr>
	<td><input type="submit"></td>
	<td><input type="reset"></td>
</tr>
</table></center>
</form>
 </body>
</html>

<?php
include 'dbcon.php';
$mysql = $dbcon->query('select * from deep1');

if ($_SERVER['REQUEST_METHOD']=='POST') {
 $name = $_POST['name'];
 $age = $_POST['age'];

$mysql = $dbcon->prepare("insert into deep1(name,age) values(?,?)");
$mysql->bind_param('si',$name,$age);
if ($mysql->execute()) {
    echo 'data added ';
} 
else{
    echo 'error';
}
  

        $mysql->close();
        $dbcon->close();
    
}


    


?>