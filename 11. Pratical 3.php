<?php
 class Pet{
     var $name, $age,$eyeColour,$country;
    
     function setData ($img_url,$name,$age, $eyeColour,$country){
        $this->img_url = $img_url;
         $this->name = $name;
         $this->age = $age;
         $this->eyeColour = $eyeColour;
         $this->country = $country;
     }

     function getData (){
         echo "<tr>";
         echo "<td><img width = '75%' src='". $this->img_url ."'/></td>";
         foreach ($this as $key => $value) {
             echo "<td>";
             print "$value\n";
            echo "</td>";
          }
         }
 }

 $bird = new Pet;
 $bird->setData ("bird.jpg","Bird", 12, "Grey Scale", "Malaysia");

 $pig = new Pet;
 $pig->setData ("pig.jpg","Pig", 19, "Pink", "Malaysia");

 echo "<table border = '1' style='text-align:center'>";
 echo "<tr><td colspan = 5 width = '100%'>PETS</td></tr>";
 echo "<tr>
 <th width = '20%'>Image</th>
 <th width = '20%'>Name</th>
 <th width = '20%'>Age</th>
 <th width = '20%'>Color</th>
 <th width = '20%'>Country</th>
 </tr>";

 $bird->getData();
 $pig->getData();
 echo "</table>";

?>