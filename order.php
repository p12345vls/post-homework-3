<?php
    $inputName = $_POST["inputName"] ;
    $pickUp = $_POST["pickUp"];
    $flavor = $_POST["ice_cream_flavor"];
    $address = $_POST["inputAddress"];
    $picTopping = $_POST["topping"];
    $preperation = $_POST["preperation"];
    $orderForm = $_POST["orderForm"];//textArea
                
    if ($inputName !="" && $pickUp !="" 
    && $picTopping !="" && $preperation!="" ) {
       
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Stylesheets/main.css">
        <TITLE>
            Your Order Details 
        </TITLE>
    </head>

    <body>
        <div id=order>

            <h1>Scroll Down to Your Order</h1>
            <div style="margin-top:-330px;">
                <?php


                $imageFlavor = '<img src="flavors/'.$flavor.'.jpeg">';

                echo "<table id='tableOrder'> ";
                echo"<th colspan='2'>Your Choice</th>";

                echo "<tr><td>Your Name: $inputName</td>";
                
                if ($address!='') {
                    echo "<td>Your Address: $address</td></tr>";
                } else {
                    echo "<td>$pickUp</td></tr>";
                }
                
                echo "<tr><td>Your Flavor: $flavor</td><td>$imageFlavor</td></tr>";

                if(isset($picTopping)) {
                    echo"<th colspan='2'>Toppings</th>";
                } else {
                     echo"<th colspan='2'>No Extra Toppings</th>";
                }

                if(isset($picTopping)) {
                    foreach($picTopping as $topping) {
                        $imageTopping = '<img width="100" height="100" src="toppings/'.$topping.'.jpeg"></td></tr>';
                        echo  "<tr><td>$topping</td><td>$imageTopping</td></tr>";
                    }
                }

                if($orderForm=="")  {
                    $orderForm = "NONE";
                }

                echo "<tr><td>Served : $preperation</td><td>Comments: $orderForm</td></tr>";

                echo "</table>";
                
                }
                echo'<div style="text-align: center;
                        font-weight:bold; color:red;">';
                 if ($inputName ==""){
                     echo "*Name is required*"."<br>";
                 } if($pickUp ==""){
                     echo "*Please specify pick up or delivered* "."<br>";
                 } if($picTopping ==""){
                     echo "*Topping is required* "."<br>";
                 } if($preperation==""){
                      echo "*Preperation preference is required*  "."<br>";
                 } if ($pickUp=='Delivered' && $address==""){
                      echo "*Address is required*  "."<br>";
                 }
                echo '</div>';
                ?>
            </div>

        </div>
    </body>
</html>


