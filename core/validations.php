<?php

function requiredVal($input){

    if(empty($input)){
        return TRUE;
    }
    return FALSE;
}

function minVal($input,$length){

    if( strlen($input) < $length ){
        return TRUE;
    }
    return FALSE;
}

function maxVal($input,$length){

    if( strlen($input) > $length ){
        return TRUE;
    }
    return FALSE;
}

function emailVal($email){

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return TRUE;
    }
    return FALSE;
}