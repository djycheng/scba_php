<?php

  define('BASE_PATH', 'C:/Users/Danny/Documents/SCBA/scba_php');

  require_once 'public/functions/routing.php';

  function getCSSProperty($file)
  {
    if (file_exists($file)) {
      echo '<link href="' . $file . '" rel=stylesheet>';
    }
  }

  function handleNewsButtons($article)
  {
    $news_path = 'views/pages/news/';
    $prev = (string) (strval($article) - 1);
    $next = (string) (strval($article) + 1);

    if (file_exists($file = $news_path . $prev . '.php')) {
      $leftButton = generateArrowButton('left', '/news/' . $prev);
    } else {
      $leftButton = generateArrowButton('left');
    }

    if (file_exists($file = $news_path . $next. '.php')) {
      $rightButton = generateArrowButton('right', '/news/' . $next);
    } else {
      $rightButton = generateArrowButton('right');
    }

    echo '<div class="row">' . $leftButton . $rightButton . '</div>';
  }

  function generateArrowButton($direction, $path = null)
  {
    $button = '<button class="glyphicon glyphicon-arrow-' . $direction . ' ' . (is_null($path) ? 'faded' : 'filled') . '"></button>';

    if (!is_null($path)) {
      return '<a href="' . $path . '">' . $button . '</a>';
    } else {
      return $button;
    }
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

          if (($pageName == 'news') && ($validNewsArticle == 1)) {
            handleNewsButtons($article);
          }

          include('views/partials/footer.html');
        
          if ($pageName == 'contact') {
            echo "<script src='/public/js/form.js'></script>";
          }
        ?>

      </div>
    </div>
  </body>
</html>
