<?php

/**
 * @param string $pathNames 'filename.arrayIndex.subArrayIndex....'
 * @param mixed $default default value when result is null
 * @return mixed value or array or sub array inside a file name in /config
 */
function config(string $pathNames, $default = null)
{
  $all = explode('.', $pathNames); // [ filename, index1, index2, ... ]
  [$name] = $all; // get only filename from $all : $name = filename
  $keys = [...array_diff($all, [$name])]; // get all indexes from $all : $keys = [index1, index2, ...]
  $name = $name . '.php'; // add .php to filename

  if (!file_exists("config/$name")) return $default; // if file is not found return default value

  $data = require($name); // get the array returned from filename.php

  // get value by index and sub index
  foreach ($keys as $key) {
    if (key_exists($key, $data))
      $data = $data[$key];
    else return $default;
  }

  if($data === null) return $default;

  return $data;
}
