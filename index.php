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
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
      <table>
        <tr>
          <td>Name:</td>
          <td><input type="text" name="username" required="1"></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email"></td>
        </tr>
        <tr>
          <td>Website:</td>
          <td><input type="website" name="website"></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
        </td>
        </tr>
        <tr>
          <td>Comment:</td>
          <td><textarea name="comment" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
          
          <td><input type="submit" name="submit" value="submit"></td>
        </tr>
      </table>
    </form>

    <?php


     if($_SERVER['REQUEST_METHOD']=="POST"){
      $name=validate($_POST['username']);
      $email=validate($_POST['email']);
      $website=validate($_POST['website']);
      $gender=validate($_POST['gender']);
      $comment=validate($_POST['comment']);

     
      echo "$name <br>";
      echo "$email <br>";
      echo "$website <br>";
      echo "$gender <br>";
      echo "$comment <br>";
  
     }
     function validate($data){
       
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    
    }
 
    
    ?>

    

     </section>
    <section class="footer">
     <h1><?php echo "Welcome to world vision" ?></h1>;

     
    </section>
    </div>
</body>
</html>