<?php

include_once './functions/RedirectPage.php';
include_once './functions/Categories.php';

if($_GET['id'] !== null && $_GET['type'] !== null){
    $type = $_GET['type'];
    $id = intval($_GET['id']);

    switch($type){

        case "category":
            $categoriesManager = new Categories();
            echo "appelsap";
        break;


    }
}

// RedirectPage("./index.php");