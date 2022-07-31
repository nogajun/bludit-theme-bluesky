<div class="row row-cols-1 my-4">
  <div class="col">

    <article class="entry">
      <!-- Load Bludit Plugins: Page Begin -->
      <?php Theme::plugins('pageBegin'); ?>
      <!-- entry header -->
      <header class="entry__header">
        <p class="entry__meta">
          <!-- category -->
          <?php if ($page->category()) : ?>
            <span class="me-1 entry__categories">
              <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey() ?>"><?php echo $page->category() ?></a>
            </span>
          <?php endif ?>
          <time datetime="<?php echo $page->dateRaw('c') ?>" class="p-1 me-1 entry__date"><?php echo $page->date(); ?></time>
          <span class="entry__author"><?php echo $page->user('nickname'); ?></span>
        </p>
        <h1 class="h2 fw-bold entry__title"><?php echo $page->title(); ?></h1>
        <!-- Cover image -->
        <?php if ($page->coverImage()) : ?>
          <figure>
            <picture>
              <img src="<?php echo $page->coverImage(); ?>" class="img-fluid shadow entry__cover" width="888px" height="500" alt="">
            </picture>
          </figure>
        <?php endif ?>
        <!-- share button -->
        <?php include(THEME_DIR_PHP . 'sharebutton.php'); ?>
      </header>
      <!-- entry contents -->
      <section class="entry__content">
        <!-- Full content -->
        <?php echo $page->content(); ?>
        <!-- share button -->
        <?php include(THEME_DIR_PHP . 'sharebutton.php'); ?>
      </section>

      <!-- entry footer -->
      <footer class="text-end entry__footer">
        <ul class="d-inline-flex list-unstyled">
          <!-- category -->
          <?php if ($page->category()) : ?>
            <li class="border rounded p-1 mx-1 entry__categories">
              <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey() ?>"><?php echo $page->category() ?></a>
            </li>
          <?php endif ?>
          <!-- tags -->
          <?php if ($page->tags()) : ?>
            <?php foreach ($page->tags(true) as $tagKey => $tagName) : ?>
              <li class="border rounded p-1 mx-1 entry__tags">
                <a href="<?php echo DOMAIN_TAGS . $tagKey; ?>"><?php echo $tagName; ?></a>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
      </footer>

      <!-- Load Bludit Plugins: Page End -->
      <?php Theme::plugins('pageEnd'); ?>
    </article>

  </div>
</div>