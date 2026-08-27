<?php

//conditional statements
// if yes do A, if not do B

//$price = 20;

//if ($price < 10) {
//    echo 'the condition is met';
//} elseif ($price < 30) {
//    echo 'elseif condition met';
//} else {
//    echo 'condition not met';
//}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lighting bold', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
];

//use for loops
//quick if product is less or more

foreach($products as $product){
    //&& additional statement in one line
    //if ($product['price']<15 && $product ['price']>2){
    //    echo $product['name'] . '<br/>';
    //}

    // || 'pipe' is an 'or'
    //if ($product['price']>20 || $product ['price']<10){
    //echo $product['name'] . '<br/>';
    //}
}

?>

<!DOCTYPE html>
<html>
<head>
    <Title>PHP Tutorial</Title>
</head>

<body>

<div>
    <?php foreach($products as $product) { ?>

        <?php if($product['price']>15){ ?>
            <li><?php echo $product['name']; ?></li>
        <?php } ?>

    <?php } ?>
</div>

</body>

</html>