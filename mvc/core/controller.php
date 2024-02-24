<?php 
    class controller {
        public function views($view, $data = []) {
            require_once "./mvc/views/". $view .".php";
        }
    }
?>