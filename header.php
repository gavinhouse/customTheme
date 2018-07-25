<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


      <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <li><a href="http://dev.test.local/"><img width="100px" src="<?= get_stylesheet_directory_uri(); ?>/images/faviconb4.png"/></a></li>
          <?php wp_list_pages('&title_li='); ?>
        </nav>
      </div>
    </div>

    <div class="container">

    <br />