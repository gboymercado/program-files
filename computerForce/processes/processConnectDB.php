<?php
/***********************************************************
 * Author: Leonard Siu                                     *
 * Date created: 24 August 2021                            *
 ***********************************************************/
$dbServer = "localhost";
$dbUsername = "root";
$dbPassword = "root"; //For XAMPP password is ""
$dbName = "dbComputerForce";
$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

// Test Database Connection
// if($conn)
// {
//   echo "connected to the database.";
// }
// else {
//   echo"not connected to the database.";
// }
?>
