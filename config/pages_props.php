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
  'page' => json_decode(file_get_contents('config/page_props/page_layout.json')),
  'shop' => json_decode(file_get_contents('config/page_props/shop_layout.json')),
  'vendor' => json_decode(file_get_contents('config/page_props/vendor_layout.json')),
  'blog' => json_decode(file_get_contents('config/page_props/blog_layout.json'))
];
