<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta-data -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- title -->
  <title>Shoebox</title>

  <!-- style links -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="content/css/main.css"/> 

  <!-- scripts -->
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="content/js/main.js"></script>
</head>
<body>
  
  <div class="container-fluid">
    <div class="row">
      <div class="logo col-sm-4">
        <a href="index.php?controller=feed&action=main"><img src="content/imgs/logo_w.png" alt="logo"></a>
      </div>
      <div class="col-sm-4 navbar">
        <nav role='navigation'>
          <div id="menuToggle">
            <input id="hamb" type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div id="menu" class="rise">
            <ul>
              <a href="index.php?controller=feed&action=showProfile"><li>Profile  <i class="far fa-user"></i></li></a>
              <a href="index.php?controller=feed&action=main"><li>Activity  <i class="fas fa-history"></i></li></a>
              <a href="index.php?controller=feed&action=logout"><li>Logout <i class="fas fa-sign-out-alt"></i></li></a>
              <a href="index.php?controller=feed&action=showProfile"><li><img src="assets/<?=$this->user->photo?>"></li></a>
            </ul>
          </div>
        </nav>
      </div>
      <div class="dashtitle">
        <p><?=$this->navTitle?></p>
      </div>
    </div>
  </div>
  
  <main>
    <?=$this->mainBody?>
  </main>
  
  <footer class="container-fluid">
    <div class="row">
      <div class="col-sm-4 bot_nav waves-effect waves-light">
        <a href="index.php?controller=feed&action=main"><i class="fas fa-home"></i></a>
      </div>
      <div class="col-sm-4 bot_nav waves-effect waves-light" id="add_m">
        <a href="#"><i class="fas fa-plus"></i></a>
      </div>
      <div class="col-sm-4 bot_nav waves-effect waves-light">
        <a href="index.php?controller=feed&action=showProfile"><i class="far fa-user"></i></a>
      </div>
    </div>
  </footer>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>
  <script type="text/javascript" src="content/js/main.js"></script>
</body>
</html>