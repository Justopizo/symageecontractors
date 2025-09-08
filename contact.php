<?php
require_once 'config.php';

$page_title = 'Contact Us - ' . SITE_NAME;
$meta_description = 'Contact Symagee Contractors for professional construction services in Nairobi, Kenya. Call ' . PHONE . ' or send us a message for roofing, biodigester, aluminum & glass, and painting services.';

$message = '';
$message_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $honeypot = $_POST['website'] ?? '';
    $submit_time = $_POST['submit_time'] ?? 0;
    $current_time = time() * 1000;
    
    if (!empty($honeypot)) {
        $message = 'Invalid submission detected.';
        $message_type = 'danger';
    } elseif (($current_time - $submit_time) < 3000) {
        $message = 'Please wait before submitting the form.';
        $message_type = 'warning';
    } else {
        $name = htmlspecialchars(trim($_POST['name'] ?? ''));
        $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
        $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
        $user_message = htmlspecialchars(trim($_POST['message'] ?? ''));
        
        if (empty($name) || !$email || empty($user_message)) {
            $message = 'Please fill in all required fields.';
            $message_type = 'danger';
        } else {
            // Prepare WhatsApp message
            $whatsapp_message = "Hello Symagee Contractors,%0A%0A";
            $whatsapp_message .= "I would like to inquire about: " . urlencode($subject) . "%0A%0A";
            $whatsapp_message .= "Name: " . urlencode($name) . "%0A";
            $whatsapp_message .= "Email: " . urlencode($email) . "%0A";
            
            if (!empty($phone)) {
                $whatsapp_message .= "Phone: " . urlencode($phone) . "%0A";
            }
            
            $whatsapp_message .= "%0AMessage:%0A" . urlencode($user_message);
            
            // Redirect to WhatsApp
            $whatsapp_url = "https://wa.me/" . str_replace('+', '', WHATSAPP) . "?text=" . $whatsapp_message;
            header("Location: " . $whatsapp_url);
            exit();
        }
    }
}
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
    <meta property="og:url" content="<?php echo SITE_URL; ?>/contact.php">
    <link rel="canonical" href="<?php echo SITE_URL; ?>/contact.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo SITE_URL; ?>"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Contact",
                "item": "<?php echo SITE_URL; ?>/contact.php"
            }
        ]
    }
    </script>
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
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                </ul>
                <a href="quote.php" class="btn btn-accent">Get Quote</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-5 fw-bold text-center mb-5">Contact Us</h1>
                
                <?php if ($message): ?>
                <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Send us a Message</h3>
                        <form method="POST" data-form-type="contact">
                            <input type="text" name="website" style="display:none;">
                            <input type="hidden" name="submit_time" value="<?php echo time() * 1000; ?>">
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Full Name *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required>
                                        <label for="email">Email Address *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+254 700 000 000">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="subject" name="subject" required>
                                            <option value="">Choose a subject</option>
                                            <option value="Roofing Services">Roofing Services</option>
                                            <option value="Biodigester Installation">Biodigester Installation</option>
                                            <option value="Aluminum & Glass">Aluminum & Glass</option>
                                            <option value="Painting Works">Painting Works</option>
                                            <option value="General Inquiry">General Inquiry</option>
                                        </select>
                                        <label for="subject">Subject *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" style="height: 120px" placeholder="Your message" required></textarea>
                                        <label for="message">Message *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card shadow h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title mb-4">Get in Touch</h3>
                        
                        <div class="contact-info">
                            <div class="mb-4">
                                <h5 class="fw-bold">📞 Phone</h5>
                                <p class="mb-1"><a href="tel:<?php echo PHONE; ?>" class="text-decoration-none"><?php echo PHONE; ?></a></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="fw-bold">✉️ Email</h5>
                                <p class="mb-1"><a href="mailto:<?php echo EMAIL; ?>" class="text-decoration-none"><?php echo EMAIL; ?></a></p>
                                <p class="mb-1"><a href="mailto:<?php echo ALTERNATE_EMAIL; ?>" class="text-decoration-none"><?php echo ALTERNATE_EMAIL; ?></a></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="fw-bold">📍 Address</h5>
                                <p><?php echo ADDRESS; ?></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="fw-bold">💬 WhatsApp</h5>
                                <p><a href="https://wa.me/<?php echo str_replace('+', '', WHATSAPP); ?>" target="_blank" class="text-decoration-none"><?php echo WHATSAPP; ?></a></p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="fw-bold">🕒 Business Hours</h5>
                                <p class="mb-1">Monday - Friday: 8:00 AM - 6:00 PM</p>
                                <p class="mb-1">Saturday: 8:00 AM - 4:00 PM</p>
                                <p>Sunday: Emergency calls only</p>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <a href="quote.php" class="btn btn-accent w-100">Request Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-body p-0">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8158!2d36.8219!3d-1.2921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTcnMzEuNiJTIDM2wrA0OSczMS4wIkU!5e0!3m2!1sen!2ske!4v1234567890"
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Symagee Contractors Location Map">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="main.js" defer></script>
</body>
</html>