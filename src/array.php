
  
  <?php
  $title="Exercise 5";
  include 'header.php' ?>

  <br>
    <h5>1. Write a php script to display courses as list.</h5>    
    <?php
    $courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");
    echo "<ul>";
    foreach ($courses as $course) {
        echo "<li>" . $course . "</li>";
    }
    echo "</ul>";
    ?>
    
<br>
<br>
    <h5>2. The unset() function is used to remove element from the array.</h5>

    <?php
        $courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");        
        
        print_r($courses1);
        echo "<br>";
        echo " remove the element \"JavaScript\" from the array <br>";
       
        unset($courses1[2]);
        
        echo "use array_values<br> ";
        $courses1 = array_values($courses1);
        
        echo "dump the information.<br>";
        var_dump($courses1);
     ?>

<br>
<br>
    <h5>3. Sort the following array $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");</h5>
    <br>   
        
        <?php
        echo "a) Ascending order sort by value:<br>"; 
        $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
        sort($courses3);
        print_r($courses3);
        
        echo "<br>";
        ?>

        

        <?php
        echo "b) Ascending order sort by Key:<br>";
        $courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
        ksort($courses3);
        print_r($courses3);
        echo "<br>";
        ?>

        
        <?php
        echo "c) Descending order sort by Value:<br>";
        $courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
        rsort($courses3);
        print_r($courses3);
        echo "<br>";
        ?>

        
        <?php
        echo "d) Descending order sort by Key:<br>";
        $courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
        krsort($courses3);
        print_r($courses3);
        echo "<br>";
        ?>



<br>
<br>
   <h5>4. Change the following array's all values to upper case. <br> $courses4=array("php", "html", "javascript", "cms", "project").</h5>
        <?php
        $courses4 = array("php", "html", "javascript", "cms", "project");
        $courses4 = array_map('strtoupper', $courses4);
        print_r($courses4);
        ?>

<br>
<br>

    <h5>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays).</h5>
        <?php
        $colors = array(
            "Red" => "#FF0000",
            "Green" => "#00FF00",
            "Blue" => "#0000FF",
            "Yellow" => "#FFFF00",
            "Purple" => "#800080"
        );

        print_r($colors);
        ?>


<br>
<br>
    <h5>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h5>  

    Write comments to explain the following code (when asked):
        <?php
        echo "<hr><h2> Calculation average temperature: </h2>";
        $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
        68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
        // what is explode and what does the below code do? : 
        //The variable $month_temp contains a string of recorded temperatures separated by commas.
        //The explode function is used to convert this string into an array, where each temperature is an element in the array. 
             

        $temp_array = explode(',', $month_temp);
        $tot_temp = 0;
        // What is count?
        /*The count function is used to count the number of elements in the $temp_array, 
        which is stored in the variable $temp_array_length.
        */
        $temp_array_length = count($temp_array);
        foreach($temp_array as $temp)
        {
        $tot_temp += $temp;
        }
        $avg_high_temp = $tot_temp/$temp_array_length;
        echo "Average Temperature is : ".$avg_high_temp."
        "; 
        // what does sort do?
        //The sort function is used to sort the $temp_array in ascending order.
        
        sort($temp_array);
        echo "<br> List of five lowest temperatures :";
        for ($i=0; $i< 5; $i++)
        { 
        echo $temp_array[$i].", ";
        }
        echo "<br>List of five highest temperatures :";
        // explain the following loop
        //This loop starts from the $temp_array_length-5th element and displays the last five elements.
        for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
        {
        echo $temp_array[$i].", ";
        }
        ?>



        
        <div class="row">
        <?php include 'footer.php' ?>
        
      </div>

    







