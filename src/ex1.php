<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
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
        
        
        <h1> 4 Screenshoot for the development enviroment </h1>
        
        <img src="images/screenshoots.png" alt="wrong" style="width: 70%;">
        
       


    
</body>
</html>