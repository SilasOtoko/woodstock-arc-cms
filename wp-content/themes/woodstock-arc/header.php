<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="UTF-8">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
  <![endif]-->
</head>
<body>
  <header>
    <div id="heading">
      <h1>American Reformed Church</h1>
      <h2>Woodstock, MN</h2>
      <nav>

        <?php 

          $defaults = array(
            'container' => false,
            'div' => false,
            'theme_location' => 'primary-menu',
          );

          wp_nav_menu( $defaults );

        ?>
        
      </nav>
    </div>
  </header>