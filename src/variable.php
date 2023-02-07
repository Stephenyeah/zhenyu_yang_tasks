
  
  <?php
  $title="Exercise 3";
  include 'header.php' ?>

  <body>

    <div class="container" >
    
        <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
            <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
            <h3>List of Tasks</h3>
            some thing here
            </div>
            <div class="col-sm-9">
                
            <h5> 1. Create a simple html form </h5> 
             
            <form action="action.php" method="post">
                <div class="mb-3">
                <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                </div> 
        
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
        
            </form>
            <br>
            <h5>2. Apply bootstrap style to the form.</h5>
            <h5>Make them in the css file.</h5>
            <br>
            <h5>3. Prepare a simple html table and apply bootstrap style to the table</h5>
            <table class="table table-success">
            <?php
           
            $g1 = 7;
            $g2 = 8;
            $g3 = 6;
            
            ?>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Grade</th>
            </tr>
            <tr>
                <td>1</td>
                <td>alex</td>
                <td>yang</td>
                <td><?php echo $g1?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>stephen</td>
                <td>zhou</td>
                <td><?php echo $g2?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cisser</td>
                <td>Arean</td>
                <td><?php echo $g3?></td>
            </tr>
            </table> 
            <br>
            
            <h5>4. Write a PHP script with two string variables.</h5>
            <?php $text1 = "((I am now an IT student at HAMK University. My friend and I developed a WeChet applet for Chinese live in Finland, which is a social platform for dating, second-hand, renting, and job hunting. Currently preparing to go online. When I was working on this project,))";
            $text2 = "((I encountered many technical problems, which were basically solved through research and the help of friends. I am also a crazy gamer, with more than 15 years of experience in various games, such as World of Warcraft, GTA, Romance of Three Kingdoms, and Assetto Corsa. freely redistributable, anyone may create a distribution for any purpose.))";
                print $text1;
                print $text2;
                 echo '<br>';
                 $text3 = $text1 . $text2;
                 echo '<br>';
                
                 echo "Total words is " . strlen($text3);
            
            ?>
            <br>
            <hr>
            
            <h5>5. Write a script to add up the numbers: 298, 234, 46.</h5>

            <?php 
                $num1 = 298;
                $num2 = 234;
                $num3 = 46;
                $total = $num1 + $num2 + $num3;

            echo "\nTheir numbers 298, 234 and 46, total is $total";

            ?>

            <br>
            <hr>

            <h5>6. Write a PHP script to detect the browser being used to view your pages.</h5>
            
            <?php
            echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";

          
            ?>
            <hr>
       
       <h5>7. Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h5>
       <br>
              
           

    </div>
    
    </div>
       
 
        
        
    </body>    
        
        <div class="row">
        <?php include 'footer.php' ?>
        
      </div>

    







