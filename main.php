<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Madlib Game</h1>
    <form action="main.php" method="get">
        Group of people: <input type="Text" name="groupOfPeople" id="group of people"><br>
        place: <input type="Text" name="place" id="place"><br>
        verb: <input type="Text" name="verb" id="verb"><br>

        <input type="submit">

    </form>

    <?php

        $groupOfPeople = $_GET["groupOfPeople"];
        $place = $_GET["place"];
        $verb = $_GET["verb"];
        
        echo "we the $groupOfPeople <br>";
        echo "came to $place <br>";
        echo "to $verb <br>";

    ?>
    <br>
    <hr>


    <!-- Url parameters -->
     <h1>Url Parameters (safe) </h1>
    <form action="main.php" method="post">
        password: <input type="password" name="password">

        <input type="submit">

    </form>
    <?php 
        echo $_POST["password"]
    ?>

    <br>
    <hr>
    <h1>Pick between an <i>ARRAY</i> of cars </h1>
    <p>porch = 0<br>VW = 1<br>Toyota=2<p>
    <form action="main.php" method="get">
        <input type="number" name="numberInArray">
        <input type="submit">
    </form>
    <?php 
        $num = $_GET["numberInArray"];
        $cars = array("porche","VW","toyota");
        echo $cars[$num];
    
    ?>

    <br>
    <hr>
    <h1>CheckBoxes</h1>
    <form action="main.php" method="post">
       Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
       Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
       Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
        <input type="submit">
    </form>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
        echo $fruits[1];
        echo $fruits[2];
    
    ?>

    <br>
    <hr>
    <h1>Grades of students (associated array)</h1>
    <h5>names of leaners</h5>
    <p>Tom<br>Angela<br>Denace<br>Joseph<p>

    <form action="main.php" method="get">
        <input type="text" name="nameOfLearner">
        <input type="submit">
    </form>
    <?php 
        $nameOfLearner= $_GET["nameOfLearner"];
        $learners= array("Tom"=>"Passed","Angela"=>"Passed","Denace"=>"Failed","Joseph"=>"Passed");

        echo  $learners[$nameOfLearner];
    ?>

    <br>
    <hr>
    <h1><i>FUN</i>ctions</h1>
    <form action="main.php" method="get">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        
        <input type="submit">
    </form>
    <?php 
        $name = $_GET["name"];
        $age = $_GET["age"];

        function sayHi($name, $age){
            echo "Hello my name is $name and i am $age years old<br>";
        }

        sayHi($name,$age);
        sayHi($name,$age);
    
    ?>

    <br>
    <hr>
    <h1>Return Statememts</h1>
    <h5>Cube me</h5>
    <form action="main.php" method="get">
        <input type="number" name="cubeMe">
        <input type="submit">
        <br>
    <?php 

        $num=$_GET["cubeMe"];

        function cubeMe($num){
            return $num**3;

        }
        
        $cubeResult=cubeMe($num);
        
        echo $cubeResult;
    ?>

</body>
</html>