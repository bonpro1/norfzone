<?php 
             include 'connect.php';
             $sql1 = mysqli_query($conn,"SELECT COUNT(ID) AS AD FROM photos;");
             if ($sql1 == TRUE) {
               while($fata1 = $sql1->fetch_assoc()){
                $ID = $fata1['AD'];
               }
               echo $ID;
             }
             ?>