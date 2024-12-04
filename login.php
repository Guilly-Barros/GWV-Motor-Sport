<?php
session_start();
require('./inc/gera_token.php');
require('./inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GWM MOTOR'S</title>

  <!-- Link CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./img/logotrabalho.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/navbar.css">
</head>

<body>
  <!-- Logo do Site -->
  <header class="menu">
    <div class="logo">
      <img src="./img/logotrabalho.png" alt="Logo" class="logo">
    </div>

    <?php
    include('menu.php');

    if(!empty($_SESSION['id']))
    {
      ?>
      <div class="container" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <h1>Você já está logado.</h1>
        <button onclick="location.href = './sair.php'">Clique para sair</button>
      </div>
      <?php
    }else{
    ?>

    <?php
    if(!empty($_GET['status']) && $_GET['status'] == 'dontexist'){
    ?>
    <div class="bg-danger p-2 text-center text-white my-2 border-rounded">
      Essa conta não existe.
    </div>
    <?php
    }elseif(!empty($_GET['status']) && $_GET['status'] == 'invalid'){
    ?>
    <div class="bg-danger p-2 text-center text-white my-2 border-rounded">
      Email ou senha estão incorretos.
    </div>
    <?php
    }elseif(!empty($_GET['status']) && $_GET['status'] == 'exist'){
    ?>
    <div class="bg-danger p-2 text-center text-white my-2 border-rounded">
      Esse e-mail já está sendo utilizado.
    </div>
    <?php
    }
    ?>

    <!-- Login - SignUp -->
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form action="func/criar-conta.php" method="post">
        <input type="hidden" name="token" value="<?php echo $_SESSION["token"];?>" />

          <h1>Create Account</h1>
          <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registeration</span>
          <input name="nome" required type="text" placeholder="Name">
          <input name="email" required type="email" placeholder="Email">
          <input name="senha" required type="password" placeholder="Password">
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form action="func/acessar-conta.php" method="post">
          <input type="hidden" name="token" value="<?php echo $_SESSION["token"];?>" />
          <h1>Sign In</h1>
          <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <span>or use your email password</span>
          <input name="email" type="email" required placeholder="Email">
          <input name="senha" type="password" required placeholder="Password">
          <a href="#">Forget Your Password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>Register with your personal details to use all of site features</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>

    <script src="./js/login.js"></script>
    <script src="./js/navbar.js"></script>
</body>

</html>
