<?php if (empty($content)) {
  $language->p('No pages found');
} ?>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<div class="row row-cols-lg-2 g-3">
  <?php foreach ($content as $page) : ?>
    <!-- card -->
    <a class="text-decoration-none text-body" href="<?php echo $page->permalink(); ?>">
      <article class="card col m-0 p-0 h-100">
        <header class="position-relative">
          <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.png')) ?>" class="card-img-top">
          <span class="position-absolute bottom-0 end-0 card__category"><?php echo $page->category() ?></span>
        </header>
        <div class="card-body">
          <section>
            <h2 class="card-title h5 fw-bold pb-2"><?php echo $page->title(); ?></h2>
            <?php
            if (mb_strlen($page->contentBreak()) > 96) {
              echo mb_substr($page->contentBreak(), 0, 97) . '...';
            } else {
              echo mb_substr($page->contentBreak(), 0, 100);
            }
            ?>
          </section>
          <footer class="position-absolute bottom-0 end-0 text-muted card__footer">
            <time datetime="<?php echo $page->dateRaw('c') ?>" class="me-2 card__date"><?php echo $page->date(); ?></time>
            <span class="me-2 card__author"><?php echo $page->user('nickname'); ?></span>
          </footer>
        </div>
      </article>
    </a>
  <?php endforeach; ?>
</div>

<?php include(THEME_DIR_PHP . 'pagenation.php'); ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>