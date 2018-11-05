<html>
<head>
<title>Calculator</title>
<style>

/* Style the header */
header {
    background-color: #666;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}
</style>
</head>
<body style="text-align: center; font-size: 50px;">
<br>
<?php

if (!isset($_GET['op']) || !isset($_GET['x']) || !isset($_GET['y'])) {
    echo "<h1>Incorrect or incomplete data</h1>";
    exit();
}
$x = $_GET['x'];
$y = $_GET['y'];

switch ($_GET['op']) {
    case 'sum': 
        $result = $x+$y;
        echo "<h1>$x + $y = $result</h1>";
        break;
    case 'subtract':
        $result = $x-$y;
        echo "<h1>$x - $y = $result</h1>";
        break;
    case 'divide':
        if ($y == 0) {
            echo "<h1>Cannot divide by zero!</h1>";
        }
        else {
            $result = $x / $y;
            echo "<h1>$x / $y = $result</h1>";
        }
        break;
    case 'multiply':
        $result = $x * $y;
        echo "<h1>$x x $y = $result</h1>";
        break;
    default:
        $op = $_GET['op'];
        echo "<h1>Unrecognized operation: $op</h1>";
}

?>

</body>
</html>

