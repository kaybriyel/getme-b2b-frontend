<?php
class Test {

  static function runTest($layout, $page)
  {
    $_REQUEST['layout'] = $layout;
    $_REQUEST['page'] = $page;
  }
}