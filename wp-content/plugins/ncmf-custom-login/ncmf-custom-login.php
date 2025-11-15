<?php
/**
 * Plugin Name: NCMF Custom Login Page
 * Description: Custom login page for National Commission on Muslim Filipinos - Regional Office IX
 * Version: 1.0
 * Author: Your Name
 */

// Enqueue custom login styles
function ncmf_custom_login_styles()
{
    ?>
    <style type="text/css">
        body.login {
            background: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        }

        #login {
            width: 320px;
            padding: 8% 0 0;
        }

        #login h1 {
            display: none;
        }

        /* Custom Header */
        .ncmf-login-header {
            background: #2d7a3e;
            padding: 25px 20px;
            text-align: center;
            margin: 0 0 0 0;
        }

        .ncmf-logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 0;
        }

        .ncmf-logo {
            width: 60px;
            height: 60px;
            flex-shrink: 0;
        }

        .ncmf-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .ncmf-title {
            color: white;
            text-align: left;
            line-height: 1.2;
        }

        .ncmf-title h1 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .ncmf-title h2 {
            margin: 5px 0 0 0;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: 0.8px;
            text-align: center;
        }

        .ncmf-accent {
            height: 10px;
            background: #ffd700;
            margin: 0;
        }

        .ncmf-page-title {
            background: #2d7a3e;
            color: white;
            padding: 12px 20px;
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            border: 1px solid #2d7a3e;
            border-top: none;
        }

        /* Login Form */
        #loginform,
        #lostpasswordform,
        #registerform {
            background: white;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.13);
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0;
            margin-top: 0 !important;
        }

        .login form .input,
        .login input[type="text"],
        .login input[type="password"],
        .login input[type="email"] {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 0;
            padding: 3px 5px;
            font-size: 24px;
            line-height: 1.33333333;
            height: auto;
            transition: border-color 0.1s ease;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.07);
        }

        .login form .input:focus,
        .login input[type="text"]:focus,
        .login input[type="password"]:focus,
        .login input[type="email"]:focus {
            background: #fff;
            border-color: #2d7a3e;
            outline: none;
            box-shadow: 0 0 0 1px #2d7a3e;
        }

        .login label {
            color: #3c434a;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
        }

        /* Login Button */
        .wp-core-ui .button-primary {
            background: #2d7a3e;
            border-color: #2d7a3e #1a5c2b #1a5c2b;
            box-shadow: 0 1px 0 #1a5c2b;
            color: #fff;
            text-decoration: none;
            text-shadow: 0 -1px 1px #1a5c2b, 1px 0 1px #1a5c2b, 0 1px 1px #1a5c2b, -1px 0 1px #1a5c2b;
            font-size: 13px;
            line-height: 2.30769231;
            min-height: 32px;
            padding: 0 12px;
            border-radius: 3px;
        }

        .wp-core-ui .button-primary:hover,
        .wp-core-ui .button-primary:focus {
            background: #1a5c2b !important;
            border-color: #0f3a1c !important;
            color: #fff;
        }

        .wp-core-ui .button-primary:active {
            background: #1a5c2b !important;
            border-color: #1a5c2b !important;
            box-shadow: inset 0 2px 0 #0f3a1c !important;
            transform: none;
        }

        .wp-core-ui .button-primary:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px #2d7a3e !important;
        }

        /* Navigation Links */
        .login #backtoblog a,
        .login #nav a {
            color: #2d7a3e !important;
            text-decoration: none;
        }

        .login #backtoblog a:hover,
        .login #nav a:hover {
            color: #1a5c2b !important;
        }

        /* Messages and Notices */
        .login .message,
        .login .notice,
        .login .success,
        #login-message {
            border-left: 4px solid #2d7a3e !important;
            padding: 12px;
            margin-left: 0;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            word-wrap: break-word;
            color: #3c434a;
        }

        .login #login_error {
            border-left: 4px solid #d63638 !important;
            padding: 12px;
            margin-left: 0;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            word-wrap: break-word;
            color: #3c434a;
        }

        .login .button.wp-hide-pw:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px #2d7a3e !important;
        }

        /* Form Elements */
        .forgetmenot label {
            font-size: 12px;
            line-height: 1.5;
        }

        #login form p.submit {
            margin: 16px 0 0;
            padding: 0;
        }

        .login .button.wp-hide-pw {
            background: transparent;
            border: 1px solid #ddd;
            box-shadow: none;
            color: #2c3338;
            min-height: 40px;
            line-height: 2;
        }

        .login .button.wp-hide-pw:hover {
            background: #f6f7f7;
            border-color: #2d7a3e;
            color: #2d7a3e;
        }

        .login .button.wp-hide-pw:focus {
            background: #f6f7f7;
            border-color: #2d7a3e;
            color: #2d7a3e;
            box-shadow: 0 0 0 1px #2d7a3e;
            outline: 2px solid transparent;
        }

        .login form {
            margin-top: 0;
            padding: 24px;
        }

        .login form p {
            margin-bottom: 16px;
        }

        .login form .forgetmenot {
            float: left;
            margin-bottom: 0;
        }

        /* Privacy Policy Link */
        .login .privacy-policy-page-link {
            text-align: center;
            width: 100%;
            margin: 3em 0;
        }

        .login .privacy-policy-page-link a {
            color: #2d7a3e;
            text-decoration: none;
        }

        .login .privacy-policy-page-link a:hover {
            color: #1a5c2b;
        }

        /* Responsive */
        @media screen and (max-width: 400px) {
            .ncmf-logo-container {
                flex-direction: column;
                gap: 10px;
            }

            .ncmf-title {
                text-align: center;
            }

            .ncmf-title h1 {
                font-size: 14px;
            }

            .ncmf-title h2 {
                font-size: 12px;
            }
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'ncmf_custom_login_styles');

// Add custom header before login form
function ncmf_add_custom_header()
{
    $logo_url = get_site_url() . '/wp-content/uploads/2025/11/cropped-ncmf-logo.png';
    ?>
    <div class="ncmf-login-header">
        <div class="ncmf-logo-container">
            <div class="ncmf-logo">
                <img src="<?php echo esc_url($logo_url); ?>" alt="NCMF Logo">
            </div>
            <div class="ncmf-title">
                <h1>National Commission on<br>Muslim Filipinos</h1>
                <h2>Regional Office IX</h2>
            </div>
        </div>
    </div>
    <div class="ncmf-accent"></div>
    <div class="ncmf-page-title">
        National Commission on Muslim Filipinos - Regional Office IX
    </div>
    <?php
}
add_action('login_header', 'ncmf_add_custom_header');

// Change login logo URL to home page
function ncmf_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'ncmf_login_logo_url');

// Change login logo title
function ncmf_login_logo_url_title()
{
    return 'National Commission on Muslim Filipinos - Regional Office IX';
}
add_filter('login_headertext', 'ncmf_login_logo_url_title');

// Custom login messages
function ncmf_custom_login_message($message)
{
    if (empty($message)) {
        return '<p class="message">Please log in to access the NCMF Regional Office IX portal.</p>';
    }
    return $message;
}
add_filter('login_message', 'ncmf_custom_login_message');