<?php
include('navbar.php');
include('server.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT * FROM mynote WHERE  id=$id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Note</title>
</head>
<body class="bg-warning text-dark">
<nav class="navbar navbar-dark bg-dark justify-content-center">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            <i class="fa fa-arrow-circle-left" style="font-size:36px"></i>
            </a>
            <a class="navbar-brand justify-content-center">Note</a>
            <a type="hidden"></a>
            
        </div>


    </nav>

  <div class='card'>
  <div class='card-body card border-secondary' style='max-width: cover;'>
  <h5 class='card-title'>ชื่อเรื่อง : </h5>
    <h5 class='card-title'><?php echo $data['article'];?></h5>
    <br><br>
    <h5 class='card-title'>รายละเอียด : </h5>
    <p class='card-text'><?php echo $data['detail'];?></p>
  </div>
</div>






</body>
</html>