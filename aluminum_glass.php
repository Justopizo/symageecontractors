<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluminum & Glass Works in Kenya | Symagee Contractors</title>
    <meta name="description" content="Transform your premises with elegant glass railings for balconies, staircases, verandas, pools, and rooftops, plus premium aluminum works including sliding doors, windows, curtain walling, shower screens, and more by Symagee Contractors in Kenya.">
    <meta name="keywords" content="glass railings Kenya, aluminum works, sliding doors, louvre windows, frameless doors, curtain walling, shower screens, office partitions, skylights, aluminum composite panels, Symagee Contractors">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1a73e8;
            --secondary-color: #ffc107;
            --dark-color: #212121;
            --light-color: #f5f5f5;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
        }
        
        .hero-section {
            position: relative;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }
        
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .service-card {
            padding: 2rem;
            border-radius: 10px;
            background: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        .feature-icon {
            font-size: 2rem;
            color: var(--secondary-color);
            background: var(--light-color);
            padding: 1rem;
            border-radius: 50%;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s;
        }
        
        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }
        
        .process-step {
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
            background: rgba(0, 0, 0, 0.5);
        }
    </style>
    
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
        "description": "Premium aluminum and glass solutions including glass railings for balconies, staircases, verandas, pools, and rooftops, plus sliding doors, windows, curtain walling, shower screens, office partitions, skylights, and aluminum composite panels in Kenya.",
        "areaServed": "Kenya"
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
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
        <div class="hero-bg" style="background-image: url('al10.jpeg');"></div>
        <div class="hero-overlay"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-100 pt-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Elegant Glass & Aluminum Solutions
                    </h1>
                    <p class="lead text-white mb-4">
                        Elevate your premises with stunning glass railings for balconies, staircases, verandas, pools, and rooftops, alongside premium aluminum sliding doors, windows, and more by Symagee Contractors.
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
                    <h2 class="display-5 fw-bold mb-4">Our Glass & Aluminum Services</h2>
                    <p class="lead text-muted">
                        Comprehensive solutions for glass railings, aluminum works, and high-end finishes for any project.
                    </p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h4>Sliding Doors & Windows</h4>
                        <p>Modern aluminum sliding doors and windows with sleek design and smooth functionality.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Space-efficient</li>
                            <li><i class="fas fa-check text-success me-2"></i>Energy-saving</li>
                            <li><i class="fas fa-check text-success me-2"></i>Secure mechanisms</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-glass-martini"></i>
                        </div>
                        <h4>Glass Railings</h4>
                        <p>Elegant glass railings for balconies, staircases, verandas, pools, and rooftops, blending safety with style.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Tempered safety glass</li>
                            <li><i class="fas fa-check text-success me-2"></i>Customizable designs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Minimal maintenance</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-window-maximize"></i>
                        </div>
                        <h4>Louvre & Projected Windows</h4>
                        <p>Stylish louvre and projected windows for optimal ventilation and aesthetic appeal.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Adjustable slats</li>
                            <li><i class="fas fa-check text-success me-2"></i>Enhanced airflow</li>
                            <li><i class="fas fa-check text-success me-2"></i>Durable frames</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4>Curtain Walling</h4>
                        <p>Modern curtain wall systems for stunning architectural designs and functionality.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Robust structure</li>
                            <li><i class="fas fa-check text-success me-2"></i>Weatherproof</li>
                            <li><i class="fas fa-check text-success me-2"></i>Energy-efficient</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-th-large"></i>
                        </div>
                        <h4>Office Partitions & Skylights</h4>
                        <p>Frameless glass partitions and skylights to enhance light and space in offices.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Custom layouts</li>
                            <li><i class="fas fa-check text-success me-2"></i>Soundproofing</li>
                            <li><i class="fas fa-check text-success me-2"></i>Natural lighting</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-shower"></i>
                        </div>
                        <h4>Shower Screens & Cubicles</h4>
                        <p>Luxurious frameless shower screens and cubicles with premium finishes.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Elegant designs</li>
                            <li><i class="fas fa-check text-success me-2"></i>Easy maintenance</li>
                            <li><i class="fas fa-check text-success me-2"></i>Sturdy fittings</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-th"></i>
                        </div>
                        <h4>Aluminum Composite Panels (ACP)</h4>
                        <p>Durable and stylish ACP installations for modern building facades and interiors.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Weather-resistant</li>
                            <li><i class="fas fa-check text-success me-2"></i>Variety of finishes</li>
                            <li><i class="fas fa-check text-success me-2"></i>Lightweight durability</li>
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
                    <h2 class="display-5 fw-bold mb-4">Premium Craftsmanship & Materials</h2>
                    <p class="lead text-muted">Meticulous attention to detail with high-end materials for lasting elegance.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h5>High-Quality Aluminum</h5>
                        <p class="text-muted">Durable aluminum profiles for strength and longevity.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h5>Tempered Glass</h5>
                        <p class="text-muted">Safe and elegant tempered glass for all applications.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h5>Powder-Coated Finishes</h5>
                        <p class="text-muted">Vibrant, long-lasting finishes in multiple colors.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h5>Enhanced Security</h5>
                        <p class="text-muted">Advanced locking systems and reinforced frames.</p>
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
                    <h2 class="display-5 fw-bold mb-4">Our Glass & Aluminum Portfolio</h2>
                    <p class="lead text-muted">Discover our expertly crafted installations across Kenya.</p>
                </div>
            </div>
            
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                    $images = range(1, 18);
                    foreach ($images as $index => $num) {
                        $active = $index === 0 ? 'active' : '';
                        echo "<div class='carousel-item $active'>";
                        echo "<img src='al$num.jpeg' class='d-block w-100' alt='Glass & Aluminum Project $num'>";
                        echo "<div class='carousel-caption d-none d-md-block'>";
                        echo "<h5>Project $num</h5>";
                        echo "<p>Glass & Aluminum Installation</p>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Process -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold mb-4">Our Installation Process</h2>
                    <p class="lead text-muted">A seamless process ensuring precision and quality in every project.</p>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">1</div>
                        <h5>Consultation</h5>
                        <p>Site visits and detailed design consultations with precise measurements.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">2</div>
                        <h5>Fabrication</h5>
                        <p>Custom fabrication to meet exact project specifications.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">3</div>
                        <h5>Installation</h5>
                        <p>Expert installation by certified technicians for flawless results.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="process-step text-center">
                        <div class="step-number">4</div>
                        <h5>Finishing</h5>
                        <p>Quality checks and final touches for a perfect, elegant finish.</p>
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
                    <h2 class="display-6 fw-bold mb-3">Transform Your Space with Symagee Contractors</h2>
                    <p class="lead mb-0">No project is too small or too big. Get premium glass and aluminum solutions today.</p>
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
                        Your trusted partner for elegant glass railings and aluminum works in Kenya, delivering high-end finishes for all projects.
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
</body>
</html>