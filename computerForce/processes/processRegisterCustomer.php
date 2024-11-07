<?php
/***********************************************************
 * Author: Leonard Siu                                     *
 * Date created: 24 August 2021                            *
 ***********************************************************/
//connect to the database
include('processConnectDB.php');

//If register button has been clicked
if(isset($_POST['register']))
{
    //assigned all values entered in the registration form to variables
    /*Note: the text inside the $_POST['text'] are the values in name attribute
       of the registration form.*/
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $emailAddress = mysqli_real_escape_string($conn, $_POST['emailAddress']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $surname = mysqli_real_escape_string($conn, $_POST['surname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
    if($dateOfBirth=='')
    $dateOfBirth = NULL;
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $suburb = mysqli_real_escape_string($conn, $_POST['suburb']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);

    $sql = "INSERT INTO customer (username
                                 ,emailAddress
                                 ,password
                                 ,firstName
                                 ,surname
                                 ,gender
                                 ,dateOfBirth
                                 ,address
                                 ,suburb
                                 ,postCode
                                 ,state
                                 ,phoneNumber
                               )
                 VALUES('$username'
                       ,'$emailAddress'
                       ,md5('$password')
                       ,'$firstName'
                       ,'$surname'
                       ,'$gender',"
                       .($dateOfBirth==NULL?"NULL":"'$dateOfBirth'")."
                       ,'$address'
                       ,'$suburb'
                       ,'$postcode'
                       ,'$state'
                       ,'$phoneNumber')";

    //Note: md5('$password') encrypts the password
    $resultSet = mysqli_query($conn, $sql);

    header("location: ".$_SERVER['HTTP_REFERER']);
    exit;
}
?>
