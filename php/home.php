<?php if (empty($content)) {
  $language->p('Page not found');
} ?>

<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<div class="row row-cols-1 row-cols-md-2 gx-0 gx-md-3">
  <?php foreach ($content as $page) : ?>
    <!-- card -->
    <div class="col mb-2 mb-md-4">
      <article class="card">
        <header class="position-relative">
          <img src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.webp')) ?>" class="img-fluid card-img-top" width="416px" height="234px">
          <span class="position-absolute top-0 end-0 rounded-1  card__category"><?php echo $page->category() ?></span>
        </header>
        <div class="card-body">
          <section>
            <h2 class="card-title h5 fw-bold pb-2"><a href="<?php echo $page->permalink(); ?>" class="stretched-link"><?php echo $page->title(); ?></a></h2>
            <p class="card-text">
              <?php
              if (mb_strlen(strip_tags($page->contentBreak())) > 96) {
                echo mb_substr(strip_tags($page->contentBreak()), 0, 97) . '...';
              } else {
                echo mb_substr(strip_tags($page->contentBreak()), 0, 100);
              }
              ?>
            </p>
          </section>
          <footer class="position-absolute bottom-0 end-0 text-muted card__footer">
            <time datetime="<?php echo $page->dateRaw('c') ?>" class="me-2 card__date"><?php echo $page->date(); ?></time>
            <span class="me-2 card__author"><?php echo $page->user('nickname'); ?></span>
          </footer>
        </div>
      </article>
    </div>
  <?php endforeach; ?>
</div>

<?php include(THEME_DIR_PHP . 'pagenation.php'); ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>