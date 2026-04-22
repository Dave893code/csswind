<?php
// Prayer request mail configuration.
// Put your sending email and app password here.

// SMTP server host. For Gmail use smtp.gmail.com.
define('PRAYER_MAIL_HOST', 'smtp.gmail.com');

// SMTP port. Use 587 for STARTTLS or 465 for SMTPS.
define('PRAYER_MAIL_PORT', 587);

// The email address used by PHPMailer to authenticate and send mail.
define('PRAYER_MAIL_FROM', 'your-email@gmail.com');

// The app password or SMTP password for PRAYER_MAIL_FROM.
define('PRAYER_MAIL_PASSWORD', 'your-app-password');

// The address where prayer requests should be delivered.
define('PRAYER_MAIL_TO', 'your-email@gmail.com');

define('PRAYER_MAIL_NAME', 'Gloryvine Prayer Requests');

// Newsletter email settings
// Use the same SMTP account as above, or set a separate address here.
define('NEWSLETTER_MAIL_TO', 'your-email@gmail.com');
define('NEWSLETTER_MAIL_NAME', 'Gloryvine Newsletter');
