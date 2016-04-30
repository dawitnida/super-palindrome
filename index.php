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
    <title>Palindrome Checker</title>
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
        <div class="col-sm-12" style="margin-top:40px">

            <div class="form-group">
                <form action="<?php echo $basedir . "app/palindromechecker.php"; ?>" method="POST">
                    <input type="text" class="form-control" name="phrase" placeholder="Insert your input here"><br/>
                    <input type="submit" class="btn" name="submit" value="Check"/>
                </form>
            </div>
        </div>

        <div class="col-sm-6">
            <h2> Palindrome list</h2>
            <?php
            $palindromelist = dirname(__FILE__) . "/app/palindromelist.log";
            //check if the file exists : return false if it does not
            if (file_exists($palindromelist)) {
                //read entire file into a string and close the file 
                $list = file_get_contents($palindromelist, FILE_USE_INCLUDE_PATH);
                echo "<font color=" . "green" . ">" . nl2br($list) . "</font>";
            } else {
                echo "No list found or error while opening file.";
            }
            ?>
        </div>

        <div class="col-sm-6">
            <h2> None Palindrome list</h2>
            <?php
            $nonpalindromelist = dirname(__FILE__) . "/app/nonpalindromelist.log";
            if (file_exists($nonpalindromelist)) {
                //read entire file into a string and close the file 
                $list = file_get_contents($nonpalindromelist, FILE_USE_INCLUDE_PATH);
                echo "<font color=" . "red" . ">" . nl2br($list) . "</font>";
            } else {
                echo "No list found or error while opening file.";
            }
            ?>
        </div>
    </section>

</div>
</body>
</html>