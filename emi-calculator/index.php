<!DOCTYPE html>
<html>
<head>
    <title>EMI Loan Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Flatpickr CSS for calendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Icon for calendar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h2 class="mb-0">EMI Loan Calculator</h2>
                    </div>

                    <div class="card-body">

                        <!--Send user input to process.php to calculate EMI -->
                        <form action="process.php" method="POST">

                            <!--Loan Amount and Currency -->
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Loan Amount:</label>
                                    <!-- Take in float value as loan amount -->
                                    <input type="number" step="0.01" name="amount" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Currency:</label>
                                    <select name="currency" class="form-select currency-select">
                                        <option value="USD">USD</option>
                                        <option value="CNY">CNY</option>
                                        <option value="KHR">KHR</option>
                                        <option value="THB">THB</option>
                                    </select>
                                </div>
                            </div>

                            <!--Loan Duration and Duration Type -->
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Loan Duration:</label>
                                    <input type="number" name="duration" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Duration Type:</label>
                                    <div class="mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration_type" id="durationYear" value="year" checked>
                                            <label class="form-check-label" for="durationYear">
                                                Year
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="duration_type" id="durationMonth" value="month">
                                            <label class="form-check-label" for="durationMonth">
                                                Month
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Annual Interest Rate -->
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label">Annual Interest Rate (%):</label>
                                    <!-- Convert annual rate to monthly rate -->
                                    <input type="number" step="0.01" name="rate" class="form-control" required>
                                </div>
                            </div>

                            <!--Loan Start Date -->
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label">Start Date:</label>
                                    <div class="input-group w-100">
                                        <input type="text" class="form-control" id="datepicker" name="start_date" required>
                                        <span class="input-group-text" id="date-icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary custom-btn w-100">Calculate EMI</button>
                                </div>
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Flatpickr JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr
            const datePicker = flatpickr("#datepicker", {
                dateFormat: "Y-m-d",
                static: false,
                appendTo: document.body, // <--- important fix
                positionElement: document.querySelector('#date-icon'),
                disableMobile: true,
                clickOpens: true
            });
            
            // Make the calendar icon clickable
            document.querySelector('#date-icon').addEventListener('click', function() {
                // The correct method is open() and close()
                if (datePicker.isOpen) {
                    datePicker.close();
                } else {
                    datePicker.open();
                }
            });
        });
    </script>
    
</body>
</html>