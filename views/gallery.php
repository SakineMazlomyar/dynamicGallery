<?php

    return "<h1>Img Gallery </h1>";
    return showImage();
    function showImage(){
        $out = "<h1>Image Gallery</h1>";
        $out .= "<ul id='images'>";
        $out .= "<li> I will soon upload images</li>";
        $out .= "</ul>";
        return $out;
    }

   

?>