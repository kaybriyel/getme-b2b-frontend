<?php
class PageProps
{
  private static ?PageProps $current = null;

  public HeaderProps $header;
  public IncludeProps $include;
  public ExcludeProps $exclude;
  
  function __construct($props = [])
  {
    $this->header = new HeaderProps;
    $this->include = new IncludeProps;
    $this->exclude = new ExcludeProps;
    $this->update((array) $props);
  }

  function update($props)
  {
    if (!is_array($props)) return;

    // update header
    if (key_exists('header', $props)) {
      $this->header->update((array) $props['header']);
    }

    // update includes
    if (key_exists('include', $props)) {
      $this->include->update((array) $props['include']);
    }

    // update excludes
    if (key_exists('exclude', $props)) {
      $this->include->update((array) $props['include']);
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
  public array $js;

  function __construct($props = [])
  {
    $this->css = [];
    $this->js = [];
    $this->update((array) $props);
  }

  function update($props)
  {
    if (is_array($props)) {
      // update css
      if (key_exists('css', $props))
        $this->addCSS((array) $props['css']);
      // update js
      if (key_exists('js', $props))
        $this->addJS((array) $props['js']);
    }
  }

  function addCSS(array $csss)
  {
    if (is_array($csss)) {
      foreach ($csss as $href) {
        if ($href && !in_array($href, $this->css))
          array_push($this->css, $href);
      }
    }
  }

  function addJS(array $jss)
  {
    if (is_array($jss)) {
      foreach ($jss as $src) {
        if ($src && !in_array($src, $this->js))
          array_push($this->js, $src);
      }
    }
  }
}

class ExcludeProps
{
  public array $css;
  public array $js;

  function __construct($props = [])
  {
    $this->css = [];
    $this->js = [];
    $this->update((array) $props);
  }

  function update($props)
  {
    if (is_array($props)) {
      // update css
      if (key_exists('css', $props))
        $this->addCSS((array) $props['css']);
      // update js
      if (key_exists('js', $props))
        $this->addJS((array) $props['js']);
    }
  }

  function addCSS(array $csss)
  {
    if (is_array($csss)) {
      foreach ($csss as $href) {
        if ($href && !in_array($href, $this->css))
          array_push($this->css, $href);
      }
    }
  }

  function addJS(array $jss)
  {
    if (is_array($jss)) {
      foreach ($jss as $src) {
        if ($src && !in_array($src, $this->js))
          array_push($this->js, $src);
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
    $this->update((array) $props);
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
