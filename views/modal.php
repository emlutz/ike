<div class="container-fluid">
  <div class="row">
    <div class="mbox">
    <div class="login">
      <img src="theme/imgs/logo-02.png" alt="">
      <a href="#"><i class="fas fa-times"></i></a>
      <form id=log_frm action="index.php" method="post">
        <input type="hidden" name="controller" value="pages">
        <input type="hidden" name="action" value="login">
        <div class="container">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
              
          <input id="log" class="btn waves-effect waves-light" type="submit" name="submit" value="LOG IN">
        </div>
      </form>
      <div class="logout">
        <a href="models/logout.php">LOG OUT
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </div>
    </div>
  </div>
  </div>
</div>
