<?php $title = "Exercise 4"; 
include('layout/header.php')?>

<br>

<h5>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h5>
<?php
$currentmonth = date('F');

    if ($currentmonth == "Aug")
        {
            echo "It's August, so it's still holiday.";
        }
    else {
        echo "Not August, this is $currentmonth so I don't have any holidays.";
        }
?>

<br>
<br>

<h5>2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)</h5>
<?php
    $colour = "red";
    if ($color == "red"){
        echo "The color is red.";
    }
    else {
        echo "The color is not red.";
    }

?>

<br>
<br>

<h5>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h5>

<?php
    $score = 85;
    echo "Your total grade is: $score <br>";
    if ($score > 80) {
    echo "Excellent";
    }
    elseif ($score > 70 or $score <= 80) {
        echo "Great";
    }
    elseif ($score > 60 or $score <= 70) {
        echo "Good";
    }
    elseif ($score > 50 or $score <= 60) {
        echo "Pass";
    }
    else {
    echo "Fail";
    }
?>

<br>
<br>

<h5>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h5>

<div class="col-sm-9 color" >

<form action="action.php" method="post">
    <div class="row">
        <div class="col">
    <input type="text" name="name" class="form-control" required placeholder="Name"><br> 
        </div>
        <div class="col">
    <input type="number" name="age" class="form-control" required placeholder="Age"> <br>
        </div>
    </div>
    <div class="row">
        <input class="form-control" type="Submit" value="Submit" name="submitage">
    </div>
</form>

</div>

<script>
function submitAlert() {
  alert("Submited");
}
</script>

<br>
<br>

<h5>5. Use IF statement with strops function to print the name of the browser.</h5>

<?php 

    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
     
    
        switch(true){
            case strpos($browser , 'Edg'):
                echo "You are using Microsoft Edge.";
                break;
            case strpos($browser , 'Chrome'):
                echo "You are using Google Chrome.";
                break;
            case strpos($browser , 'Mozilla'):
                echo "You are using Mozilla Firefox.";
                break;
            case strpos($browser , 'Safari'):
                echo "You are using Safari.";
                break;
            case strpos($browser , 'AppleWebKit'):
                echo "You are using AppleWebKit.";
                break;
        
        }

?>

<br>
<br>

<?php include "layout/footer.php" ?>