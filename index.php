<?php
require_once "./db.php";

session_start();
$books = findAll();
$page = 1;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
$page = $page - 1;
$lang = "chinese";
if (isset($_GET['lang'])) {
  $lang = $_GET['lang']; //載入語言參數
  $_SESSION["lang"] = $lang;
} else {
  if (isset($_SESSION["lang"])) {
    $lang = $_SESSION["lang"];
  } else {
    $_SESSION["lang"] = $lang;
  }
}

// 依據瀏覽器設定切換語言
$uiLang = "en";
// echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$localePreferences = explode(",", $_SERVER['HTTP_ACCEPT_LANGUAGE']);
if (is_array($localePreferences) && count($localePreferences) > 0) {
    $browserLocale = $localePreferences[0];
    // echo "<hr>";
    // echo $browserLocale;
    // echo "<hr>";
    $browserLocale=strtolower($browserLocale);
    switch ($browserLocale) {
        case "en-us":
        case "en":
            $uiLang = "en";
            break;
        case "zh-tw":
            $uiLang = "tw";
            break;    
    }
}
include "./lang/" . $uiLang . ".php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>故事書作業</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <div class="container mt-5 treasure-map">
    <div class="row bg-cover">
      <?php

      $orgPage = $page;
      $page = $page + 1; //恢復從一開始的頁數

      $prevPage = $page - 1;
      $prevUrl = "index.php?page=$prevPage";
      if ($prevPage <= 0) {
        $prevPage = 1;
        $prevUrl = "#";
      }
      $nextPage = $page + 1;
      $nextUrl = "index.php?page=$nextPage";
      if ($nextPage > count($books)) {
        $nextPage = count($books);
        $nextUrl = "#";
      }
      ?>
      <div class="col-sm-2 text-center  align-self-sm-center yellow-btn yellow-btn-right yellow-btn-topmost" title="<?=PREVIOUS_PAGE?>" onclick="window.location.href='<?= $prevUrl ?>'">
        <i class="fas fa-caret-left display-1"></i>
      </div>
      <div class="col-sm-8 text-center mt-5 mb-5 story-container">
        <img class="img-fluid" src="./images/pages/<?= $books[$orgPage]['src']; ?>" alt="index" width="640px" height="460px" />
        <div>
          <p><?= $books[$orgPage][$lang] ?></p>
        </div>
      </div>
      <div class="col-sm-2 text-center align-self-sm-center yellow-btn yellow-btn-left" title="<?=NEXT_PAGE?>" onclick="window.location.href='<?= $nextUrl ?>'">
        <i class="fas fa-caret-right display-1 arrow"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 text-center mr-3 yellow-btn" title="<?=HOME?>" onclick="window.location.href='./index.php'">
        <i class="fa fa-home display-1"></i>
      </div>
      
      <?php

      if($lang == "chinese"){
        $name ="英文";
        $langTitle=ENG;
        $langArg="english";
      }else{
        $name ="中文";
        $langTitle=CHI;
        $langArg="chinese";
      }
      $currentPage = $orgPage + 1;
      ?>
      <div class="col-sm-2 text-center align-self-sm-center yellow-btn yellow-btn-padding" title="<?=$langTitle?>" onclick="window.location.href='index.php?page=<?= $currentPage ?>&lang=<?= $langArg ?>'">
        <span><?= $name ?></span>
      </div>

    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>