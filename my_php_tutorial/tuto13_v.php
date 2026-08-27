<?php

//functions
function sayHello($name = 'Shawn', $time = 'morning') { //this is the function name
    echo "good $time $name";
} //declared but not run yet

//sayHello('Mario'); //callback
sayHello('Yoshi','night'); //if not passed in, callback the default value
echo '<br/>';

function formatProduct($product){
    //echo "{$product['name']} costs RM{$product['price']} to buy <br/>"; //if using squarebaces, the curly braces must be in the double quotes if not single value
    return "{$product['name']} costs RM{$product['price']} to buy <br/>"; //runs the value and passes it back
    }

//$formatted = formatProduct(['name'=>'gold star','price'=> 20]);
//eacho $formatted;

?>

<!DOCTYPE html>
<html>
<head>
    <Title>PHP Tutorial</Title>
</head>

<body>

</body>

</html>