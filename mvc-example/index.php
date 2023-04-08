<?php

    include 'Model/baseModel.php';
    include 'View/mainView.php';
    include 'Controller/baseController.php';

    $model = new baseModel();
    $controller = new baseController($model);
    $view = new mainView($model);

    echo $view->output();

?>