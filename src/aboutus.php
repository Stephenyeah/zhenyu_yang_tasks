<?php include 'header.php' ?>
<h1> introduce </h1>
<p>
    This is about us.
</p>
<?php include ‘footer.php' ?>

    <?php
    $fname = "Zhenyu";
    $lname = "Yang";
    $number = 7;
    $_age = 33;
    $a = 10 ;
    $variable = "what";
    function test(){
        echo $a;
    }
    function fullname(){
        global $fname, $lname;
        $fullName = $fname ." ". $lname ;
        echo "My full name is $fullName". "."."<br>";
        echo "The length of ". $fullName . " is " . strlen($fullName).".". "<br>";
    }
    fullname();
    echo "<br>";
    function newTest(){
        static $a = 234;
        echo $a . "<br>";
        $a++;
    } 
    newTest();
    newTest();
    newTest();
    echo "<br>";
    ?>

    <?php
    $host = $_SERVER['DOCUMENT_ROOT'];
    echo $host . "<br>";
    echo "<br>";
    ?>

    <?php
    echo "Uncle Stephen, he lost a lot of times and was beaten by himself, but he want to kick his own ass."."<br>";
    echo "how many words here is ";
    echo str_word_count("Uncle Stephen, he lost a lot of times and was beaten by himself, but he want to kick his own ass.");
    echo "<br>" ."<br>";

    ?>

    <?php
    //to resverse the name
    echo strrev("Zhenyu Yang");
    echo "<br>" ."<br>";
    ?>

    <?php
    $info = 'Using $ like $variable';
    echo $info . "<br>";

    $info1 = "Using $ like $variable";
    echo $info1 . "<br>";
    $a = "This is a quote \"Hello World \"";
    echo $a;
    echo"<br>" ."<br>";
    ?>

    <?php
    $first_number = 77;
    $second_number = 86;
    $sum_total =$first_number +$second_number;

    $direct_text = 'Result =';
    echo "$first_number + $second_number "."<br>";
    print($direct_text.$sum_total);

    ?>