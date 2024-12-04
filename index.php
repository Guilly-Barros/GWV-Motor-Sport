<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GWM MOTOR SPORT</title>
    <link rel="stylesheet" href="./css/inicio.css">
    <link rel="stylesheet" href="./css/whatsapp.css">
    <link rel="stylesheet" href="./css/ajuda.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="shortcut icon" href="./img/logotrabalho.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
    <body>
      <!-- Logo do Site -->
      <header class="menu">
        <div class="logo">
          <img src="./img/logotrabalho.png" alt="Logo" class="logo">
        </div>

        <?php
        include('menu.php');
        ?>

        <h1>Bem Vindo</h1>
        <h2>Nós somos a GWM Motor Sport</h2>
        <p>Provavelmente se você acessou nosso site, esta buscando por algo fora dos padrões<br>
        Algo que te faça sentir a adrenalina correndo em suas veias, e é exatamente isso que nós oferecemos.
        </p>

        <div class="slider">
          <div class="slides">
            <!-- Botoes Radio -->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <!-- Final Botões Radio -->

            <!-- Slide Imagens -->
            <div class="slide first">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTWdW_6QOfw_ud5bdv2lApRHvhA8TbSN34Qg&s" alt="Porsche">
            </div>
            <div class="slide">
              <img src="https://img2.icarros.com/dbimg/imgadicionalnoticia/4/74799_1" alt="Ferrari">
            </div>
            <div class="slide ">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqt2SNosb-qSzMvz9GuTSJcdP_CYbJ4cviZA&s" alt="Lamborghini">
            </div>
            <div class="slide">
              <img src="https://revistacarro.com.br/wp-content/uploads/2018/03/aston-martin-db11-1-capa.jpg" alt="Aston Martin">
            </div>
              <!-- Final Slide Imagens -->

              <!-- Botões de Navegação -->
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
              </div>
          </div>

            <div class="manual-navigation">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              <label for="radio4" class="manual-btn"></label>
            </div>
        </div>


             <!-- Botão de WhatsApp -->
        <a href="https://wa.me/62985385544" class="whatsapp-chat" target="_blank">
          <img src="./img/zaplogo.png" alt="WhatsApp Chat">
        </a>

              <!-- Botão para abrir a janela de ajuda -->
        <div id="help-button" onclick="toggleHelp()">
          Ajuda
        </div>

              <!-- Janela de ajuda oculta inicialmente -->
        <div id="help-popup">
          <div class="help-header">
            <span>Assistência ao Cliente</span>
            <span onclick="toggleHelp()" class="close-button">&times;</span>
          </div>
          <div class="help-content">
            <p>Olá! Como posso te ajudar?</p>
            <p>Entre em contato conosco ou deixe sua mensagem.</p>
          </div>
        </div>



        <a href="./veiculos.php" class="ver-carros">Veículos</a>

            <script src="./js/help.js"></script>
            <script src="./js/inicio.js"></script>
            <script src="./js/navbar.js"></script>
                            <!-- Fim Ícones e Textos da List Bar -->
      </header>
    </body>
</html>
