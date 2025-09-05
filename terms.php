<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - <?php echo $config['company_name']; ?></title>
    <meta name="description" content="Terms of Service for Symagee Contractors - Read our terms and conditions for using our construction services.">
    
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
                    <h1 class="fw-bold mb-4">Terms of Service</h1>
                    <p class="text-muted mb-4">Last updated: January 1, 2024</p>
                    
                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">1. Acceptance of Terms</h2>
                        <p>By accessing and using the services of <?php echo $config['company_name']; ?> ("Company," "we," "our," or "us"), you accept and agree to be bound by the terms and provision of this agreement.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">2. Services Description</h2>
                        <p><?php echo $config['company_name']; ?> provides construction services including but not limited to:</p>
                        <ul>
                            <li>Residential and commercial construction</li>
                            <li>Roofing services and installation</li>
                            <li>Biodigester installation and maintenance</li>
                            <li>Aluminum and glass works</li>
                            <li>Painting and finishing services</li>
                            <li>Infrastructure development</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">3. Contract Formation</h2>
                        <p>A contract is formed when:</p>
                        <ul>
                            <li>You submit a project request or accept our written quote</li>
                            <li>We provide written confirmation of project acceptance</li>
                            <li>Both parties sign a formal construction agreement</li>
                            <li>Initial payment or deposit is received as specified</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">4. Payment Terms</h2>
                        <h3 class="h5 fw-bold mb-2">Payment Schedule</h3>
                        <ul>
                            <li>Deposit: 30% of total project cost upon contract signing</li>
                            <li>Progress payments: As specified in individual contracts</li>
                            <li>Final payment: Upon project completion and client approval</li>
                        </ul>
                        
                        <h3 class="h5 fw-bold mb-2 mt-4">Late Payments</h3>
                        <p>Late payments may result in:</p>
                        <ul>
                            <li>Suspension of work until payment is received</li>
                            <li>Interest charges on overdue amounts</li>
                            <li>Additional costs for project delays</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">5. Project Timeline</h2>
                        <ul>
                            <li>Project timelines are estimates based on normal working conditions</li>
                            <li>Delays due to weather, permit issues, or client changes may extend timelines</li>
                            <li>We will communicate any significant delays promptly</li>
                            <li>Force majeure events may affect project completion dates</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">6. Change Orders</h2>
                        <p>Any changes to the original project scope must be:</p>
                        <ul>
                            <li>Requested in writing by the client</li>
                            <li>Approved and priced by our team</li>
                            <li>Signed by both parties before implementation</li>
                            <li>Paid for according to agreed terms</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">7. Warranties and Guarantees</h2>
                        <h3 class="h5 fw-bold mb-2">Workmanship Warranty</h3>
                        <p>We provide a 12-month warranty on our workmanship from project completion date.</p>
                        
                        <h3 class="h5 fw-bold mb-2 mt-4">Material Warranties</h3>
                        <p>Material warranties are provided by manufacturers and may vary by product.</p>
                        
                        <h3 class="h5 fw-bold mb-2 mt-4">Warranty Exclusions</h3>
                        <ul>
                            <li>Normal wear and tear</li>
                            <li>Damage due to misuse or negligence</li>
                            <li>Acts of nature or force majeure</li>
                            <li>Modifications by others</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">8. Client Responsibilities</h2>
                        <p>Clients are responsible for:</p>
                        <ul>
                            <li>Providing accurate project information and requirements</li>
                            <li>Obtaining necessary permits (unless specified otherwise)</li>
                            <li>Ensuring site access and utilities availability</li>
                            <li>Making timely payments as agreed</li>
                            <li>Communicating changes or concerns promptly</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">9. Safety and Insurance</h2>
                        <ul>
                            <li>We maintain comprehensive liability insurance</li>
                            <li>All workers are covered under workers' compensation</li>
                            <li>Safety protocols are strictly followed on all job sites</li>
                            <li>Clients must ensure site safety for visitors</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">10. Limitation of Liability</h2>
                        <p>Our liability is limited to:</p>
                        <ul>
                            <li>The total contract value of the specific project</li>
                            <li>Direct damages only (no consequential damages)</li>
                            <li>Claims made within the warranty period</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">11. Dispute Resolution</h2>
                        <p>Any disputes will be resolved through:</p>
                        <ol>
                            <li>Direct negotiation between parties</li>
                            <li>Mediation by a neutral third party</li>
                            <li>Arbitration under Kenyan law if necessary</li>
                            <li>Court proceedings as a last resort</li>
                        </ol>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">12. Termination</h2>
                        <p>Either party may terminate the contract:</p>
                        <ul>
                            <li>For material breach with 30 days written notice</li>
                            <li>For convenience with appropriate compensation</li>
                            <li>Immediately for safety violations or non-payment</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">13. Governing Law</h2>
                        <p>These terms are governed by the laws of Kenya. Any legal proceedings will be conducted in Kenyan courts with jurisdiction over the project location.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">14. Modifications</h2>
                        <p>These terms may be modified only by written agreement signed by both parties. We reserve the right to update these terms for future projects with appropriate notice.</p>
                    </div>

                    <div class="mb-5">
                        <h2 class="h4 fw-bold mb-3">15. Contact Information</h2>
                        <p>For questions about these terms or our services, contact us:</p>
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
