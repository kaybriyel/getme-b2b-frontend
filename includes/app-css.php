<?php
require_once('includes/render-css.php');
render_csss([
  ...config('app-csss')
]);

render_csss((array) PageProps::get('include.css'));