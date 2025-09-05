<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - <?php echo $config['company_name']; ?></title>
    <meta name="description" content="Privacy Policy for Symagee Contractors - Learn how we collect, use, and protect your personal information.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.php">
                <i class="fas fa-hard-hat me-2"></i><?php echo $config['company_name']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="quote.php">Get Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 76px;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1 class="fw-bold mb-4">Privacy Policy</h1>
                    <p class="text-muted mb-4">Last updated: January 1, 2024</p>
                    
                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">1. Introduction</h2>
                        <p><?php echo $config['company_name']; ?> ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">2. Information We Collect</h2>
                        <h3 class="h5 fw-bold mb-2">Personal Information</h3>
                        <p>We may collect personal information that you voluntarily provide to us when you:</p>
                        <ul>
                            <li>Fill out contact forms or request quotes</li>
                            <li>Subscribe to our newsletter</li>
                            <li>Communicate with us via email or phone</li>
                            <li>Engage with our services</li>
                        </ul>
                        <p>This information may include:</p>
                        <ul>
                            <li>Name and contact information</li>
                            <li>Email address and phone number</li>
                            <li>Project details and requirements</li>
                            <li>Location and address information</li>
                        </ul>

                        <h3 class="h5 fw-bold mb-2 mt-4">Automatically Collected Information</h3>
                        <p>When you visit our website, we may automatically collect certain information about your device, including:</p>
                        <ul>
                            <li>IP address and browser type</li>
                            <li>Operating system and device information</li>
                            <li>Pages visited and time spent on our site</li>
                            <li>Referring website information</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">3. How We Use Your Information</h2>
                        <p>We use the information we collect to:</p>
                        <ul>
                            <li>Provide and maintain our services</li>
                            <li>Respond to your inquiries and requests</li>
                            <li>Send you project updates and communications</li>
                            <li>Improve our website and services</li>
                            <li>Comply with legal obligations</li>
                            <li>Protect our rights and prevent fraud</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">4. Information Sharing and Disclosure</h2>
                        <p>We do not sell, trade, or rent your personal information to third parties. We may share your information in the following circumstances:</p>
                        <ul>
                            <li><strong>Service Providers:</strong> With trusted third-party service providers who assist us in operating our business</li>
                            <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety</li>
                            <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
                            <li><strong>Consent:</strong> With your explicit consent for specific purposes</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">5. Data Security</h2>
                        <p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">6. Data Retention</h2>
                        <p>We retain your personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">7. Your Rights</h2>
                        <p>Depending on your location, you may have the following rights regarding your personal information:</p>
                        <ul>
                            <li>Access to your personal information</li>
                            <li>Correction of inaccurate information</li>
                            <li>Deletion of your personal information</li>
                            <li>Restriction of processing</li>
                            <li>Data portability</li>
                            <li>Objection to processing</li>
                        </ul>
                        <p>To exercise these rights, please contact us using the information provided below.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">8. Cookies and Tracking Technologies</h2>
                        <p>Our website may use cookies and similar tracking technologies to enhance your browsing experience. You can control cookie settings through your browser preferences.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">9. Third-Party Links</h2>
                        <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">10. Children's Privacy</h2>
                        <p>Our services are not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">11. Changes to This Privacy Policy</h2>
                        <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">12. Contact Us</h2>
                        <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us:</p>
                        <div class="bg-light p-4 rounded">
                            <p class="mb-2"><strong><?php echo $config['company_name']; ?></strong></p>
                            <p class="mb-2"><i class="fas fa-envelope me-2"></i><?php echo $config['company_email']; ?></p>
                            <p class="mb-2"><i class="fas fa-phone me-2"></i><?php echo $config['phone']; ?></p>
                            <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i><?php echo $config['address']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3"><?php echo $config['company_name']; ?></h5>
                    <p class="mb-3">Building dreams, creating lasting structures. Your trusted construction partner in Kenya.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li><a href="about.php" class="text-white-50 text-decoration-none">About</a></li>
                        <li><a href="projects.php" class="text-white-50 text-decoration-none">Projects</a></li>
                        <li><a href="contact.php" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="roofing.php" class="text-white-50 text-decoration-none">Roofing Services</a></li>
                        <li><a href="biodigester.php" class="text-white-50 text-decoration-none">Biodigester Installation</a></li>
                        <li><a href="aluminum_glass.php" class="text-white-50 text-decoration-none">Aluminum & Glass</a></li>
                        <li><a href="painting.php" class="text-white-50 text-decoration-none">Painting Works</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i><?php echo $config['phone']; ?></p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i><?php echo $config['company_email']; ?></p>
                    <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i><?php echo $config['address']; ?></p>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 <?php echo $config['company_name']; ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="privacy.php" class="text-white-50 text-decoration-none me-3">Privacy Policy</a>
                    <a href="terms.php" class="text-white-50 text-decoration-none">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="main.js"></script>
</body>
</html>
