<?php snippet('header') ?>

  <main class="main" role="main">

  <div class="text">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->blogTitle()->kirbytext() ?>
  </div>

    <div class="blog-year">
      <time><?php echo $page->time() ?></time>
    </div>

     <?php if($image = $page->image('bob-ross-painting.jpg')): ?>
      <figure class="blog-img">
      <img src="<?php echo $image->url() ?>" alt="Peaceful Waters by Bob Ross">
      <figcaption>Peaceful Waters by Bob Ross</figcaption>
      </figure>
    <?php endif ?>
  
    <div class="intro-text">
    	<p><?php echo $page->text()->text() ?></p>
    </div>

    <blockquote>
      <?php echo $page->quote() ?>
    </blockquote>

    <?php echo $page->ulTitle()->kirbytext() ?>

    <div class="list">
    <?php echo $page->unordered()->kirbytext() ?>
    </div>

    <?php echo $page->olTitle()->kirbytext() ?>

    <div class="list">
      <?php echo $page->ordered()->kirbytext() ?>
    </div>



  </main>

<?php snippet('footer') ?>