function toggleSection(sectionId) {
    // Toggle visibility of sections
    var sections = document.querySelectorAll('.fsection');
    sections.forEach(function(section) {
        if (section.id === sectionId) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    });

    // Manage active class for navigation links
    var navLinks = document.querySelectorAll('nav a');
    navLinks.forEach(function(link) {
        if (link.getAttribute('onclick').includes(sectionId)) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}
