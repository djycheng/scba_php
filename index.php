<?php

  define('BASE_PATH', 'C:/Users/Danny/Documents/SCBA/scba_php');

  require_once 'public/functions/routing.php';

  function getCSSProperty($file)
  {
    if (file_exists($file)) {
      echo '<link href="/' . $file . '" rel=stylesheet>';
    }
  }

  function handleNewsButtons($article)
  {
    $news_path = 'views/pages/news/';
    $prev = (string) (strval($article) - 1);
    $leftSide = '&laquo Previous Article';
    $next = (string) (strval($article) + 1);
    $rightSide = 'Next Article &raquo';

    if (file_exists($file = $news_path . $prev . '.php') && $prev != '0') {
      $leftSide = '<a href="/news/' . $prev . '">' . $leftSide . '</a>';

    }

    if (file_exists($file = $news_path . $next. '.php')) {
      $rightSide = '<a href="/news/' . $next . '">'. $rightSide . '</a>';

    }

    echo '<div class="row"><div class="col-md-12">' . $leftSide . ' | ' . $rightSide . '</div></div><hr>';
  }

  $pageName = getPageName(0);
  $article = getPageName(1);
?>

<html>
  <head>
    <?php
      include('views/partials/head.html');

      getCSSProperty('public/css/' . $pageName . '.css');
      getCSSProperty('public/css/' . $pageName . '/' . $article . '.css');
    ?>
  </head>
  <body>
    <div class="container drop-shadow">
      <?php 
        include('views/partials/navbar.html')
      ?>

      <div class="container">

        <?php
          $validNewsArticle = 0;

          if (file_exists($file = 'views/pages/' . $pageName . '.php')) {
            include $file;

            if (($pageName == 'news') && file_exists($file = 'views/pages/' . $pageName . '/' . $article . '.php')) {
              include $file;
              $validNewsArticle = 1;
            }

          } else {
            echo 'File not found';

          }

          if (($pageName == 'news') && ($validNewsArticle == 1) && $article != '0') {
            handleNewsButtons($article);
          }

          include('views/partials/footer.html');
        
          if ($pageName == 'contact') {
            echo "<script src='/public/js/form.js'></script>";
          } else if ($pageName == 'conference') {
            echo "<script src='/public/js/conference.js'></script>";
          }
        ?>

      </div>
    </div>
  </body>
</html>
