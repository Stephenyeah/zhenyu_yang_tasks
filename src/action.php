<?php

    if(isset($_POST['Submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        
        echo "<h3> Your names is $firstname $lastname</h3>";
    }

    elseif(isset($_POST['submitage'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        
    if ($age >= 18) {
        echo "Congratrulation! $name, you can vote because you are an adult.";
        }
        else {
            echo "Sorry! $name, you can't votE, you are too young.";
        }
}



?>
