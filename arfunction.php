<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title></title>
  </head>
  <style>
   body{
     text-align: center;
     font-family: impact;
     
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('arlogo.jpg.png');
   }
   div{
     color: white;
     background: green;
     font-size: 80px;
     margin-top: 600px;
   }
   p{

     color: white;
     background: red;
     font-size: 80px;
     margin-top: 500px;
   }
  </style>
  <body>
    <?php
    $Number1 = $_POST['number1'];
    $Sel = $_POST['sel'];
    $Number2 = $_POST['number2'];
    
    /*Operators*/
    $add = $Number1 + $Number2;
    $subtract = $Number1 - $Number2;
    $multiply = $Number1 * $Number2; 
    $divide = $Number1 / $Number2;
    
    if ($Sel == 2){
     echo "<div>". "THE TOTAL IS EQUAL TO : ". $add. "</div>";
    }elseif($Sel == 4){
      echo "<div>". "THE TOTAL IS EQUAL TO : ". $subtract. "</div>";
    }elseif($Sel == 6){
      echo "<div>". "THE TOTAL IS EQUAL TO : ". $multiply. "</div>";
      
    /*this is for division only*/
    }elseif($Sel == 8 && $Number1 < $Number2){
      echo "<p>". "Opss..! OPERATION IS IMPOSIBLE!". "<br>". "PLEASE INPUT ANOTHER PROBLEM.". "<br>". "(cannot be)". "</p>";
    }elseif($Sel == 8){
      echo "<div>". "THE TOTAL IS: ". $divide. "</div>";
    }
    ?>
  </body>
</html>