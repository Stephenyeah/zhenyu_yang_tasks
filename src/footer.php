<footer style="background-color: rgb(65, 7, 109); color: white;">
<link rel = "stylesheet" href="style.css"/>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2023Copyright
    <div>
        <?php
               $name = $_SERVER['PHP_SELF'];
                $filename = basename($name);
                echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
            ?>
            <div>
  </div>
  <!-- Copyright -->



</footer></div>
