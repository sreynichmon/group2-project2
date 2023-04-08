<?php
    class baseController{
        private $model;

        public function __construct($model){
            //set model
            $this->model = $model;

            //process user input
            if (isset($_GET['uinput']) && !empty($_GET['uinput'])) {
                $this->updateModel($_GET['uinput']);
            }
        }

        private function updateModel($data){
            $this->model->setData($data);
        }
    }

?>