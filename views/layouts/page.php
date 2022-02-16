<?php
View::component('headers/header');
View::page(Param::get('page'));
View::component('footers/footer');
View::component('loaders/preloader');
include_once('includes/app-script.php');