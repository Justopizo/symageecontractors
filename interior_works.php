<?php 
require_once 'config.php';
$page_title = 'Interior Works & Fittings - ' . SITE_NAME;
$meta_description = 'Professional interior works, door fittings, kitchen cabinets, wardrobes, and T&G fittings services in Kenya. Quality craftsmanship for your home or office.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('intworks2.jpeg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero-section p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .service-icon {
            font-size: 2.5rem;
            color: #007bff;
        }
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            border-radius: 50px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            z-index: 1000;
            transition: transform 0.3s ease;
        }
        .whatsapp-btn:hover {
            transform: scale(1.1);
            background-color: #20c35c;
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        @media (max-width: 576px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            .hero-section p {
                font-size: 1rem;
            }
            .service-card {
                margin-bottom: 1.5rem;
            }
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Interior Works & Fittings</h1>
            <p class="lead">Transform your space with our expert craftsmanship in door fittings, kitchen cabinets, wardrobes, and T&G fittings for floors and ceilings.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Interior Services</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-lightbulb service-icon mb-3"></i>
                            <h5 class="card-title">Interior Design Consultation</h5>
                            <p class="card-text">Expert guidance to bring your vision to life with customized design solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-door-open service-icon mb-3"></i>
                            <h5 class="card-title">Door Fittings & Installations</h5>
                            <p class="card-text">Precision installation of doors for functionality and aesthetic appeal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-kitchen-set service-icon mb-3"></i>
                            <h5 class="card-title">Custom Kitchen Cabinets</h5>
                            <p class="card-text">Tailored kitchen cabinet designs for style and storage efficiency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-closet service-icon mb-3"></i>
                            <h5 class="card-title">Wardrobe Design & Construction</h5>
                            <p class="card-text">Custom wardrobes to maximize space and enhance your interiors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-layer-group service-icon mb-3"></i>
                            <h5 class="card-title">T&G Floor Fittings</h5>
                            <p class="card-text">Durable and stylish tongue and groove flooring solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-ceiling-fan service-icon mb-3"></i>
                            <h5 class="card-title">T&G Ceiling Fittings</h5>
                            <p class="card-text">Elegant tongue and groove ceilings for a refined look.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-hammer service-icon mb-3"></i>
                            <h5 class="card-title">Custom Woodworking</h5>
                            <p class="card-text">Bespoke carpentry for unique and high-quality interior elements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Why Choose Our Interior Services?</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-tools service-icon mb-3"></i>
                            <h5 class="card-title">Expert Craftsmanship</h5>
                            <p class="card-text">Our team consists of skilled craftsmen with years of experience in interior works and fittings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-leaf service-icon mb-3"></i>
                            <h5 class="card-title">Quality Materials</h5>
                            <p class="card-text">We use only the finest materials to ensure durability and aesthetic appeal in all our projects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 border-0 shadow-sm service-card">
                        <div class="card-body text-center">
                            <i class="fas fa-clock service-icon mb-3"></i>
                            <h5 class="card-title">Timely Completion</h5>
                            <p class="card-text">We understand the importance of deadlines and ensure all projects are completed on time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Works Slideshow -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Our Past Successful Works</h2>
            <div id="worksCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php for ($i = 1; $i <= 9; $i++): ?>
                        <div class="carousel-item <?php echo $i === 1 ? 'active' : ''; ?>">
                            <img src="intworks<?php echo $i; ?>.jpeg" class="d-block w-100" alt="Interior Work <?php echo $i; ?>">
                        </div>
                    <?php endfor; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#worksCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#worksCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Ready to Transform Your Space?</h2>
            <p class="lead mb-4">Contact us today for a free consultation and quote on your interior works project.</p>
            <a href="tel:<?php echo PHONE; ?>" class="btn btn-primary btn-lg me-3">Call Now</a>
            <a href="quote.php" class="btn btn-outline-primary btn-lg">Get Free Quote</a>
        </div>
    </section>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/<?php echo WHATSAPP; ?>" class="whatsapp-btn" target="_blank" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>