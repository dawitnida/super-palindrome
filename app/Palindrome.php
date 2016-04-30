<?php

/**
 * Created by DawitNida.
 * User: Dawit
 * Date: 4/30/2016
 * Time: 19:44
 */
class Palindrome
{
    //this does the main job, get the user input, revere the input and compare the two strings
    //finally store into 2 different files: a bit outside the instruction
    //but easy to print out by reading the files and then rendering with simple css
    public function execInput($data, $input)
    {
        $reverse = strrev($data);
        //compare the two strings, with length to be sure: return int
        $result = strncasecmp($data, $reverse, strlen((string)$data));
        
        $palindromelist = 'palindromelist.log';
        $nonpalindromelist = 'nonpalindromelist.log';
        
        if ($result == 0) {  //the two strings are equal
            file_put_contents($palindromelist, $input . PHP_EOL, FILE_APPEND);
            header("refresh:2; url=../index.php"); //wait for 2 seconds to show the message
            echo trim($input) . " saved to palindrome list.";
        } else {
            file_put_contents($nonpalindromelist, $input . PHP_EOL, FILE_APPEND);
            header("refresh:2; url=../index.php"); //wait for 2 seconds to show the message
            echo trim($input) . " not palindrome.";
        }
    }
}


class Validator
{
    // cleanup the user input, white space, special characters or case sensitivity 
    public function validate($input)
    {
        if (!empty($input)) {
            $data = trim($input);
            $data = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $data));
            return $data;
        } else {
            return false;
        }
    }
}

$check = new Validator();
$palObj = new Palindrome();