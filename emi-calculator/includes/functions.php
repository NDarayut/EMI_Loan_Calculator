<?php
function calculateEMIReducBal($principal, $monthlyRate, $months) {
    if ($monthlyRate == 0) {
        return $principal / $months;
    }

    return ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / 
           (pow(1 + $monthlyRate, $months) - 1);
}

function calculateEMIFlatRate($principal, $annualRate, $months) {
    $rateDecimal = $annualRate / 100;

    $totalInterest = $principal * $rateDecimal * ($months / 12);

    $totalRepayment = $principal + $totalInterest;

    return $totalRepayment / $months;
}

function generateAmortizationSchedule($principal, $rate, $months, $emi, $startDate, $totalPayment, $emiMethod) {
    $schedule = [];
    $date = DateTime::createFromFormat('Y-m-d', $startDate);
    $balance = $principal;

    $outstandingBalance = $totalPayment;

    if ($emiMethod === 'flat_rate') {
        $monthlyInterest = ($principal * ($rate / 100) * ($months / 12)) / $months;
        $monthlyPrincipal = $principal / $months;

        for ($i = 1; $i <= $months; $i++) {
            $balance -= $monthlyPrincipal;
            $outstandingBalance -= $emi;

            $schedule[] = [
                'month' => $i,
                'date' => $date->format('Y-m-d'),
                'emi' => round($emi, 2),
                'interest' => round($monthlyInterest, 2),
                'principal' => round($monthlyPrincipal, 2),
                'balance' => max(round($balance, 2), 0),
                'outstandingBalance' => max($outstandingBalance, 0)
            ];

            $date->modify('+1 month');
        }

    } 
    
    else {
        for ($i = 1; $i <= $months; $i++) {
            $interest = $balance * $rate; // monthly rate
            $principalPart = $emi - $interest;
            $balance -= $principalPart;
            $outstandingBalance -= $emi;

            $schedule[] = [
                'month' => $i,
                'date' => $date->format('Y-m-d'),
                'emi' => round($emi, 2),
                'interest' => round($interest, 2),
                'principal' => round($principalPart, 2),
                'balance' => max(round($balance, 2), 0),
                'outstandingBalance' => max($outstandingBalance, 0)
            ];

            $date->modify('+1 month');
        }
    }

    return $schedule;
}


?>
