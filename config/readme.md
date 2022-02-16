All php file in /config must only return an array

Example:
file name = pages.php

<?php
return [
  'home' => [
    'header' => [
      'hasTop' => false,
      'hasBottom' => false
    ]
  ]
];





USAGE:
We can access the array inside pages.php by calling config(filename.arrayIndex.subArrayIndex...)

Example: we want to get the value hasBottom from pages.php
 $hasTop = config('pages.home.header.hasTop');
