<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else-if statement</title>
</head>
<body>
  <?php
   $hp=20;
   $kp=18;
   if($hp<=$kp){
      echo"hp is greater than kp";
   }
   else if($kp<=$hp){
    echo"kp is greater than hp";
   }
   else{
    echo"both are not same";
   }
  ?>
</body>
</html>