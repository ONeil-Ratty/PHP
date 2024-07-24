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
            // this line keeps crashing the if statement

            // return $num**3;

        }
        echo cubeMe($num);
    ?>

    <br>
    <hr>
    <h1>If statements</h1>
    <h4>True or False questions</h4>
    <form action="main.php" method="get">
       Are you male? <input type="text" name="male"><br>
       Are you tall? <input type="text" name="tall"><br>
        <input type="submit">
    </form>
    
    <?php 
    $male = strtolower($_GET["male"]);
    $tall = strtolower($_GET["tall"]);
    if ($male === "true" && $tall === "true"){
        echo "you are male and tall";

    }elseif($male === "true" && $tall === "false"){
        echo "you are a short male";

    }
    elseif($male === "false" && $tall === "true"){
        echo "you are not a male however you are tall";

    }
    else{
        echo "you are not male and not tall";

    }
    
    ?>

    <br>
    <hr>
    <h1>If statements (con't)</h1>
    <h4>which number is greater</h4>
    <form action="main.php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="number" name="num3"><br>
        <input type="submit">
    </form>
    <?php 
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
        function getMax($num1,$num2,$num3){
            if($num1>=$num2 && $num1>=$num3){

                return $num1;

            }
            elseif($num2>=$num1 && $num2>=$num3){
                return $num2;

            }
            else{
                return $num3;
            }
        }

        echo getMax($num1,$num2,$num3);
    
    ?>
    <br>
    <hr>
    <h1>4 operation Calculator</h1>
    <form action="main.php" method="post">
        First number:<input type="number" name="1num"><br>
        Operation:<input type="text" name="operator"><br>
        Second number:<input type="number" name="2num"><br>
        <input type="submit">
    </form>
    <?php
        $num1st=$_POST["1num"];
        $num2nd=$_POST["2num"];
        $op=$_POST["operator"];

            if ($op=="+"){

                echo $num1st+$num2nd;

            }
            elseif ($op=="*"){

                echo $num1st*$num2nd;

            }
            elseif ($op=="-"){

                echo $num1st-$num2nd;

            }
            elseif ($op=="/"){

                echo $num1st/$num2nd;

            }

    
    
    ?>
    <br>
    <hr>
    <h1>Switch Statements</h1>
    <h4>Enter grades: A,B,C,D,F</h4>
    <form action="main.php" method="get">
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php
        $grade=strtoupper($_GET["grade"]);
        switch($grade){
            case "A":
                echo "you did amazing!!";
            break;
            
            case "B":
                echo "you did good";
            break;

            case "C":
                echo "you did okay, work harder";
            break;

            case "D":
                echo "you did not do well, work extra hard";
            break;

            case "F":
                echo "you FAILED!!!";
                break;
            
            default:
                echo "Invalid grade";

        }
    
    
    
    ?>
    <br>
    <hr>
    <h1>While Loops</h1>
    <form action="main.php" method="get">
        <input type="number" name="loop">
        <input type="submit">
    </form>
    <?php 
        $loop=$_GET["loop"];

        while($loop<=5){
            echo "$loop <br>";
            $loop++;
        }

    ?>
    <br>
    <hr>
    <h1>Do while loops</h1>
    <form action="main.php" method="get">
        <input type="number" name="doWhileLoop"><br>
        <input type="submit">
    </form>
    <?php 
        $doWhileLoop=$_GET["doWhileLoop"];

        do{
            echo "$doWhileLoop <br>";
            $doWhileLoop++;

        }while($doWhileLoop <= 5)
    
    
    ?>
    <br>
    <hr>
    <h1>For Loops</h1>
    <form action="main.php" method="get">
        <input type="number" name="forLoop"><br>
        <input type="submit">
    </form>
    <?php 
        $myBooks=array("Harry Potter","To kill a mocking bird","Lord of the rings","Fire and Ice");
        for ($forLoop=$_GET["forLoop"];$forLoop < count($myBooks);$forLoop++){
        echo "$myBooks[$forLoop] <br>";
     }
    
    ?>
    <br>
    <hr>
   <h1>Objects and classes && Constructers && Object functions</h1>
   <h5>Enter name of the listed author to bring up their most sold book</h5>
   <h4>List of Authors:<br> Jk rowling<br>Tolkien<br>R.R Martin<br>Shakespear</h4><br>
    <form action="main.php" method="post">
        Name of Author:<input type="text" name="nameOfAuthor">
        <input type="submit"><br>

    <?php
    $nameOfAuthor=strtolower($_POST["nameOfAuthor"]);

    class Book{
        public $title;
        public $author;
        public $page;
        public $available;

        function __construct($aTitle,$aAuthor,$aPage,$availability){
            $this->title=$aTitle;
            $this->author=$aAuthor;
            $this->page=$aPage;
            $this->available=$availability;
        }
        
        function available(){
            if ($this->available=="yes"){

                echo "it is available";

            }
                else{
                    return "it is not available";


                }
        }
            
    }
    $book1= new Book("Harry Potter <br>","Jk Rowling <br>",400,"yes");
    $book2= new Book("Lord Of The Rings <br>","Tolkien <br>",700,"no");
    $book3= new Book("Game of thrones <br>","R.R Martin <br>",1000,"yes");
    $book4= new Book("Romeo and Juliet <br>","Shakespear <br>",150,"yes");

    if ($nameOfAuthor=="jk rowling"){
      echo "Author: ",$book1->author;
      echo "Title: ",$book1->title;
      echo "Pages: ",$book1->page;
      echo "<br>Availability: ",$book1->available();
    }
        elseif($nameOfAuthor=="tolkien"){
            echo "Author: ",$book2->author;
            echo "Title: ",$book2->title;
            echo "Pages: ",$book2->page;
            echo "<br>Availability: ",$book2->available();
        }
            elseif($nameOfAuthor=="r.r martin"){
                echo "Author: ",$book3->author;
                echo "Title: ",$book3->title;
                echo "Pages: ",$book3->page;
                echo "<br>Availability: ",$book3->available();
            }
                elseif($nameOfAuthor=="shakespear"){
                    echo "Author: ",$book4->author;
                    echo "Title: ",$book4->title;
                    echo "Pages: ",$book4->page;
                    echo "<br>Availability: ",$book4->available();
                }
                    else{
                        echo "invalid Author";
                    }

    

    ?>
   
</body>
</html>