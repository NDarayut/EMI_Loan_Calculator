<?php
// faq.php - Frequently Asked Questions page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Frequently Asked Questions - EMI Loan Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #162B55;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="./images/logo.png" alt="Logo" width="50" height="50" class="me-2">
                <span class=""><strong>EMI Loan Calculator</strong></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="faq.php">FAQ</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- FAQ Header -->
    <div class="faq-header">
        <div class="container">
            <h1 class="text-center">Frequently Asked Questions</h1>
            <p class="text-center lead">Find answers to common questions about loans, EMI calculations, and our calculator</p>
        </div>
    </div>

    <!-- FAQ Content -->
    <div class="container mb-5">
        <!-- Search Bar -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" id="faqSearch" class="form-control" placeholder="Search for questions...">
                    <button class="btn btn-primary custom-btn" type="button">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>

        <!-- FAQ Categories -->
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="list-group">
                    <a href="#basics" class="list-group-item list-group-item-action">EMI Basics</a>
                    <a href="#calculator" class="list-group-item list-group-item-action">Using Our Calculator</a>
                    <a href="#interest" class="list-group-item list-group-item-action">Interest Rates</a>
                    <a href="#loan-types" class="list-group-item list-group-item-action">Loan Types</a>
                    <a href="#repayment" class="list-group-item list-group-item-action">Loan Repayment</a>
                </div>
            </div>

            <div class="col-md-9">
                <!-- EMI Basics -->
                <div id="basics" class="faq-category">
                    <h3 class="mb-4">EMI Basics</h3>
                    <div class="accordion mb-4" id="basicsAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="basics1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#basicsCollapse1" aria-expanded="true" aria-controls="basicsCollapse1">
                                    What is an EMI?
                                </button>
                            </h2>
                            <div id="basicsCollapse1" class="accordion-collapse collapse show" aria-labelledby="basics1" data-bs-parent="#basicsAccordion">
                                <div class="accordion-body">
                                    <p>EMI stands for Equated Monthly Installment. It's a fixed payment amount made by a borrower to a lender on a specified date each month. EMIs are used to pay off both interest and principal each month so that over a specified number of years, the loan is fully paid off along with interest.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="basics2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#basicsCollapse2" aria-expanded="false" aria-controls="basicsCollapse2">
                                    How is EMI calculated?
                                </button>
                            </h2>
                            <div id="basicsCollapse2" class="accordion-collapse collapse" aria-labelledby="basics2" data-bs-parent="#basicsAccordion">
                                <div class="accordion-body">
                                    <p>EMI can be calculated using the following formula:</p>
                                    <p><strong>EMI = [P × r × (1 + r)<sup>n</sup>] ÷ [(1 + r)<sup>n</sup> - 1]</strong></p>
                                    <p>Where:</p>
                                    <ul>
                                        <li><strong>P</strong> = Principal loan amount</li>
                                        <li><strong>r</strong> = Monthly interest rate (annual rate divided by 12 and then divided by 100)</li>
                                        <li><strong>n</strong> = Loan tenure in months</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="basics3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#basicsCollapse3" aria-expanded="false" aria-controls="basicsCollapse3">
                                    What is the difference between flat rate and reducing balance methods?
                                </button>
                            </h2>
                            <div id="basicsCollapse3" class="accordion-collapse collapse" aria-labelledby="basics3" data-bs-parent="#basicsAccordion">
                                <div class="accordion-body">
                                    <p><strong>Flat Rate Method:</strong> Interest is calculated on the entire loan amount throughout the loan tenure, regardless of the principal amount repaid. This typically results in higher interest payments.</p>
                                    <p><strong>Reducing Balance Method:</strong> Interest is calculated only on the outstanding loan balance after each EMI payment. As you pay down the principal, the interest component decreases over time. This method is more borrower-friendly and is the standard practice for most bank loans.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Using Our Calculator -->
                <div id="calculator" class="faq-category">
                    <h3 class="mb-4">Using Our Calculator</h3>
                    <div class="accordion mb-4" id="calculatorAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="calculator1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#calculatorCollapse1" aria-expanded="true" aria-controls="calculatorCollapse1">
                                    How do I use the EMI calculator?
                                </button>
                            </h2>
                            <div id="calculatorCollapse1" class="accordion-collapse collapse show" aria-labelledby="calculator1" data-bs-parent="#calculatorAccordion">
                                <div class="accordion-body">
                                    <p>Using our EMI calculator is simple:</p>
                                    <ol>
                                        <li>Enter the loan amount you wish to borrow</li>
                                        <li>Select the currency of your loan</li>
                                        <li>Enter the loan tenure (in years or months)</li>
                                        <li>Enter the annual interest rate</li>
                                        <li>Select your preferred start date</li>
                                        <li>Choose between flat rate or reducing balance method</li>
                                        <li>Click the "Calculate EMI" button to view your results</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="calculator2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#calculatorCollapse2" aria-expanded="false" aria-controls="calculatorCollapse2">
                                    Can I download or print my loan schedule?
                                </button>
                            </h2>
                            <div id="calculatorCollapse2" class="accordion-collapse collapse" aria-labelledby="calculator2" data-bs-parent="#calculatorAccordion">
                                <div class="accordion-body">
                                    <p>Yes, after calculating your EMI, you'll see a "Download PDF" button that allows you to save or print your complete loan amortization schedule. This PDF includes all loan details and the monthly breakdown of payments.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="calculator3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#calculatorCollapse3" aria-expanded="false" aria-controls="calculatorCollapse3">
                                    Which currencies are supported by the calculator?
                                </button>
                            </h2>
                            <div id="calculatorCollapse3" class="accordion-collapse collapse" aria-labelledby="calculator3" data-bs-parent="#calculatorAccordion">
                                <div class="accordion-body">
                                    <p>Our calculator currently supports the following currencies:</p>
                                    <ul>
                                        <li>USD (US Dollar) - $</li>
                                        <li>KHR (Cambodian Riel) - ៛</li>
                                        <li>CNY (Chinese Yuan) - ¥</li>
                                        <li>THB (Thai Baht) - ฿</li>
                                    </ul>
                                    <p>We plan to add more currencies in future updates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Interest Rates -->
                <div id="interest" class="faq-category">
                    <h3 class="mb-4">Interest Rates</h3>
                    <div class="accordion mb-4" id="interestAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="interest1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#interestCollapse1" aria-expanded="true" aria-controls="interestCollapse1">
                                    How do interest rates affect my EMI?
                                </button>
                            </h2>
                            <div id="interestCollapse1" class="accordion-collapse collapse show" aria-labelledby="interest1" data-bs-parent="#interestAccordion">
                                <div class="accordion-body">
                                    <p>Interest rates have a significant impact on your EMI amount. Higher interest rates result in higher EMIs or a longer repayment period. Even a small difference in interest rate can substantially change the total interest paid over the loan tenure.</p>
                                    <p>For example, on a $100,000 loan for 20 years:</p>
                                    <ul>
                                        <li>At 5% interest: EMI would be approximately $660 with total interest of $58,400</li>
                                        <li>At 6% interest: EMI would be approximately $716 with total interest of $71,900</li>
                                    </ul>
                                    <p>That 1% difference results in about $13,500 more in total interest payments.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="interest2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#interestCollapse2" aria-expanded="false" aria-controls="interestCollapse2">
                                    Are interest rates fixed or variable?
                                </button>
                            </h2>
                            <div id="interestCollapse2" class="accordion-collapse collapse" aria-labelledby="interest2" data-bs-parent="#interestAccordion">
                                <div class="accordion-body">
                                    <p>Our calculator can be used for both fixed and variable rate loans:</p>
                                    <ul>
                                        <li><strong>Fixed interest rates</strong> remain constant throughout the loan tenure. The EMI amount doesn't change over time.</li>
                                        <li><strong>Variable interest rates</strong> (also called floating rates) can change based on market conditions. If you have a variable rate loan, you may need to recalculate your EMI periodically when rates change.</li>
                                    </ul>
                                    <p>If you're planning for a variable rate loan, it's advisable to calculate scenarios with different interest rates to understand potential payment fluctuations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loan Types -->
                <div id="loan-types" class="faq-category">
                    <h3 class="mb-4">Loan Types</h3>
                    <div class="accordion mb-4" id="loanTypesAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="loanTypes1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#loanTypesCollapse1" aria-expanded="true" aria-controls="loanTypesCollapse1">
                                    What types of loans can I calculate using this tool?
                                </button>
                            </h2>
                            <div id="loanTypesCollapse1" class="accordion-collapse collapse show" aria-labelledby="loanTypes1" data-bs-parent="#loanTypesAccordion">
                                <div class="accordion-body">
                                    <p>Our EMI calculator is versatile and can be used for various loan types including:</p>
                                    <ul>
                                        <li>Home loans / mortgages</li>
                                        <li>Personal loans</li>
                                        <li>Car loans</li>
                                        <li>Education loans</li>
                                        <li>Business loans</li>
                                        <li>Any other loan with regular monthly payments</li>
                                    </ul>
                                    <p>The calculator works for any loan where you repay a fixed amount at regular intervals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="loanTypes2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#loanTypesCollapse2" aria-expanded="false" aria-controls="loanTypesCollapse2">
                                    Which EMI method should I choose for my loan type?
                                </button>
                            </h2>
                            <div id="loanTypesCollapse2" class="accordion-collapse collapse" aria-labelledby="loanTypes2" data-bs-parent="#loanTypesAccordion">
                                <div class="accordion-body">
                                    <p>The appropriate EMI method depends on your loan type and lender:</p>
                                    <ul>
                                        <li><strong>Reducing Balance Method:</strong> Most bank-issued loans including home loans, car loans, and personal loans use this method. It's more borrower-friendly as interest is calculated only on the outstanding balance.</li>
                                        <li><strong>Flat Rate Method:</strong> Some lenders may use this for personal loans or short-term loans. This method typically results in a higher effective interest rate because interest is calculated on the full principal throughout the loan tenure.</li>
                                    </ul>
                                    <p>When comparing loan offers, always ask your lender which method they use to calculate EMI. If they offer flat rate, you might want to negotiate for a reducing balance method instead.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loan Repayment -->
                <div id="repayment" class="faq-category">
                    <h3 class="mb-4">Loan Repayment</h3>
                    <div class="accordion mb-4" id="repaymentAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="repayment1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#repaymentCollapse1" aria-expanded="true" aria-controls="repaymentCollapse1">
                                    Can I repay my loan before the tenure ends?
                                </button>
                            </h2>
                            <div id="repaymentCollapse1" class="accordion-collapse collapse show" aria-labelledby="repayment1" data-bs-parent="#repaymentAccordion">
                                <div class="accordion-body">
                                    <p>Yes, most loans can be repaid early through:</p>
                                    <ul>
                                        <li><strong>Partial prepayment:</strong> Paying an additional amount toward the principal along with your regular EMI</li>
                                        <li><strong>Foreclosure:</strong> Paying off the entire outstanding loan amount in one go</li>
                                    </ul>
                                    <p>However, some loans may have prepayment penalties or foreclosure charges. Check with your lender about their prepayment policies and fees before making extra payments.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="repayment2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#repaymentCollapse2" aria-expanded="false" aria-controls="repaymentCollapse2">
                                    What happens if I miss an EMI payment?
                                </button>
                            </h2>
                            <div id="repaymentCollapse2" class="accordion-collapse collapse" aria-labelledby="repayment2" data-bs-parent="#repaymentAccordion">
                                <div class="accordion-body">
                                    <p>Missing EMI payments can have several consequences:</p>
                                    <ul>
                                        <li>Late payment fees and penalties</li>
                                        <li>Increased interest on the overdue amount</li>
                                        <li>Negative impact on your credit score</li>
                                        <li>After repeated defaults, the lender may initiate recovery proceedings</li>
                                    </ul>
                                    <p>If you anticipate difficulty making a payment, it's best to contact your lender before the due date to discuss potential alternatives such as restructuring your loan or requesting a temporary payment holiday.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="repayment3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#repaymentCollapse3" aria-expanded="false" aria-controls="repaymentCollapse3">
                                    How does prepayment affect my loan schedule?
                                </button>
                            </h2>
                            <div id="repaymentCollapse3" class="accordion-collapse collapse" aria-labelledby="repayment3" data-bs-parent="#repaymentAccordion">
                                <div class="accordion-body">
                                    <p>When you make prepayments on your loan, you have two options:</p>
                                    <ol>
                                        <li><strong>Reduce EMI amount:</strong> Keep the original loan tenure but lower your monthly payment amount</li>
                                        <li><strong>Reduce loan tenure:</strong> Keep the same EMI amount but finish paying off the loan earlier</li>
                                    </ol>
                                    <p>Most borrowers choose to reduce the tenure while keeping the same EMI, as this saves more on interest payments in the long run. Our calculator can help you see the impact of prepayments by recalculating your repayment schedule with the new principal amount.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="p-4 bg-light rounded">
                    <h4>Still have questions?</h4>
                    <p>Our team is ready to help you with any questions you might have about loans or using our calculator.</p>
                    <a href="contact.php" class="btn btn-primary custom-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5 py-4" style="background-color: #162B55; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>EMI Loan Calculator</h5>
                    <p class="text-light">A simple and effective tool to help you plan your loan repayments.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-light">Home</a></li>
                        <li><a href="about.php" class="text-light">About</a></li>
                        <li><a href="faq.php" class="text-light">FAQ</a></li>
                        <li><a href="contact.php" class="text-light">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect With Us</h5>
                    <div class="social-icons">
                        <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light me-2"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="mt-3 text-light">
                        <i class="fas fa-envelope me-2"></i> darayutnhem009@gmail.com<br>
                        <i class="fas fa-phone me-2"></i> +855 92 444 234<br>
                    </p>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">© 2025 EMI Loan Calculator. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="privacy.php" class="text-light me-3">Privacy Policy</a>
                    <a href="terms.php" class="text-light">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple FAQ search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('faqSearch');
            
            searchInput.addEventListener('keyup', function() {
                const searchTerm = searchInput.value.toLowerCase();
                const accordionButtons = document.querySelectorAll('.accordion-button');
                
                accordionButtons.forEach(function(button) {
                    const questionText = button.textContent.toLowerCase();
                    const accordionItem = button.closest('.accordion-item');
                    
                    if (questionText.includes(searchTerm)) {
                        accordionItem.style.display = 'block';
                        
                        // If search term is not empty, expand this item
                        if (searchTerm.length > 0 && button.classList.contains('collapsed')) {
                            button.click();
                        }
                    } else {
                        // If no match, hide the item unless search is empty
                        accordionItem.style.display = searchTerm.length > 0 ? 'none' : 'block';
                        
                        // Collapse this item if it doesn't match and is expanded
                        if (searchTerm.length > 0 && !button.classList.contains('collapsed')) {
                            button.click();
                        }
                    }
                });
            });

            // Smooth scroll to categories
            document.querySelectorAll('.list-group-item').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>