<?php
    class mainView{
        private $model;

        public function __construct($model){
            $this->model = $model;
        }

        public function output(){
            //here we prepare html page will be displayed to user
            $html = '<h2>' . $this->model->getData() . '</h2>' . 
                    '<br><a href="index.php?uinput=This is new page.">Update</a>';

            return $html;
        }
    }

?>