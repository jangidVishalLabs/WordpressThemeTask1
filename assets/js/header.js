jQuery(function ($) {

    // -------------------------------------------------------------------------
    // Location dropdown (searchable list of US states)
    // -------------------------------------------------------------------------
    console.log("header.js loaded");
    const apiURL = "https://gist.githubusercontent.com/mshafrir/2646763/raw/states_titlecase.json";

    const $locationBtn  = $(".location");
    const $dropdown     = $("#dropdownMenu");
    const $searchInput  = $("#searchInput");
    const $stateList    = $("#stateList");
    const $locationText = $(".location-text");

    // Toggle dropdown
    if ($locationBtn.length) {
        $locationBtn.on("click", function (e) {
            e.stopPropagation();
            $dropdown.toggleClass("open");
        });
    }

    // Load states JSON
    function loadStates() {
        $.getJSON(apiURL)
            .done(function (states) {
                renderStates(states);

                // Filter on input
                $searchInput.on("input", function () {
                    const q = $(this).val().trim().toLowerCase();
                    const filtered = states.filter(state =>
                        state.name.toLowerCase().includes(q)
                    );
                    renderStates(filtered);
                });
            })
            .fail(function (err) {
                console.error("Failed to load states JSON", err);
            });
    }

    // Render states list
    function renderStates(states) {
        $stateList.empty();

        $.each(states, function (_, state) {
            const $li = $("<li>").text(state.name);

            $li.on("click", function () {
                $locationText.text(state.name);
                $dropdown.removeClass("open");
            });

            $stateList.append($li);
        });
    }

    loadStates();

    // Close dropdown when clicking outside `.content`
    $(document).on("click", function (e) {
        if (!$(e.target).closest(".content").length) {
            $dropdown.removeClass("open");
        }
    });

    // -------------------------------------------------------------------------
    // Navigation toggle (mobile menu)
    // -------------------------------------------------------------------------

    const $header = $(".nav-header");
    const $toggle = $(".nav-toggle");
    const $menu   = $("#nav-menu");

    if (!$header.length || !$toggle.length || !$menu.length) return;

    function openMenu() {
        $header.addClass("nav-open");
        $toggle.attr("aria-expanded", "true");
        $menu.addClass("is-open");
    }

    function closeMenu() {
        $header.removeClass("nav-open");
        $toggle.attr("aria-expanded", "false");
        $menu.removeClass("is-open");
    }

    // Toggle menu
    $toggle.on("click", function (e) {
        e.stopPropagation();
        const expanded = $(this).attr("aria-expanded") === "true";
        expanded ? closeMenu() : openMenu();
    });

    // Close on ESC
    $(document).on("keydown", function (e) {
        if (e.key === "Escape") closeMenu();
    });

    // Close when clicking outside header
    $(document).on("click", function (e) {
        if (!$header.has(e.target).length) {
            closeMenu();
        }
    });

    // Close when clicking links/buttons inside menu
    $menu.on("click", "a, button", function () {
        closeMenu();
    });

});
