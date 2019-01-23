<?php include 'header.php'; ?>

<div class="welcome-gallery small-12 columns">
   <div class="photo-section small-12 columns">
      <img class="homepage-main-photo" src="img/main-photo.jpg" alt="slider imagem 1">
   </div>

   <div class="main-section-title small-10 columns">
      <div class="table">
         <div class="table-cell">
            <h1>Bem vindo ao Restô Bar</h1>
            <h2>A cozinha tradicional na Brasa</h2>
         </div>
      </div>
   </div>
   <div class="photo-gradient"></div>
</div>

<div class="about-us small-11 large-12 columns no-padding small-centered">
   <div class="global-page-container">
      <div id="about-us" class="about-us-title small-12 columns no-padding">
         <h3>Sobre Nós</h3>
         <hr>
      </div>
      <img src="img/fachada.jpg" alt="fachada do restaurante">
      <div class="about-us-text">
         <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus leo mi,
            condimentum ac convallis non, porta ac nibh. Morbi volutpat nibh lectus, quis
            convallis nunc rutrum vitae. Aenean volutpat aliquam elementum. Nunc consequat
            elit odio, vitae suscipit nunc pretium eu. Aenean vitae lacus auctor, condimentum
            ipsum at, suscipit erat. Donec dapibus ullamcorper bibendum. Vestibulum posuere
            augue in lectus dictum tincidunt. Pellentesque ornare eget enim sed dignissim.
            Sed nec nisi suscipit, feugiat risus ac, lacinia elit.
         </p>

         <p>
            Duis fermentum leo enim, eget dignissim dolor imperdiet at. Sed ut rutrum lacus.
            Aenean eleifend, urna eu dapibus imperdiet, turpis diam tristique mauris, nec
            luctus ante massa eu arcu. Duis tempor risus quis tellus posuere eleifend.
            Donec fringilla nulla ac odio sagittis tincidunt. Phasellus tempus id felis et
            finibus. Aenean felis ligula, varius nec varius at, feugiat nec felis. Morbi
            blandit sapien vel justo consequat laoreet.</p>
         </div>
      </div>
   </div>

   <div class="cardapio small-11 large-12 columns no-padding small-centered">
      <div class="global-page-container">
         <div class="cardapio-title small-12 columns no-padding">
            <h3>Cardapio</h3>
            <hr>
         </div>
      </div>
      <?php include 'prato-destaque.php' ?>
   </div>

   <div id="contact-us" class="contact-us small-11 large-12 columns no-padding small-centered">
      <div class="global-page-container">
         <div class="contact-us-title small-12 columns no-padding">
            <h3>Faça a sua reserva</h3>
            <hr>
         </div>

         <?php include 'formulario-reserva.php';?>

         <?php include 'envio-email.php'?>

         <?php include 'confirmacao.php';?>
      </div>
   </div>

   <?php include 'footer.php'; ?>
