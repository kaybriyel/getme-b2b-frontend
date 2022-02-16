<?php

/*********** PAGE PROPS
  'page-name' => [
    'include' => []
    'header' => []
  ]
 */

/*********** DEFAULT INCLUDE
  [
    'css' => [],
    'script' => []
  ]
 */

/*********** DEFAULT HEADER
 ** Set true to false to hide the element 
  [
    'hasMobilePromotion' => true,
    'hasTop' => true,
    'hasMiddle' => true,
    'hasBottom' => true,
    'isMobile' => true
  ]
 */

// return pages' properies
return [
  'page' => require('config/page_props/page_layout.php'),
  'shop' => require('config/page_props/shop_layout.php'),
  'vendor' => require('config/page_props/vendor_layout.php'),
  'blog' => require('config/page_props/blog_layout.php')
];
