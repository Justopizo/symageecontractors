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
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #ffc107;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 76px;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            overflow: hidden;
            height: 80vh;
            min-height: 600px;
            background-image: url('bio1.jpeg');
            background-size: cover;
            background-position: center;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(13, 110, 253, 0.85), rgba(13, 110, 253, 0.7));
            z-index: 2;
        }
        
        .hero-content {
            position: relative;
            z-index: 3;
        }
        
        /* Portfolio Slideshow */
        .portfolio-slideshow {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }
        
        .portfolio-slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
        }
        
        .portfolio-slide.active {
            opacity: 1;
        }
        
        .portfolio-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .portfolio-slideshow:hover .portfolio-overlay {
            transform: translateY(0);
        }
        
        /* Slideshow controls */
        .slideshow-controls {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            z-index: 4;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .slideshow-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .slideshow-dot.active {
            background-color: white;
        }
        
        .slideshow-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 4;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .slideshow-nav:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }
        
        .slideshow-prev {
            left: 20px;
        }
        
        .slideshow-next {
            right: 20px;
        }
        
        /* Service Cards */
        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .service-icon {
            width: 70px;
            height: 70px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        
        /* Feature Icons */
        .feature-icon {
            width: 80px;
            height: 80px;
            background: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
        }
        
        /* Process Steps */
        .process-step {
            padding: 1.5rem 1rem;
        }
        
        .step-number {
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .service-icon, .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
            
            .step-number {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .hero-content h1 {
                font-size: 2.2rem;
            }
            
            .process-step {
                margin-bottom: 1.5rem;
            }
            
            .icon-container {
                display: flex;
                justify-content: center;
                margin-bottom: 0.5rem;
            }
            
            .slideshow-nav {
                width: 30px;
                height: 30px;
            }
            
            .hero-section {
                height: 70vh;
                min-height: 500px;
            }
            
            .portfolio-slideshow {
                height: 300px;
            }
        }
    </style>
    
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
        <div class="hero-overlay"></div>
        <div class="container position-relative hero-content">
            <div class="row align-items-center min-vh-80 py-5">
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
                                <div class="icon-container">
                                    <i class="fas fa-leaf text-success me-3 fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Eco-Friendly</h6>
                                    <small class="text-muted">100% natural process</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-container">
                                    <i class="fas fa-tint text-primary me-3 fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Water Efficient</h6>
                                    <small class="text-muted">Minimal water usage</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-container">
                                    <i class="fas fa-fire text-warning me-3 fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Biogas Production</h6>
                                    <small class="text-muted">Clean cooking gas</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-container">
                                    <i class="fas fa-tools text-info me-3 fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Low Maintenance</h6>
                                    <small class="text-muted">Minimal upkeep required</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Past Biodigester Projects</h2>
                    <p class="lead text-muted">
                        View our completed biodigester installations across Kenya
                    </p>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="portfolio-slideshow">
                        <?php for($i = 2; $i <= 10; $i++): ?>
                        <div class="portfolio-slide <?php echo $i === 2 ? 'active' : ''; ?>" 
                             style="background-image: url('bio<?php echo $i; ?>.jpeg');">
                            <div class="portfolio-overlay">
                                <h5 class="mb-1">Biodigester Project <?php echo $i; ?></h5>
                                <p class="mb-0 small">Completed installation in <?php echo ['Nairobi', 'Mombasa', 'Kisumu', 'Nakuru', 'Eldoret'][array_rand(['Nairobi', 'Mombasa', 'Kisumu', 'Nakuru', 'Eldoret'])]; ?></p>
                            </div>
                        </div>
                        <?php endfor; ?>
                        
                        <div class="slideshow-nav slideshow-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="slideshow-nav slideshow-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                        
                        <div class="slideshow-controls">
                            <?php for($i = 2; $i <= 10; $i++): ?>
                            <div class="slideshow-dot <?php echo $i === 2 ? 'active' : ''; ?>" data-slide="<?php echo $i - 2; ?>"></div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-5">
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
    <section class="py-5 bg-light">
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
    <section class="py-5">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Portfolio slideshow functionality
            const slides = document.querySelectorAll('.portfolio-slide');
            const dots = document.querySelectorAll('.slideshow-dot');
            const prevButton = document.querySelector('.slideshow-prev');
            const nextButton = document.querySelector('.slideshow-next');
            let currentSlide = 0;
            let slideInterval;
            
            // Function to show a specific slide
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                // Show the selected slide
                slides[index].classList.add('active');
                dots[index].classList.add('active');
                
                currentSlide = index;
            }
            
            // Function to go to next slide
            function nextSlide() {
                let next = currentSlide + 1;
                if (next >= slides.length) next = 0;
                showSlide(next);
            }
            
            // Function to go to previous slide
            function prevSlide() {
                let prev = currentSlide - 1;
                if (prev < 0) prev = slides.length - 1;
                showSlide(prev);
            }
            
            // Set up automatic slideshow
            function startSlideshow() {
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }
            
            // Stop automatic slideshow
            function stopSlideshow() {
                clearInterval(slideInterval);
            }
            
            // Event listeners for navigation
            nextButton.addEventListener('click', function() {
                stopSlideshow();
                nextSlide();
                startSlideshow();
            });
            
            prevButton.addEventListener('click', function() {
                stopSlideshow();
                prevSlide();
                startSlideshow();
            });
            
            // Event listeners for dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    stopSlideshow();
                    showSlide(index);
                    startSlideshow();
                });
            });
            
            // Pause slideshow when hovering
            const slideshowContainer = document.querySelector('.portfolio-slideshow');
            slideshowContainer.addEventListener('mouseenter', stopSlideshow);
            slideshowContainer.addEventListener('mouseleave', startSlideshow);
            
            // Start the slideshow
            startSlideshow();
        });
    </script>
</body>
</html>