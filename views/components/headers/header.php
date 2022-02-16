<?php $header = PageProps::get('header') ?>

<!-- start header -->
<header class="header-area header-style-1 header-style-5 header-height-2">
  <?php
  if ($header->hasMobilePromotion) View::component('headers/mobile-promotion');
  if ($header->hasTop) View::component('headers/header-top');
  if ($header->hasMiddle) View::component('headers/header-middle');
  if ($header->hasBottom) View::component('headers/header-bottom');
  ?>
</header>
<?php
if ($header->isMobile) View::component('headers/mobile-header');
?>
<!--End header-->