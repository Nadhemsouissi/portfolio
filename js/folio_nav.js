function toggleSection(sectionId) {
    var sections = document.querySelectorAll('.fsection');
    sections.forEach(function(section) {
        if (section.id === sectionId) {
            section.classList.remove('hidden');
        } else {
            section.classList.add('hidden');
        }
    });
}
// JavaScript Document

