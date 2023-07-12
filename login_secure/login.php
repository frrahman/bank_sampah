<?php
	
session_start();

$jv = $_GET['jv'];
	
$gagal = false;
	
if(!empty($_POST)) {
	
    $pdo = include "../config2.php";
	
    $query = $pdo->prepare("SELECT * from user_secure where username=:username");
	
    $query->execute(array('username' => $_POST['username']));
	
    $user = $query->fetch();
	
    if (!$user) {
	
        $gagal = true;
	
    } elseif($user['aktif'] != 1 || $user['password'] != sha1($_POST['password'].$user['salt'])){
	
        $gagal = true;
	
    } else {
	
        $_SESSION['browser'] = md5($_SERVER['HTTP_USER_AGENT']);
	
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
	
        $_SESSION['user'] = array(
	
            'id' => $user['id'],
	
            'nama' => $user['nama']
	
        );
	
        header("Location: ../dashboard_admin/pages/dashboard.php?jv=$jv");
        // header("Location: admin.php");
	
        exit;
	
    }
	
}
	
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Hanami</title>
  <!-- Favicon -->
  <link href="../img/hanami_logo_hijau.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="./login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <?php
    if ($gagal) {
        echo '<h5 style="color:red; margin-bottom: 0px;">!!! Username atau password salah</h5>';
    }
  ?>
  <form class="login-form" method="POST" action="">
    <p class="login-text">
      <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-lock fa-stack-1x"></i>
      </span>
    </p>
    <h3 class="title">Login ke Dashboard Admin Hanami</h3>
    <!-- <input name="tujuan" type="hidden" value="LOGIN" > -->
    <input name="username" type="text" class="login-username" required="true" placeholder="Username" />
    <input name="password" type="password" class="login-password" required="true" placeholder="Password" />
    <button type="submit" class="login-submit">Login</button>
    <!-- <button class="submit login-submit">Log In</button> -->
    <!-- <input type="submit" name="Login" value="Login" class="login-submit" /> -->
  </form>
  <a class="kembali-ke-home" href="../index.php">Kembali ke Home</a>
  <!-- <a href="#" class="login-forgot-pass">forgot password?</a> -->
  
</div>
<div class="underlay-photo"></div>
<div class="underlay-black"></div>
<!-- partial -->
  
</body>
</html>

