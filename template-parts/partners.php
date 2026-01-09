<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

    <section class="partners-block" aria-label="Our industry partners">
        <div class="partners-block__container">
            <header class="partners-block__header">
                <h2 class="partners-block__title">
                    <span class="partners-block__title-strong">Our Amazing Industry</span>
                    <span class="partners-block__title-accent"> Partners</span>
                </h2>
            </header>

            <div class="carousel-wrapper">
                <ul class="partners-block__list" id="partnersCarouselList" aria-label="Partner logos">
                    <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s1.svg" alt="Partner 1 logo" width="148" height="61">
                        </figure>
                    </li>
                    <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s2.svg" alt="Partner 2 logo" width="151" height="64">
                        </figure>
                    </li>
                    <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s3.svg" alt="Partner 3 logo" width="154" height="63">
                        </figure>
                    </li>
                    <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s4.svg" alt="Partner 4 logo" width="148" height="61">
                        </figure>
                    </li>
                    <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s1.svg" alt="Partner 5 logo" width="151" height="64">
                        </figure>
                    </li>
                                        <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s1.svg" alt="Partner 1 logo" width="148" height="61">
                        </figure>
                    </li>
                                        <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s1.svg" alt="Partner 1 logo" width="148" height="61">
                        </figure>
                    </li>
                                        <li class="partners-block__item">
                        <figure class="partners-block__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/s1.svg" alt="Partner 1 logo" width="148" height="61">
                        </figure>
                    </li>
                </ul>
            </div>

            <div class="carousel-controls">
                <button class="carousel-btn" id="partnersPrevBtn">❮</button>
                <button class="carousel-btn" id="partnersNextBtn">❯</button>
            </div>

            <div class="partners-block__pager" id="partnersPagerContainer"></div>
        </div>
    </section>