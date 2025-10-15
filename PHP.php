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
        span.output {
            font-size: 1.1em;
            line-height: 1.4;
            color: #34495e;
        }
        label {
            display: block;
            margin: 0.5em 0 0.2em;
        }
        input[type=text], input[type=number], input[type=float] {
            width: 200px;
            padding: 0.3em;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        input[type=submit] {
            margin-top: 1em;
            padding: 0.5em 1em;
            font-size: 1em;
        }
    </style>
</head>
<body>

<h2>PHP Exercises</h2>

<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') :
?>
    <form method="post" action="">
        <h3>Activity 1: Introduce Yourself</h3>
        <label>Name: <input type="text" name="name" required></label>
        <label>Age: <input type="number" name="age" required min="0"></label>
        <label>Favorite Color: <input type="text" name="color" required></label>

        <h3>Activity 2: Simple Math</h3>
        <label>Number a: <input type="number" name="a" required></label>
        <label>Number b: <input type="number" name="b" required></label>

        <h3>Activity 3: Area and Perimeter of a Rectangle</h3>
        <label>Length: <input type="number" name="length" required></label>
        <label>Width: <input type="number" name="width" required></label>

        <h3>Activity 4: Temperature Converter</h3>
        <label>Temperature in Celsius: <input type="number" name="celsius" required></label>

        <h3>Activity 5: Swapping Variables</h3>
        <label>Value x: <input type="number" name="x" required></label>
        <label>Value y: <input type="number" name="y" required></label>

        <h3>Activity 6: Salary Calculator</h3>
        <label>Basic Salary: <input type="number" name="basic_salary" required></label>
        <label>Allowance: <input type="number" name="allowance" required></label>
        <label>Deduction: <input type="number" name="deduction" required></label>

        <h3>Activity 7: BMI Calculator</h3>
        <label>Weight (kg): <input type="number" step="0.01" name="weight" required></label>
        <label>Height (meters): <input type="number" step="0.01" name="height" required></label>

        <h3>Activity 8: String Manipulation</h3>
        <label>Sentence: <input type="text" name="sentence" required></label>

        <h3>Activity 9: Bank Account Simulation</h3>
        <label>Current Balance: <input type="number" name="balance" required></label>
        <label>Deposit: <input type="number" name="deposit" required></label>
        <label>Withdraw: <input type="number" name="withdraw" required></label>

        <h3>Activity 10: Simple Grading System</h3>
        <label>Math Score: <input type="number" name="math" required min="0" max="100"></label>
        <label>English Score: <input type="number" name="english" required min="0" max="100"></label>
        <label>Science Score: <input type="number" name="science" required min="0" max="100"></label>

        <h3>Activity 11: Currency Converter</h3>
        <label>Amount in PHP: <input type="number" name="php_amount" required></label>
        <label>USD Rate: <input type="number" step="0.0001" name="usd_rate" value="0.018" required></label>
        <label>EUR Rate: <input type="number" step="0.0001" name="eur_rate" value="0.016" required></label>
        <label>JPY Rate: <input type="number" step="0.01" name="jpy_rate" value="2.7" required></label>

        <h3>Activity 12: Travel Cost Estimator</h3>
        <label>Distance (km): <input type="number" name="distance" required></label>
        <label>Fuel Consumption (km/l): <input type="number" step="0.01" name="fuel_consumption" required></label>
        <label>Fuel Price (per liter): <input type="number" step="0.01" name="fuel_price" required></label>

        <input type="submit" value="Calculate Results">
    </form>

<?php else: 
    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $name = clean($_POST['name']);
    $age = (int)$_POST['age'];
    $color = clean($_POST['color']);

    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];

    $length = (float)$_POST['length'];
    $width = (float)$_POST['width'];

    $celsius = (float)$_POST['celsius'];
    $fahrenheit = ($celsius * 9/5) + 32;

    $x = (float)$_POST['x'];
    $y = (float)$_POST['y'];
    $temp = $x;
    $x = $y;
    $y = $temp;

    $basic_salary = (float)$_POST['basic_salary'];
    $allowance = (float)$_POST['allowance'];
    $deduction = (float)$_POST['deduction'];
    $net_salary = $basic_salary + $allowance - $deduction;

    $weight = (float)$_POST['weight'];
    $height = (float)$_POST['height'];
    $bmi = $weight / ($height * $height);

    $sentence = clean($_POST['sentence']);

    $balance = (float)$_POST['balance'];
    $deposit = (float)$_POST['deposit'];
    $withdraw = (float)$_POST['withdraw'];
    $final_balance = $balance + $deposit - $withdraw;

    $math = (float)$_POST['math'];
    $english = (float)$_POST['english'];
    $science = (float)$_POST['science'];
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

    $php_amount = (float)$_POST['php_amount'];
    $usd_rate = (float)$_POST['usd_rate'];
    $eur_rate = (float)$_POST['eur_rate'];
    $jpy_rate = (float)$_POST['jpy_rate'];

    $usd = $php_amount * $usd_rate;
    $eur = $php_amount * $eur_rate;
    $jpy = $php_amount * $jpy_rate;

    $distance = (float)$_POST['distance'];
    $fuel_consumption = (float)$_POST['fuel_consumption'];
    $fuel_price = (float)$_POST['fuel_price'];
    $fuel_needed = $distance / $fuel_consumption;
    $total_cost = $fuel_needed * $fuel_price;

    ?>

    <h3>Activity 1.</h3>
    <span class="output">Hi, I'm <?= $name ?>, I am <?= $age ?> years old, and my favorite color is <?= $color ?>.</span>

    <h3>Activity 2.</h3>
    <span class="output">
        Sum: <?= $a + $b ?><br>
        Difference: <?= $a - $b ?><br>
        Product: <?= $a * $b ?><br>
        Quotient: <?= $b != 0 ? $a / $b : 'Division by zero error' ?>
    </span>

    <h3>Activity 3.</h3>
    <span class="output">
        Area: <?= $length * $width ?><br>
        Perimeter: <?= 2 * ($length + $width) ?>
    </span>

    <h3>Activity 4.</h3>
    <span class="output"><?= $celsius ?> °C is equal to <?= round($fahrenheit, 2) ?> °F.</span>

    <h3>Activity 5.</h3>
    <span class="output">
        After swapping: x = <?= $x ?>, y = <?= $y ?>
    </span>

    <h3>Activity 6.</h3>
    <span class="output">Net Salary: ₱<?= number_format($net_salary, 2) ?></span>

    <h3>Activity 7.</h3>
    <span class="output">Your BMI is <?= round($bmi, 2) ?></span>

    <h3>Activity 8.</h3>
    <span class="output">
        Number of characters: <?= strlen($sentence) ?><br>
        Number of words: <?= str_word_count($sentence) ?><br>
        Uppercase: <?= strtoupper($sentence) ?><br>
        Lowercase: <?= strtolower($sentence) ?>
    </span>

    <h3>Activity 9.</h3>
    <span class="output">Final Balance: ₱<?= number_format($final_balance, 2) ?></span>

    <h3>Activity 10.</h3>
    <span class="output">
        Average: <?= round($average, 2) ?><br>
        Grade: <?= $grade ?>
    </span>

    <h3>Activity 11.</h3>
    <span class="output">
        PHP <?= $php_amount ?> = USD <?= number_format($usd, 2) ?><br>
        PHP <?= $php_amount ?> = EUR <?= number_format($eur, 2) ?><br>
        PHP <?= $php_amount ?> = JPY <?= number_format($jpy, 2) ?>
    </span>

    <h3>Activity 12.</h3>
    <span class="output">Estimated travel cost: ₱<?= number_format($total_cost, 2) ?></span>

    <p><a href="">Go back to input form</a></p>

<?php endif; ?>

</body>
</html>
