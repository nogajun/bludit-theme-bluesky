<div class="row row-cols-1 gy-2 g-md-2 g-lg-4">

  <article class="entry">
    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>

    <header class="entry__header mb-5">
      <p class="entry__meta">
        <span class="p-1 mr-5 entry__categories"><a href="#"><?php echo $page->category() ?></a></span>
        <time datetime="2022-06-22" class="fw-bold p-1 entry__date"><?php echo $page->date(); ?></time>
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
      <ul class="d-flex list-unstyled my-2 my-lg-4 sns_btn">
        <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__twitter"><a href="#" class="text-white d-none d-lg-inline flex">Twitter</a></li>
        <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__facebook"><a href="#" class="text-white d-none d-lg-inline flex">Facebook</a></li>
        <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__hatena"><a href="#" class="text-white d-none d-lg-inline flex">Hatena</a></li>
        <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__line"><a href="#" class="text-white d-none d-lg-inline flex">LINE</a></li>
        <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__pocket"><a href="#" class="text-white d-none d-lg-inline flex">Pocket</a></li>
      </ul>
    </header>

    <section class="entry__content">
      <!-- Full content -->
      <?php echo $page->content(); ?>
    </section>

    <footer class="mt-5 text-end entry__footer">
      <ul class="d-inline-flex list-unstyled">
        <li class="border rounded p-1 mx-1 entry__categories"><a href="#"><?php echo $page->category() ?></a></li>
        <?php if (!empty($page->tags(true))) : ?>
          <?php
          foreach ($page->tags(true) as $tagKey => $tagName) :
            echo '<li class="border rounded p-1 mx-1 entry__tags"><a href="' . DOMAIN_TAGS . $tagKey . '">' . $tagName . '</a></li>';
          endforeach
          ?>
      </ul>
    <?php endif; ?>
    </footer>

    <!-- Load Bludit Plugins: Page End -->
    <?php Theme::plugins('pageEnd'); ?>
  </article>

</div>