<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Roofing Services in Kenya | Symagee Contractors</title>
    <meta name="description" content="Expert roofing services in Kenya. New roof installation, roof redesign, replacement, gutters, repairs, and reinforcement. Quality materials, professional installation. Get free quote today!">
    <meta name="keywords" content="roofing services Kenya, new roof installation, roof repair, gutter installation, roof redesign, roof replacement, Nairobi roofing">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Custom CSS for mobile optimization */
        body {
            padding-top: 76px; /* Account for fixed navbar */
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            overflow: hidden;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 1;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 2;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 3;
        }
        
        /* Service Cards */
        .service-card {
            padding: 2rem 1.5rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
            border: 1px solid #f0f0f0;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .service-card h4 {
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .service-card ul {
            text-align: left;
            margin-top: 1.5rem;
        }
        
        /* Feature Icons */
        .feature-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 1rem;
        }
        
        /* Process Steps */
        .process-step {
            padding: 1.5rem;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #0d6efd;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1.5rem auto;
        }
        
        /* Carousel Adjustments */
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        
        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-section .min-vh-100 {
                min-height: 80vh !important;
                padding: 2rem 0;
            }
            
            .display-4 {
                font-size: 2.2rem;
            }
            
            .service-card {
                padding: 1.5rem 1rem;
                margin-bottom: 1rem;
            }
            
            .service-icon, .feature-icon {
                font-size: 2rem;
            }
            
            .carousel-item img {
                height: 300px;
            }
            
            .btn-lg {
                padding: 0.5rem 1rem;
                font-size: 1rem;
            }
            
            .cta-section .btn {
                margin-top: 1rem;
                width: 100%;
            }
            
            .navbar-brand {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section .min-vh-100 {
                min-height: 70vh !important;
            }
            
            .display-4 {
                font-size: 1.8rem;
            }
            
            .display-5, .display-6 {
                font-size: 1.7rem;
            }
            
            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .carousel-item img {
                height: 250px;
            }
        }
    </style>
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
                            <li><a class="dropdown-item active" href="roofing.php">Roofing Services</a></li>
                            <li><a class="dropdown-item" href="biodigester.php">Biodigester Installation</a></li>
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
                        <a class="nav-link btn btn-warning text-dark px-3 ms-lg-2 mt-2 mt-lg-0" href="quote.php">Get Quote</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section position-relative">
        <div class="hero-bg" style="background-image: url('roofingandgutters7.jpeg');"></div>
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Professional Roofing Services in Kenya
                    </h1>
                    <p class="lead text-white mb-4">
                        Quality roofing solutions for residential and commercial properties. From new installations to repairs and maintenance - we've got you covered.
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
                    <h2 class="display-5 fw-bold mb-4">Our Roofing Services</h2>
                    <p class="lead text-muted">
                        We provide comprehensive roofing solutions using quality materials and expert craftsmanship
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-house-circle-check"></i>
                        </div>
                        <h4>New Roof Installation</h4>
                        <p>Professional installation of new roofs for residential and commercial buildings. We use quality materials and ensure proper structural integrity.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Complete structural assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Quality materials selection</li>
                            <li><i class="fas fa-check text-success me-2"></i>Professional installation</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-swatchbook"></i>
                        </div>
                        <h4>Roof Redesign</h4>
                        <p>Transforming existing roof structures to improve functionality, aesthetics, and efficiency.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Architectural consultation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Structural improvements</li>
                            <li><i class="fas fa-check text-success me-2"></i>Aesthetic enhancements</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <h4>Roof Replacement</h4>
                        <p>Complete replacement of worn-out roofing covers with new, durable materials.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Safe removal of old materials</li>
                            <li><i class="fas fa-check text-success me-2"></i>Thorough inspection of underlying structure</li>
                            <li><i class="fas fa-check text-success me-2"></i>Installation of new roofing materials</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h4>Gutter Installation</h4>
                        <p>Professional gutter and downpipe installation to ensure proper water drainage and protect your property.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Aluminum gutters</li>
                            <li><i class="fas fa-check text-success me-2"></i>PVC gutters</li>
                            <li><i class="fas fa-check text-success me-2"></i>Proper drainage design</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <h4>Roof Repairs & Renovations</h4>
                        <p>Expert repair services for leaky roofs and comprehensive renovations to restore your roof's integrity.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Leak detection and repair</li>
                            <li><i class="fas fa-check text-success me-2"></i>Damage assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Complete renovation solutions</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Roof Reinforcement</h4>
                        <p>Strengthening existing roof structures to improve durability and withstand harsh weather conditions.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Structural assessment</li>
                            <li><i class="fas fa-check text-success me-2"></i>Reinforcement planning</li>
                            <li><i class="fas fa-check text-success me-2"></i>Quality implementation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Repair and Maintenance Works Slideshow -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Repair and Maintenance Works</h2>
                    <p class="lead text-muted">Here are some examples of our repair and maintenance projects</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div id="repairsSlideshow" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#repairsSlideshow" data-bs-slide-to="6"></button>
                        </div>
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="repairs1.jpeg" class="d-block w-100" alt="Roof repair work example 1">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs2.jpeg" class="d-block w-100" alt="Roof repair work example 2">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs3.jpeg" class="d-block w-100" alt="Roof repair work example 3">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs4.jpeg" class="d-block w-100" alt="Roof repair work example 4">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs5.jpeg" class="d-block w-100" alt="Roof repair work example 5">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs6.jpeg" class="d-block w-100" alt="Roof repair work example 6">
                            </div>
                            <div class="carousel-item">
                                <img src="repairs7.jpeg" class="d-block w-100" alt="Roof repair work example 7">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#repairsSlideshow" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#repairsSlideshow" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roofing and Gutters Works Slideshow -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Roofing and Gutters Projects</h2>
                    <p class="lead text-muted">Examples of our complete roofing and gutter installation works</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div id="roofingGuttersSlideshow" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="6"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="7"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="8"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="9"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="10"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="11"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="12"></button>
                            <button type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide-to="13"></button>
                        </div>
                        <div class="carousel-inner rounded shadow">
                            <div class="carousel-item active">
                                <img src="roofingandgutters1.jpeg" class="d-block w-100" alt="Roofing and gutters project 1">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters2.jpeg" class="d-block w-100" alt="Roofing and gutters project 2">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters3.jpeg" class="d-block w-100" alt="Roofing and gutters project 3">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters4.jpeg" class="d-block w-100" alt="Roofing and gutters project 4">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters5.jpeg" class="d-block w-100" alt="Roofing and gutters project 5">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters6.jpeg" class="d-block w-100" alt="Roofing and gutters project 6">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters7.jpeg" class="d-block w-100" alt="Roofing and gutters project 7">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters8.jpeg" class="d-block w-100" alt="Roofing and gutters project 8">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters9.jpeg" class="d-block w-100" alt="Roofing and gutters project 9">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters10.jpeg" class="d-block w-100" alt="Roofing and gutters project 10">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters11.jpeg" class="d-block w-100" alt="Roofing and gutters project 11">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters12.jpeg" class="d-block w-100" alt="Roofing and gutters project 12">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters13.jpeg" class="d-block w-100" alt="Roofing and gutters project 13">
                            </div>
                            <div class="carousel-item">
                                <img src="roofingandgutters14.jpeg" class="d-block w-100" alt="Roofing and gutters project 14">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#roofingGuttersSlideshow" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Why Choose Our Roofing Services?</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Quality Materials</h5>
                        <p class="text-muted">We use only premium quality roofing materials from trusted suppliers</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Expert Team</h5>
                        <p class="text-muted">Skilled and experienced roofing professionals with years of expertise</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Warranty</h5>
                        <p class="text-muted">Comprehensive warranty on all roofing work and materials</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Delivery</h5>
                        <p class="text-muted">Projects completed on time with minimal disruption</p>
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
                    <h2 class="display-5 fw-bold mb-4">Our Roofing Process</h2>
                    <p class="lead text-muted">Simple, transparent process from consultation to completion</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5>Consultation</h5>
                        <p>Free site visit and detailed assessment of your roofing needs</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5>Quotation</h5>
                        <p>Detailed quote with material specifications and timeline</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5>Installation</h5>
                        <p>Professional installation by our skilled roofing team</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5>Completion</h5>
                        <p>Final inspection and handover with warranty documentation</p>
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
                    <h2 class="display-6 fw-bold mb-3">Ready for Your Roofing Project?</h2>
                    <p class="lead mb-0">Get a free consultation and quote for your roofing needs today!</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <div class="d-flex flex-column flex-lg-row justify-content-lg-end gap-3">
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

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-hard-hat me-2"></i>Symagee Contractors
                    </h5>
                    <p class="text-light">
                        Professional construction and roofing services across Kenya. Quality workmanship, reliable service, competitive prices.
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
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>