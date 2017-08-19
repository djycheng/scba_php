<?php

  define('BASE_PATH', 'C:/Users/Danny/Documents/SCBA/scba_php');

  require_once 'public/functions/routing.php';

  $pageName = getPageName(0);

?>
<html>
  <head>
    <?php
      include('views/partials/head.html');

      if (file_exists($file = 'public/css/' . $pageName . '.css')) {
        echo '<link href="' . $file . '" rel=stylesheet>';
      }

    ?>
  </head>
  <body>
    <div class="container drop-shadow">
      <?php 
        include('views/partials/navbar.html')
      ?>

      <div class="container">

        <?php

          if (file_exists($file = 'views/pages/' . $pageName . '.php')) {
            include $file;

          } else {
            echo 'File not found';

          }

        ?>

        <?php
          include('views/partials/footer.html')
        ?>

      </div>
    </div>
  </body>
</html>