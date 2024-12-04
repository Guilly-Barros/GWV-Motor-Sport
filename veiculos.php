<?php
session_start();;
require('inc/config.php');

if(!empty($_SESSION['redirect'])){
	unset($_SESSION['redirect']);
}

if(!empty($_SESSION['token'])){
	unset($_SESSION['token']);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GWM MOTOR'S</title>
    <!-- LINKS CSS -->
     <link rel="stylesheet" href="./css/veiculos.css">
     <link rel="stylesheet" href="./css/whatsapp.css">
     <link rel="stylesheet" href="./css/ajuda.css">
     <link rel="stylesheet" href="./css/navbar.css">
     <!--<link rel="stylesheet" href="navbar.js">-->

     <!-- LINK BOOTSTRAP -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <!-- Icone do Titulo -->
      <link rel="shortcut icon" href="./img/logotrabalho.png" type="image/x-icon">

      <!-- Estilização da Box Carros -->
  </head>
    <body>
        <?php
        include('menu.php');
        ?>

        <!-- Primeira Linha -->
        <div class="container">
          <div class="vehicle-grid">
            <?php
            try {
              $veiculos = $sql->prepare("SELECT * FROM veiculos ORDER BY id DESC");
              $veiculos->execute();
            } catch (PDOException $e) {
              echo $e->getMessage();
            }

            if(!$veiculos->rowCount())
            {
              echo 'Nenhum resultado encontrado';
            }else{
              while($row = $veiculos->fetchObject())
              {
              ?>
                <div class="card">
                  <img src="./img/veiculos/<?php echo $row->foto;?>" alt="<?php echo $row->nome_do_veiculo;?>">
                  <div class="card-content">
                    <h3 class="card-content"><?php echo $row->nome_do_veiculo;?></h3>
                    <p class="card-details"><?php echo $row->motor.', '.$row->categoria;?></p>
                  </div>
                </div>
              <?php
              }
            }
            ?>

            <!--
              <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqt2SNosb-qSzMvz9GuTSJcdP_CYbJ4cviZA&s" alt="Lamborghini">
                <div class="car-content">
                  <h3 class="card-content">Lamborghini Aventador</h3>
                  <p class="card-details">V12, 740 cv, 0-100 km/h em 2.9s</p>
                </div>
              </div>

              <div class="card">
                <img src="https://img2.icarros.com/dbimg/imgadicionalnoticia/4/74799_1" alt="Ferrari 488 GTB">
                <div class="card-content">
                  <h3 class="card-content">Ferrari 488 GTB</h3>
                  <p class="card-details">V8, 670 cv, 0-100 km/h em 3.0s</p>
                </div>
              </div>

              <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTWdW_6QOfw_ud5bdv2lApRHvhA8TbSN34Qg&s" alt="Porsche 911 Turbo S">
                <div class="card-content">
                  <h3 class="card-content">Porsche 911 Turbo S</h3>
                  <p class="card-details">Flat-6, 640 cv, 0-100km/h em 2.7s</p>
                </div>
              </div>

              <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfElo0ElaOqO4tBYFof9o1-pUXS5BG-zLXRw&s" alt="Rolls-Royce Phantom">
                <div class="card-content">
                    <h3 class="card-content">Rolls-Royce Phantom</h3>
                    <p class="card-details">V12, 563 cv, luxuoso e refinado</p>
                </div>
              </div>

              <div class="card">
                <img src="https://soveiculos.com.br/wp-content/uploads/2024/06/Bentley-Continental-2025.jpg" alt="Bentley Continental GT">
                <div class="card-content">
                  <h3 class="card-content">Bentley Continental GT</h3>
                  <p class="card-details">W12, 626 cv, conforto e potência</p>
                </div>
              </div>

              <div class="card">
                <img src="https://revistacarro.com.br/wp-content/uploads/2018/03/aston-martin-db11-1-capa.jpg" alt="Aston Martin DB11">
                <div class="card-content">
                  <h3 class="card-content">Aston Martin DB11</h3>
                  <p class="card-details">V8, 503 cv, estilo e desempenho</p>
                </div>
              </div>

              <div class="card">
                <img src="https://mclaren.scene7.com/is/image/mclaren/720S-Coupe_hero:crop-16x9?wid=1920&hei=1080" alt="McLaren 720S">
                <div class="card-content">
                  <h3 class="card-content">McLaren 720S</h3>
                  <p class="card-details">V8, 710 cv, 0-100 km/h em 2.8s</p>
                </div>
              </div>

              <div class="card">
                <img src="https://cdn.autopapo.com.br/box/uploads/2024/07/03171049/bugatti-chiron-paito-motors-brasil.jpg" alt="Bugatti Chiron">
                <div class="card-content">
                  <h3 class="card-content">Bugatti Chiron</h3>
                  <p class="card-details">W16, 1500 cv, máxima de 420 km/h</p>
                </div>
              </div>

              <div class="card">
                <img src="https://maserati.scene7.com/is/image/maserati/maserati/international/model-page/quattroporte/design/214300M-exterior%20(1).jpg?$1400x2000$&fit=constrain" alt="Maserati Quattroporte">
                <div class="card-content">
                  <h3 class="card-content">Maserati Quattroporte</h3>
                  <p class="card-details">V8, 580 cv, luxo e esportividade</p>
                </div>
              </div>

              <div class="card">
                <img src="https://wallpapers.com/images/hd/mythos-black-audi-r8-1nr96pua2e00azpk.jpg" alt="Audi R8">
                <div class="card-content">
                  <h3 class="card-content">Audi R8</h3>
                  <p class="card-details">V10, 602 cv, design icônico</p>
                </div>
              </div>

              <div class="card">
                <img src="https://vehicle-images.dealerinspire.com/d9d0-18003891/WBSAE0C09SCS40045/a0d4039ed9f5579cf1f6e6761f842505.jpg" alt="BMW M8">
                <div class="card-content">
                  <h3 class="card-content">BMW M8</h3>
                  <p class="card-details">V8, 617 cv, conforto e velocidade</p>
                </div>
              </div>

              <div class="card">
                <img src="https://s3.ecompletocarros.dev/images/lojas/285/veiculos/207063/veiculoInfoVeiculoImagesMobile/vehicle_image_1724444704_d41d8cd98f00b204e9800998ecf8427e.jpeg" alt="Mercedes-AMG GT">
                <div class="card-content">
                  <h3 class="card-content">Mercedes-AMG GT</h3>
                  <p class="card-details">V8, 523 cv, estilo e performance</p>
                </div>
              </div>

              <div class="card">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjAmI3ncKAtWaCqt2zyjpRt45nck_VrTdIR8_lpaaVea1lb76pjOxmMRipc_ixm4Tq7f6BerosVGyPsGTWDfetts3j_y9PrOcj-fqnZYXjSOJJ0Gie51LG3PhvOfyI3n5h6-xhlxRs8msmI/s2048/Tesla-Model-S-Plaid-2021+%25281%2529.jpg" alt="Tesla Model S Plaid">
                <div class="card-content">
                  <h3 class="card-content">Tesla Model S Plaid</h3>
                  <p class="card-details">Elétrico, 1020 cv, 0-100 km/h em 2.1s</p>
                </div>
              </div>

              <div class="card">
                <img src="https://cdn-ds.com/blogs-media/sites/214/2023/09/12042443/2024-Lexus-LC-Inspiration-A_o.png" alt="Lexus LC500">
                <div class="card-content">
                  <h3 class="card-content">Lexus LC500</h3>
                  <p class="card-details">V8, 471 cv, luxo e conforto</p>
                </div>
              </div>

              <div class="card">
                <img src="https://cdn.motor1.com/images/mgl/KqNVl/s3/2021-jaguar-f-type.jpg" alt="Jaguar F-Type">
                <div class="card-content">
                  <h3 class="card-content">Jaguar F-Type</h3>
                  <p class="card-details">V8, 575 cv, elegância britânica</p>
                </div>
              </div>
            -->

          </div>
        </div>

      <header>
              <!-- Janela Whatsapp -->
        <a href="https://wa.me/62985385544" class="whatsapp-chat" target="_blank">
          <img src="./img/zaplogo.png" alt="WhatsApp Chat">
        </a>

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
        <script src="./js/navbar.js"></script>
        <script src="./js/help.js"></script>
      </header>
    </body>
</html>
