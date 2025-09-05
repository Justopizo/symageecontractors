<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluminum & Glass Works in Kenya | Symagee Contractors</title>
    <meta name="description" content="Professional aluminum and glass works in Kenya. Windows, doors, partitions, shopfronts & curtain walls. Quality materials, expert installation.">
    <meta name="keywords" content="aluminum works Kenya, glass installation, windows doors, shopfronts, curtain walls, partitions, Nairobi aluminum">
    
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
        "name": "Aluminum & Glass Works",
        "provider": {
            "@type": "Organization",
            "name": "Symagee Contractors",
            "url": "<?php echo SITE_URL; ?>"
        },
        "description": "Professional aluminum and glass installation services",
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
                            <li><a class="dropdown-item" href="biodigester.php">Biodigester Installation</a></li>
                            <li><a class="dropdown-item active" href="aluminum_glass.php">Aluminum & Glass Works</a></li>
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
        <div class="hero-bg" style="background-image: url('aluminum-hero.jpg');"></div>
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Professional Aluminum & Glass Works in Kenya
                    </h1>
                    <p class="lead text-white mb-4">
                        Modern aluminum and glass solutions for residential and commercial properties. Windows, doors, partitions, and architectural glazing.
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

    <!-- Services Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Aluminum & Glass Services</h2>
                    <p class="lead text-muted">
                        Complete aluminum and glass solutions with modern designs and quality materials
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h4>Windows & Doors</h4>
                        <p>Modern aluminum windows and doors with superior security features and energy efficiency.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Sliding windows</li>
                            <li><i class="fas fa-check text-success me-2"></i>Casement windows</li>
                            <li><i class="fas fa-check text-success me-2"></i>Security doors</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-store"></i>
                        </div>
                        <h4>Shopfronts</h4>
                        <p>Attractive commercial shopfronts that enhance your business visibility and security.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Modern designs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Security features</li>
                            <li><i class="fas fa-check text-success me-2"></i>LED lighting integration</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Curtain Walls</h4>
                        <p>Sophisticated curtain wall systems for modern commercial and residential buildings.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Structural glazing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Weather sealing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Energy efficient</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <h4>Glass Partitions</h4>
                        <p>Elegant glass partitions for offices and commercial spaces to maximize natural light.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Tempered glass</li>
                            <li><i class="fas fa-check text-success me-2"></i>Frosted options</li>
                            <li><i class="fas fa-check text-success me-2"></i>Soundproofing</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Security Grilles</h4>
                        <p>Decorative and functional security grilles for windows and doors without compromising aesthetics.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Custom designs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Powder coating</li>
                            <li><i class="fas fa-check text-success me-2"></i>Burglar bars</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Balustrades</h4>
                        <p>Modern aluminum and glass balustrades for balconies, staircases, and terraces.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Glass panels</li>
                            <li><i class="fas fa-check text-success me-2"></i>Aluminum frames</li>
                            <li><i class="fas fa-check text-success me-2"></i>Safety compliant</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Materials & Features -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Quality Materials & Features</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h5>Premium Aluminum</h5>
                        <p class="text-muted">High-grade aluminum profiles with superior strength and durability</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h5>Tempered Glass</h5>
                        <p class="text-muted">Safety tempered glass that's 5x stronger than regular glass</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h5>Powder Coating</h5>
                        <p class="text-muted">Durable powder coating finish in various colors and textures</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h5>Security Features</h5>
                        <p class="text-muted">Multi-point locking systems and reinforced frames</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Work Gallery</h2>
                    <p class="lead text-muted">See our latest aluminum and glass installations</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=300&width=400" alt="Aluminum Windows" class="img-fluid rounded shadow">
                        <div class="gallery-overlay">
                            <h5>Modern Windows</h5>
                            <p>Residential aluminum windows</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=300&width=400" alt="Glass Shopfront" class="img-fluid rounded shadow">
                        <div class="gallery-overlay">
                            <h5>Glass Shopfront</h5>
                            <p>Commercial storefront design</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=300&width=400" alt="Glass Partitions" class="img-fluid rounded shadow">
                        <div class="gallery-overlay">
                            <h5>Office Partitions</h5>
                            <p>Modern glass office spaces</p>
                        </div>
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
                    <h2 class="display-5 fw-bold mb-4">Our Installation Process</h2>
                    <p class="lead text-muted">Professional installation in 4 steps</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5>Consultation</h5>
                        <p>Site visit and design consultation with measurements</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5>Fabrication</h5>
                        <p>Custom fabrication in our workshop to exact specifications</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5>Installation</h5>
                        <p>Professional installation by certified technicians</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5>Finishing</h5>
                        <p>Quality check and final adjustments for perfect fit</p>
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
                    <h2 class="display-6 fw-bold mb-3">Transform Your Space with Modern Aluminum & Glass</h2>
                    <p class="lead mb-0">Get professional consultation and competitive quotes for your project!</p>
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
                        Professional construction and aluminum & glass services across Kenya. Quality workmanship, reliable service, competitive prices.
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
