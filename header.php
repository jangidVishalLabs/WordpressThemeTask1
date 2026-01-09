<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		    <header class="site-header">
        <header class="nav-header" role="banner">
            <div class="nav-left">
                <a href="<?php echo home_url('/'); ?>" class="brand" aria-label="Home">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="ceASAP logo" class="brand-logo">
                </a>
            </div>

            <!-- Mobile hamburger toggle -->
            <button class="nav-toggle" aria-controls="nav-menu" aria-expanded="false" aria-label="Open navigation">
                <span class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </button>

            <!-- Right side navigation (greeting + actions) -->
            <div class="nav-right">
                <nav id="nav-menu" class="nav-menu" aria-label="User actions">
                    <ul class="actions-list">
                        <li class="actions-item">
                            <a class="btn2 btn-primary" href="#">Calendar</a>
                        </li>
                        <li class="actions-item">
                            <button class="icon-btn" aria-label="Cart" title="Cart">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/cart.svg" alt="Cart icon" class="icon">
                                <span class="cart-count" aria-hidden="false">0</span>
                            </button>
                        </li>
                        <li class="actions-item">
                            <a class="btn2 btn-primary" href="#">My Courses</a>
                        </li>
                        <li class="actions-item">
                            <a class="btn2 btn-primary" href="#">My Account</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Top utility navigation (location and quick links) -->
        <nav class="nav-footer" aria-label="Top utility navigation">
            <div class="content nav-content">
                <button class="location" aria-haspopup="listbox" aria-expanded="false">
                    <span class="location-text">Nevada</span>
                    <img class="mdi-chevron-down" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/downArrow.svg" alt="open location selector">
                </button>
                <div class="dropdown" id="dropdownMenu">
    <input type="text" id="searchInput" class="search" placeholder="Search state...">
    <ul id="stateList" class="state-list"></ul>
</div>

            </div>
            <nav class="footer-nav" aria-label="Footer navigation">
                <ul class="footer-list">
                    <li class="footer-item"><a href="<?php echo home_url('/our-story'); ?>" class="footer-link">Our Story</a></li>
                    <li class="footer-item"><a href="<?php echo home_url('/how-it-works'); ?>" class="footer-link">How it Works?</a></li>
                    <li class="footer-item"><a href="<?php echo home_url('/our-experts'); ?>" class="footer-link">Our Experts</a></li>
                    <li class="footer-item"><a href="<?php echo home_url('/marketplace'); ?>" class="footer-link">Marketplace</a></li>
                    <li class="footer-item"><a href="<?php echo home_url('/our-blog'); ?>" class="footer-link">Our Blog</a></li>
                    <li class="footer-item"><a href="<?php echo home_url('/news'); ?>" class="footer-link">News</a></li>
                    <li class="footer-item"><a href="#" class="footer-link">Support</a></li>
                    <li class="footer-item">
                        <a href="#" class="footer-link">Resources</a>
                        <img class="mdi-chevron-down2" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/downArrow.svg" alt="more">
                    </li>
                </ul>
            </nav>
        </nav>
    </header>
</body>
</html>