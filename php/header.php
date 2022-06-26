  <!-- header -->
  <header class="header row m-0 p-0 shadow">

    <nav class="navbar navbar-expand-lg navbar-dark header__navbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title() ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo $site->url(); ?>">Home</a></li>
            <?php
            if ($staticContent) :
              foreach ($staticContent as $menu) :
                if (!$menu->isChild()) :
                  echo '<li class="nav-item"><a class="nav-link active" href="' . $menu->permalink() . '">' . $menu->title() . '</a></li>';
                endif;
              endforeach;
            endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div class="header__title my-5 text-center">
      <h1 class="site__title display-5 fw-bolder"><a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title() ?></a></h1>
      <h2 class="site__subtitle lead"><?php echo $site->slogan() ?></h2>
    </div>

    <div class="header__static_page_menu align-items-end m-0 p-0 w-100">
      <nav class="container-lg my-0 p-0">
        <ul class="d-flex flex-wrap list-unstyled my-0">
          <?php
          foreach ($categories->db as $key => $fields) :
            if ($fields['list']) :
              echo '<li class="col"><a href="' . DOMAIN_CATEGORIES . $key . '" class="d-block fw-bold text-white text-center text-uppercase text-nowrap p-3 ">' . $fields['name'] . '</a></li>';
            endif;
          endforeach;
          ?>
        </ul>
      </nav>
    </div>
  </header>