<?php
// Delcare the strict type to true
// declare (strict_type = 1)

include "autoloader/autoloader.auto.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<hr>
<h1> Choose your pet </h1>
<form action = "index.php" method = "get">
   Your name: <input type="text" name = "name"><br>
    Your pet: <Input type="text" name = "petType"><br>
    Prefered pet age : <input type = "number" name = "petAge">
    <input type="submit">

 <?php
    // echoing the static property
    //instances the class to a object 
    $nameOfOwner = $_GET["name"];
    $petAge = $_GET["petAge"];

    $pet = new Pet();
    $petType = strtolower($_GET["petType"]);
    // calls the function within the object
    echo $pet->owner($nameOfOwner,$petType);
    echo Pet::setNewAgeOfPet($petAge);
    echo "<br>Age :",Pet::$ageOfPet;

 ?>
 <br>
 <hr>
 <h1> My Calculaor </h1>
 <form action ="index.php" method ="get">
   <input type ="number" name="num1" placeholder = "myFirstNumber">
   <select name="operation">
      <option value = "add">Addition</option>
      <option value = "multi">Multiplication</option>
      <option value = "div">Division</option>
      <option value = "sub">Subtraction</option>
   </select>
   <input type ="number" name ="num2" placeholder ="mySecondNumber">
   <input type ="submit">
</form>
<?php
$num1=$_GET["num1"];
$operation=$_GET["operation"];
$num2=$_GET["num2"];

$calculator = new calc($num1,$operation,$num2);
echo $calculator->calculator();

?>




</body>
</html>