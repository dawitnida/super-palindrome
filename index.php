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
        <div class="col-sm-12">
            <h2> Palindrome Checker</h2>
            <div class="form-group">
                <form action="<?php echo $basedir . "app/palindromechecker.php"; ?>" method="POST">
                    <input type="text" class="form-control" name="phrase" placeholder="Insert your input here"><br/>
                    <input type="submit" class="btn" name="submit" value="Check"/>
                    <input type="submit" class="btn" name="delete" value="Remove Files"/>
                </form>
            </div>
        </div>

        <div class="col-sm-6">
            <h3> Palindrome list</h3>
            <?php
            $palindromelist = dirname(__FILE__) . "/app/palindromelist.log";
            //check if the file exists : return false if it does not
            if (file_exists($palindromelist)) {
                //read entire file into an array and use natural sort
                $trimmed = file($palindromelist, FILE_SKIP_EMPTY_LINES);
                natcasesort($trimmed);
                foreach ($trimmed as $list) {
                    echo "<font color=" . "green" . ">" . nl2br($list) . "</font>";
                }
            } else {
                echo "No list found or file not created yet.";
            }
            ?>
        </div>

        <div class="col-sm-6">
            <h3> None Palindrome list</h3>
            <?php
            $nonpalindromelist = dirname(__FILE__) . "/app/nonpalindromelist.log";
            if (file_exists($nonpalindromelist)) {
                //read entire file into an array and use natural sort
                $trimmed = file($nonpalindromelist, FILE_SKIP_EMPTY_LINES);
                natcasesort($trimmed);
                foreach ($trimmed as $list) {
                    echo "<font color=" . "red" . ">" . nl2br($list) . "</font>";
                }
            } else {
                echo "No list found or file not created yet.";
            }
            ?>
        </div> 
        <div class="col-sm-6"> 
            <h2> Testing Cloud9</h2>
        </div>
        <div class="col-sm-6"> Testing multiple incons</div>
        <div class="col-sm-6"> Testing multiple incons</div>
        <div class="col-sm-6"> Testing multiple incons</div>
        <?php
         echo "Testing "
         
        ?>
        
        
    </section>

</div>
</body>
</html>