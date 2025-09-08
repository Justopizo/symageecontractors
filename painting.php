<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Painting Services in Kenya | Symagee Contractors</title>
    <meta name="description" content="Expert painting services in Kenya. Interior, exterior, commercial painting. Quality paints, professional application. Transform your space today!">
    <meta name="keywords" content="painting services Kenya, interior painting, exterior painting, commercial painting, house painting, Nairobi painters">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #ffc107;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        .navbar {
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .hero-section h1, .hero-section p {
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-card {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: white;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70px;
        }

        .feature-icon {
            font-size: 2rem;
            color: var(--primary-color);
            background: #f8f9fa;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 1rem;
            transition: transform 0.3s ease;
        }

        .feature-icon:hover {
            transform: scale(1.1);
        }

        .process-step {
            padding: 1rem;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-weight: bold;
        }

        .social-links a {
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--secondary-color) !important;
        }

        .btn-warning {
            color: #212529;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: 80vh;
                padding-top: 70px;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .service-icon {
                font-size: 2rem;
                height: 60px;
            }

            .feature-icon {
                width: 50px;
                height: 50px;
                font-size: 1.8rem;
            }
        }
    </style>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Painting Services",
        "provider": {
            "@type": "Organization",
            "name": "Symagee Contractors",
            "url": "<?php echo SITE_URL; ?>"
        },
        "description": "Professional interior and exterior painting services",
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
                            <li><a class="dropdown-item" href="aluminum_glass.php">Aluminum & Glass Works</a></li>
                            <li><a class="dropdown-item active" href="painting.php">Painting Works</a></li>
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
        <div class="hero-bg" style="background-image: url('al7.jpeg');"></div>
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Professional Painting Services in Kenya
                    </h1>
                    <p class="lead text-white mb-4">
                        Transform your space with our expert painting services. Interior, exterior, and commercial painting with premium quality paints and professional application.
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
                    <h2 class="display-5 fw-bold mb-4">Our Painting Services</h2>
                    <p class="lead text-muted">
                        Complete painting solutions for residential and commercial properties
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Interior Painting</h4>
                        <p>Transform your indoor spaces with beautiful, long-lasting interior paint finishes.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Wall painting</li>
                            <li><i class="fas fa-check text-success me-2"></i>Ceiling painting</li>
                            <li><i class="fas fa-check text-success me-2"></i>Trim & molding</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Exterior Painting</h4>
                        <p>Protect and beautify your property's exterior with weather-resistant paint systems.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>House exterior</li>
                            <li><i class="fas fa-check text-success me-2"></i>Fence painting</li>
                            <li><i class="fas fa-check text-success me-2"></i>Gate painting</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4>Commercial Painting</h4>
                        <p>Professional painting services for offices, retail spaces, and commercial buildings.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Office spaces</li>
                            <li><i class="fas fa-check text-success me-2"></i>Retail stores</li>
                            <li><i class="fas fa-check text-success me-2"></i>Warehouses</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Decorative Finishes</h4>
                        <p>Specialty finishes and decorative techniques to create unique visual effects.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Texture painting</li>
                            <li><i class="fas fa-check text-success me-2"></i>Faux finishes</li>
                            <li><i class="fas fa-check text-success me-2"></i>Accent walls</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Surface Preparation</h4>
                        <p>Thorough surface preparation for optimal paint adhesion and longevity.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Pressure washing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Sanding & scraping</li>
                            <li><i class="fas fa-check text-success me-2"></i>Priming</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-redo"></i>
                        </div>
                        <h4>Repainting Services</h4>
                        <p>Refresh and update existing painted surfaces with new colors and finishes.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Color consultation</li>
                            <li><i class="fas fa-check text-success me-2"></i>Paint removal</li>
                            <li><i class="fas fa-check text-success me-2"></i>Touch-up services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paint Types -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Quality Paint Products</h2>
                    <p class="lead text-muted">We use only premium quality paints from trusted brands</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h5>Emulsion Paints</h5>
                        <p class="text-muted">Water-based paints perfect for interior walls and ceilings</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Enamel Paints</h5>
                        <p class="text-muted">Durable oil-based paints for metal surfaces and high-traffic areas</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h5>Weather Shield</h5>
                        <p class="text-muted">Exterior paints designed to withstand harsh weather conditions</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-star"></i>
                        </div>
                        <h5>Premium Finishes</h5>
                        <p class="text-muted">High-end paints with superior coverage and finish quality</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Color Consultation -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Free Color Consultation</h2>
                    <p class="lead mb-4">
                        Not sure which colors to choose? Our expert color consultants will help you select the perfect color scheme for your space.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-eye text-primary me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Color Matching</h6>
                                    <small class="text-muted">Perfect color coordination</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-lightbulb text-warning me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Lighting Analysis</h6>
                                    <small class="text-muted">Colors that work in your lighting</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-home text-success me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Room Function</h6>
                                    <small class="text-muted">Colors suited to room purpose</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-heart text-danger me-3 fs-4"></i>
                                <div>
                                    <h6 class="mb-1">Personal Style</h6>
                                    <small class="text-muted">Reflects your preferences</small>
                                </div>
                            </div>
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
                    <h2 class="display-5 fw-bold mb-4">Our Painting Process</h2>
                    <p class="lead text-muted">Professional process ensuring quality results</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h6>Consultation</h6>
                        <p class="small">Color selection and planning</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h6>Preparation</h6>
                        <p class="small">Surface cleaning and priming</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h6>Protection</h6>
                        <p class="small">Furniture and floor covering</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h6>Painting</h6>
                        <p class="small">Professional application</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">5</div>
                        <h6>Inspection</h6>
                        <p class="small">Quality check and touch-ups</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-2">
                    <div class="process-step text-center">
                        <div class="step-number">6</div>
                        <h6>Cleanup</h6>
                        <p class="small">Site cleanup and handover</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Why Choose Our Painting Services?</h2>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Skilled Painters</h5>
                        <p class="text-muted">Experienced professionals with attention to detail</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Quality Materials</h5>
                        <p class="text-muted">Premium paints and professional-grade tools</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Completion</h5>
                        <p class="text-muted">Projects completed on schedule with minimal disruption</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Warranty</h5>
                        <p class="text-muted">Comprehensive warranty on all painting work</p>
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
                    <h2 class="display-6 fw-bold mb-3">Ready to Transform Your Space?</h2>
                    <p class="lead mb-0">Get a free color consultation and painting quote today!</p>
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
                        Professional construction and painting services across Kenya. Quality workmanship, reliable service, competitive prices.
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
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add navbar shadow on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        });
    </script>
</body>
</html>