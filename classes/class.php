<?php
    class Page_Data{
        public $title = "";
        public $content = "";
        public $form = "";
        public $css = "";

        public function addCss($href){
            $this->css .= "<link href='$href' rel='stylesheet' />";
        }
    

    }
?>