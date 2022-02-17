<?php
render_page();

function render_page()
{
  View::page(Param::get('page'));
}
