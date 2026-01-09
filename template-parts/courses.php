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
	<title> <?php wp_title(); ?></title>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
			<section class="courses" aria-label="Course types">
			<div class="courses__container">
				<ul class="courses__list">
					<li class="course">
						<img class="course__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course1.png" alt="Live Zoom" />
						<div class="course__body">
							<h3 class="course__title"><span class="muted">Live/ZOOM</span> <span
									class="highlight">CE</span>
							</h3>
							<p class="course__desc">Complete CE without stepping outside your door — Live/ZOOM-approved
								courses bring education to you.</p>
							<a class="course-cta" href="#">Explore Now <span aria-hidden="true">→</span></a>
						</div>
					</li>

					<li class="course">
						<img class="course__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course2.png" alt="Internet CE" />
						<div class="course__body">
							<h3 class="course__title"><span class="muted">Internet</span> <span
									class="highlight">CE</span>
							</h3>
							<p class="course__desc">Go at your own pace with our on-demand Nevada Real Estate Division
								approved continuing education courses.</p>
							<a class="course-cta" href="#">Explore Now <span aria-hidden="true">→</span></a>
						</div>
					</li>

					<li class="course">
						<img class="course__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/course3.png" alt="Bundles" />
						<div class="course__body">
							<h3 class="course__title"><span class="muted">Save</span> <span class="highlight">with
									Bundles</span></h3>
							<p class="course__desc">Save big on CE bundles — combine Live/ZOOM and Internet CE for
								convenience and savings.</p>
							<a class="course-cta" href="#">Explore Now <span aria-hidden="true">→</span></a>
						</div>
					</li>
				</ul>
			</div>
		</section>
	
</body>
</html>
