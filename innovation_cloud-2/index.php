<!-- <!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='style.css'/>
    
  </head>
  <body>
    <div class="header" style="background-image: url(images/bg.jpg);">
      <div class="container">
        <h1>
          Innovation Cloud
        </h1>
        <p>
          Connect your ideas globally
        </p>
        <a class="btn" href="">Learn More</a>
      </div>
    </div> -->
<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>

<div class="main">
    <div class="container">
        <img src="<?php echo get_template_directory_uri() ?>/images/cloud.svg" height="128" width="196" />

        <h2><?php the_field("block_1_title") ?></h2>
        <p><?php the_field("block_1_text_1") ?></p>
        <p><?php the_field("block_1_text_2") ?></p>
        <p><?php the_field("block_1_text_3") ?></p>
    </div>
</div>
<div class="jumbotron">
    <div class="container">

        <h1>
            Stay Connected
        </h1>
        <p>
            Receive weekly insights from industry insiders.
        </p>
        <a class="btn" href="">Join</a>
    </div>
</div>


<?php endwhile; ?>
<?php get_footer(); ?>
