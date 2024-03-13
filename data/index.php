<?php

include 'autoloader/autoloader.php';
$model = new Model();
$controller = new Controller($model);
$controller->index();
