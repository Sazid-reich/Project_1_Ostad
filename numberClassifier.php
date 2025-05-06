<?php

// A PHP script that takes a number as input and classifies it as positive, negative, even, or odd.


$number = 5;

if($number >0 && $number%2== 0) {
    echo "The number $number is positive and even.";
}
elseif($number <0 && $number%2== 0) {
    echo "The number $number is negative and even.";
}
elseif($number >0 && $number%2!= 0) {
    echo "The number $number is positive and odd.";
}
elseif($number <0 && $number%2!= 0) {
    echo "The number $number is negative and odd.";
}
else {
    echo "The number $number is neither positive nor negative.";
}



?>