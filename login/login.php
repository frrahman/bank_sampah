<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Hanami</title>
  <!-- Favicon -->
  <link href="../img/hanami_logo_hijau.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <form class="login-form" method="POST" action="login_act.php">
    <p class="login-text">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
    </p>
    <h3 class="title">Login ke Dashboard Admin Hanami</h3>
    <input name="tujuan" type="hidden" value="LOGIN" >
    <input name="username" type="text" class="login-username" required="true" placeholder="Email" />
    <input name="password" type="password" class="login-password" required="true" placeholder="Password" />
    <!-- <button class="submit login-submit">Log In</button> -->
    <input type="submit" name="Login" value="Login" class="login-submit" />
  </form>
  <!-- <a href="#" class="login-forgot-pass">forgot password?</a> -->
  
</div>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
<!-- partial -->
  
</body>
</html>
