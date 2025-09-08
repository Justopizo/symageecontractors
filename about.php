<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo SITE_NAME; ?></title>
    <meta name="description" content="Learn about Symagee Contractors - Kenya's trusted construction company with years of experience in residential, commercial, and infrastructure projects.">
    <meta name="keywords" content="about Symagee Contractors, construction company Kenya, building contractors, construction experience">
    <meta property="og:title" content="About Us - <?php echo SITE_NAME; ?>">
    <meta property="og:description" content="Learn about Symagee Contractors - Kenya's trusted construction company with years of experience in residential, commercial, and infrastructure projects.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>/about.php">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/about.php">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo SITE_NAME; ?>",
        "description": "Professional construction services in Kenya",
        "url": "<?php echo SITE_URL; ?>",
        "telephone": "<?php echo PHONE; ?>",
        "email": "<?php echo EMAIL; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo ADDRESS; ?>",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        }
    }
    </script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php"><?php echo SITE_NAME; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
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
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <a href="quote.php" class="btn btn-accent">Get Quote</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="display-4 fw-bold mb-3">About <?php echo SITE_NAME; ?></h1>
                    <p class="lead mb-4">Building Kenya's future with quality construction, innovative solutions, and unwavering commitment to excellence since our establishment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <h2 class="fw-bold mb-4">Our Story</h2>
                    <p class="mb-4">Founded with a vision to transform Kenya's construction landscape, <?php echo SITE_NAME; ?> has grown from a small local contractor to one of the most trusted construction companies in the region.</p>
                    <p class="mb-4">Our journey began with a simple belief: every structure we build should stand as a testament to quality, durability, and craftsmanship. Over the years, we have successfully completed hundreds of projects, from residential homes to large-scale commercial and infrastructure developments.</p>
                    <p class="mb-4">Today, we continue to push boundaries, embrace new technologies, and maintain the highest standards of construction excellence that our clients have come to expect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission, Vision, Values -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="text-center h-100 p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-bullseye fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Our Mission</h3>
                        <p>To deliver exceptional construction services that exceed client expectations while contributing to Kenya's infrastructure development and economic growth.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center h-100 p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-eye fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Our Vision</h3>
                        <p>To be Kenya's leading construction company, recognized for innovation, quality, and sustainable building practices that shape communities for generations.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center h-100 p-4">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h3 class="fw-bold mb-3">Our Values</h3>
                        <p>Integrity, quality, safety, innovation, and customer satisfaction guide every decision we make and every project we undertake.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Why Choose <?php echo SITE_NAME; ?>?</h2>
                    <p class="text-muted">What sets us apart in the construction industry</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-award fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Quality Assurance</h5>
                        <p class="text-muted">Rigorous quality control processes ensure every project meets international standards.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-clock fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Timely Delivery</h5>
                        <p class="text-muted">We pride ourselves on completing projects on time and within budget.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-users fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Expert Team</h5>
                        <p class="text-muted">Skilled professionals with years of experience in construction and engineering.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-leaf fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-2">Sustainable Practices</h5>
                        <p class="text-muted">Environmentally conscious construction methods and sustainable building materials.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h2 class="display-4 fw-bold mb-2">500+</h2>
                        <p class="mb-0">Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h2 class="display-4 fw-bold mb-2">15+</h2>
                        <p class="mb-0">Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h2 class="display-4 fw-bold mb-2">50+</h2>
                        <p class="mb-0">Expert Team Members</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h2 class="display-4 fw-bold mb-2">98%</h2>
                        <p class="mb-0">Client Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">Ready to Work With Us?</h2>
                    <p class="lead mb-4">Let's discuss your construction project and how we can bring your vision to life with our expertise and commitment to excellence.</p>
                    <div class="d-flex gap-3 justify-content-center flex-wrap">
                        <a href="quote.php" class="btn btn-primary btn-lg">Get Free Quote</a>
                        <a href="contact.php" class="btn btn-outline-primary btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
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
                    <a href="<?php echo FACEBOOK; ?>" class="text-white me-3">Facebook</a>
                    <a href="https://wa.me/<?php echo str_replace('+', '', WHATSAPP); ?>" class="text-white">WhatsApp</a>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="main.js" defer></script>
</body>
</html>