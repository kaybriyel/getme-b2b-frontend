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
  // about page
  'about' => [
    'header' => [
      'hasTop' => false
    ]
  ],
  // index-2
  'index-2' => [
    'include' => [
      'css' => [
        'assets/css/plugins/slider-range.css'
      ],
      'script' => [
        'assets/js/plugins/slider-range.js'
      ]
    ]
  ],
  // index-3
  'index-3' => [
    'include' => [
      'css' => [
        'assets/css/plugins/slider-range.css'
      ],
      'script' => [
        'assets/js/plugins/slider-range.js'
      ]
    ]
  ],
  'category'
];
