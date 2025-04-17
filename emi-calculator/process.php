<?php
require_once 'includes/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = floatval($_POST['amount']);
    $currency = $_POST['currency'];
    $duration = intval($_POST['duration']);
    $durationType = $_POST['duration_type'];
    $rate = floatval($_POST['rate']);
    $startDate = $_POST['start_date'];

    // Normalize duration to months
    $months = $durationType === 'year' ? $duration * 12 : $duration;

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

    echo "<h2>Loan Summary</h2>";
    echo "Total Money to Pay: " . number_format($totalPayment, 2) . " $currency<br>";
    echo "Total Interest Earned by Lender: " . number_format($totalInterest, 2) . " $currency<br><br>";

    echo "<h2>EMI Repayment Schedule</h2>";
    echo "<table border='1' cellpadding='5'>
            <tr>
                <th>Month</th>
                <th>Date (YYYY-MM-DD)</th>
                <th>EMI</th>
                <th>Interest Amount</th>
                <th>Principal Amount</th>
                <th>Outstanding Balance</th>
            </tr>";

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

    echo "</table>";
}
?>
