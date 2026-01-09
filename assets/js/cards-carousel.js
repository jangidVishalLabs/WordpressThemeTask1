class CardsCarousel {
    constructor() {
        // DOM references (IDs are expected to exist in the page markup)
        this.list = document.getElementById('cardsCarouselList');
        this.items = this.list.querySelectorAll('.card');
        this.pagerContainer = document.getElementById('cardsPagerContainer');
        this.prevBtn = document.getElementById('cardsPrevBtn');
        this.nextBtn = document.getElementById('cardsNextBtn');

        // State
        this.currentIndex = 0;
        this.itemsPerView = this.getItemsPerView();
        this.autoplayInterval = null;
        this.autoplayDelay = 5000; // 5 seconds

        // Initialize behavior
        this.init();
        this.setupEventListeners();
        this.startAutoplay();
        window.addEventListener('resize', () => this.handleResize());
    }

    // Setup the initial DOM-pager and render first frame
    init() {
        this.createPagerDots();
        this.updateCarousel();
    }

    // Determine how many items should be visible depending on viewport width
    getItemsPerView() {
        if (window.innerWidth >= 1025) return 4;
        if (window.innerWidth >= 768) return 2;
        return 1;
    }

    // Build clickable pager dots (one per page)
    createPagerDots() {
        this.pagerContainer.innerHTML = '';
        const totalPages = Math.ceil(this.items.length / this.itemsPerView);
        for (let i = 0; i < totalPages; i++) {
            const dot = document.createElement('button');
            dot.className = `cards__dot ${i === 0 ? 'is-active' : ''}`;
            dot.addEventListener('click', () => this.goToPage(i));
            this.pagerContainer.appendChild(dot);
        }
    }

    // Render the carousel position. Uses pixels for mobile (more reliable with variable gaps)
    // and percent for larger widths so items resize with the layout.
    updateCarousel() {
        const isSmall = window.innerWidth < 767;
        if (this.items.length === 0) return;

        if (isSmall) {
            const firstCard = this.items[0];
            const cardWidth = firstCard ? firstCard.getBoundingClientRect().width || 150 : 150;

            // Estimate gap between cards (if present)
            let gap = 0;
            if (this.items.length > 1) {
                const r1 = this.items[0].getBoundingClientRect();
                const r2 = this.items[1].getBoundingClientRect();
                gap = Math.round(r2.left - r1.right);
                if (isNaN(gap) || gap < 0) gap = 0;
            }

            const step = cardWidth + gap + 10;
            const offsetPx = -this.currentIndex * step;
            this.list.style.transform = `translateX(${offsetPx}px)`;
        } else {
            // Percent-based transform keeps things responsive on wider screens
            const offset = -this.currentIndex * (100 / this.itemsPerView);
            this.list.style.transform = `translateX(calc(${offset}% - 10px))`;
        }

        this.updatePagerDots();
    }

    // Update pager dots' active state
    updatePagerDots() {
        const dots = this.pagerContainer.querySelectorAll('.cards__dot');
        const activePage = Math.floor(this.currentIndex / this.itemsPerView);
        dots.forEach((dot, idx) => {
            dot.classList.toggle('is-active', idx === activePage);
        });
    }

    // Move forward one step (wraps to start)
    next() {
        const maxIndex = this.items.length - this.itemsPerView;
        this.currentIndex = this.currentIndex < maxIndex ? this.currentIndex + 1 : 0;
        this.updateCarousel();
        this.resetAutoplay();
    }

    // Move backward one step (wraps to end)
    prev() {
        const maxIndex = this.items.length - this.itemsPerView;
        this.currentIndex = this.currentIndex > 0 ? this.currentIndex - 1 : maxIndex;
        this.updateCarousel();
        this.resetAutoplay();
    }

    // Jump to a specific page index
    goToPage(pageIndex) {
        this.currentIndex = pageIndex * this.itemsPerView;
        this.updateCarousel();
        this.resetAutoplay();
    }

    // Autoplay helpers
    startAutoplay() {
        this.autoplayInterval = setInterval(() => {
            this.autoNext();
        }, this.autoplayDelay);
    }

    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }

    resetAutoplay() {
        this.stopAutoplay();
        this.startAutoplay();
    }

    autoNext() {
        const maxIndex = this.items.length - this.itemsPerView;
        this.currentIndex = this.currentIndex < maxIndex ? this.currentIndex + 1 : 0;
        this.updateCarousel();
    }

    // Wire up the prev/next buttons
    setupEventListeners() {
        this.nextBtn.addEventListener('click', () => this.next());
        this.prevBtn.addEventListener('click', () => this.prev());
    }

    // If the number of items per view changes on resize, rebuild pager and reset position
    handleResize() {
        const newItemsPerView = this.getItemsPerView();
        if (newItemsPerView !== this.itemsPerView) {
            this.itemsPerView = newItemsPerView;
            this.currentIndex = 0;
            this.createPagerDots();
            this.updateCarousel();
        }
    }
}

// Initialize the cards carousel when DOM is ready (defensive: ensure DOM exists first)
document.addEventListener('DOMContentLoaded', () => {
    // Guard against missing DOM nodes to avoid runtime errors
    try {
        if (document.getElementById('cardsCarouselList')) new CardsCarousel();
    } catch (err) {
        console.error('CardsCarousel init failed', err);
    }
});