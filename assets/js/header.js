// -----------------------------------------------------------------------------
// Location dropdown (searchable list of US states)
// -----------------------------------------------------------------------------
const apiURL = "https://gist.githubusercontent.com/mshafrir/2646763/raw/states_titlecase.json";

// DOM references used by the location dropdown
const locationBtn = document.querySelector(".location");
const dropdown = document.getElementById("dropdownMenu");
const searchInput = document.getElementById("searchInput");
const stateList = document.getElementById("stateList");
const locationText = document.querySelector(".location-text");

// Simple toggle to open/close the dropdown when the location button is clicked.
// We only toggle a CSS class; the UI (open/close) is handled in CSS.
if (locationBtn) {
    locationBtn.addEventListener("click", () => {
        dropdown.classList.toggle("open");
    });
}

// Loads a small JSON of states, renders them into the dropdown, and wires up
// a simple client-side filter so users can type to narrow the list.
async function loadStates() {
    try {
        const res = await fetch(apiURL);
        const states = await res.json();
        renderStates(states);

        // When the user types, filter the list in-memory and re-render.
        searchInput.addEventListener("input", () => {
            const q = searchInput.value.trim().toLowerCase();
            const filtered = states.filter(s => s.name.toLowerCase().includes(q));
            renderStates(filtered);
        });
    } catch (err) {
        // Fail gracefully: don't break the page if the fetch fails.
        console.error('Failed to load states JSON', err);
    }
}

// Renders an array of {name: 'State Name'} objects into the UL element.
function renderStates(states) {
    stateList.innerHTML = "";
    states.forEach(state => {
        const li = document.createElement("li");
        li.textContent = state.name;

        // Clicking an item selects it and closes the dropdown.
        li.onclick = () => {
            locationText.textContent = state.name;
            dropdown.classList.remove("open");
        };

        stateList.appendChild(li);
    });
}

// Start loading state data immediately.
loadStates();

// Close dropdown when clicking outside the `.content` area (lightweight behavior).
document.addEventListener("click", (e) => {
    if (!e.target.closest(".content")) {
        dropdown.classList.remove("open");
    }
});


// -----------------------------------------------------------------------------
// Navigation toggle (small, dependency-free)
// Purpose: toggle a compact mobile menu and keep ARIA attributes in sync.
// -----------------------------------------------------------------------------
(function () {
  const header = document.querySelector(".nav-header");
  const toggle = document.querySelector(".nav-toggle");
  const menu = document.getElementById("nav-menu");

  // If any required element is missing, exit early (defensive check).
  if (!toggle || !menu || !header) return;

  function openMenu() {
    header.classList.add("nav-open");
    toggle.setAttribute("aria-expanded", "true");
    menu.classList.add("is-open");
  }

  function closeMenu() {
    header.classList.remove("nav-open");
    toggle.setAttribute("aria-expanded", "false");
    menu.classList.remove("is-open");
  }

  // Toggle open/close when the hamburger is clicked.
  toggle.addEventListener("click", function () {
    const expanded = toggle.getAttribute("aria-expanded") === "true";
    if (expanded) closeMenu();
    else openMenu();
  });

  // Accessibility: close the menu on ESC key.
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") closeMenu();
  });

  // Close when clicking outside the header area.
  document.addEventListener("click", function (e) {
    if (!header.contains(e.target)) closeMenu();
  });

  // When the user navigates using an internal link/button, close the menu.
  menu.addEventListener("click", function (e) {
    const target = e.target.closest("a,button");
    if (target) closeMenu();
  });
})();
