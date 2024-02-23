<?php
session_start();
include '../core/functions.php';
include '../core/validations.php';
$errors = [];


if (checkRequestMethod("POST") && checkPostInput('email')) {

    //To make The email and password as Variables
    foreach ($_POST as $key => $value) {

        $$key = sanitizeInput($value);
    }


    //Email Validation
    if (requiredVal($email)) {

        $errors[] = "Email Is Required!";
    } elseif (!emailVal($email)) {

        $errors[] = "Please, enter a valid Email!";
    }

    //Password Validation
    if (requiredVal($password)) {
        $errors[] = "Password Cannot be Empty!";
    }


    // GET Data From CSV File into array $arr to check it with login data
    $arr = [];

    $handle = fopen("../data/users.csv", "c+");

    while (!feof($handle)) {

        $arr[] = fgetcsv($handle);
    }


    // Will use them while looping on CSV file data stored in the $arr array
    $success = false;
    $x = 0;

    // Compare login data with the existed data in CSV file
    for ($i = 0; $i < count($arr); $i++) {


        if (!(loginVal($arr[$i][1], $email) && loginVal($arr[$i][2], sha1($password)))) {
            continue;
        } else {
            $success = TRUE;
            $x = $i;
            break;
        }
    }

    if ($success == TRUE) {
        $_SESSION['auth'] = [$arr[$x][0], $email];
        redirect("../index.php");
        die;
    } else {
        $errors[] = "InValid Login Data!";

        $_SESSION['errors'] = $errors;

        redirect("../login.php");
    }
}
