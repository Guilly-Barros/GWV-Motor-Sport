<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>GWM MOTOR'S</title>

      <!-- Link CSS -->
       <link rel="stylesheet" href="./css/contato.css">
       <link rel="stylesheet" href="./css/whatsapp.css">
       <link rel="stylesheet" href="./css/ajuda.css">
      <link rel="stylesheet" href="./css/navbar.css">
      <!--<link rel="stylesheet" href="navbar.js">-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="shortcut icon" href="./img/logotrabalho.png" type="image/x-icon">
  </head>
    <body>
                                                                    <!-- Inicio NavBar -->
      <header class="menu">
        <?php
        include('menu.php');
        ?>
      </header>

      <section class="contact-section">
        <div class="contact-container">
            <h1>Entre em Contato</h1>
            <p>Em caso de duvidas ou caso deseja<br>Importar um dos Veículos</p>
            <form>
              <label for="name">Nome Completo</label>
              <input type="text" id="name" name="name" required>

              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required>

              <label for="subject">Assunto</label>
              <input type="text" id="subject" name="subject">

              <label for="message">Mensagem</label>
              <textarea id="message" name="message"></textarea>

              <button type="submit">Enviar</button>
            </form>
          <div class="contact-info">
              <p>(62) 98538-5544| gwmcorporation@gmail.com</p>
              <p>© 2021 Todos os Direitos Reservados</p>
            <div class="social-icons">
              <a href="#">Facebook</a>
              <a href="#">Instagram</a>
              <a href="#">LinkedIn</a>
            </div>
          </div>
        </div>
          <script src="./js/navbar.js" ></script>
      </section>
    </body>
</html>
