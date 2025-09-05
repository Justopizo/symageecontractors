<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Projects - <?php echo $config['company_name']; ?></title>
    <meta name="description" content="View our completed construction projects including residential buildings, commercial structures, and infrastructure development across Kenya.">
    <meta name="keywords" content="construction projects Kenya, building portfolio, completed projects, residential construction, commercial buildings">
    
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
    <section class="hero-section bg-primary text-white py-5" style="margin-top: 76px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">Our Projects</h1>
                    <p class="lead mb-4">Explore our portfolio of successfully completed construction projects across Kenya. From residential homes to commercial buildings, see the quality and craftsmanship that sets us apart.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Categories -->
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-3">Project Categories</h2>
                    <p class="text-muted">Browse our projects by category</p>
                </div>
            </div>
            
            <!-- Filter Buttons -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary active" data-filter="all">All Projects</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="residential">Residential</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="commercial">Commercial</button>
                        <button type="button" class="btn btn-outline-primary" data-filter="infrastructure">Infrastructure</button>
                    </div>
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="row g-4" id="projects-grid">
                <!-- Residential Projects -->
                <div class="col-lg-4 col-md-6 project-item" data-category="residential">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Modern Family Home">
                        <div class="card-body">
                            <h5 class="card-title">Modern Family Home - Nairobi</h5>
                            <p class="card-text">4-bedroom contemporary house with modern amenities and sustainable design features.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2023</small>
                                <span class="badge bg-success">Residential</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="residential">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Luxury Villa">
                        <div class="card-body">
                            <h5 class="card-title">Luxury Villa - Kiambu</h5>
                            <p class="card-text">Elegant 5-bedroom villa with swimming pool, landscaped gardens, and premium finishes.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2023</small>
                                <span class="badge bg-success">Residential</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="residential">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Apartment Complex">
                        <div class="card-body">
                            <h5 class="card-title">Apartment Complex - Mombasa</h5>
                            <p class="card-text">12-unit apartment building with modern design and energy-efficient systems.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2022</small>
                                <span class="badge bg-success">Residential</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commercial Projects -->
                <div class="col-lg-4 col-md-6 project-item" data-category="commercial">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Office Building">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Office Building - Nairobi CBD</h5>
                            <p class="card-text">8-story modern office complex with state-of-the-art facilities and LEED certification.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2023</small>
                                <span class="badge bg-primary">Commercial</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="commercial">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Shopping Center">
                        <div class="card-body">
                            <h5 class="card-title">Shopping Center - Kisumu</h5>
                            <p class="card-text">Multi-level retail complex with parking facilities and modern architectural design.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2022</small>
                                <span class="badge bg-primary">Commercial</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="commercial">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Industrial Warehouse">
                        <div class="card-body">
                            <h5 class="card-title">Industrial Warehouse - Thika</h5>
                            <p class="card-text">Large-scale warehouse facility with loading docks and climate control systems.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2023</small>
                                <span class="badge bg-primary">Commercial</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Infrastructure Projects -->
                <div class="col-lg-4 col-md-6 project-item" data-category="infrastructure">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Road Construction">
                        <div class="card-body">
                            <h5 class="card-title">Highway Expansion - Nakuru</h5>
                            <p class="card-text">5km highway expansion project with improved drainage and safety features.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2022</small>
                                <span class="badge bg-warning">Infrastructure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="infrastructure">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Bridge Construction">
                        <div class="card-body">
                            <h5 class="card-title">River Bridge - Eldoret</h5>
                            <p class="card-text">Concrete bridge construction connecting rural communities with improved access.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2023</small>
                                <span class="badge bg-warning">Infrastructure</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 project-item" data-category="infrastructure">
                    <div class="card h-100 shadow-sm">
                        <img src="/placeholder.svg?height=250&width=400" class="card-img-top" alt="Water Treatment Plant">
                        <div class="card-body">
                            <h5 class="card-title">Water Treatment Facility - Machakos</h5>
                            <p class="card-text">Modern water treatment plant serving 50,000 residents with clean water supply.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Completed: 2022</small>
                                <span class="badge bg-warning">Infrastructure</span>
                            </div>
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
    <!-- Custom JS -->
    <script src="main.js"></script>
    
    <script>
        // Project filtering functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('[data-filter]');
            const projectItems = document.querySelectorAll('.project-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Update active button
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter projects
                    projectItems.forEach(item => {
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
