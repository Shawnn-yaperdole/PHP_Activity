<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>PHP Exercises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            color: #333;
            margin: 30px;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            font-size: 2.5em;
            text-shadow: 1px 1px 2px #bdc3c7;
            margin-bottom: 0.5em;
        }
        h3 {
            color: #2980b9;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 0.3em;
            margin-top: 2em;
            font-weight: 600;
        }
        p, 
        <?php /* Target the echoed outputs with <br> etc: wrap PHP output in <p> for better styling? We'll do inline styling instead. */ ?>
        span.output {
            font-size: 1.1em;
            line-height: 1.4;
            color: #34495e;
        }
    </style>
</head>
<body>

<h2>PHP EXERCISE</h2> 

<h3>Activity 1.</h3>
    <?php
        $name = "Shawn";
        $age = 20;
        $color = "Green";

        echo "<span class='output'>Hi, I'm $name, I am $age years old, and my favorite color is $color.</span>";
    ?>

<h3>Activity 2.</h3>
    <?php
        $a = 6;
        $b = 7;

        echo "<span class='output'>";
        echo "Sum: " . ($a + $b) . "<br>";
        echo "Difference: " . ($a - $b) . "<br>";
        echo "Product: " . ($a * $b) . "<br>";
        echo "Quotient: " . ($a / $b);
        echo "</span>";
    ?>

<h3>Activity 3.</h3>
    <?php
        $length = 6;
        $width = 7;

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "<span class='output'>Area: $area<br>";
        echo "Perimeter: $perimeter</span>";
    ?>

<h3>Activity 4.</h3>
    <?php
        $celsius = 30;
        $fahrenheit = ($celsius * 9/5) + 32;

        echo "<span class='output'>$celsius °C is equal to $fahrenheit °F.</span>";
    ?>

<h3>Activity 5.</h3>
    <?php
        $x = 10;
        $y = 20;

        echo "<span class='output'>Before swapping: x = $x, y = $y<br>";

        $temp = $x;
        $x = $y;
        $y = $temp;

        echo "After swapping: x = $x, y = $y</span>";
    ?>

<h3>Activity 6.</h3>
    <?php
        $basic_salary = 20000;
        $allowance = 5000;
        $deduction = 3000;

        $net_salary = $basic_salary + $allowance - $deduction;

        echo "<span class='output'>Net Salary: ₱$net_salary</span>";
    ?>

<h3>Activity 7.</h3>
    <?php
        $weight = 56; 
        $height = 1.65;

        $bmi = $weight / ($height * $height);

        echo "<span class='output'>Your BMI is " . round($bmi, 2) . "</span>";
    ?>

<h3>Activity 8.</h3>
    <?php
        $sentence = "Shine bright in the Philippine sky";

        echo "<span class='output'>";
        echo "Number of characters: " . strlen($sentence) . "<br>";
        echo "Number of words: " . str_word_count($sentence) . "<br>";
        echo "Uppercase: " . strtoupper($sentence) . "<br>";
        echo "Lowercase: " . strtolower($sentence);
        echo "</span>";
    ?>

<h3>Activity 9.</h3>
    <?php
        $balance = 5000;
        $deposit = 1500;
        $withdraw = 1000;

        $balance = $balance + $deposit - $withdraw;

        echo "<span class='output'>Final Balance: ₱$balance</span>";
    ?>

<h3>Activity 10.</h3>
    <?php
        $math = 98;
        $english = 88;
        $science = 78;

        $average = ($math + $english + $science) / 3;

        if ($average >= 90) {
        $grade = "A";
        } elseif ($average >= 80) {
        $grade = "B";
        } elseif ($average >= 70) {
        $grade = "C";
        } elseif ($average >= 60) {
        $grade = "D";
        } else {
        $grade = "F";
        }

        echo "<span class='output'>Average: " . round($average, 2) . "<br>";
        echo "Grade: $grade</span>";
    ?>

<h3>Activity 11.</h3>
    <?php
        $php_amount = 1000;
        $usd_rate = 0.018;
        $eur_rate = 0.016;
        $jpy_rate = 2.7;

        $usd = $php_amount * $usd_rate;
        $eur = $php_amount * $eur_rate;
        $jpy = $php_amount * $jpy_rate;

        echo "<span class='output'>";
        echo "PHP $php_amount = USD " . number_format($usd, 2) . "<br>";
        echo "PHP $php_amount = EUR " . number_format($eur, 2) . "<br>";
        echo "PHP $php_amount = JPY " . number_format($jpy, 2);
        echo "</span>";
    ?>

<h3>Activity 12.</h3>
    <?php
        $distance = 420; 
        $fuel_consumption = 12; 
        $fuel_price = 70; 

        $fuel_needed = $distance / $fuel_consumption;
        $total_cost = $fuel_needed * $fuel_price;

        echo "<span class='output'>Estimated travel cost: ₱" . number_format($total_cost, 2) . "</span>";
    ?>

</body>
</html>
