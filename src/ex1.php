
  <?php 
   $title="Exercise 1";
   include 'layout/header.php' ?>    
  
      <h1> 3.1</h1>

      <?php
      echo "Zhenyu Yang". "<br>";
      echo "BBCAP22";
      ?>
      <h1> 3.2</h1>

      <script>
        document.write("Hello world this is JavaScript");
        </script>
        <input type="button" onclick="hello()" value = "Click Me">

        <br>
        <br>

      <?php

      $my_string = "Hello my name is Zhenyu, my group is team 6";
      echo "$my_string  <br />";
      echo "Hello world! My name is \"Stephen\"";

      ?>

      <h1> 3.3 Current Date </h1>
      
      <?php
      echo "Today is " . date("d/m/Y") . "<br>";
      ?>

      <h1> 3.4 Variable title in Php </h1>

      <?php
      $title1="contact us - zhenyu yang";
      echo "<h1> . $title1 . </h1>";        

      ?>
      <script>
        //window.alert
        // window.alert("This wil trigger an alert box.");
        // windows.alert(5+10);
        document.write("Hello this is interesting");
        </script>


      <h1> 3.5 table in Php </h1>
      <button onclick = "add()"> Click to Add </button>
      <hr>

      <p id="place1" style="color:red; background-color:yellow;"> </p>
      <span id="place2" style="color:red; background-color:green;"> </span>

      <script>
       document.getElementById("place1").innerHTML = "This will go to place1"; 
       document.getElementById("place2").innerHTML = "This will go to span"; 
        
      </script>

      <br>
      <br>

      <?php
      $g1 = 5;
      $g2 = 4;
      $g3 =5;

      echo "
      
      <table>
      <tr>
      <th> S.N </th> <th> Name </th><th> Grade </th>
      </tr>
      <tr>
      <td> 1 </td><td> Pekka </td><td> $g1 </td>
      </tr>
      <tr>
      <td> 2 </td><td> Johanna </td><td> $g2 </td>
      <tr>
      <tr>
      <td> 3 </td><td> Johanna </td><td> $g3 </td>
      <tr>
      </table>"
          
      ?>
            <br>
            <h1> 4 Screenshoot for the development enviroment </h1>
        
        <img src="images/screenshoots.png" alt="wrong" style="width: 70%;">
       
       
        <br>
        <br>       


        <h2>5. change the background color</h2>

        <form>
        <input type="color" name = "background" onchange="changeColor('background',this.value)">
        </form>
          
              
      
        <?php include 'layout/footer.php' ?>
        


    

