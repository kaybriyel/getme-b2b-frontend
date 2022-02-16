<?php
class PageProps
{
  private static ?PageProps $current = null;

  public HeaderProps $header;
  public IncludeProps $include;
  
  function __construct($props = [])
  {
    $this->header = new HeaderProps;
    $this->include = new IncludeProps;
    $this->update($props);
  }

  function update($props)
  {
    if (!is_array($props)) return;

    // update header
    if (key_exists('header', $props)) {
      $this->header->update($props['header']);
    }

    // update includes
    if (key_exists('include', $props)) {
      $this->include->update($props['include']);
    }
  }

  static function get(string $keyPath)
  {
    $keys = explode('.', $keyPath);
    $props = (object) static::current();
    foreach ($keys as $key) {
      $props = (object) $props->$key;
    }
    return $props;
  }

  static function current()
  {
    if (!static::$current) {
      $page = Param::get('page');
      $layout = Param::get('layout');
      $props = config("pages_props.$layout.$page");
      static::$current = new PageProps($props);
    }
    return static::$current;
  }
}

class IncludeProps
{
  public array $css;
  public array $script;

  function __construct($props = [])
  {
    $this->css = [];
    $this->script = [];
    $this->update($props);
  }

  function update($props)
  {
    if (is_array($props)) {
      // update css
      if (key_exists('css', $props))
        $this->addCSS($props['css']);
      // update script
      if (key_exists('script', $props))
        $this->addScript($props['script']);
    }
  }

  function addCSS($css)
  {
    if (is_array($css)) {
      foreach ($css as $href) {
        if ($href && !in_array($href, $this->css))
          array_push($this->css, $href);
      }
    }
  }

  function addScript($script)
  {
    if (is_array($script)) {
      foreach ($script as $src) {
        if ($src && !in_array($src, $this->script))
          array_push($this->script, $src);
      }
    }
  }
}

class HeaderProps
{
  public bool $hasMobilePromotion = true;
  public bool $hasTop = true;
  public bool $hasMiddle = true;
  public bool $hasBottom = true;
  public bool $isMobile = true;

  function __construct(array $props = [])
  {
    $this->update($props);
  }

  function update($props)
  {
    if (is_array($props)) {
      foreach ($props as $key => $value) {
        $this->$key = $value;
      }
    }
  }
}
