window.onscroll = function() {
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

    // Get all sections with the ids used for navigation
    const sections = document.querySelectorAll('section');
    
    // Function to get the closest section based on scroll position
    function getClosestSection() {
        let closestSection = sections[0];
        let minDistance = Math.abs(window.scrollY - closestSection.offsetTop);
        
        sections.forEach(section => {
            const distance = Math.abs(window.scrollY - section.offsetTop);
            if (distance < minDistance) {
                closestSection = section;
                minDistance = distance;
            }
        });

        return closestSection;
    }

    // Listen to the scroll event and navigate to the nearest section
    window.addEventListener('scroll', () => {
        const closestSection = getClosestSection();
        
        // Check if the closest section is different from the current one
        if (window.scrollY >= closestSection.offsetTop - 10 && window.scrollY < closestSection.offsetTop + closestSection.offsetHeight) {
            // You can add a class here to highlight the active section, if needed
            console.log('Scrolled to section: ', closestSection.id);
        }
    });

    // Optional: Smooth scrolling to the nearest section when clicked from the navigation
    document.querySelectorAll('.navigations a').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1); // Get the section id
            const targetSection = document.getElementById(targetId);
            
            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: 'smooth'
            });
        });
    });