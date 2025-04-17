<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>EMI Loan Calculator</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h2>EMI Loan Calculator</h2>
    <form action="process.php" method="POST">
        <label>Loan Amount:</label>
        <input type="number" step="0.01" name="amount" required><br>

        <label>Currency:</label>
        <select name="currency">
            <option value="USD">USD</option>
            <option value="CNY">CNY</option>
            <option value="KHR">KHR</option>
            <option value="THB">THB</option>
        </select><br>

        <label>Loan Duration:</label>
        <input type="number" name="duration" required><br>

        <label>Duration Type:</label>
        <select name="duration_type">
            <option value="year">Year</option>
            <option value="month">Month</option>
        </select><br>

        <label>Annual Interest Rate (%):</label>
        <input type="number" step="0.01" name="rate" required><br>

        <label>Start Date (YYYYMMDD):</label>
        <input type="text" name="start_date" pattern="\d{8}" required><br><br>

        <button type="submit">Calculate EMI</button>
    </form>
</body>
</html>
