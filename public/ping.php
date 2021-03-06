<?php

require '../Input.php';
function pageController ()
{
    //!isset is checking to see if the counter is at 0 when first going to the page.
    $count = !(Input::has('count')) ? 0 : Input::Get('count');

    return ['count' => $count];
} 
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/pingpong.css">
    <title>Ping</title>
</head>
<body>
    <div id="counter">
        <!--this is the echo statement -->   
        <p><?= $count ?></p>
    </div>
    <div id="hitmiss">
        <a href="pong.php?count=<?= $count+1 ?>">hit</a> 
        <a href="pong.php?count=0">miss</a> 
    </div>


</body>
</html>