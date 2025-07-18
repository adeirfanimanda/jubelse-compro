document.addEventListener('DOMContentLoaded', function() {
    const accordionBtns = document.querySelectorAll('.accordion-button');
    
    accordionBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const targetId = this.dataset.accordion;
        const targetAccordion = document.getElementById(targetId);
        const arrowIcon = this.querySelector('.arrow img');
  
        btn.classList.toggle('open');
        targetAccordion.classList.toggle('hide');

        if (targetAccordion.classList.contains('hide')) {
          targetAccordion.style.maxHeight = "0";
        } else {
          targetAccordion.style.maxHeight = targetAccordion.scrollHeight + "px";
        }

        // Toggle rotation of the arrow
        arrowIcon.classList.toggle('rotate-180');
      });
    });

    // Smooth scroll for anchor links with custom speed
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop;
                const duration = 3000; // Durasi scroll dalam milidetik (1 detik)
                const start = window.pageYOffset;
                const distance = offsetTop - start;
                let startTime = null;

                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    const timeElapsed = currentTime - startTime;
                    const progress = Math.min(timeElapsed / duration, 1);
                    
                    // Fungsi easing untuk scroll yang lebih halus
                    const easeInOutQuad = t => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
                    
                    window.scrollTo(0, start + (distance * easeInOutQuad(progress)));

                    if (timeElapsed < duration) {
                        requestAnimationFrame(animation);
                    }
                }

                requestAnimationFrame(animation);
            }
        });
    });
  });