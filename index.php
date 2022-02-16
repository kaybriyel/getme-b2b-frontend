<?php
require_once('ViewController.php');
require_once('config/app.php');
require_once('test.php');
require_once('ViewProps.php');
// Test::runTest('layout_name', 'page_name');
response();

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

function response() {
  if(!Param::has('page'))
    Param::set('page', 'home');
  if(!Param::has('layout'))
    Param::set('layout', 'page');
  View::app();
}