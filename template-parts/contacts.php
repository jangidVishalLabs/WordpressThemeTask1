<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

        <section class="contact" aria-label="Contact support">
            <div class="contact__container">
                <div class="contact__info">
                    <h2 class="contact__title">Need Additional Assistance?</h2>
                    <p class="contact__desc">Whether you have a question, need support, or want to share your
                        feedback, we’re here to help. Your satisfaction is our priority — please feel free to reach
                        out.
                        <br /> <br /> For quick answers, visit our <a href="#" class="contact__link">Frequently Asked
                            Questions</a>
                        or try our automated AI ChatBot, available 24/7 to provide instant help.
                    </p>
                </div>

                <form class="contact__form" action="#" method="post" novalidate>
                    <div class="contact__fields">
                        <div class="contact__field">
                            <label class="contact__label" for="contact-name">Full name</label>
                            <input class="contact__input" id="contact-name" name="name" type="text"
                                placeholder="Your full name">
                        </div>

                        <div class="contact__field">
                            <label class="contact__label" for="contact-email">Email address</label>
                            <input class="contact__input" id="contact-email" name="email" type="email"
                                placeholder="you@example.com">
                        </div>

                        <div class="contact__field">
                            <label class="contact__label" for="contact-message">Message</label>
                            <textarea class="contact__textarea" id="contact-message" name="message" rows="6"
                                placeholder="Enter your message..."></textarea>
                        </div>
                    </div>

                    <div class="contact__actions">
                        <button class="btn contact__submit" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>