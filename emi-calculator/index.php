<!-- 
    User Input Form
 -->

<!DOCTYPE html>
<html>
<head>
    <title>EMI Loan Calculator</title>
</head>
<body>
    <h2>EMI Loan Calculator</h2>

    <!--Send user input to process.php to calculate EMI -->
    <form action="process.php" method="POST">
        <label>Loan Amount:</label>

        <!-- Take in float value as loan amount -->
        <input type="number" step="0.01" name="amount" required><br>

        <label>Currency:</label>

        <!-- Drop down menu for currency type -->
        <select name="currency">
            <option value="USD">USD</option>
            <option value="CNY">CNY</option>
            <option value="KHR">KHR</option>
            <option value="THB">THB</option>
        </select><br>

        <label>Loan Duration:</label>

        <!-- Loan duration -->
        <input type="number" name="duration" required><br>

        <label>Duration Type:</label>

        <!-- Convert to number of months if user choose year -->
        <select name="duration_type">
            <option value="year">Year</option>
            <option value="month">Month</option>
        </select><br>

        <label>Annual Interest Rate (%):</label>

        <!-- Convert annual rate to monthly rate -->
        <input type="number" step="0.01" name="rate" required><br>

        <label>Start Date (YYYYMMDD):</label>
        
        <!-- USe date picker instead -->
        <input type="text" name="start_date" pattern="\d{8}" required><br><br>

        <button type="submit">Calculate EMI</button>
    </form>
</body>
</html>
