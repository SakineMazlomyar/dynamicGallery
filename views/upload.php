<?php
    $newImgeSubmitted = isset($_POST['new-img']);

    if($newImgeSubmitted){
        $output = upload();

    }else{
        $output = include_once("./views/upload-form.php");

    }
    return $output;

    function upload(){
        include_once("./classes/uploader-class.php");
        $uploader = new Upload("image-data");
        $uploader->saveIn("img");
        $fileUpload = $uploader->save();

        if($fileUpload){
            $out  = "new img uploaded";
        }else{
            $out  = "something went wrong";
        }
        return $out;
    }


?>