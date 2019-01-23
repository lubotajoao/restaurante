<div class="global-page-container">
   <div class="slider-cardapio">
      <div class="slider-002 small-12 small-centered columns">

         <?php
         $server = 'localhost';
         $user = 'root';
         $password = '';
         $db_name = 'restaurante';
         $port = '3306';

         $db_connect = new mysqli($server, $user, $password, $db_name, $port);
         mysqli_set_charset($db_connect, "utf8");

         if ($db_connect->connect_error) {
            echo 'Falha: ' . $db_connect->connect_error;
         } else {
            $sql = "SELECT * FROM pratos WHERE  destaque=1";
            $result = $db_connect->query($sql);

            if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) { ?>
                  <div class="cardapio-item-outer bounce-hover small-10 medium-4 columns">
                     <div class="cardapio-item">
                        <a href="prato.php?prato=<?php echo $row['codigo']; ?>">
                           <div class="cardapio-item-image">
                              <img src="img/cardapio/<?php echo $row['codigo']; ?>.jpg"
                              alt="<?php echo $row['codigo']; ?>"/>
                           </div>
                           <div class="item-info">
                              <div class="title"><?php echo $row['nome']; ?></div>
                           </div>
                           <div class="gradient-filter"></div>
                        </a>
                     </div>
                  </div>
               <?php }
            } else {
               echo 'Não há destaques';
            }
         }
         ?>

      </div>
   </div>
</div>
