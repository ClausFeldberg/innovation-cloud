<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <title><?php bloginfo("name") ?></title>

    <?php wp_head(); ?>

</head>

<body>
    <?php while(have_posts()) : the_post() ?>

    <div class="header" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/bg.jpg);">
      <div class="container">
        <h1>
        <?php bloginfo("name") ?>
        </h1>
        <p>
        <?php bloginfo("description") ?>
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div>
    <!-- <div id="header">
        <div class="logo">
            <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/logo1.svg" />
        </div>

        <div class="nav-wrap">
            <nav>
                <ul>
                    <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
                </ul>
            </nav>
        </div>
    </div> -->

    <?php endwhile; ?>

    <!-- <p><?php bloginfo("name") ?></p> -->