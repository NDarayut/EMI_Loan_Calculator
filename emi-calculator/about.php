<?php
// about.php - About page
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us - EMI Loan Calculator</title>
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
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Header -->
    <div class="about-header" style="background-color: #f8f9fa; padding: 40px 0; margin-bottom: 30px;">
        <div class="container">
            <h1 class="text-center">About Us</h1>
            <p class="text-center lead">Learn about our mission to simplify loan calculations and financial planning</p>
        </div>
    </div>

    <!-- About Content -->
    <div class="container mb-5">
        <!-- Our Story -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card shadow h-100">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Our Story</h3>
                    </div>
                    <div class="card-body">
                        <p>The EMI Loan Calculator was founded in 2023 with a simple mission: to help people make informed financial decisions by providing easy-to-use tools for loan planning.</p>
                        <p>We recognized that many individuals struggle to understand the complexities of loan repayments, interest calculations, and the true cost of borrowing money. Financial institutions often present this information in complex terms, making it difficult for the average person to plan their finances effectively.</p>
                        <p>Our team of financial experts and software developers came together to create an intuitive, accessible calculator that would empower users to:</p>
                        <ul>
                            <li>Accurately calculate monthly loan payments</li>
                            <li>Understand the total cost of a loan over time</li>
                            <li>Compare different loan options and scenarios</li>
                            <li>Make better financial decisions based on clear, transparent information</li>
                        </ul>
                        <p>Since our launch, we've helped thousands of users worldwide plan their home loans, auto loans, personal loans, and business loans with confidence.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card shadow h-100">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Our Mission</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">At EMI Loan Calculator, our mission is to promote financial literacy and empower individuals to make smarter financial decisions through accessible, easy-to-use tools and educational resources.</p>
                        
                        <h5>Core Values</h5>
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle me-3 mt-1" style="color: #162B55;"></i>
                            <div>
                                <h6>Accessibility</h6>
                                <p>We believe financial tools should be accessible to everyone, regardless of their financial background or expertise.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle me-3 mt-1" style="color: #162B55;"></i>
                            <div>
                                <h6>Transparency</h6>
                                <p>We are committed to providing clear, transparent information about loans and their true costs.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle me-3 mt-1" style="color: #162B55;"></i>
                            <div>
                                <h6>Education</h6>
                                <p>We aim to educate users about financial concepts and help them make informed decisions.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check-circle me-3 mt-1" style="color: #162B55;"></i>
                            <div>
                                <h6>Innovation</h6>
                                <p>We continuously improve our calculator and resources to meet the evolving needs of our users.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- How It Works -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">How Our Calculator Works</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center mb-4 mb-md-0">
                                <div class="bg-light p-3 rounded-circle mx-auto" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-calculator fa-3x" style="color: #162B55;"></i>
                                </div>
                                <h5 class="mt-3">Enter Loan Details</h5>
                                <p>Input your loan amount, interest rate, tenure, and other key parameters.</p>
                            </div>
                            <div class="col-md-3 text-center mb-4 mb-md-0">
                                <div class="bg-light p-3 rounded-circle mx-auto" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-cogs fa-3x" style="color: #162B55;"></i>
                                </div>
                                <h5 class="mt-3">Advanced Calculations</h5>
                                <p>Our system processes your inputs using industry-standard financial formulas.</p>
                            </div>
                            <div class="col-md-3 text-center mb-4 mb-md-0">
                                <div class="bg-light p-3 rounded-circle mx-auto" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-chart-line fa-3x" style="color: #162B55;"></i>
                                </div>
                                <h5 class="mt-3">View Results</h5>
                                <p>Get comprehensive information about your EMI, total interest, and payment schedule.</p>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="bg-light p-3 rounded-circle mx-auto" style="width: 100px; height: 100px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-file-pdf fa-3x" style="color: #162B55;"></i>
                                </div>
                                <h5 class="mt-3">Download Reports</h5>
                                <p>Save your calculations as PDF files for future reference or sharing.</p>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="alert alert-info" role="alert">
                                    <h5><i class="fas fa-info-circle me-2"></i>Calculation Methods</h5>
                                    <p class="mb-0">Our calculator supports two common EMI calculation methods:</p>
                                    <ul class="mt-2 mb-0">
                                        <li><strong>Reducing Balance Method:</strong> Interest is calculated on the outstanding loan balance, which decreases with each payment. This is the most common method used by banks and financial institutions.</li>
                                        <li><strong>Flat Rate Method:</strong> Interest is calculated on the initial loan amount throughout the loan tenure. This method typically results in higher interest payments.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Team -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Our Team</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-center mb-5">Meet the dedicated professionals behind the EMI Loan Calculator</p>
                        
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="bg-light rounded-circle mx-auto mb-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-user fa-4x" style="color: #162B55;"></i>
                                    </div>
                                    <h5>Sarah Johnson</h5>
                                    <p class="text-muted">Founder & Financial Advisor</p>
                                    <p>With over 15 years of experience in banking and finance, Sarah leads our team with expertise in personal and business loans.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="bg-light rounded-circle mx-auto mb-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-user fa-4x" style="color: #162B55;"></i>
                                    </div>
                                    <h5>Michael Chen</h5>
                                    <p class="text-muted">Lead Developer</p>
                                    <p>Michael has developed financial software for major banks and brings his technical expertise to our calculator platform.</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="text-center">
                                    <div class="bg-light rounded-circle mx-auto mb-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                        <i class="fas fa-user fa-4x" style="color: #162B55;"></i>
                                    </div>
                                    <h5>Priya Patel</h5>
                                    <p class="text-muted">Financial Education Specialist</p>
                                    <p>Priya focuses on creating educational content to help users understand loan concepts and make better financial decisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">What Our Users Say</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p class="card-text">"This calculator helped me understand my mortgage options clearly. I was able to compare different loan terms and make an informed decision. Highly recommended!"</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <p class="mb-0"><strong>John D.</strong> - Homeowner</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                        </div>
                                        <p class="card-text">"As a small business owner, I needed to understand my financing options. This calculator made it easy to plan my business loan repayments and budget accordingly."</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <p class="mb-0"><strong>Lisa M.</strong> - Small Business Owner</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        </div>
                                        <p class="card-text">"I was confused about how interest rates would affect my car loan. The EMI calculator showed me exactly what I'd be paying each month and the total interest over time."</p>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <p class="mb-0"><strong>David R.</strong> - Auto Loan Borrower</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow bg-light border-0">
                    <div class="card-body text-center p-5">
                        <h3>Ready to Calculate Your Loan EMI?</h3>
                        <p class="lead">Use our free calculator to plan your loan repayments and make informed financial decisions.</p>
                        <div class="mt-4">
                            <a href="index.php" class="btn btn-primary custom-btn btn-lg me-2">Use Calculator</a>
                            <a href="contact.php" class="btn btn-outline-primary">Contact Us</a>
                        </div>
                    </div>
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
                        <i class="fas fa-envelope me-2"></i> darayutnhem009.com<br>
                        <i class="fas fa-phone me-2"></i> +855 92 444 234
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
</body>
</html>