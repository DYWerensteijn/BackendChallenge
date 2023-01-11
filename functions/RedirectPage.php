<?php


function RedirectPage($location){
    header('location: ' . $location);
    exit;
}