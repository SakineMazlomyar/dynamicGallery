<?php
    // We import the class file for accessing the varaibles we need
    include("./class/class.php");
    $pageData = new Page_Data();

    $pageData->title = "Dynamic img gallry";
    $pageData->content = include_once("./views/navigation.php");
    $pageData->addCss('./css/style1.css');
    $pageData->addCss('./css/style2.css');

    $userClicked = isset($_GET['page']);;
    if( $userClicked){
        $pageUpload = $_GET['page'];

    }else{
        $pageUpload = 'gallery';
    }
    $pageData->content .= include_once("./views/$pageUpload.php");
    $page = include("./template/page.php");

    echo $page;

?>