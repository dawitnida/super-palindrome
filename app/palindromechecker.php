<?php
/**
 * Created by DawitNida.
 * User: Dawit
 * Date: 4/30/2016
 * Time: 00:05
 */
include 'Palindrome.php';
$errormesg = "<font color=" . "red" . ">Nothing is happening...insert word, phrase or any character! <br></font>";

if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['submit']) == "Check") {
    //validate input field
    $data = $check->validate($_POST['phrase']);

    if ($data) {
        $input = $_POST['phrase'];   //  this is needed to store the user input as it is,
        // the program does some validations so the input format changes
        // and once validated, send the data for execution 
        $palObj->execInput($data, $input);
    } else {
        // print the error message and refresh after a couple of seconds 
        header("refresh:2; url=../index.php"); //wait for 2 seconds to show the message
        echo $errormesg;
    }
}
if (($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['delete']) == "Remove") {
    $palindromelist = dirname(__FILE__) . "/palindromelist.log";
    $nonpalindromelist = dirname(__FILE__) . "/nonpalindromelist.log";

    //remove files from the server
    unlink($palindromelist);
    unlink($nonpalindromelist);

    header("refresh:2; url =../index.php"); //wait for 2 seconds to show the message
    echo $palindromelist . " and " . $nonpalindromelist . "  removed . ";
}




