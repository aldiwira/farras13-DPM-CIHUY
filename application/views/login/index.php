<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>css/login.css">
<script src="<?= base_url(); ?>js/login.js"></script>
<section>
  <div class="page">
    <div class="welcome">
      <img class="logo" src="<?= base_url(); ?>img/logo_dpm.png" alt="">
      <button class="sign_in">Sign In</button>
      <button class="btn">Sign Up</button>
    </div>
    <div class="sign_up">
      <form method="POST" action="signup_user.php">
        <h2>Sign Up your Account</h2>
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="sign_up" value="Sign Up" class="up">
      </form>
    </div>
    <div class="login">
      <form method="POST" action="login_user.php">
        <h2>Login your Account</h2>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" name="sign_in" value="Sign In" class="in">
      </form>
    </div>
  </div>
</section>