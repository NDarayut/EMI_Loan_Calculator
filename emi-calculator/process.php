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

        <button type="submit" class="btn btn-primary custom-btn">Back</button>
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
    $emiMethod = $_POST['emi_method'];

    // Convert years to months
    $months = $durationType === 'year' ? $duration * 12 : $duration;

    // Convert annual rate to monethly rate
    $monthlyRate = $rate / 12 / 100;

    if($emiMethod == 'flat_rate') {
        $emi = calculateEMIFlatRate($amount, $rate, $months, $emiMethod);
        $emiMETHOD = "Flat Rate";
    } 
    else {
        // Reducing balance method
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

    echo "<div class='text-center mb-4'>";
    echo "<h2 style='margin-bottom: 10px;'>Loan Details</h2>";
    echo "<hr style='border: 1.5px solid black; width: 100%; margin: 0 auto;'>";
    echo "</div>";

    echo "<div style='font-size: 18px; line-height: 1.8;'>"; 
    echo '<span style="display: inline-block; width: 400px; font-weight: bold;">EMI Method:</span> ' . $emiMETHOD . ' <br>';
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
                <th>Outstanding Principal</th>
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
            <td>$symbol " . number_format($entry['outstandingBalance'], 2) . "</td>
        </tr>";
    }
    
    echo "</tbody></table></div>";

    echo '<form action="download-pdf.php" method="post" target="_blank">
        <input type="hidden" name="amount" value="' . htmlspecialchars($amount) . '">
        <input type="hidden" name="currency" value="' . htmlspecialchars($currency) . '">
        <input type="hidden" name="duration" value="' . htmlspecialchars($duration) . '">
        <input type="hidden" name="duration_type" value="' . htmlspecialchars($durationType) . '">
        <input type="hidden" name="rate" value="' . htmlspecialchars($rate) . '">
        <input type="hidden" name="start_date" value="' . htmlspecialchars($startDate) . '">
        <input type="hidden" name="emi_method" value="' . htmlspecialchars($emiMethod) . '">
        
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success custom-btn">
            <i class="bi bi-download"></i> Download PDF
            </button>
        </div>
    </form>';
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
    </div>

    <div class="text-center mb-4">
        <h2 style="margin-bottom: 10px;">EMI Methods: Flat Rate vs Reducing Balance</h2>
        <hr style="border: 1.5px solid black; width: 100%; margin: 0 auto;">
    </div>
    <div style="font-size: 18px; line-height: 1.8;">
        <p><strong>Flat Rate Method:</strong></p>
        <p>In the Flat Rate method, the interest is calculated on the entire loan amount throughout the loan tenure, regardless of the principal amount repaid. This method results in a higher total interest payment compared to the Reducing Balance method.</p>
        <p><strong>Example:</strong></p>
        <p>Loan Amount: $10,000<br>
        Annual Interest Rate: 10%<br>
        Loan Tenure: 2 years</p>
        <p>Interest = Principal × Rate × Time<br>
        Total Interest = $10,000 × 10% × 2 = $2,000<br>
        Total Payment = Principal + Interest = $10,000 + $2,000 = $12,000<br>
        Monthly EMI = $12,000 ÷ 24 = $500</p>

        <p><strong>Reducing Balance Method:</strong></p>
        <p>In the Reducing Balance method, the interest is calculated on the outstanding loan balance after each EMI payment. This method results in lower total interest payments compared to the Flat Rate method.</p>
        <p><strong>Example:</strong></p>
        <p>Loan Amount: $10,000<br>
        Annual Interest Rate: 10%<br>
        Loan Tenure: 2 years</p>
        <p>Monthly Interest Rate = 10% ÷ 12 = 0.833%<br>
        EMI = [P × r × (1 + r)<sup>n</sup>] ÷ [(1 + r)<sup>n</sup> - 1]<br>
        EMI = [$10,000 × 0.00833 × (1 + 0.00833)<sup>24</sup>] ÷ [(1 + 0.00833)<sup>24</sup> - 1] ≈ $461.45</p>
        <p>Total Payment = Sum of all EMIs ≈ $11,074.80<br>
        Total Interest = Total Payment - Principal ≈ $1,074.80</p>

        <p><strong>Comparison:</strong></p>
        <p>The Flat Rate method is simpler to calculate but results in higher interest payments. The Reducing Balance method is more accurate and cost-effective for borrowers, as the interest decreases with each payment.</p>
        <p>Compared to other repayment methods, such as balloon payments or interest-only loans, EMI methods provide a predictable and consistent repayment schedule, making them easier to manage for most borrowers.</p>
    </div>
</div>



