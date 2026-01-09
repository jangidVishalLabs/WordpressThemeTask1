<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
        <section class="bundles-block" aria-label="Popular bundles">
            <div class="bundles-block__container">
                <header class="bundles-block__header">
                    <h2 class="bundles-block__title">Popular Bundles</h2>
                </header>

                <div class="bundles-block__grid">
                    <!-- Featured bundle (large) -->
                    <article class="bundle-card bundle-card--featured">
                        <figure class="bundle-card__media">
                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bundle1.webp" alt="36-Hour ceBUILDER Bundle" width="600" height="400" />
                        </figure>
                        <div class="bundle-card__body big-bundle">
                            <h3 class="bundle-card__title"><span class="muted">36-Hour</span> <span
                                    class="highlight">ce</span> <strong>BUILDER Bundle</strong></h3>
                            <p class="bundle-card__desc">Complete all 36 hrs. of NRED approved continuing education
                                easily
                                with our ceBUILDER Bundle! This affordable package includes 18 hrs. of required NRED CE
                                courses and 18 hrs. of Live/ZOOM sessions for your in-person requirements.</p>

                            <div class="bundle-card__meta">
                                <div class="bundle-card__prices">
                                    <span class="bundle-price bundle-price--old">$189.00</span>
                                    <span class="bundle-price bundle-price--new">$119.00</span>
                                </div>

                                        <a class="bundle-cta" href="#" role="button">Learn More <span><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/right-fill.svg" alt="" srcset="" width="16" height="16"></span></a>
                            </div>
                        </div>
                    </article>

                    <!-- Right column: two smaller bundles stacked -->
                    <div class="bundles-block__side">
                        <article class="bundle-card">
                                <figure class="bundle-card__media">
                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bundle2.webp" alt="18-Hour Internet CE Bundle" width="300" height="200" />
                            </figure>
                            <div class="bundle-card__body">
                                <h4 class="bundle-card__title">18-Hour Internet CE Bundle</h4>
                                <p class="bundle-card__desc">Renew your Nevada real estate license with our
                                    comprehensive
                                    18-hour CE bundle, featuring all six mandatory courses required for license renewal.
                                </p>

                                <div class=" side_meta">
                                    <div class="bundle-card__prices">
                                        <span class="bundle-price bundle-price--old">$99.00</span>
                                        <span class="bundle-price bundle-price--new">$50.00</span>
                                    </div>
                                        <a class="bundle-cta" href="#" role="button">Learn More <span><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/right-fill.svg" alt="" srcset="" width="16" height="16"></span></a>
                                </div>
                            </div>
                        </article>

                        <article class="bundle-card">
                                <figure class="bundle-card__media">
                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bundle3.webp" alt="18-Hour Live/ZOOM CE Bundle" width="300" height="200" />
                            </figure>
                            <div class="bundle-card__body">
                                <h4 class="bundle-card__title">18-Hour Live/ZOOM CE Bundle</h4>
                                <p class="bundle-card__desc">Explore our Live/ZOOM CE Calendar and select six
                                    NRED-approved
                                    courses to complete your required 18 hours of in-person continuing education.</p>

                                <div class="side_meta">
                                    <div class="bundle-card__prices">
                                        <span class="bundle-price bundle-price--old">$129.00</span>
                                        <span class="bundle-price bundle-price--new">$79.00</span>
                                    </div>
                                        <a class="bundle-cta" href="#" role="button">Learn More <span><img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/right-fill.svg" alt="" srcset="" width="16" height="16"></span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
