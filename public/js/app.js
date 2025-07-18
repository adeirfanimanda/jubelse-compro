document.addEventListener("DOMContentLoaded", function() {
    const btndropdown = document.getElementById('btn-dropdown');
    const dropdownmenu = document.getElementById('dropdown-menu');

    if (btndropdown && dropdownmenu) {
        btndropdown.addEventListener("click", function() {
            dropdownmenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
            if (!btndropdown.contains(event.target) && !dropdownmenu.contains(event.target)) {
                dropdownmenu.classList.add("hidden");
            }
        });
    }

    const shaynakitAccordions = document.querySelectorAll('.shaynakit-accordion');

    shaynakitAccordions.forEach(function(shaynakitAccordion) {
        const btnAccordion = shaynakitAccordion.querySelector('.btn-accordion');
        const accordionContent = shaynakitAccordion.querySelector('.accordion-content');

        if (btnAccordion && accordionContent) {
            btnAccordion.addEventListener("click", function(event) {
                event.preventDefault();
                accordionContent.classList.toggle("hidden");
            });
        }
    });
}); 