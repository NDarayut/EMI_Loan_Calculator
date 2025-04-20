<?php
// contact.php - Contact page
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - EMI Loan Calculator</title>
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
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Header -->
    <div class="contact-header" style="background-color: #f8f9fa; padding: 40px 0; margin-bottom: 30px;">
        <div class="container">
            <h1 class="text-center">Contact Us</h1>
            <p class="text-center lead">Have questions about loans or our calculator? We're here to help!</p>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="container mb-5">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-4">
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Send Us a Message</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="send_email.php"  method="POST">
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Subject *</label>
                                    <select name="subject" class="form-select" required>
                                        <option value="" selected disabled>Select a subject</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Calculator Support">Calculator Support</option>
                                        <option value="Loan Information">Loan Information</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group mb-4">
                                <label class="form-label">Message *</label>
                                <textarea name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="privacyConsent" name="privacy_consent" required>
                                <label class="form-check-label" for="privacyConsent">
                                    I agree that my data will be stored and processed for the purpose of contacting me. I have read and accepted the <a href="privacy.php">Privacy Policy</a>.
                                </label>
                            </div>
                            
                            <div>
                                <button type="submit" name="contact_submit" class="btn btn-primary custom-btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Contact Information</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">
                            <i class="fas fa-map-marker-alt me-2" style="color: #162B55;"></i>
                            <strong>Address: </strong><br>
                            Russia Federation Boulevard<br>
                            Khan Toul Kork<br>
                            Phnom Penh<br>
                            Cambodia
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone me-2" style="color: #162B55;"></i>
                            <strong>Phone:</strong><br>
                            +855 92 444 234<br>
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-envelope me-2" style="color: #162B55;"></i>
                            <strong>Email:</strong><br>
                            darayutnhem009@gmail.com
                        </p>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="card shadow">
                    <div class="card-header custom-header">
                        <h3 class="mb-0">Connect With Us</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-around">
                            <a href="https://www.linkedin.com/in/nhem-darayut-298512274/" class="btn btn-outline-primary" style="width: 50px; height: 50px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://github.com/NDarayut" class="btn btn-outline-secondary" style="width: 50px; height: 50px; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- FAQ Quick Links -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="p-4 bg-light rounded">
                    <h4>Have Questions?</h4>
                    <p>Check our frequently asked questions page for quick answers to common questions.</p>
                    <a href="faq.php" class="btn btn-primary custom-btn">View FAQs</a>
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
</body>
</html>