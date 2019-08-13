<div class="container-fluid">
  <div class="row">
    <div class="login">
      <form id=log_frm action="index.php" method="post">
        <input type="hidden" name="controller" value="outside">
        <input type="hidden" name="action" value="login">
        <div class="container">
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Email" name="email" required>

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Password" name="password" required>
              
          <input class="log  waves-effect waves-light" type="submit" name="submit" value="LOG IN">
        </div>
      </form>
      <div class="regi">
        <a id="reg_btn" href="#">Register</a>
      </div>
    </div>
  </div>
</div>
