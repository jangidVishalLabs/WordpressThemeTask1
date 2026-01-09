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
        <section class="stats" aria-label="Key statistics">
            <div class="stats__container">
                <ul class="stats__list">
                    <li class="stat">
                        <div class="stat__icon" aria-hidden="true">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/Vector.svg" alt="" width="64" height="64">
                        </div>
                        <div class="stat__content">
                            <div class="stat__value">35,000+</div>
                            <div class="stat__label">Enrollments and counting</div>
                        </div>
                    </li>

                    <li class="stat">
                        <div class="stat__icon" aria-hidden="true">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/Vector2.svg" alt="" width="64" height="64">
                        </div>
                        <div class="stat__content">
                            <div class="stat__value">5,000+</div>
                            <div class="stat__label">Students and counting</div>
                        </div>
                    </li>

                    <li class="stat">
                        <div class="stat__icon" aria-hidden="true">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/Vector3.svg" alt="" width="64" height="64">
                        </div>
                        <div class="stat__content">
                            <div class="stat__value">24/7/365</div>
                            <div class="stat__label">Course / Content Access</div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
</body>
</html>