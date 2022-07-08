<footer class="container-fluid mb-0 py-4 footer">
  <div class="container-lg text-center">
    <p class="text-white"><?php echo $site->footer(); ?><span class="">Powered by <a target="_blank" class="text-white" href="https://www.bludit.com">Bludit</a></span></p>
    <!-- Social Networks -->
    <ul class="d-inline-flex list-unstyled justify-content-center">
      <?php foreach (Theme::socialNetworks() as $key => $label) : ?>
        <li class="m-1"><a href="<?php echo $site->{$key}(); ?>" target="_blank" class="text-white"><i class="<?php echo 'bi bi-' . $key; ?>"></i></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</footer>