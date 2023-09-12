<?php
$temperature = 5;

if($temperature >= 30){
    echo "It's warm";
}
elseif ($temperature < 30 && $temperature >= 20){
    echo "It's cool.";
}
elseif ($temperature < 20){
    echo "It's freezing!";
}
else{
    echo "Enter a number ";
}