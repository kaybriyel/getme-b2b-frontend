<?php
render_page();

function render_page()
{
  View::component('headers/header');
  View::page(Param::get('page'));
  View::component('footers/footer');
  View::component('loaders/preloader');
}
