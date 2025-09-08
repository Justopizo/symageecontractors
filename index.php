<?php 
// Include the config file to access constants
require_once 'config.php';

// Set page title and meta description
$page_title = SITE_NAME . ' - ' . TAGLINE;
$meta_description = 'Professional roofing, biodigester installation, aluminum & glass railings, and painting services around Kenya. Quality construction solutions by Symagee Contractors.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="canonical" href="<?php echo SITE_URL; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo SITE_NAME; ?>",
        "url": "<?php echo SITE_URL; ?>",
        "logo": "<?php echo SITE_URL; ?>/company-logo.jpg",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo PHONE; ?>",
            "contactType": "customer service",
            "areaServed": "KE",
            "availableLanguage": "English"
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        }
    }
    </script>
    <style>
        .carousel-item {
            height: 500px;
            overflow: hidden;
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
        }
        .stats-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #0d6efd;
        }
        .stat-label {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('roofingandgutters7.jpeg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
        }
        .btn-accent {
            background-color: #ff6b00;
            border-color: #ff6b00;
            color: white;
        }
        .btn-accent:hover {
            background-color: #e05a00;
            border-color: #e05a00;
            color: white;
        }
        .feature-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }
        .service-icon {
            font-size: 3rem;
        }
        .min-vh-75 {
            min-height: 75vh;
        }
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 100;
        }
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 90px;
            z-index: 100;
            display: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php"><?php echo SITE_NAME; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="roofing.php">Roofing Services</a></li>
                            <li><a class="dropdown-item" href="biodigester.php">Biodigester Installation</a></li>
                            <li><a class="dropdown-item" href="aluminum_glass.php">Aluminum & Glass</a></li>
                            <li><a class="dropdown-item" href="painting.php">Painting Works</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <a href="quote.php" class="btn btn-accent">Get Quote</a>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold text-white mb-4">Quality Construction Solutions in Kenya</h2>
                    <p class="lead text-white mb-4">Professional roofing, biodigester installation, aluminum & glass railings, and painting services. Trusted by homeowners and businesses across Kenya.</p>
                    <div class="d-flex gap-3 flex-wrap justify-content-center">
                        <a href="quote.php" class="btn btn-accent btn-lg">Request Free Quote</a>
                        <a href="tel:<?php echo PHONE; ?>" class="btn btn-outline-light btn-lg">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold">Our Services</h2>
                    <p class="lead">Comprehensive construction solutions for residential and commercial projects</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">🏠</div>
                            <h5 class="card-title">Roofing Services</h5>
                            <p class="card-text">Professional installation and repair of iron sheets, tiles, and modern roofing systems.</p>
                            <a href="roofing.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">♻️</div>
                            <h5 class="card-title">Biodigester Installation</h5>
                            <p class="card-text">Eco-friendly waste management solutions for homes and commercial properties.</p>
                            <a href="biodigester.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">🪟</div>
                            <h5 class="card-title">Aluminum & Glass</h5>
                            <p class="card-text">Modern railings, windows, and glass installations for contemporary buildings.</p>
                            <a href="aluminum_glass.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3">🎨</div>
                            <h5 class="card-title">Painting Works</h5>
                            <p class="card-text">Interior and exterior painting services using premium quality paints and finishes.</p>
                            <a href="painting.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Why Choose <?php echo SITE_NAME; ?>?</h2>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="feature-icon">✓</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5>Licensed & Insured</h5>
                                    <p class="text-muted">Fully licensed contractors with comprehensive insurance coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="feature-icon">⭐</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5>Quality Guarantee</h5>
                                    <p class="text-muted">All work comes with warranty and satisfaction guarantee.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="feature-icon">⚡</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5>Fast Service</h5>
                                    <p class="text-muted">Quick response times and efficient project completion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <div class="feature-icon">💰</div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5>Fair Pricing</h5>
                                    <p class="text-muted">Competitive rates with transparent, no-hidden-cost pricing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- Past Projects Slideshow Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold">Check Out Some of Our Past Successful Works</h2>
                    <p class="lead">Quality craftsmanship that speaks for itself</p>
                </div>
            </div>
            
            <div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="6"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="7"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="8"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="9"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="10"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="11"></button>
                    <button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="12"></button>
                </div>
                <div class="carousel-inner rounded shadow">
                    <div class="carousel-item active">
                        <img src="roofingandgutters1.jpeg" class="d-block w-100" alt="Roofing Project 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Modern Roofing Installation</h5>
                            <p>Residential project in Nairobi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters2.jpeg" class="d-block w-100" alt="Roofing Project 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gutter System Installation</h5>
                            <p>Commercial building in Mombasa</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters3.jpeg" class="d-block w-100" alt="Roofing Project 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Roof Repair & Maintenance</h5>
                            <p>Historic building restoration</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters4.jpeg" class="d-block w-100" alt="Roofing Project 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Complete Roof Replacement</h5>
                            <p>Family home in Kisumu</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters5.jpeg" class="d-block w-100" alt="Roofing Project 5">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Custom Roof Design</h5>
                            <p>Luxury villa in Karen</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters6.jpeg" class="d-block w-100" alt="Roofing Project 6">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Industrial Roofing</h5>
                            <p>Warehouse project</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters7.jpeg" class="d-block w-100" alt="Roofing Project 7">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Tile Roof Installation</h5>
                            <p>Elegant residential project</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters8.jpeg" class="d-block w-100" alt="Roofing Project 8">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gutter System</h5>
                            <p>Efficient water drainage solution</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters9.jpeg" class="d-block w-100" alt="Roofing Project 9">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Metal Roofing</h5>
                            <p>Durable and weather-resistant</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters10.jpeg" class="d-block w-100" alt="Roofing Project 10">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Roof Inspection</h5>
                            <p>Professional assessment service</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters11.jpeg" class="d-block w-100" alt="Roofing Project 11">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Commercial Roofing</h5>
                            <p>Office complex project</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters12.jpeg" class="d-block w-100" alt="Roofing Project 12">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Roof Waterproofing</h5>
                            <p>Leak prevention solution</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="roofingandgutters13.jpeg" class="d-block w-100" alt="Roofing Project 13">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Complete Roofing System</h5>
                            <p>End-to-end roofing solution</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold">Customer Satisfaction Countrywide</h2>
                    <p class="lead">We're proud of our reputation Country Wide</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Customer Satisfaction</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Would Recommend Us</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">92%</div>
                        <div class="stat-label">Repeat Customers</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Start Your Project?</h2>
            <p class="lead mb-4">Get a free, no-obligation quote for your construction needs today.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="quote.php" class="btn btn-accent btn-lg">Get Free Quote</a>
                <a href="tel:<?php echo PHONE; ?>" class="btn btn-outline-light btn-lg">Call <?php echo PHONE; ?></a>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3"><?php echo SITE_NAME; ?></h5>
                    <p><?php echo TAGLINE; ?></p>
                    <p class="mb-2"><strong>Phone:</strong> <a href="tel:<?php echo PHONE; ?>" class="text-white"><?php echo PHONE; ?></a></p>
                    <p class="mb-2"><strong>Email:</strong> <a href="mailto:<?php echo EMAIL; ?>" class="text-white"><?php echo EMAIL; ?></a></p>
                    <p><strong>Address:</strong> <?php echo ADDRESS; ?></p>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="roofing.php" class="text-white-50">Roofing</a></li>
                        <li><a href="biodigester.php" class="text-white-50">Biodigester</a></li>
                        <li><a href="aluminum_glass.php" class="text-white-50">Aluminum & Glass</a></li>
                        <li><a href="painting.php" class="text-white-50">Painting</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="about.php" class="text-white-50">About Us</a></li>
                        <li><a href="projects.php" class="text-white-50">Projects</a></li>
                        <li><a href="contact.php" class="text-white-50">Contact</a></li>
                        <li><a href="quote.php" class="text-white-50">Get Quote</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Legal</h6>
                    <ul class="list-unstyled">
                        <li><a href="privacy.php" class="text-white-50">Privacy Policy</a></li>
                        <li><a href="terms.php" class="text-white-50">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Follow Us</h6>
                    <a href="https://www.facebook.com/githua22" class="text-white me-3">Facebook</a>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <div class="whatsapp-float">
        <a href="https://wa.me/<?php echo str_replace('+', '', WHATSAPP); ?>" target="_blank" class="btn btn-success rounded-circle">
            <span class="whatsapp-icon">💬</span>
        </a>
    </div>

    <button id="backToTop" class="btn btn-primary rounded-circle back-to-top">↑</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple back to top button functionality
        document.addEventListener('DOMContentLoaded', function() {
            const backToTopButton = document.getElementById('backToTop');
            
            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.style.display = 'block';
                } else {
                    backToTopButton.style.display = 'none';
                }
            });
            
            backToTopButton.addEventListener('click', function() {
                window.scrollTo({top: 0, behavior: 'smooth'});
            });
        });
    </script>
</body>
</html>