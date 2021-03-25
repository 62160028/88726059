<?php
include('navbar.php');
include('server.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Note</title>
</head>
<body >
<nav class="navbar navbar-dark bg-dark justify-content-between">
    <h5 class="navbar-brand">Web-base</h5>
  <a class="navbar-brand">My Note</a>
  <form class="form-inline">
  <a href="add.php"><i class="fa fa-plus-circle" style="font-size:36px"></i></a>
  </form>
</nav>



<?php
$sql = "SELECT * FROM mynote ";
      $result = $conn->query($sql);
  while($row = $result->fetch_object()){ 
  echo "
  <div class='card p-3 mb-2 bg-warning text-dark'>
  <div class='card-body'>
 <h5 class='card-title'>วันที่ : $row->date</h5>
     <h5 class='card-title'>เรื่อง : <a href='show.php?id=$row->id'>$row->article</a></h5>
    <p class='card-text'>รายละเอียด : $row->detail</p>
    <div class='nav justify-content-end'>
    <a href='edit.php?id=$row->id'><i class='fa fa-arrow-circle-right' style='font-size:36px'></i></a>
    </div>
  </div>
</div>";}
?>




</body>
</html>