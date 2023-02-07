
  <?php 
   $title="Exercise 1";
   include 'header.php' ?>
  <style>


  </style>
  <body>


  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>List of Tasks</h3>
      some thing here
    </div>
    <div class="col-sm-9">
  
      <h1> 3.1</h1>

      <?php
      echo "Zhenyu Yang". "<br>";
      echo "BBCAP22";
      ?>
      <h1> 3.2</h1>

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


      <h1> 3.5 table in Php </h1>

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
           

          </div>
        </div>
    

       

        
        
        
        </body>  
        
        <div class="row">
        <?php include 'footer.php' ?>
        
      </div>

    

