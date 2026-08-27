<?php

//include and require
include ('ninjas.php');
require ('ninjas.php');
//the same but diff in errors

// include ('ninjass.php'); // error but still continues
// require ('ninjass.php'); // error and doesnt cont

//works w/o ()



echo 'end of php';


?>

<!DOCTYPE html>
<html>
<head>
    <Title>PHP Tutorial</Title>
</head>

<body>
    <?php include ('content.php'); ?>
</body>

</html>