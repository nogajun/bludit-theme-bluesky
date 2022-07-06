<!-- Load Bludit Plugins: Page Begin -->
<?php Theme::plugins('pageBegin'); ?>

<div class="row">

  <article class="entry">
    <header class="entry__header">
      <p class="entry__meta">
        <span class="entry__categories"><a href="#"><?php echo $page->category() ?></a></span>
        <time datetime="<?php echo $page->date(); ?>" class="fw-bold entry__date"><?php echo $page->date(); ?></time>
        <span class="fw-bold p-1 entry__author"><?php echo $page->user('nickname'); ?></span>
      </p>
      <h1 class="entry__title fs-2 fw-bold"><?php echo $page->title(); ?></h1>
      <!-- Cover image -->
      <?php if ($page->coverImage()) : ?>
        <figure>
          <picture>
            <img src="<?php echo $page->coverImage(); ?>" class="w-100 entry__cover">
          </picture>
        </figure>
      <?php endif ?>
      <?php include(THEME_DIR_PHP . 'sharebutton.php'); ?>
    </header>

    <section class="entry__content">
      <!-- Full content -->
      <?php echo $page->content(); ?>
    </section>

    <footer class="mt-5 text-end entry__footer">
      <ul class="d-inline-flex list-unstyled">
        <?php if ($page->category()) : ?>
          <li class="border rounded p-1 mx-1 entry__categories">
            <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey() ?>"><?php echo $page->category() ?></a>
          </li>
        <?php endif ?>
        <?php if (!empty($page->tags(true))) {
          foreach ($page->tags(true) as $tagKey => $tagName) {
            echo '<li class="border rounded p-1 mx-1 entry__tags"><a href="' . DOMAIN_TAGS . $tagKey . '">' . $tagName . '</a></li>';
          }
        }
        ?>
      </ul>
    </footer>
  </article>
</div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>