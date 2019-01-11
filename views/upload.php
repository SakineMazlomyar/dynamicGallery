<?php
    $newImgeSubmitted = isset($_POST['new-img']);

    if($newImgeSubmitted){
        $output = upload();

    }else{
        $output = include_once("./views/upload-form.php");

    }
    return $output;

    function upload(){
        $out = "<pre>";
        $out .= print_r($_FILES, true);
        $out .="</pre>";

        return $out;
    }


?>