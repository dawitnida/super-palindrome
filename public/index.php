<?php
/**
 * Created by DawitNida.
 * User: Dawit
 * Date: 4/29/2016
 * Time: 16:45
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palindrome </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <!-- Header section -->
    <header class="header-wrapper">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Word List</a></li>
            </ul>
        </div>
    </header>
    <!-- Main content -->
    <section class="container">
        <div class="col-sm-12">
            <h2 class="heading heading--strong">Coding Assessment</h2>
            <P> The purpose of this exercise is to evaluate the style and quality of your code as well as your 
                problem solving skills. 
                Even if you can’t complete the given assignment, try to code as far as 
                you can. Remember to take into account error handling. 
                You may submit your code as a 
                zipped folder containing your files. Allowed languages are PHP, HTML and CSS.
            </P>

            <p> Palindrome  From Wikipedia: ​ “ ​
                A palindrome is a word, phrase, number, or other sequence of characters 
                which reads the same backward or forward. Allowances may be made for adjustments to capital 
                letters, punctuation, and word dividers. Famous examples include "A man, a plan, a canal, 
                Panama!", "Amor, Roma", "race car", "stack cats", "step on no pets", "taco cat", "put it up", "Was 
                it a car or a cat I saw?" and "No 'x' in Nixon".”   
            </p>
            <ol>
                <li> Your task is to check if a word from given user input is a palindrome. Implement a way for 
                    a user to give input and a way to check it.   
                </li>
                <li>
                    After each user input, print the input underneath the input field as green if it is a 
                    palindrome, and red if not. Non­palindromes should also be printed as inverted.   
                    <br/>
                    <b> NB!​</b>
                     The palindrome should read correctly regardless of whitespace, punctuation or 
                    capital letters. The printed inputs should still have whitespace etc. left. 
                </li>
                <li>Reorder the printed palindromes alphabetically after each input. Correct palindromes 
                    should all be listed before incorrect ones.
                </li>
            </ol>
        </div>
    </section>
</div>
</body>
</html>