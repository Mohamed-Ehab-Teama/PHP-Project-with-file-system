<?php

function checkRequestMethod($method){

    if( $_SERVER['REQUEST_METHOD'] == $method ){
        return TRUE;
    }

    return FALSE;

}

function checkPostInput($input){

    if(isset($_POST[$input])){
        return TRUE;
    }

    return FALSE;

}


function sanitizeInput($input){

    return trim(htmlspecialchars(htmlentities($input)));
}

function redirect($path){

    return header("location:$path");
}


function loginVal($value1,$value2){

    if($value1 == $value2) {
        return TRUE;
    }
    return FALSE;
}