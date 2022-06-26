  <!-- header -->
  <header class="header row m-0 p-0 shadow">

    <nav class="navbar navbar-expand-lg sticky-top navbar-dark header__navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title() ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php if ($staticContent) : ?>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <?php
              foreach ($staticContent as $menu) :
                if (!$menu->isChild()) :
                  echo '<li class="nav-item"><a class="nav-link active" href="' . $menu->permalink() . '">' . $menu->title() . '</a></li>';
                endif;
              endforeach;
              ?>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </nav>

    <div class="header__title my-5 text-center">
      <h1 class="site__title display-5 fw-bolder"><a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title() ?></a></h1>
      <h2 class="site__subtitle lead"><?php echo $site->slogan() ?></h2>
    </div>

    <div class="header__static_page_menu d-flex align-items-end m-0 p-0 w-100">
      <nav class="container-lg my-0 p-0">
        <ul class="d-flex list-unstyled my-0">
          <?php
          foreach ($categories->db as $key => $fields) :
            if ($fields['list']) :
              echo '<li class="text-center w-100 p-2"><a href="' . DOMAIN_CATEGORIES . $key . '" class="text-white text-uppercase fw-bold">' . $fields['name'] . '</a></li>';
            endif;
          endforeach;
          ?>
        </ul>
      </nav>
    </div>
  </header>