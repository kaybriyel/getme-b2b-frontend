<?php

/**
 * Render view
 */
class View
{

  /**
   * require_once app.php in /views
   */
  static function app()
  {
    require_once('views/app.php');
  }

  /**
   * require_once the given path and file name if exist
   * @return bool if exist true, else false 
   */
  private static function render($path, $name)
  {
    $view = "views/$path/$name.php";
    // echo $view;
    if (file_exists($view)) {
      require_once($view);
      return true;
    } else return false;
  }

  /**
   * require_once('views/pages/*')
   */
  static function page($name)
  {
    $path = 'pages';
    $layout = Param::get('layout');
    if (View::isVirtualLayout($layout)) {
      $path .= "/$layout" . 's';
    }

    $viewExist = static::render($path, $name);
    if (!$viewExist) static::render('pages', '404');
  }

  /**
   * require_once('views/layouts/*')
   */
  static function layout($name)
  {
    $viewExist = static::render('layouts', $name);
    if (!$viewExist) {
      if (View::isVirtualLayout(Param::get('layout')))
        static::render('layouts', 'page');
    }
  }

  /**
   * require_once('views/components/*')
   */
  static function component($name)
  {
    $viewExist = static::render('components', $name);
    if (!$viewExist) static::renderNotFoundComponent($name);
  }
  /**
   * echo component is not exist in html comment
   */
  private static function renderNotFoundcomponent($name)
  {
    echo "<!-- Component <$name></$name> is not exist -->";
  }

  /**
   * check if request layout not exist in /views/layouts but exist in /config/virtaul_layouts
   * @param string layout name
   * @return bool
   */
  public static function isVirtualLayout(string $name)
  {
    return in_array($name, config('virtual_layouts'));
  }
}
