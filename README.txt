SYMAGEE CONTRACTORS WEBSITE - DEPLOYMENT INSTRUCTIONS

REQUIREMENTS:
- PHP 8.0+ with mail() function enabled
- Shared hosting with cPanel (or similar)
- SMTP access to lim106.truehost.cloud

DEPLOYMENT STEPS:

1. UPLOAD FILES:
   - Upload ALL files to your /public_html directory
   - Ensure all files are in the root directory (no subfolders)
   - Set file permissions to 644 for PHP files, 755 for directories

2. CONFIGURE SMTP SETTINGS:
   - Edit config.php file
   - Update these values with your actual credentials:
     * smtp_username: Your SMTP username
     * smtp_password: Your SMTP password
     * base_url: Your actual domain (e.g., https://symageecontractors.co.ke)
     * company_email: Your business email address

3. OPTIONAL RECAPTCHA SETUP:
   - Get reCAPTCHA keys from https://www.google.com/recaptcha/
   - Update recaptcha_site_key and recaptcha_secret_key in config.php
   - Set enable_recaptcha to true

4. CREATE UPLOADS DIRECTORY:
   - Create 'uploads' folder in root directory
   - Set permissions to 755

5. TEST FUNCTIONALITY:
   - Visit your website
   - Test contact form submission
   - Test quote form submission
   - Verify emails are being sent

IMPORTANT NOTES:
- All SMTP settings are configured for lim106.truehost.cloud port 587 with TLS
- Forms include anti-spam protection (honeypot + time delay)
- File uploads are limited to 5MB (images and PDFs only)
- All user input is sanitized and validated

CUSTOMIZATION:
- Edit config.php to change company details
- Modify styles.css to adjust colors and styling
- Update content in individual PHP files as needed
- Replace placeholder images with actual project photos

SUPPORT:
If you encounter issues:
1. Check PHP error logs in cPanel
2. Verify SMTP credentials are correct
3. Ensure mail() function is enabled on your hosting
4. Contact your hosting provider for SMTP configuration help

The website is now ready for production use!
