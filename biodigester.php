<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodigester Installation Services in Kenya | Symagee Contractors</title>
    <meta name="description" content="Professional biodigester installation in Kenya. Eco-friendly waste management solutions for homes and businesses. Expert installation, maintenance & support.">
    <meta name="keywords" content="biodigester Kenya, biogas installation, waste management, eco-friendly toilets, septic tank alternative, Nairobi biodigester">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Biodigester Installation",
        "provider": {
            "@type": "Organization",
            "name": "Symagee Contractors",
            "url": "<?php echo SITE_URL; ?>"
        },
        "description": "Professional biodigester installation and maintenance services",
        "areaServed": "Kenya"
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-hard-hat me-2"></i>Symagee Contractors
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="roofing.php">Roofing Services</a></li>
                            <li><a class="dropdown-item active" href="biodigester.php">Biodigester Installation</a></li>
                            <li><a class="dropdown-item" href="aluminum_glass.php">Aluminum & Glass Works</a></li>
                            <li><a class="dropdown-item" href="painting.php">Painting Works</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning text-dark px-3 ms-2" href="quote.php">Get Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div class="hero-bg" style="background-image: url('biodigester-hero.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Professional Biodigester Installation in Kenya
                    </h1>
                    <p class="lead text-white mb-4">
                        Eco-friendly waste management solutions for modern homes and businesses. Clean, efficient, and environmentally sustainable biodigester systems.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="quote.php" class="btn btn-warning btn-lg">
                            <i class="fas fa-calculator me-2"></i>Get Free Quote
                        </a>
                        <a href="tel:<?php echo PHONE; ?>" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Biodigester -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">What is a Biodigester?</h2>
                    <p class="lead mb-4">
                        A biodigester is an eco-friendly waste management system that breaks down human waste using natural bacterial processes, producing clean water and biogas.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-leaf text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Eco-Friendly</h6>
                                    <small class="text-muted">100% natural process</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-tint text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Water Efficient</h6>
                                    <small class="text-muted">Minimal water usage</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-fire text-warning me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Biogas Production</h6>
                                    <small class="text-muted">Clean cooking gas</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-tools text-info me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Low Maintenance</h6>
                                    <small class="text-muted">Minimal upkeep required</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=600" alt="Biodigester System" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Biodigester Services</h2>
                    <p class="lead text-muted">
                        Complete biodigester solutions from consultation to maintenance
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>System Installation</h4>
                        <p>Complete biodigester system installation including excavation, tank placement, and plumbing connections.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Site assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Professional excavation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Quality tank installation</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4>Site Assessment</h4>
                        <p>Thorough site evaluation to determine the best biodigester solution for your property and needs.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Soil analysis</li>
                            <li><i class="fas fa-check text-success me-2"></i>Space evaluation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Custom recommendations</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h4>Maintenance & Repair</h4>
                        <p>Regular maintenance services and emergency repairs to keep your biodigester system running optimally.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Annual servicing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Emergency repairs</li>
                            <li><i class="fas fa-check text-success me-2"></i>System upgrades</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h4>Biogas Connection</h4>
                        <p>Professional biogas piping and connection to your kitchen for clean cooking gas supply.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Gas piping installation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Safety valves & meters</li>
                            <li><i class="fas fa-check text-success me-2"></i>Cooker connection</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4>Training & Support</h4>
                        <p>Comprehensive training on biodigester operation and ongoing technical support.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Operation training</li>
                            <li><i class="fas fa-check text-success me-2"></i>Maintenance guidance</li>
                            <li><i class="fas fa-check text-success me-2"></i>24/7 support hotline</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h4>System Upgrade</h4>
                        <p>Upgrade existing septic systems to modern biodigester technology for better efficiency.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Septic conversion</li>
                            <li><i class="fas fa-check text-success me-2"></i>Capacity expansion</li>
                            <li><i class="fas fa-check text-success me-2"></i>Technology updates</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Benefits of Biodigester Systems</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h5>Environmentally Friendly</h5>
                        <p class="text-muted">Zero pollution, natural waste processing, protects groundwater</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h5>Cost Effective</h5>
                        <p class="text-muted">Lower installation and maintenance costs compared to septic tanks</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h5>Free Biogas</h5>
                        <p class="text-muted">Produces clean cooking gas, reducing LPG costs</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Long Lasting</h5>
                        <p class="text-muted">20+ year lifespan with minimal maintenance required</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Installation Process</h2>
                    <p class="lead text-muted">Professional installation in 5 simple steps</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h6>Site Visit</h6>
                        <p class="small">Assessment and measurements</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h6>Excavation</h6>
                        <p class="small">Professional digging and preparation</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h6>Installation</h6>
                        <p class="small">Tank placement and connections</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h6>Testing</h6>
                        <p class="small">System testing and commissioning</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">5</div>
                        <h6>Training</h6>
                        <p class="small">Operation and maintenance training</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-3">Ready to Go Green with Biodigester?</h2>
                    <p class="lead mb-0">Join thousands of satisfied customers enjoying eco-friendly waste management!</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="quote.php" class="btn btn-warning btn-lg me-3">
                        <i class="fas fa-calculator me-2"></i>Get Free Quote
                    </a>
                    <a href="tel:<?php echo PHONE; ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-hard-hat me-2"></i>Symagee Contractors
                    </h5>
                    <p class="text-light">
                        Professional construction and biodigester services across Kenya. Quality workmanship, reliable service, competitive prices.
                    </p>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="roofing.php" class="text-light text-decoration-none">Roofing</a></li>
                        <li><a href="biodigester.php" class="text-light text-decoration-none">Biodigester</a></li>
                        <li><a href="aluminum_glass.php" class="text-light text-decoration-none">Aluminum & Glass</a></li>
                        <li><a href="painting.php" class="text-light text-decoration-none">Painting</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-light text-decoration-none">About Us</a></li>
                        <li><a href="projects.php" class="text-light text-decoration-none">Projects</a></li>
                        <li><a href="contact.php" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="quote.php" class="text-light text-decoration-none">Get Quote</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h6 class="fw-bold mb-3">Contact Info</h6>
                    <div class="contact-info">
                        <p class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <?php echo ADDRESS; ?>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <a href="tel:<?php echo PHONE; ?>" class="text-light text-decoration-none"><?php echo PHONE; ?></a>
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="mailto:<?php echo EMAIL; ?>" class="text-light text-decoration-none"><?php echo EMAIL; ?></a>
                        </p>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Symagee Contractors. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="privacy.php" class="text-light text-decoration-none me-3">Privacy Policy</a>
                    <a href="terms.php" class="text-light text-decoration-none">Terms of Service</a>
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
