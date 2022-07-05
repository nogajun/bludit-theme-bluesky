<?php if (empty($content)) {
  $language->p('No pages found');
} ?>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<div class="row">
  <?php foreach ($content as $page) : ?>
    <!-- card -->
    <article class="col-lg-6 border">
      <header class="position-relative">
        <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.png')) ?>" class="w-100">
        <span class="fw-bold position-absolute bottom-0 end-0"><?php echo $page->category() ?></span>
      </header>
      <section class="">
        <h2 class="h5 fw-bold"><?php echo $page->title(); ?></h2>
        <p class="">
          <?php
          if (mb_strlen($page->contentBreak()) > 96) {
            echo mb_substr($page->contentBreak(), 0, 97) . '...';
          } else {
            echo mb_substr($page->contentBreak(), 0, 100);
          }
          ?>
        </p>
        <p class="text-end"><?php echo $page->readMore() ? $L->get('Read more') : '' ?></p>
      </section>
      <footer class="text-end fw-bold">
        <time datetime="<?php echo $page->date(); ?>" class="me-1"><?php echo $page->date(); ?></time>
        <span class="me-1"><?php echo $page->user('nickname'); ?></span>
      </footer>
    </article>
  <?php endforeach; ?>
</div>

<?php include(THEME_DIR_PHP . 'pagenation.php'); ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>