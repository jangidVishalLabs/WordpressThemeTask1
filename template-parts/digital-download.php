<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
		<section class="cards" aria-label="Digital downloads">
		<div class="cards__container">

			<header class="cards__header">
				<h2 class="cards__title">DIGITAL DOWNLOADS TO ELEVATE YOUR GAME!</h2>
			</header>

			<!-- Viewport wrapper for sliding -->
			<div class="cards__viewport">
				<ul class="cards__list" id="cardsCarouselList">
					<li class="card">
						<figure class="card__media-wrap">
							<img class="card__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-1.png" alt="Digital download 1">
						</figure>
						<div class="card__body">
							<h3 class="card__title">Link select distribute auto</h3>
							<p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo natus impedit expedita maxime eveniet iure ut cumque laboriosam ea reprehenderit!</p>
						</div>
					</li>

					<li class="card">
						<figure class="card__media-wrap">
							<img class="card__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-2.png" alt="Digital download 2">
						</figure>
						<div class="card__body">
							<h3 class="card__title">Create pencil object</h3>
							<p class="card__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas fuga dolorum ducimus magni veritatis officia ad ipsa officiis molestiae odio!</p>
						</div>
					</li>

					<li class="card">
						<figure class="card__media-wrap">
							<img class="card__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-3.png" alt="Digital download 3">
						</figure>
						<div class="card__body">
							<h3 class="card__title">Vector distribute</h3>
							<p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, odio sint architecto aliquam praesentium ipsam fuga magni placeat incidunt nemo!</p>
						</div>
					</li>



										<li class="card">
						<figure class="card__media-wrap">
							<img class="card__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-4.png" alt="Digital download 4">
						</figure>
						<div class="card__body">
							<h3 class="card__title">Link select distribute auto</h3>
							<p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo natus impedit expedita maxime eveniet iure ut cumque laboriosam ea reprehenderit!</p>
						</div>
					</li>

										<li class="card">
						<figure class="card__media-wrap">
							<img class="card__media" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/digital-1.png" alt="Digital download 1">
						</figure>
						<div class="card__body">
							<h3 class="card__title">Link select distribute auto</h3>
							<p class="card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo natus impedit expedita maxime eveniet iure ut cumque laboriosam ea reprehenderit!</p>
						</div>
					</li>


				</ul>
			</div>

			<!-- Controls -->
			<div class="cards__controls">
				<button class="cards__control" id="cardsPrevBtn">❮</button>
				<button class="cards__control" id="cardsNextBtn">❯</button>
			</div>

			<!-- Pager Dots -->
			<div class="cards__pager" id="cardsPagerContainer"></div>

			<!-- CTA -->
			<div class="cards__action">
				<a class="cards__cta" href="#">Explore All</a>
			</div>

		</div>
	</section>


