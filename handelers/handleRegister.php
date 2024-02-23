<?php
include '../core/functions.php';

if(checkRequestMethod("POST") && checkPostInput('name')){

    foreach($_POST as $key => $value){
        $$key = sanitizeInput($value);
    }

    echo $name . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";


}else{
    echo "Unsupported Method ";
}