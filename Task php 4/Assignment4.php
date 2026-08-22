<?php

// ==== Question 1 ====

$age = 20;

if ($age >= 18) {
    echo "Access Accepted";
} else {
    echo "Access denied";
}
    echo "<hr>";


// ==== Question 2 ====

function calculate($num1, $num2)
{
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    echo "Difference: " . ($num1 - $num2) . "<br>";
    echo "Division: " . ($num1 / $num2);
}

calculate(10, 5);
    echo "<hr>";


// ==== Question 3 ====

function sumArray($numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}
$numbers = array(5, 10, 15, 20);
echo "Sum: " . sumArray($numbers);
echo "<hr>";

// ==== Question 4 ====

$films = array("Fast", "Predestination", "Persuit", "Prestige");

$keyword = "avatar";

$found = false;

foreach ($films as $film) {

    if ($film == $keyword) {
        $found = true;
        break;
    }
}
if ($found) {
    echo "Yes";
} else {
    echo "No";
}

echo "<hr>";

// ==== Question 5 ====
function RouteBubble($array)
{
    $n = count($array);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }

    return $array;
}

$numbers = array(5, 3, 8, 1, 2);

$result = RouteBubble($numbers);

echo "Sorted Array: ";

foreach ($result as $number) {
    echo $number . " ";
}
echo "<hr>";

// ==== Question 6 ====

$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);
$max = $tests[0];
foreach ($tests as $test) {

    if ($test > $max) {
        $max = $test;
    }
}
echo "Maximum: " . $max;
echo "<hr>";

// ==== Question 7 ====

$films = array("avatar", "Prestige", "avatar", "Prestige");
$keyword = "avatar";
$count = 0;
foreach ($films as $film) {

    if ($film == $keyword) {
        $count++;
    }
}

echo "Count: " . $count;
echo "<hr>";

// ==== Question 8 ====

function RouteRandomPass($length)
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $index = random_int(0, strlen($characters) - 1);
        $password .= $characters[$index];
    }
    return $password;
}
echo "Random Password: " . RouteRandomPass(8);
echo "<hr>";

// ==== Question 9-FOR ====

$tests = array(1, "tariq", 1.5, true, 7, 's', false);
for ($i = 0; $i < count($tests); $i++) {
    if (is_bool($tests[$i])) {
        if ($tests[$i] == true) {
            echo "Yes";
        } else {
            echo "No";
        }
    } else {
        echo $tests[$i];
    }
    echo "<br>";
}
echo "<hr>";

// ==== Question 9-while ====

$tests = array(1, "tariq", 1.5, true, 7, 's', false);
$i = 0;
while ($i < count($tests)) {

    if (is_bool($tests[$i])) {

        if ($tests[$i] == true) {
            echo "Yes";
        } else {
            echo "No";
        }

    } else {
        echo $tests[$i];
    }

    echo "<br>";

    $i++;
}

echo "<hr>";

// ==== Question 10 ====

$tests = array(6, 4, 9, 3, 12, 8, 7);

sort($tests);

foreach ($tests as $test) {
    echo $test . " ";
}
echo "<hr>";

// ==== Question 11 ====

$arr1 = array('a', 'b', 'c', 'd');
$arr2 = array('c', 'd', 'e', 'f');

$common = array();

foreach ($arr1 as $value) {

    if (in_array($value, $arr2)) {
        $common[] = $value;
    }
}

echo implode(" - ", $common);

echo "<hr>";

// ==== Question 12 ====

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
    if (!is_numeric($price) || !is_numeric($quantity)) {

        echo "Please enter numbers only.";

    } elseif ($price < 0 || $quantity < 0) {

        echo "Negative numbers are not allowed.";

    } else {

        $total = $price * $quantity;

        if ($total < 1000) {
            $discountRate = 0.10;
        } else {
            $discountRate = 0.15;
        }

        $discount = $total * $discountRate;
        $finalPrice = $total - $discount;

        echo "Total before discount: " . $total . " EGP<br>";
        echo "Discount: " . ($discountRate * 100) . "%<br>";
        echo "Discount value: " . $discount . " EGP<br>";
        echo "Total after discount: " . $finalPrice . " EGP";
    }
}
?>

<form method="post">

    <label>Product Price:</label>
    <input type="text" name="price">

    <br><br>

    <label>Quantity:</label>
    <input type="text" name="quantity">

    <br><br>

    <button type="submit">Calculate</button>

</form>

