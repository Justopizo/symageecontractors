<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - <?php echo $config['company_name']; ?></title>
    <meta name="description" content="Learn about Symagee Contractors - Kenya's trusted construction company with years of experience in residential, commercial, and infrastructure projects.">
    <meta name="keywords" content="about Symagee Contractors, construction company Kenya, building contractors, construction experience">
    
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
        "@type": "Organization",
        "name": "<?php echo $config['company_name']; ?>",
        "description": "Professional construction services in Kenya",
        "url": "<?php echo $config['base_url']; ?>",
        "telephone": "<?php echo $config['phone']; ?>",
        "email": "<?php echo $config['company_email']; ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Kenya",
            "addressCountry": "KE"
        }
    }
    </script>
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
                        <a class="nav-link active" href="about.php">About</a>
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

    <!-- Hero Section -->
    <section class="hero-section bg-primary text-white py-5" style="margin-top: 76px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">About <?php echo $config['company_name']; ?></h1>
                    <p class="lead mb-4">Building Kenya's future with quality construction, innovative solutions, and unwavering commitment to excellence since our establishment.</p>
                </div>
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=600" class="img-fluid rounded shadow" alt="Our Construction Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img src="/placeholder.svg?height=400&width=500" class="img-fluid rounded shadow" alt="Our Construction Process">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Story</h2>
                    <p class="mb-4">Founded with a vision to transform Kenya's construction landscape, <?php echo $config['company_name']; ?> has grown from a small local contractor to one of the most trusted construction companies in the region.</p>
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

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Our Leadership Team</h2>
                    <p class="text-muted">Meet the experienced professionals leading our company</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 text-center h-100">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top rounded-circle mx-auto mt-3" style="width: 200px; height: 200px; object-fit: cover;" alt="CEO">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">John Symagee</h5>
                            <p class="text-primary mb-2">Chief Executive Officer</p>
                            <p class="card-text">With over 15 years in construction management, John leads our company with a vision for excellence and innovation in every project.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 text-center h-100">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top rounded-circle mx-auto mt-3" style="width: 200px; height: 200px; object-fit: cover;" alt="Project Manager">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mary Wanjiku</h5>
                            <p class="text-primary mb-2">Chief Project Manager</p>
                            <p class="card-text">Mary oversees all project execution with her expertise in civil engineering and 12 years of construction project management experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 text-center h-100">
                        <img src="/placeholder.svg?height=300&width=300" class="card-img-top rounded-circle mx-auto mt-3" style="width: 200px; height: 200px; object-fit: cover;" alt="Safety Director">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">David Kimani</h5>
                            <p class="text-primary mb-2">Safety & Quality Director</p>
                            <p class="card-text">David ensures all projects meet the highest safety and quality standards with his 10 years of experience in construction safety management.</p>
                        </div>
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
                    <h2 class="fw-bold mb-3">Why Choose <?php echo $config['company_name']; ?>?</h2>
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
