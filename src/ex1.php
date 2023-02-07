
  <?php include 'header.php' ?>
  <style>
  th, td {
          background-color: orange;
      }
      table, th, td {
        border: 1.1px solid black;
        border-collapse: collapse;
      }

  </style>
  <body>

<div class="container" >
    <div class="row">
  <nav class="navbar navbar-expand-lg" style="background-color: rgb(65, 7, 109);" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link2</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div> 
  <div class="row" style="margin-top: 10px; margin-bottom: 10px; margin-right: 5px;">
    <div class="col-sm-3" style="background-color: rgba(228, 235, 194, 0.353);">
      <h3>List of Tasks</h3>
      some thing here
    </div>
    <div class="col-sm-9">
      <h2>What is bootstrap ? </h2> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/440px-Bootstrap_logo.svg.png" align="right" height="150" width="150">
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
    

       

        
        
        
        
        
        <div class="row">
        <?php include 'footer.php' ?>
        
      </div>

    
</body>
</html>