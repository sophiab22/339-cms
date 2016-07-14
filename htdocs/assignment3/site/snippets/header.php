<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>Sophia Bhatti: CMS</title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

<div class="wrapper">
  <header class="header cf" role="banner">

  
     <a class="logo" href="<?php echo url() ?>">
        <p>SOPHIA BHATTI</p>
       <!--  <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" /> -->
      </a>
      <?php snippet('menu') ?>
  </header>
</div>

