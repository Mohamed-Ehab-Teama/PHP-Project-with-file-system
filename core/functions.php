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