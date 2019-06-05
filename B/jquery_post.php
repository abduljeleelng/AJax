<?php
/**
 * Created by PhpStorm.
 * User: NobleSoft
 * Date: 5/18/2019
 * Time: 1:01 PM
 */
if($_POST["name"])
{
    $name = $_POST["name"];
    $email = $_POST["email"];
// Here, you can also perform some database query operations with above values.
    echo "Welcome ". $name ."!"; // Success Message
}