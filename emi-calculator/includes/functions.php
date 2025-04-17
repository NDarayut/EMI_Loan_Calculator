<?php
function calculateEMI($principal, $monthlyRate, $months) {
    if ($monthlyRate == 0) {
        return $principal / $months;
    }

    return ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / 
           (pow(1 + $monthlyRate, $months) - 1);
}

function generateAmortizationSchedule($principal, $monthlyRate, $months, $emi, $startDate) {
    $schedule = [];
    $balance = $principal;

    $date = DateTime::createFromFormat('Ymd', $startDate);

    for ($i = 1; $i <= $months; $i++) {
        $interest = $balance * $monthlyRate;
        $principalPart = $emi - $interest;
        $balance -= $principalPart;

        $schedule[] = [
            'month' => $i,
            'date' => $date->format('Y-m-d'),
            'emi' => $emi,
            'interest' => $interest,
            'principal' => $principalPart,
            'balance' => max($balance, 0)
        ];

        $date->modify('+1 month');
    }

    return $schedule;
}
?>
