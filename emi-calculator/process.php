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

<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 style="margin-bottom: 10px;">Understanding EMI Loans</h2>
        <hr style="border: 1.5px solid black; width: 100%; margin: 0 auto;">
    </div>
    <div style="font-size: 18px; line-height: 1.8;">
        <p><strong>What is an EMI Loan?</strong></p>
        <p>EMI stands for Equated Monthly Installment. It is a fixed payment amount made by a borrower to a lender at a specified date each calendar month. EMI loans are commonly used for personal loans, home loans, car loans, and other types of financing.</p>
        
        <p><strong>EMI Formula:</strong></p>
        <p>The formula to calculate EMI is:</p>
        
        <p style="font-family: monospace; background-color: #f8f9fa; padding: 10px; border-radius: 5px; text-align: center;">
        EMI = 
        <span style="display: inline-block; vertical-align: middle;">
            <span style="border-bottom: 1px solid; display: block; padding: 0 5px;">
            P × r × (1 + r)<sup>n</sup>
            </span>
            <span style="display: block; padding: 5px;">
            (1 + r)<sup>n</sup> - 1
            </span>
        </span>
        </p>
        <p>Where:</p>
        <ul>
            <li><strong>P</strong> = Principal loan amount</li>
            <li><strong>r</strong> = Monthly interest rate (annual rate divided by 12)</li>
            <li><strong>n</strong> = Loan tenure in months</li>
        </ul>

        <p><strong>Pros of EMI Loans:</strong></p>
        <ul>
            <li>Predictable monthly payments make budgeting easier.</li>
            <li>Flexible loan tenures allow borrowers to choose repayment periods that suit their financial situation.</li>
            <li>Convenient for financing large purchases like homes, cars, or education.</li>
        </ul>

        <p><strong>Cons of EMI Loans:</strong></p>
        <ul>
            <li>Interest rates can significantly increase the total repayment amount.</li>
            <li>Missing payments can lead to penalties and affect credit scores.</li>
            <li>Fixed EMIs may not allow for early repayment flexibility without additional charges.</li>
        </ul>

        <p><strong>How EMI Loans Differ from Other Loans:</strong></p>
        <ul>
            <li>Unlike bullet repayment loans, EMI loans require regular monthly payments instead of a lump sum at the end.</li>
            <li>EMI loans provide a structured repayment plan, whereas overdraft loans allow flexible withdrawals and repayments.</li>
            <li>EMI loans are typically used for long-term financing, while payday loans are short-term and often have higher interest rates.</li>
        </ul>
    </div>
</div>



