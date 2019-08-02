<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title></title>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="content/css/style.css"/> 
<body>
  <?php
  include('nav.php');
  ?>
  <main>
    <?=$this->mainBody?>
  </main>
  <footer class="u-full-width">
    <div class="column">
      <div class="three columns">
        <a href="index.php?controller=feed&action=main"><i class="fas fa-home"></i></a>
      </div>

      <!-- <div class="three columns">
        <a href="#"><i class="fas fa-search"></i></a>
      </div> -->

      <div class="three columns">
        <a href="#"><i class="fas fa-plus"></i></a>
      </div>

      <div class="three columns">
        <a href="index.php?controller=feed&action=showProfile"><i class="far fa-user"></i></a>
      </div>
    </div>
  </footer>
</body>
</html>