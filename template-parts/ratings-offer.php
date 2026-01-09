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
	<titl><?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	        <section class="ratings" aria-label="Ratings and current offers">
            <div class="ratings__container">
                <div class="ratings__left">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png" alt="" srcset="">
                </div>


                <div class="ratings__right">
                    <ul class="offers" aria-hidden="false">
                        <li class="offer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/tick.svg" alt="36 hour" class="offer-icon"><span
                                class="offer-text">36-Hrs. CE for $119</span></li>
                        <li class="offer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/tick.svg" alt="18 hour internet"
                                class="offer-icon"><span class="offer-text">18-Hrs. Internet CE for $50</span></li>
                        <li class="offer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/tick.svg" alt="18 hour live" class="offer-icon"><span
                                class="offer-text">18-Hrs. Live/ZOOM CE for $79</span></li>
                        <li class="offer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/tick.svg" alt="internet" class="offer-icon"><span
                                class="offer-text">Internet CE $10/ea.</span></li>
                        <li class="offer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/tick.svg" alt="live" class="offer-icon"><span
                                class="offer-text">Live/ZOOM CE $20/ea.</span></li>
                    </ul>

                    <a class="ratings-cta" href="#">Explore Now <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
	
</body>
</html>