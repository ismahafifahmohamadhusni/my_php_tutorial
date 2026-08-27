<?php

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

foreach($products as $product){
//break stops anywhere in the loop / doesnt matter
    if($product['name']==='lightning bolt'){
        break;
    }

//continue stops in the middle, but continues after / skipping the statement
if($product['price']>15){
    continue;
}

echo $product['name'] . '<br/>';

}

?>

<!DOCTYPE html>
<html>
<head>
    <Title>PHP Tutorial</Title>
</head>

<body>

</body>

</html>