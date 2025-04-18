<head>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="position-fixed top-0 start-0 m-3 z-3">
    <form action="index.php" method="POST">
        <input type="hidden" name="amount" value="<?= htmlspecialchars($_POST['amount']) ?>">
        <input type="hidden" name="currency" value="<?= htmlspecialchars($_POST['currency']) ?>">
        <input type="hidden" name="duration" value="<?= htmlspecialchars($_POST['duration']) ?>">
        <input type="hidden" name="duration_type" value="<?= htmlspecialchars($_POST['duration_type']) ?>">
        <input type="hidden" name="rate" value="<?= htmlspecialchars($_POST['rate']) ?>">
        <input type="hidden" name="start_date" value="<?= htmlspecialchars($_POST['start_date']) ?>">

        <button type="submit" class="btn btn-primary custom-btn">← Back</button>
    </form>
</div>



<div class="body-with-fixed-button container py-5">
<?php

// Import functions from functions.php
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Store all value in the variables
    $amount = floatval($_POST['amount']);
    $currency = $_POST['currency'];
    $duration = intval($_POST['duration']);
    $durationType = $_POST['duration_type'];
    $rate = floatval($_POST['rate']);
    $startDate = $_POST['start_date'];

    // Convert years to months
    $months = $durationType === 'year' ? $duration * 12 : $duration;

    // Convert annual rate to monethly rate
    $monthlyRate = $rate / 12 / 100;

    $emi = calculateEMI($amount, $monthlyRate, $months);
    $totalPayment = $emi * $months;
    $totalInterest = $totalPayment - $amount;
    $schedule = generateAmortizationSchedule($amount, $monthlyRate, $months, $emi, $startDate);

    $currencySymbols = [
        'USD' => '$',
        'KHR' => '៛',
        'CNY' => '¥',
        'THB' => '฿'
    ];

    $symbol = $currencySymbols[$currency] ?? '';

    echo "<div class='text-center mb-4'>";
    echo "<h2 style='margin-bottom: 10px;'>Loan Details</h2>";
    echo "<hr style='border: 1.5px solid black; width: 100%; margin: 0 auto;'>";
    echo "</div>";

    echo "<div style='font-size: 18px; line-height: 1.8;'>"; // Bigger font and spacing
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Loan Amount:</span> " . $symbol . number_format($amount, 2) . "<br>";
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Loan Tenure:</span> $duration $durationType<br>";
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Total Interest Amount:</span> " . $symbol . number_format($totalInterest, 2) . "<br>";
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Monthly EMI:</span> " . $symbol . number_format($emi, 2) . "<br>";
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Annual Interest Rate:</span> " . number_format($rate, 2) . "%<br>";
echo "<span style='display: inline-block; width: 400px; font-weight: bold;'>Total Payment (Principal + Interest):</span> " . $symbol . number_format($totalPayment, 2) . "<br>";
echo "</div><br>";
    

    echo "<div class='text-center mb-4'>";
    echo "<h2 style='margin-bottom: 10px;'>Loan Repayment Schedule</h2>";
    echo "<hr style='border: 1.5px solid black; width: 100%; margin: 0 auto;'>";
    echo "</div>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-bordered table-striped text-center align-middle'>";
    echo "<thead>
            <tr>
                <th>Month</th>
                <th>Date (YYYY-MM-DD)</th>
                <th>EMI</th>
                <th>Interest Amount</th>
                <th>Principal Amount</th>
                <th>Outstanding Balance</th>
            </tr>
          </thead>";
    echo "<tbody>";
    
    foreach ($schedule as $entry) {
        echo "<tr>
            <td>{$entry['month']}</td>
            <td>{$entry['date']}</td>
            <td>$symbol " . number_format($entry['emi'], 2) . "</td>
            <td>$symbol " . number_format($entry['interest'], 2) . "</td>
            <td>$symbol " . number_format($entry['principal'], 2) . "</td>
            <td>$symbol " . number_format($entry['balance'], 2) . "</td>
        </tr>";
    }
    
    echo "</tbody></table></div>";
}
?>
</div>



