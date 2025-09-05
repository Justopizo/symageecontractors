<?php
require_once 'phpmailer.php';
require_once 'config.php';

class MailerService {
    private $config;
    
    public function __construct() {
        $this->config = include 'config.php';
    }
    
    public function sendContactForm($data) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $this->config['smtp_host'];
        $mail->Port = $this->config['smtp_port'];
        $mail->SMTPSecure = $this->config['smtp_encryption'];
        $mail->Username = $this->config['smtp_username'];
        $mail->Password = $this->config['smtp_password'];
        $mail->From = $this->config['company_email'];
        $mail->FromName = $this->config['site_name'];
        
        $mail->addAddress($this->config['company_email']);
        $mail->Subject = 'New Contact Form Submission - ' . $this->config['site_name'];
        $mail->Body = $this->getContactEmailTemplate($data);
        
        $result = $mail->send();
        
        if ($result) {
            $this->sendAutoResponder($data['email'], $data['name'], 'contact');
        }
        
        return $result;
    }
    
    public function sendQuoteForm($data, $attachment = null) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $this->config['smtp_host'];
        $mail->Port = $this->config['smtp_port'];
        $mail->SMTPSecure = $this->config['smtp_encryption'];
        $mail->Username = $this->config['smtp_username'];
        $mail->Password = $this->config['smtp_password'];
        $mail->From = $this->config['company_email'];
        $mail->FromName = $this->config['site_name'];
        
        $mail->addAddress($this->config['company_email']);
        $mail->Subject = 'New Quote Request - ' . $this->config['site_name'];
        $mail->Body = $this->getQuoteEmailTemplate($data);
        
        if ($attachment && file_exists($attachment)) {
            $mail->addAttachment($attachment);
        }
        
        $result = $mail->send();
        
        if ($result) {
            $this->sendAutoResponder($data['email'], $data['name'], 'quote');
        }
        
        return $result;
    }
    
    private function sendAutoResponder($email, $name, $type) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $this->config['smtp_host'];
        $mail->Port = $this->config['smtp_port'];
        $mail->SMTPSecure = $this->config['smtp_encryption'];
        $mail->Username = $this->config['smtp_username'];
        $mail->Password = $this->config['smtp_password'];
        $mail->From = $this->config['company_email'];
        $mail->FromName = $this->config['site_name'];
        
        $mail->addAddress($email);
        $mail->Subject = 'Thank you for contacting ' . $this->config['site_name'];
        $mail->Body = $this->getAutoResponderTemplate($name, $type);
        
        return $mail->send();
    }
    
    private function getContactEmailTemplate($data) {
        return "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$data['name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Phone:</strong> {$data['phone']}</p>
        <p><strong>Subject:</strong> {$data['subject']}</p>
        <p><strong>Message:</strong></p>
        <p>{$data['message']}</p>
        <p><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
        ";
    }
    
    private function getQuoteEmailTemplate($data) {
        return "
        <h2>New Quote Request</h2>
        <p><strong>Name:</strong> {$data['name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Phone:</strong> {$data['phone']}</p>
        <p><strong>Service:</strong> {$data['service']}</p>
        <p><strong>County:</strong> {$data['county']}</p>
        <p><strong>Budget Range:</strong> {$data['budget']}</p>
        <p><strong>Timeline:</strong> {$data['timeline']}</p>
        <p><strong>Message:</strong></p>
        <p>{$data['message']}</p>
        <p><strong>Submitted:</strong> " . date('Y-m-d H:i:s') . "</p>
        ";
    }
    
    private function getAutoResponderTemplate($name, $type) {
        $message = $type === 'quote' ? 'quote request' : 'message';
        return "
        <h2>Thank you for your {$message}!</h2>
        <p>Dear {$name},</p>
        <p>Thank you for contacting Symagee Contractors. We have received your {$message} and will respond within 24 hours.</p>
        <p>Our team of experts is ready to help you with:</p>
        <ul>
            <li>Professional Roofing Services</li>
            <li>Biodigester Installation</li>
            <li>Aluminum & Glass Railings</li>
            <li>Quality Painting Works</li>
        </ul>
        <p>For urgent matters, please call us at +254 728452393 or WhatsApp us.</p>
        <p>Best regards,<br>Symagee Contractors Team</p>
        ";
    }
}
?>
