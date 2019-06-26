<nav>
  <div class="menu">
    <div id="nav" class="hide">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <span id="hamburgericon" onclick="openNav()">&#9776;</span>
  </div>
  <div class="logo">
    <a href="index.php?controller=pages&action=main"><img src="imgs/logo.png" alt=""></a>
  </div>
</nav>
<script>
  function openNav() {
    document.getElementById("nav").style.width = "300px";
    document.getElementById("nav").style.opacity = "0.9"
  }

  function closeNav() {
    document.getElementById("nav").style.width = "0";
  }
</script>