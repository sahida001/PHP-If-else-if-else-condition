<?php

$marks = 90;


if( $marks >= 0 && $marks <= 32 ){
    echo "<h1 style = 'color:red'> Apni fail korecen. </h1>";

}
else if
    ( $marks >= 33 && $marks < 40 ){
        echo "<h1 style = 'color:orange'> Apni tene tune pass korecen. </h1>";
    
    }
else if
    ( $marks >= 40 && $marks < 50 ){
        echo "<h1 style = 'color:yellow'> Apni B peyecen. </h1>";
    
    }
else if
    ( $marks >= 50 && $marks < 60 ){
        echo "<h1 style = 'color:green'> Apni B+ peyecen. </h1>";
    
    }        
else if
    ( $marks >= 60 && $marks < 70 ){
        echo "<h1 style = 'color:purple'> Apni A- peyecen. </h1>";
    
    }
else if
    ( $marks >= 70 && $marks < 80 ){
        echo "<h1 style = 'color:Skyblue'> Apni A peyecen. </h1>";
    
    }
else if
    ( $marks >= 80 && $marks < 100 ){
        echo "<h1 style = 'color:blue'> Apni A+ peyecen. </h1>";
    
    }    
?>