<?php

    class Books {
        
        var $price; var $title;

        function setPrice($par){
            $this->price = $par;
        }

        function getPrice(){
            echo $this->price . "<br/>";
        }
        
        function setTitle($par){
            $this->title = $par;
        }

        function getTitle(){
            echo $this->title . "<br/>";
       }
    }
       $physics = new Books;
       $math = new Books;
$chemistry = new Books;

       $physics->setPrice(20);
       $physics->setTitle("The Secret");

       $math->setPrice(20);
       $math->setTitle("The Secret");
       
       $chemistry->setPrice(133);
       $chemistry->setTitle("Chemistry World");

       $physics->getTitle();
       $physics->getPrice();

       $chemistry->getTitle();
       $chemistry->getPrice();
       
       $math->getTitle();
       $math->getPrice();
?>