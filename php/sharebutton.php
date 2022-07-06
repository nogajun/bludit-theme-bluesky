<div class="share-button">
  <ul class="d-flex list-unstyled my-2 my-lg-4 sns_btn">
    <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__twitter"><a href="https://twitter.com/share?url=<?php echo $page->permalink() ?>&text=<?php echo $page->title() ?>+%7C+<?php echo $site->title() ?>%3A+" rel="nofollow" target="_blank" class="text-white d-none d-lg-inline flex">Twitter</a></li>
    <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__facebook"><a href="//www.facebook.com/share.php?u=<?php echo $page->permalink() ?>" rel="nofollow" target="_blank" class="text-white d-none d-lg-inline flex">Facebook</a></li>
    <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__hatena"><a href="//b.hatena.ne.jp/add?mode=confirm&url=<?php echo $page->permalink() ?>&title=<?php echo $page->title() ?>+%7C+<?php echo $site->title() ?>" rel="nofollow" class="text-white d-none d-lg-inline flex">Hatena</a></li>
    <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__line"><a href="//timeline.line.me/social-plugin/share?url=&text=" target="_blank" rel="nofollow" class="text-white d-none d-lg-inline flex">LINE</a></li>
    <li class="border rounded text-center w-100 p-1 mx-1 sns_btn__pocket"><a href="//getpocket.com/edit?url=<?php echo $page->permalink() ?>&title=<?php echo $page->title() ?>+%7C+<?php echo $site->title() ?>" rel="nofollow" target="_blank" class="text-white d-none d-lg-inline flex">Pocket</a></li>
  </ul>
</div>