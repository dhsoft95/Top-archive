// Immediately Invoked Function Expression (IIFE) to encapsulate the code
(() => {
    /**
     * Initialize Swiper component
     */
    window.addEventListener("load", initSwiper);

    /**
     * Initialize FAQ functionality
     */
    const initFAQ = () => {
        const faqTriggers = document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle');

        faqTriggers.forEach((trigger) => {
            trigger.addEventListener('click', () => {
                const faqItem = trigger.closest('.faq-item');
                faqItem.classList.toggle('faq-active');
            });
        });
    };

    // Initialize FAQ when DOM is ready
    document.addEventListener('DOMContentLoaded', initFAQ);
})();