<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RecordEx</title>
    <link rel="stylesheet" href="../css/home.css">
  </head>
  <body>
    <?php require_once('../inc/navbar.php');?>
    <h1></h1>
    <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="../img/44e009e8-0904-4c57-a681-e632575063f1.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="../img/b79b4b2f-0b08-4640-8b73-4d4176b2953c.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="../img/d0477967-c8e7-4640-90a8-57f72b51d1ae.jpg" style="width:100%">
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
    <script src="../assets/home.js"></script>
  </body>
</html>
