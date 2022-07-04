<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<div class="row row-cols-1 row-cols-md-2 gy-2 g-md-2 g-lg-4">

  <?php if (empty($content)) {
    $language->p('No pages found');
  } ?>

  <?php foreach ($content as $page) : ?>
    <!-- card -->
    <a href="<?php echo $page->permalink(); ?>" class="card-article">
      <article class="card p-0 m-2 m-md-0 h-100">
        <header class="card-header position-relative p-0">
          <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.png')) ?>" class="img-fluid card-img-top">
          <span class="card-categories fw-bold position-absolute bottom-0 end-0"><?php echo $page->category() ?></span>
        </header>
        <section class="card-body">
          <h2 class="card-title h5 fw-bold"><?php echo $page->title(); ?></h2>
          <p class="card-text">
            <?php
            if (mb_strlen($page->contentBreak()) > 96) {
              echo mb_substr($page->contentBreak(), 0, 97) . '...';
            } else {
              echo mb_substr($page->contentBreak(), 0, 100);
            }
            ?>
          </p>
          <p class="card-text text-end"><?php echo $page->readMore() ? $L->get('Read more') : '' ?></p>
        </section>
        <footer class="card-footer bg-white text-end fw-bold border-0">
          <time datetime="2022-06-21" class="card-date me-1"><?php echo $page->date(); ?></time>
          <span class="card-author me-1"><?php echo $page->user('nickname'); ?></span>
        </footer>
      </article>
    </a>
  <?php endforeach; ?>

</div>

<?php include(THEME_DIR_PHP.'pagenation.php'); ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>