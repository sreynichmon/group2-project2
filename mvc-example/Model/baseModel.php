<?php
    class baseModel{
        private $data;

        public function __construct(){
            //here, we prepare data..
            $this->data = "This is the 1st page.";
        }

        public function getData(){
            return $this->data;
        }

        public function setData($data){
            $this->data = $data;
        }
    }


?>