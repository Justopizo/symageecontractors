<?php
// Start session at the very beginning
session_start();

// Define configuration constants
define('SITE_NAME', 'Symagee Contractors');
define('TAGLINE', 'Reliable Roofing, Biodigesters, Aluminum & Glass, and Painting Solutions');
define('SITE_URL', 'https://symageecontractors.co.ke');
define('BASE_URL', 'https://symageecontractors.co.ke');
define('EMAIL', 'info@symageecontractors.co.ke');
define('ALTERNATE_EMAIL', 'symongithua@gmail.com');
define('PHONE', '+254 728452393');
define('WHATSAPP', '+254728452393');
define('ADDRESS', 'Makadara, Nairobi, Kenya');
define('FACEBOOK', '#');
define('SMTP_HOST', 'lim106.truehost.cloud');
define('SMTP_PORT', 587);
define('SMTP_ENCRYPTION', 'tls');
define('SMTP_USERNAME', 'your_smtp_username');
define('SMTP_PASSWORD', 'your_smtp_password');
define('RECAPTCHA_SITE_KEY', 'your_recaptcha_site_key');
define('RECAPTCHA_SECRET_KEY', 'your_recaptcha_secret_key');
define('ENABLE_RECAPTCHA', false);

$page_title = 'Request a Quote - ' . SITE_NAME;
$meta_description = 'Get a free quote for roofing, biodigester, aluminum & glass, or painting services from Symagee Contractors. Professional construction services in Nairobi, Kenya.';

$message = '';
$message_type = '';

// Retrieve flash message from session if exists
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    $message_type = $_SESSION['flash_message_type'];
    unset($_SESSION['flash_message']);
    unset($_SESSION['flash_message_type']);
}

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
        $service = htmlspecialchars(trim($_POST['service'] ?? ''));
        $county = htmlspecialchars(trim($_POST['county'] ?? ''));
        $budget = htmlspecialchars(trim($_POST['budget'] ?? ''));
        $timeline = htmlspecialchars(trim($_POST['timeline'] ?? ''));
        $user_message = htmlspecialchars(trim($_POST['message'] ?? ''));
        
        if (empty($name) || !$email || empty($phone) || empty($service) || empty($county) || empty($user_message)) {
            $message = 'Please fill in all required fields.';
            $message_type = 'danger';
        } else {
            // Process file upload if any
            $attachment_info = '';
            if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];
                $max_size = 5 * 1024 * 1024;
                
                if (in_array($_FILES['attachment']['type'], $allowed_types) && $_FILES['attachment']['size'] <= $max_size) {
                    $attachment_info = ' (File attached: ' . $_FILES['attachment']['name'] . ')';
                } else {
                    $message = 'Invalid file type or file too large. Please upload images or PDF files under 5MB.';
                    $message_type = 'danger';
                }
            }
            
            if (empty($message)) {
                $whatsapp_message = "Hello! I'm requesting a quote for the following project:\n\n";
                $whatsapp_message .= "Name: " . $name . "\n";
                $whatsapp_message .= "Email: " . $email . "\n";
                $whatsapp_message .= "Phone: " . $phone . "\n";
                $whatsapp_message .= "Service: " . $service . "\n";
                $whatsapp_message .= "County: " . $county . "\n";
                if (!empty($budget)) {
                    $whatsapp_message .= "Budget: " . $budget . "\n";
                }
                if (!empty($timeline)) {
                    $whatsapp_message .= "Timeline: " . $timeline . "\n";
                }
                $whatsapp_message .= "Project Details: " . $user_message . $attachment_info . "\n\n";
                $whatsapp_message .= "Please provide me with a detailed quote. Thank you!";
                
                // Clean and format the WhatsApp number (remove all non-numeric characters)
                $whatsapp_number = preg_replace('/[^0-9]/', '', WHATSAPP);
                
                // Ensure the number starts with the country code without the plus sign
                if (substr($whatsapp_number, 0, 3) !== '254') {
                    // Remove leading zero if present
                    if (substr($whatsapp_number, 0, 1) === '0') {
                        $whatsapp_number = substr($whatsapp_number, 1);
                    }
                    $whatsapp_number = '254' . $whatsapp_number;
                }
                
                $whatsapp_url = "https://wa.me/" . $whatsapp_number . "?text=" . urlencode($whatsapp_message);
                
                // Set success message and redirect to WhatsApp
                $message = 'Thank you for your quote request! You will be redirected to WhatsApp shortly.';
                $message_type = 'success';
                
                // Store flash message and WhatsApp URL in session to use after page reload
                $_SESSION['flash_message'] = $message;
                $_SESSION['flash_message_type'] = $message_type;
                $_SESSION['whatsapp_url'] = $whatsapp_url;
                $_SESSION['show_redirect'] = true;
                
                // Redirect to avoid form resubmission
                header("Location: " . $_SERVER['REQUEST_URI']);
                exit();
            }
        }
    }
}

// Check if we need to show WhatsApp redirect after form submission
$show_redirect = $_SESSION['show_redirect'] ?? false;
$whatsapp_url = $_SESSION['whatsapp_url'] ?? '';

if ($show_redirect) {
    // Clear the session variables
    unset($_SESSION['show_redirect']);
    unset($_SESSION['whatsapp_url']);
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
    <meta property="og:url" content="<?php echo BASE_URL; ?>/quote.php">
    <link rel="canonical" href="<?php echo BASE_URL; ?>/quote.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styles to ensure proper display */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .card {
            border: none;
            border-radius: 10px;
        }
        .form-floating>label {
            padding: 1rem 0.75rem;
        }
        .btn-accent {
            background-color: #ff6b00;
            border-color: #ff6b00;
            color: white;
        }
        .btn-accent:hover {
            background-color: #e55d00;
            border-color: #e55d00;
            color: white;
        }
        .step-icon {
            font-size: 2rem;
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
            z-index: 99;
            display: none;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        h1.display-5 {
            font-size: 2.5rem;
            color: #2c3e50;
        }
        @media (max-width: 768px) {
            h1.display-5 {
                font-size: 2rem;
            }
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
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <a href="quote.php" class="btn btn-accent active">Get Quote</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-5 fw-bold text-center mb-3">Request a Free Quote</h1>
                <p class="lead text-center mb-5">Tell us about your project and we'll provide you with a detailed estimate within 24 hours.</p>
                
                <?php if ($message): ?>
                <div class="alert alert-<?php echo $message_type; ?> alert-dismissible fade show" role="alert">
                    <?php echo $message; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <form method="POST" enctype="multipart/form-data" data-form-type="quote">
                            <input type="text" name="website" style="display:none;">
                            <input type="hidden" name="submit_time" value="<?php echo time() * 1000; ?>">
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                                        <label for="name">Full Name *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                                        <label for="email">Email Address *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="+254 700 000 000" required value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                                        <label for="phone">Phone Number *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="service" name="service" required>
                                            <option value="">Select a service</option>
                                            <option value="Roofing Services" <?php echo (isset($_POST['service']) && $_POST['service'] == 'Roofing Services') ? 'selected' : ''; ?>>Roofing Services</option>
                                            <option value="Biodigester Installation" <?php echo (isset($_POST['service']) && $_POST['service'] == 'Biodigester Installation') ? 'selected' : ''; ?>>Biodigester Installation</option>
                                            <option value="Aluminum & Glass Railings" <?php echo (isset($_POST['service']) && $_POST['service'] == 'Aluminum & Glass Railings') ? 'selected' : ''; ?>>Aluminum & Glass Railings</option>
                                            <option value="Painting Works" <?php echo (isset($_POST['service']) && $_POST['service'] == 'Painting Works') ? 'selected' : ''; ?>>Painting Works</option>
                                            <option value="Multiple Services" <?php echo (isset($_POST['service']) && $_POST['service'] == 'Multiple Services') ? 'selected' : ''; ?>>Multiple Services</option>
                                        </select>
                                        <label for="service">Service Required *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="county" name="county" required>
                                            <option value="">Select county</option>
                                            <option value="Baringo" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Baringo') ? 'selected' : ''; ?>>Baringo</option>
                                            <option value="Bomet" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Bomet') ? 'selected' : ''; ?>>Bomet</option>
                                            <option value="Bungoma" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Bungoma') ? 'selected' : ''; ?>>Bungoma</option>
                                            <option value="Busia" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Busia') ? 'selected' : ''; ?>>Busia</option>
                                            <option value="Elgeyo-Marakwet" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Elgeyo-Marakwet') ? 'selected' : ''; ?>>Elgeyo-Marakwet</option>
                                            <option value="Embu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Embu') ? 'selected' : ''; ?>>Embu</option>
                                            <option value="Garissa" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Garissa') ? 'selected' : ''; ?>>Garissa</option>
                                            <option value="Homa Bay" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Homa Bay') ? 'selected' : ''; ?>>Homa Bay</option>
                                            <option value="Isiolo" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Isiolo') ? 'selected' : ''; ?>>Isiolo</option>
                                            <option value="Kajiado" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kajiado') ? 'selected' : ''; ?>>Kajiado</option>
                                            <option value="Kakamega" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kakamega') ? 'selected' : ''; ?>>Kakamega</option>
                                            <option value="Kericho" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kericho') ? 'selected' : ''; ?>>Kericho</option>
                                            <option value="Kiambu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kiambu') ? 'selected' : ''; ?>>Kiambu</option>
                                            <option value="Kilifi" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kilifi') ? 'selected' : ''; ?>>Kilifi</option>
                                            <option value="Kirinyaga" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kirinyaga') ? 'selected' : ''; ?>>Kirinyaga</option>
                                            <option value="Kisii" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kisii') ? 'selected' : ''; ?>>Kisii</option>
                                            <option value="Kisumu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kisumu') ? 'selected' : ''; ?>>Kisumu</option>
                                            <option value="Kitui" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kitui') ? 'selected' : ''; ?>>Kitui</option>
                                            <option value="Kwale" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Kwale') ? 'selected' : ''; ?>>Kwale</option>
                                            <option value="Laikipia" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Laikipia') ? 'selected' : ''; ?>>Laikipia</option>
                                            <option value="Lamu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Lamu') ? 'selected' : ''; ?>>Lamu</option>
                                            <option value="Machakos" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Machakos') ? 'selected' : ''; ?>>Machakos</option>
                                            <option value="Makueni" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Makueni') ? 'selected' : ''; ?>>Makueni</option>
                                            <option value="Mandera" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Mandera') ? 'selected' : ''; ?>>Mandera</option>
                                            <option value="Marsabit" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Marsabit') ? 'selected' : ''; ?>>Marsabit</option>
                                            <option value="Meru" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Meru') ? 'selected' : ''; ?>>Meru</option>
                                            <option value="Migori" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Migori') ? 'selected' : ''; ?>>Migori</option>
                                            <option value="Mombasa" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Mombasa') ? 'selected' : ''; ?>>Mombasa</option>
                                            <option value="Murang'a" <?php echo (isset($_POST['county']) && $_POST['county'] == "Murang'a") ? 'selected' : ''; ?>>Murang'a</option>
                                            <option value="Nairobi" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nairobi') ? 'selected' : ''; ?>>Nairobi</option>
                                            <option value="Nakuru" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nakuru') ? 'selected' : ''; ?>>Nakuru</option>
                                            <option value="Nandi" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nandi') ? 'selected' : ''; ?>>Nandi</option>
                                            <option value="Narok" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Narok') ? 'selected' : ''; ?>>Narok</option>
                                            <option value="Nyamira" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nyamira') ? 'selected' : ''; ?>>Nyamira</option>
                                            <option value="Nyandarua" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nyandarua') ? 'selected' : ''; ?>>Nyandarua</option>
                                            <option value="Nyeri" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Nyeri') ? 'selected' : ''; ?>>Nyeri</option>
                                            <option value="Samburu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Samburu') ? 'selected' : ''; ?>>Samburu</option>
                                            <option value="Siaya" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Siaya') ? 'selected' : ''; ?>>Siaya</option>
                                            <option value="Taita-Taveta" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Taita-Taveta') ? 'selected' : ''; ?>>Taita-Taveta</option>
                                            <option value="Tana River" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Tana River') ? 'selected' : ''; ?>>Tana River</option>
                                            <option value="Tharaka-Nithi" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Tharaka-Nithi') ? 'selected' : ''; ?>>Tharaka-Nithi</option>
                                            <option value="Trans Nzoia" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Trans Nzoia') ? 'selected' : ''; ?>>Trans Nzoia</option>
                                            <option value="Turkana" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Turkana') ? 'selected' : ''; ?>>Turkana</option>
                                            <option value="Uasin Gishu" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Uasin Gishu') ? 'selected' : ''; ?>>Uasin Gishu</option>
                                            <option value="Vihiga" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Vihiga') ? 'selected' : ''; ?>>Vihiga</option>
                                            <option value="Wajir" <?php echo (isset($_POST['county']) && $_POST['county'] == 'Wajir') ? 'selected' : ''; ?>>Wajir</option>
                                            <option value="West Pokot" <?php echo (isset($_POST['county']) && $_POST['county'] == 'West Pokot') ? 'selected' : ''; ?>>West Pokot</option>
                                        </select>
                                        <label for="county">Project County *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="budget" name="budget">
                                            <option value="">Select budget range</option>
                                            <option value="Under KES 50,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'Under KES 50,000') ? 'selected' : ''; ?>>Under KES 50,000</option>
                                            <option value="KES 50,000 - 100,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'KES 50,000 - 100,000') ? 'selected' : ''; ?>>KES 50,000 - 100,000</option>
                                            <option value="KES 100,000 - 250,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'KES 100,000 - 250,000') ? 'selected' : ''; ?>>KES 100,000 - 250,000</option>
                                            <option value="KES 250,000 - 500,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'KES 250,000 - 500,000') ? 'selected' : ''; ?>>KES 250,000 - 500,000</option>
                                            <option value="KES 500,000 - 1,000,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'KES 500,000 - 1,000,000') ? 'selected' : ''; ?>>KES 500,000 - 1,000,000</option>
                                            <option value="Over KES 1,000,000" <?php echo (isset($_POST['budget']) && $_POST['budget'] == 'Over KES 1,000,000') ? 'selected' : ''; ?>>Over KES 1,000,000</option>
                                        </select>
                                        <label for="budget">Budget Range (Optional)</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="timeline" name="timeline">
                                            <option value="">Select timeline</option>
                                            <option value="ASAP" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == 'ASAP') ? 'selected' : ''; ?>>As soon as possible</option>
                                            <option value="Within 1 month" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == 'Within 1 month') ? 'selected' : ''; ?>>Within 1 month</option>
                                            <option value="1-3 months" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == '1-3 months') ? 'selected' : ''; ?>>1-3 months</option>
                                            <option value="3-6 months" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == '3-6 months') ? 'selected' : ''; ?>>3-6 months</option>
                                            <option value="6+ months" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == '6+ months') ? 'selected' : ''; ?>>6+ months</option>
                                            <option value="Just planning" <?php echo (isset($_POST['timeline']) && $_POST['timeline'] == 'Just planning') ? 'selected' : ''; ?>>Just planning</option>
                                        </select>
                                        <label for="timeline">Preferred Timeline</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="attachment" class="form-label">Attach Files (Optional)</label>
                                        <input type="file" class="form-control" id="attachment" name="attachment" accept="image/*,.pdf">
                                        <div class="form-text">Upload images or PDF files (max 5MB)</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" style="height: 120px" placeholder="Project details" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                                        <label for="message">Project Details *</label>
                                        <div class="form-text">Please describe your project requirements, dimensions, materials preferences, and any specific needs.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit Quote Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="card bg-light">
                    <div class="card-body p-4 text-center">
                        <h3 class="card-title">What Happens Next?</h3>
                        <div class="row g-4 mt-3">
                            <div class="col-md-4">
                                <div class="step-icon mb-3">1️⃣</div>
                                <h5>Review</h5>
                                <p class="text-muted">We review your requirements and project details</p>
                            </div>
                            <div class="col-md-4">
                                <div class="step-icon mb-3">2️⃣</div>
                                <h5>Site Visit</h5>
                                <p class="text-muted">Schedule a free site inspection if needed</p>
                            </div>
                            <div class="col-md-4">
                                <div class="step-icon mb-3">3️⃣</div>
                                <h5>Quote</h5>
                                <p class="text-muted">Receive detailed quote within 24 hours</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="mb-2"><strong>Need immediate assistance?</strong></p>
                            <a href="tel:<?php echo PHONE; ?>" class="btn btn-accent me-3">Call <?php echo PHONE; ?></a>
                            <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP); ?>" target="_blank" class="btn btn-success">WhatsApp Us</a>
                        </div>
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
        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', WHATSAPP); ?>" target="_blank" class="btn btn-success rounded-circle">
            <span class="whatsapp-icon">💬</span>
        </a>
    </div>

    <button id="backToTop" class="btn btn-primary rounded-circle back-to-top">↑</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // WhatsApp redirect after successful form submission
        <?php if ($show_redirect && !empty($whatsapp_url)): ?>
        setTimeout(function() {
            window.location.href = '<?php echo $whatsapp_url; ?>';
        }, 1500);
        <?php endif; ?>
        
        // Back to top button
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
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
</script>
</body>
</html>