<?php

$data = [
  ["id" => "1", "src" => "1000", "chinese" => "從"],
  ["id" => "2", "src" => "1001", "chinese" => "家"],
  ["id" => "3", "src" => "1002", "chinese" => "老"],
];
$page = 1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
$page = $page - 1;
// print_r($data[0]['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .button {
      border-bottom: 2px solid darkgrey;
      border-radius: 60px;
      box-shadow: 2px 2px 18px darkgrey;
      background-color: #ccad00;
      /* color: #332b00; */
      border-top: 2px solid #fffbe6;
      border-left: 2px solid #fffbe6;
      border-right: 2px solid darkgrey;
      cursor: pointer;
    }

    .button:hover {
      background-color: #332b00;
    }

    .arrow {
      color: #332b00;
    }

    .button:hover .arrow {
      color: #ccad00;
    }
  </style>
</head>

<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col text-center">
        <img class="img-fluid" src="https://picsum.photos/id/<?= $data[$page]['src']; ?>/200/300" alt="page1" width="50%" />
      </div>
    </div>
    <div class="row">
      <?php
      $orgPage = $page;
      $page = $page + 1; //恢復從一開始的頁數

      $prevPage = $page - 1;
      $prevUrl = "page1.php?page=$prevPage";
      if ($prevPage <= 0) {
        $prevPage = 1;
        $prevUrl = "#";
      }
      $nextPage = $page + 1;
      $nextUrl = "page1.php?page=$nextPage";
      if ($nextPage > count($data)) {
        $nextPage = count($data);
        $nextUrl = "#";
      }
      ?>
      <div class="col-sm-2 text-center  button" onclick="window.location.href='<?= $prevUrl ?>'">
        <i class="fas fa-caret-left display-1 arrow"></i>
      </div>
      <div class="col-sm-8 text-center">
        <div class="box">
          <p><?= $data[$orgPage]['chinese'] ?></p>
        </div>

      </div>
      <div class="col-sm-2 text-center align-self-sm-center button" onclick="window.location.href='<?= $nextUrl ?>'">
        <i class="fas fa-caret-right display-1 arrow"></i>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>