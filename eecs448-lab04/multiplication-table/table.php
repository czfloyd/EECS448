<?php
  echo "<h1> Below is a 100 x 100 multiplication table. </h1><br><table>";
   for ($i = 0; $i <= 100; $i++){
     echo "<tr>";
     for ($j = 0; $j <= 100; $j++){
       if ($i == 0){
         if ($j == 0){
           echo "<th> </th>";
         }
         else {
           echo "<th>" . $j . "</th>";
         }
       }
       else if ($j == 0){
         echo "<th>" . $i . "</th>";
       }
       else {
         echo "<td>" . ($i * $j) . "</td>";
       }
     }
   }
   echo "</table>";
?>
