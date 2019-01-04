<?php

    $xml = simplexml_load_file("21.PHPSimpleXML_GetNodeValuesXML.xml") or die ("Error: Cannot create object");

    echo $xml->to . "<br>";
    echo $xml->from . "<br>";
    echo $xml->heading . "<br>";
    echo $xml->body . "<br>";