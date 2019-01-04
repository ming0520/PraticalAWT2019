<?php
    class Pyramid {
        var $width , $height, $length;

        function __construct($wid = "3", $hei = "3", $len = "4"){
            $this->width = $wid;
            $this->height = $hei;
            $this->length = $len;
        }

         function __destruct(){
            $this->width = "";
            $this->height = "";
            $this->length = "";
        }

        function setData($w,$l,$h){
            $this->width = intval($w);
            $this->height = intval($h);
            $this->length = intval($l);
        }

        function getData(){
            echo "Width :" . $this->width . "<br/>";
            echo "height :" . $this->height . "<br/>";
            echo "length :" . $this->length . "<br/>";
        }

        function getVolume(){
            echo "Area : " . $this->width * $this->height * $this->length . "<br/>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pratical 1 - Pyramid</title>
</head>
    <?php
        echo "<hr>";
        $pyramid1 = new Pyramid;
        echo "<u>pyramid1 <br/></u>" ;
        //$pyramid1->setData(3,3,3);
        $pyramid1->getData();
        $pyramid1->getVolume();
        echo "<hr>";

        echo "<u>pyramid2</u></br>";
        $pyramid2 = new Pyramid;
        $pyramid2->setData(4,4,4);
        $pyramid2->getData();
        $pyramid2->getVolume();
        
    ?>
</body>
</html>