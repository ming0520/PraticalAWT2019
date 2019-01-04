<?php
    error_reporting(0);
    class Square {
        var $width;

        function __construct($wid = 3){
            $this->width = $wid;
        }
        function __destruct(){
            $this->width = "";
        }

        function setWidth($w){
            $this->width = $w;
        }

        function getWidth(){
            echo "Width :" . $this->width . "<br/>";
        }

        function getArea(){
            echo "Area : " . $this->width * $this->width . "<br/>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pratical 1 - Square</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "GET">
    <fieldset>
    <legend>Books</legend>
        <label for="Books">
            Width: 
            <input type="text" name = "books">
        </label>
    </fieldset>
    <br>
    <fieldset>
    <legend>Garden</legend>
        <label for="Garden">
            Width: 
            <input type="text" name = "garden">
        </label>
    </fieldset>
    <br>
    <input type="submit" value="Submit">
    <br>
    </form>

    <?php
        echo "<hr>";
        $books = new Square;
        $garden = new Square;
        echo "Books <br/>" ;
        $books->setWidth($_GET["books"]);
        $books->getWidth();
        $books->getArea();
        echo "<hr>";

        echo "Garden</br>";
        $garden->setWidth($_GET["garden"]);
        $garden->getWidth();
        $garden->getArea();
        
    ?>
</body>
</html>