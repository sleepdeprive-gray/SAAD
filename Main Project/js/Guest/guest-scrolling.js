// Show/hide the scroll-to-top button
window.onscroll = function () {
    var scrollButton = document.querySelector('.scroll-to-top');
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        scrollButton.classList.add('visible');
    } else {
        scrollButton.classList.remove('visible');
    }
};

// Scroll the page back to the top when the button is clicked
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Get all sections
const sections = document.querySelectorAll('section');
let isScrolling = false; // Prevent multiple scroll triggers
let currentSectionIndex = 0; // Track the current section index
let scrollTimeout; // To track the scroll timeout
const threshold = 0.25; // Scroll threshold (e.g., 25% of the section height)
let manualScroll = false; // Flag to track if the user manually scrolled
let autoScrollInProgress = false; // Prevent automatic scrolling while user navigates manually

// Smoothly scroll to a section by index
function scrollToSection(index) {
    if (index >= 0 && index < sections.length) {
        isScrolling = true; // Lock scrolling to prevent overlap
        window.scrollTo({
            top: sections[index].offsetTop,
            behavior: 'smooth',
        });

        // Wait for the scroll animation to finish before unlocking
        setTimeout(() => {
            isScrolling = false;
        }, 800); // Adjust based on the scroll animation duration
    }
}

// Listen for manual scroll to enable auto-scrolling
window.addEventListener('scroll', () => {
    if (isScrolling || autoScrollInProgress) return; // Prevent action if already scrolling or manual scroll is in progress

    // Set the manual scroll flag to true when the user scrolls
    if (!manualScroll) {
        manualScroll = true; // Enable automatic scrolling after user manually scrolls
    }

    // Clear previous timeout if user continues scrolling
    clearTimeout(scrollTimeout);

    // Set a new timeout to execute scroll redirection after 1 second of no scrolling
    scrollTimeout = setTimeout(() => {
        const currentScroll = window.scrollY;
        const currentSection = sections[currentSectionIndex];
        const sectionTop = currentSection.offsetTop;
        const sectionHeight = currentSection.offsetHeight;

        // Determine if user has crossed the threshold
        const scrollProgress = (currentScroll - sectionTop) / sectionHeight;

        if (scrollProgress > threshold && currentSectionIndex < sections.length - 1) {
            // User scrolled past threshold, go to the next section
            currentSectionIndex++;
            autoScrollInProgress = true; // Prevent further auto-scroll actions
            scrollToSection(currentSectionIndex);
        } else if (scrollProgress < -threshold && currentSectionIndex > 0) {
            // User scrolled above the threshold, go to the previous section
            currentSectionIndex--;
            autoScrollInProgress = true; // Prevent further auto-scroll actions
            scrollToSection(currentSectionIndex);
        }
    }, 1000); // Delay of 1 second
});

// Listen to the navigation links click event
document.querySelectorAll('.navigations a').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default anchor behavior

        // Disable auto-scroll temporarily
        autoScrollInProgress = true;

        // Scroll to the target section immediately (manual navigation)
        const targetId = this.getAttribute('href').substring(1); // Get the section ID
        const targetSection = document.getElementById(targetId);

        window.scrollTo({
            top: targetSection.offsetTop,
            behavior: 'smooth',
        });

        // Reset the auto-scroll after a 2-second delay (enough time for user to manually scroll)
        setTimeout(() => {
            autoScrollInProgress = false; // Enable auto-scroll again after manual navigation
        }, 2000); // After 2 seconds, allow auto-scroll to resume
    });
});

// Listen to the back-to-top button click event
document.querySelector('.scroll-to-top').addEventListener('click', function (e) {
    e.preventDefault();

    // Disable auto-scroll temporarily
    autoScrollInProgress = true;

    // Scroll to the top manually
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });

    // Reset the auto-scroll after a 2-second delay
    setTimeout(() => {
        autoScrollInProgress = false; // Enable auto-scroll again after manual scroll
    }, 2000); // After 2 seconds, allow auto-scroll to resume
});