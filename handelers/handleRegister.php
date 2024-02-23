<?php
session_start();
include '../core/functions.php';
include '../core/validations.php';
$errors = [];

if (checkRequestMethod("POST") && checkPostInput('name')) {

    foreach ($_POST as $key => $value) {
        $$key = sanitizeInput($value);
    }

    //Name Validation and Sanitization
    if (requiredVal($name)) {
        $errors[] = "Name Cannot be Empty!";
    } elseif (minVal($name, 3)) {
        $errors[] = "Name cannot be less than 3 Chars!";
    } elseif (maxVal($name, 25)) {
        $errors[] = "Name Cannot be greater than 25 Chars!";
    }

    //Email Validation and Sanitization
    if (requiredVal($email)) {

        $errors[] = "Email Is Required!";
    } elseif (!emailVal($email)) {

        $errors[] = "Please, enter a valid Email!";
    }


    //Password Validation and Sanitization
    if (requiredVal($password)) {
        $errors[] = "Password Cannot be Empty!";
    } elseif (minVal($password, 6)) {
        $errors[] = "Password must be between 6-18 Chars!";
    } elseif (maxVal($password, 18)) {
        $errors[] = "Password must be between 6-18 Chars!";
    }




    if (empty($errors)) {

        //Sotre Data in CSV file
        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($users_file, $data);

        //redirect
        $_SESSION['auth'] = [$name, $email];
        redirect("../index.php");
        die();
        //


    } else {
        $_SESSION['errors'] = $errors;
        redirect("../register.php");
        die;
    }
} else {


    echo "Unsupported Method ";
}
