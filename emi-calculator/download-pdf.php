<?php
require_once 'vendor/autoload.php'; // If using Composer
require_once 'includes/functions.php';

use Dompdf\Dompdf;

$amount = floatval($_POST['amount']);
$currency = $_POST['currency'];
$duration = intval($_POST['duration']);
$durationType = $_POST['duration_type'];
$rate = floatval($_POST['rate']);
$startDate = $_POST['start_date'];
$emiMethod = $_POST['emi_method'];

$months = $durationType === 'year' ? $duration * 12 : $duration;
$monthlyRate = $rate / 12 / 100;

if ($emiMethod === 'flat_rate') {
    $emi = calculateEMIFlatRate($amount, $rate, $months, $emiMethod);
    $emiMETHOD = "Flat Rate";
} else {
    $emi = calculateEMIReducBal($amount, $monthlyRate, $months, $emiMethod);
    $emiMETHOD = "Reducing Balance";
}

$totalPayment = $emi * $months;
$totalInterest = $totalPayment - $amount;

$schedule = generateAmortizationSchedule(
    $amount,
    $emiMethod === 'flat_rate' ? $rate : $monthlyRate,
    $months,
    $emi,
    $startDate,
    $totalPayment,
    $emiMethod
);

$currencySymbols = [
    'USD' => '$',
    'KHR' => '៛',
    'CNY' => '¥',
    'THB' => '฿'
];
$symbol = $currencySymbols[$currency] ?? '';

// Generate HTML
ob_start();
?>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #000; padding: 6px; text-align: center; }
        h2 { text-align: center; }
    </style>
</head>
<body>
    <h2>Loan Details</h2>
    <p><strong>EMI Method:</strong> <?= $emiMETHOD ?></p>
    <p><strong>Loan Amount:</strong> <?= $symbol . number_format($amount, 2) ?></p>
    <p><strong>Loan Tenure:</strong> <?= $duration . ' ' . $durationType ?></p>
    <p><strong>Interest Rate:</strong> <?= number_format($rate, 2) ?>%</p>
    <p><strong>Monthly EMI:</strong> <?= $symbol . number_format($emi, 2) ?></p>
    <p><strong>Total Interest:</strong> <?= $symbol . number_format($totalInterest, 2) ?></p>
    <p><strong>Total Payment:</strong> <?= $symbol . number_format($totalPayment, 2) ?></p>

    <h2>Repayment Schedule</h2>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Date</th>
                <th>EMI</th>
                <th>Interest</th>
                <th>Principal</th>
                <th>Outstanding Principal</th>
                <th>Outstanding Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($schedule as $entry): ?>
                <tr>
                    <td><?= $entry['month'] ?></td>
                    <td><?= $entry['date'] ?></td>
                    <td><?= $symbol . number_format($entry['emi'], 2) ?></td>
                    <td><?= $symbol . number_format($entry['interest'], 2) ?></td>
                    <td><?= $symbol . number_format($entry['principal'], 2) ?></td>
                    <td><?= $symbol . number_format($entry['balance'], 2) ?></td>
                    <td><?= $symbol . number_format($entry['outstandingBalance'], 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
<?php

$html = ob_get_clean();

// Generate PDF
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("loan-details.pdf", ["Attachment" => true]);
