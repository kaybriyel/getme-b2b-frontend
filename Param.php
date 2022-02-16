<?php
class Param {
  static function get($key)
  {
    if(key_exists($key, $_REQUEST))
      return $_REQUEST[$key];
  }

  static function has($key)
  {
    return key_exists($key, $_REQUEST);
  }

  static function set($key, $value)
  {
    $_REQUEST[$key] = $value;
  }
}