<?php 
/* plocal
global
static */

//global scope
$my_number_one = 100;
$my_number_two = 200;
function myTest(){
    #one type of global scope
    global $my_number;
    #anthor way 
    $total_number = $GLOBALS['my_number_one'] + $GLOBALS['my_number_two'];

    echo $total_number;
    echo "<p>My number is $my_number</p>";
}
myTest();

 //local scope
function localScope(){
    $age = 10;
    echo "<p>My age is $age</p>";
}
localScope();

//static 

function staticScope(){
    static $number = 0;
    echo $number;
    $number++;
}

staticScope();
staticScope();
staticScope();
?>