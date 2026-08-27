<?php 

// constant, not allowed to override
define('CATNAME', 'Pablo');

//echo 'Meet my Cats!';

//string
// $catName = 'Pablo';

//integer
$age = 5;

//$catName = 'Marshy';

$stringOne = 'my email is ';
$stringTwo = 'jane@doe.com';

// not necessarily need spaces, but its better for readability
echo $stringOne . $stringTwo;
echo '<br>';

$name = 'Mio';
// this works the same way
// echo 'Hey, my name is ' . $name;
// concatinate with double quotes, wont work with single 
// echo "Hey, my name is $name";

// \ = escaped, wont end the sentence 
echo "Mio changed to \"yanners.\"";
echo '<br>';
// wont overlap if using single quotes
echo ' \ Mio changed to "yanyan"';

// how to get individual characters from a string
//echo $name[1];
echo '<br>';
//find the length of a string
//echo strlen($name);
// makes echo uppercase
echo '<br>';
echo strtoupper($name);
echo '<br>';
// makes echo lowercase
// echo strtolower($name);
// replaces a character in a string
// echo str_replace('m', 'd', $name);

//whole numbers
$radius = 25;
//float / double, has a decimal point
$pi = 3.14;

// basic math operations, *, /, +, -, **
echo '<br>';
echo $pi * $radius ** 2;
echo '<br>';
//order of operation
//echo 2 * (4 + 9) / 3;
// increment and decrement operators
//$radius++; //double plus adds 1
$radius--; //double minus subtracts 1
echo $radius;

//shorthand operators
$age2 = 20;

//$age2 += 5; //adds to the variable
//$age2 -= 5;
$age2 *= 5;
echo '<br>';
echo $age2;

echo '<br>';
echo floor($pi); //rounds down
echo '<br>';
echo ceil($pi); //rounds up
echo '<br>';
echo pi(); //actual pi number

echo '<br>';
echo '<br>';

// indexed arrays // multiple values in a single variable
$multiCatNames = ['socks', 'shoes', 'tartar'];

echo $multiCatNames[2];
echo '<br>';
// this works the same
$catNames2 = array('oncho', 'teh', 'oyen');
echo $catNames2[0];

$catAges = [5, 4, 2];
echo '<br>';
print_r($catAges); //prints in a readable format
echo '<br>';
$catAges[1] = 3;
print_r($catAges);
echo '<br>';
$catAges[] = 1; //adds a new value
print_r($catAges);
echo '<br>';
array_push($catAges, 6); //another way
print_r($catAges);
echo '<br>';
echo count($catAges); //counts the number of values in the array

echo '<br>';
$cat3 = array_merge($multiCatNames, $catNames2); //merges two arrays
print_r($cat3);

//associative arrays // key + value pairs
$catinfo = ['pablo' => 'British Shorthair', 'marshy' => 'Ragdoll', 'tartar' => 'Orange'];
echo '<br>';
echo $catinfo['tartar'];
echo '<br>';
print_r($catinfo);
echo '<br>';
$catinfo2 = array('socks' => 2, 'shoes' => 2, 'mimi' => 2);
print_r($catinfo2);
$catinfo2['teh'] = 6;
print_r($catinfo2);
echo '<br>';
echo count ($catinfo2);
echo '<br>';
echo '<br>';
$catinfo3 = array_merge($catinfo, $catinfo2);
print_r($catinfo3);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tuto</title>
</head>
<body>

    <h1><?php echo 'Meet my Cats!'; ?></h1>
    <div><?php echo 'My cats name is ' . CATNAME; ?></div>
    <div><?php echo $age; ?></div>

</body>
</html>

<?php 
    echo '<br>';

//multidimentional arrays
$blogs = [
    //each item will be its own array
    ['title' =>'Friend Party', 'first' =>'umai', 'second' => 'aleya', 'third' =>'fiena', 'fourth' => 'mira', 4],
    ['title' =>'Hobbies', 'first' =>'Movie Watching', 'second' => 'Gaming', 'third' => 'Reading', 'fourth' => 'Skating', 3],
    ['title' =>'Techs', 'first' =>'Ipad', 'second' => 'Laptop', 'third' => 'Tablet', 5]
];

//print_r($blogs[1]);
//print_r($blogs[1][1]);
echo $blogs[1]['first']; // same thing as ^
echo '<br>';
echo count($blogs[1]);
echo '<br>';
$blogs[] = ['title' =>'Food', 'first' =>'Pizza', 'second' => 'Ramen', 'third' => 'Rice', 3];
print_r($blogs);
//delete the last element of the array
$popped = array_pop($blogs);
echo '<br>';
echo '<br>';
print_r($popped);

//loop
echo '<br>';
echo '<br>';
//$cookie = ['choco.chip', 'oreo', 'pistachio'];
//for ($i = 0; $i < count($cookie); $i++) {
//    echo $cookie[$i] . '<br />';
//}

//foreach ($cookie as $c) {
//    echo $c . '<br />';
//}

$products = [
    ['name'=>'Standee', 'price'=>55],
    ['name'=>'Keychain', 'price'=>25],
    ['name'=>'Charm', 'price'=>15],
    ['name'=>'Badge', 'price'=>20],
    ['name'=>'Sticker', 'price'=>10],
    ['name'=>'Lanyard', 'price'=>18]
];

//foreach ($products as $prod) {
//    echo $prod['name'] . ' - ' . $prod['price'];
//    echo'<br />';
//}

//$i = 0;

//while ($i < count($products)) {
//    echo $products[$i]['name'];
//    echo'<br />';
//    $i++;
//}

//true / false boolean
//echo true; //output is 1
//echo false; // output is empty

//echo 5 > 10;
//echo 5 != 10;
//echo 5 >= 5;
//works for string as well
//echo 'mio' == 'Yanners'; // uppercase is seen as lesser than lowercase

//loose vs strict equal comparison
//echo 5 == '5'; //technically not the same, but the same at the same time i.e loose
// === is strict

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tuto</title>
</head>
<body>

    <h1>Products</h1>
    <ul>
    <?php foreach ($products as $prod) { ?>
        <h3><?php echo $prod['name']; ?></h3>
        <p>Price: <?php echo $prod['price']; ?></p>
    <?php } ?>
    </ul>

</body>
</html>