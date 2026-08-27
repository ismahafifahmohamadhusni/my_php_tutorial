<?php

//variable scope

//local var
function myFunc(){
    $price = 10;
    echo $price; //can only use it in the function
}

//myFunc();

function myFuncTwo($age){ //still local
    echo $age;
}

//myFuncTwo(25);

//global var

$name = 'mario';

// function sayHello(){
//     global $name; // bumass needs to add global <-
//     $name = 'Yoshi'; //if after it will use the second variable
//     echo "hello $name"; // doesnt work cuz its still local
// }

// sayHello();
// echo $name;

function sayBye(&$name){ //still local // &(by ref) passes on + changes globally
$name = 'wario';
    echo "bye $name"; //passed on amen
}

sayBye($name);
echo $name;

?>

<!DOCTYPE html>
<html>
<head>
    <Title>PHP Tutorial</Title>
</head>

<body>

</body>

</html>