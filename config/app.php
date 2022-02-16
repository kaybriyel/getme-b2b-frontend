<?php

function config($pathNames, $default = null)
{
  $all = explode('.', $pathNames);
  [$name] = $all;
  $keys = [...array_diff($all, [$name])];
  $name = $name . '.php';
  $dirs = [...array_diff(scandir('config', false), ['.', '..', 'app.php'])];

  if (in_array($name, $dirs)) {
    $data = require($name);

    foreach ($keys as $key) {
      if (key_exists($key, $data))
        $data = $data[$key];
      else return $default;
    }

    return $data;
  }

  return $default;
}
