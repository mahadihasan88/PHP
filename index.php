<?php
$font="arial";
$bgcolor="#f5f8fa";
$headcolor="#183040";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP World</title>
    <style>
        .phpCodding{
            width:900px;
            height:600px;
            margin:0 auto;
           
            background:<?php echo $bgcolor ?>;

        }
        .header,.footer{
            height:50px;
            width:900px;
            background:<?php echo $headcolor ?>;
            text-align:center;
            color:#f5f8fa; 
            font-family:<?php echo $font ?>;  
              padding-top:5px;
              padding-bottom:5px;
            
        }
        .mainContent{
       
       min-height:500px;
       font-size:20px;
       padding:20px;
        }
       
    </style>
</head>
<body>
    <div class="phpCodding">
     <section class="header">
    <h1><?php echo "Young people are committed to taking action to protect our planet" ?></h1>
    
    </section>
    <section class="mainContent">
   

    <?php

   $x=100;

  function operation(){
    global $x;
    $a=10;
    echo $a;
    echo '<br>';
    echo $x;
  }
  operation();






    
    ?>

    

     </section>
    <section class="footer">
     <h1><?php echo "Welcome to world vision" ?></h1>;

     
    </section>
    </div>
</body>
</html>