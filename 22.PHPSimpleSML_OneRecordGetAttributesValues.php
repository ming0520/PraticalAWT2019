<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="A page's description, 
  usually one or two sentences."/>
    <title>PHP Simple One Record</title>
</head>
<body>
    
</body>
</html>
<?php
//commment
    $xml = simplexml_load_file("22_breakfast_menu1.xml") or die ("Error: Cannot create object");

    echo $xml->food[0]->description . "<br>";
    echo $xml->food[0]->name['country'] . "<br>";

    echo $xml->food[1]->description . "<br>";
    echo $xml->food[1]->name['country'] . "<br>";