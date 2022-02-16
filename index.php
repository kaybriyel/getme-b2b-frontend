<?php
require_once('ViewController.php');
require_once('config/app.php');
require_once('ViewProps.php');
require_once('Param.php');

response();

function response() {

  if(!Param::has('page'))
    Param::set('page', 'home');
  // if no layout, or virtaul layout is given
  if(!Param::has('layout'))
    Param::set('layout', 'page');

  View::app();
}