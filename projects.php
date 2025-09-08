<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - <?php echo $config['company_name']; ?></title>
    <meta name="description" content="View our completed construction projects including roofing, biodigester installation, and aluminum & glass works across Kenya.">
    <meta name="keywords" content="construction projects Kenya, roofing services, biodigester installation, aluminum glass works">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
    
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('placeholder.svg?height=600&width=1200') center/cover no-repeat;
            margin-top: 76px;
        }
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .carousel-item {
            height: 300px;
        }
        .carousel-item img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }
        .stats-number {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        @media (max-width: 768px) {
            .carousel-item {
                height: 250px;
            }
            .stats-number {
                font-size: 2rem;
            }
            .display-4 {
                font-size: 2.5rem;
            }
        }
        @media (max-width: 576px) {
            .carousel-item {
                height: 200px;
            }
            .btn-group .btn {
                padding: 0.375rem 0.5rem;
                font-size: 0.875rem;
            }
        }
    </style>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ImageGallery",
        "name": "<?php echo $config['company_name']; ?> Projects",
        "description": "Portfolio of completed construction projects",
        "url": "<?php echo $config['base_url']; ?>/projects.php"
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
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.php">Projects</a>
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
    <section class="hero-section py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Our Projects</h1>
                    <p class="lead mb-4">Explore our portfolio of successfully completed projects across Kenya. From roofing solutions to biodigester installations and aluminum works, see the quality and craftsmanship that sets us apart.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Categories -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Our Services</h2>
                    <p class="text-muted">Browse our projects by service category</p>
                </div>
            </div>
            
            <!-- Filter Buttons -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="btn-group flex-wrap" role="group">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">All Services</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="roofing">Roofing & Gutters</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="biodigester">Biodigester Installation</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="aluminum">Aluminum & Glass</button>
                    </div>
                </div>
            </div>

            <!-- Services Grid -->
            <div class="row g-4" id="services-grid">
                <!-- Roofing Service -->
                <div class="col-lg-6 service-item" data-category="roofing">
                    <div class="card h-100 shadow-sm service-card">
                        <div id="roofingCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php for ($i = 0; $i < 14; $i++): ?>
                                <button type="button" data-bs-target="#roofingCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
                                <?php endfor; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php for ($i = 1; $i <= 14; $i++): ?>
                                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                                    <img src="roofingandgutters<?php echo $i; ?>.jpeg" class="d-block w-100" alt="Roofing project <?php echo $i; ?>">
                                </div>
                                <?php endfor; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#roofingCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#roofingCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-home text-primary service-icon"></i>
                                <h3 class="card-title">Roofing & Gutters</h3>
                            </div>
                            <p class="card-text">Professional roofing solutions including installation, repair, and maintenance of various roofing systems and gutter installations for both residential and commercial properties.</p>
                            
                            <div class="row text-center mt-4">
                                <div class="col-md-4">
                                    <div class="stats-number text-primary">250+</div>
                                    <div class="text-muted">Projects Completed</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-primary">15+</div>
                                    <div class="text-muted">Years Experience</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-primary">98%</div>
                                    <div class="text-muted">Client Satisfaction</div>
                                </div>
                            </div>
                            
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">Metal roofing installation & repair</li>
                                <li class="list-group-item">Tile roofing solutions</li>
                                <li class="list-group-item">Gutter systems installation</li>
                                <li class="list-group-item">Roof waterproofing</li>
                                <li class="list-group-item">Roof maintenance programs</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="roofing.php" class="btn btn-primary w-100">View Roofing Services</a>
                        </div>
                    </div>
                </div>

                <!-- Biodigester Service -->
                <div class="col-lg-6 service-item" data-category="biodigester">
                    <div class="card h-100 shadow-sm service-card">
                        <div id="biodigesterCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php for ($i = 0; $i < 10; $i++): ?>
                                <button type="button" data-bs-target="#biodigesterCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
                                <?php endfor; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php for ($i = 1; $i <= 10; $i++): ?>
                                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                                    <img src="bio<?php echo $i; ?>.jpeg" class="d-block w-100" alt="Biodigester project <?php echo $i; ?>">
                                </div>
                                <?php endfor; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#biodigesterCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#biodigesterCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-recycle text-success service-icon"></i>
                                <h3 class="card-title">Biodigester Installation</h3>
                            </div>
                            <p class="card-text">Eco-friendly waste management solutions through professional biodigester installation for residential, commercial, and institutional properties across Kenya.</p>
                            
                            <div class="row text-center mt-4">
                                <div class="col-md-4">
                                    <div class="stats-number text-success">180+</div>
                                    <div class="text-muted">Installations</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-success">10+</div>
                                    <div class="text-muted">Years Experience</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-success">100%</div>
                                    <div class="text-muted">Compliance Rate</div>
                                </div>
                            </div>
                            
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">Residential biodigester systems</li>
                                <li class="list-group-item">Commercial-scale biodigesters</li>
                                <li class="list-group-item">Septic tank conversions</li>
                                <li class="list-group-item">Efficient waste management</li>
                                <li class="list-group-item">Environmentally friendly solutions</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="biodigester.php" class="btn btn-success w-100">View Biodigester Services</a>
                        </div>
                    </div>
                </div>

                <!-- Aluminum & Glass Service -->
                <div class="col-lg-6 service-item" data-category="aluminum">
                    <div class="card h-100 shadow-sm service-card">
                        <div id="aluminumCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php for ($i = 0; $i < 15; $i++): ?>
                                <button type="button" data-bs-target="#aluminumCarousel" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
                                <?php endfor; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php for ($i = 1; $i <= 15; $i++): ?>
                                <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                                    <img src="al<?php echo $i; ?>.jpeg" class="d-block w-100" alt="Aluminum project <?php echo $i; ?>">
                                </div>
                                <?php endfor; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#aluminumCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#aluminumCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-building text-info service-icon"></i>
                                <h3 class="card-title">Aluminum & Glass Works</h3>
                            </div>
                            <p class="card-text">Premium aluminum and glass solutions including windows, doors, partitions, and facade systems for modern residential and commercial buildings.</p>
                            
                            <div class="row text-center mt-4">
                                <div class="col-md-4">
                                    <div class="stats-number text-info">300+</div>
                                    <div class="text-muted">Projects Completed</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-info">12+</div>
                                    <div class="text-muted">Years Experience</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-info">99%</div>
                                    <div class="text-muted">Client Satisfaction</div>
                                </div>
                            </div>
                            
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">Aluminum windows & doors</li>
                                <li class="list-group-item">Glass partitions & facades</li>
                                <li class="list-group-item">Sliding door systems</li>
                                <li class="list-group-item">Custom aluminum works</li>
                                <li class="list-group-item">Commercial storefronts</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="aluminum_glass.php" class="btn btn-info w-100 text-white">View Aluminum Services</a>
                        </div>
                    </div>
                </div>

                <!-- Painting Service -->
                <div class="col-lg-6 service-item" data-category="painting">
                    <div class="card h-100 shadow-sm service-card">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center" style="height: 300px;">
                            <i class="fas fa-paint-roller fa-5x text-warning"></i>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="fas fa-paint-brush text-warning service-icon"></i>
                                <h3 class="card-title">Painting Works</h3>
                            </div>
                            <p class="card-text">Professional interior and exterior painting services with a wide range of color options and finishes to transform your space.</p>
                            
                            <div class="row text-center mt-4">
                                <div class="col-md-4">
                                    <div class="stats-number text-warning">400+</div>
                                    <div class="text-muted">Projects Completed</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-warning">8+</div>
                                    <div class="text-muted">Years Experience</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stats-number text-warning">97%</div>
                                    <div class="text-muted">Client Satisfaction</div>
                                </div>
                            </div>
                            
                            <ul class="list-group list-group-flush mt-3">
                                <li class="list-group-item">Interior painting</li>
                                <li class="list-group-item">Exterior painting</li>
                                <li class="list-group-item">Decorative finishes</li>
                                <li class="list-group-item">Surface preparation</li>
                                <li class="list-group-item">Color consultation</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="painting.php" class="btn btn-warning w-100">View Painting Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold mb-3">Ready to Start Your Project?</h2>
                    <p class="lead mb-4">Join our satisfied clients and let us bring your construction vision to life with the same quality and dedication shown in these projects.</p>
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
    
    <script>
        // Service filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('[data-filter]');
            const serviceItems = document.querySelectorAll('.service-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter services
                    serviceItems.forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-category') === filter) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>