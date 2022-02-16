<?php
class View
{

  static function app()
  {
    require_once('views/app.php');
  }

  private static function render($type, $name)
  {

    $type .= 's';
    $view = "views/$type/$name.php";
    // echo $view;
    if (file_exists($view)) {
      require_once($view);
      return true;
    } else return false;
  }

  static function page($name)
  {
    $viewExist = static::render('page', $name);
    if (!$viewExist) static::render('page', '404');
  }

  static function invoice($name)
  {
    $viewExist = static::render('pages/invoice', $name);
    if (!$viewExist) static::render('page', '404');
  }

  static function blog($name)
  {
    $viewExist = static::render('pages/blog', $name);
    if(!$viewExist) static::render('page', '404');
  }

  static function shop($name)
  {
    $viewExist = static::render('pages/shop', $name);
    if(!$viewExist) static::render('page', 404);
  }

  static function vendor($name)
  {
    $viewExist = static::render('pages/vendor', $name);
    if(!$viewExist) static::render('page', 404);
  }

  static function layout($name)
  {
    $viewExist = static::render('layout', $name);
    if(!$viewExist) static::render('page', 404);
  }

  static function component($name)
  {
    $viewExist = static::render('component', $name);
    if(!$viewExist) static::renderNotFoundComponent($name);
  }

  private static function renderNotFoundcomponent($name) {
    echo "<!-- Component <$name></$name> is not exist -->";
  }
}

?>
