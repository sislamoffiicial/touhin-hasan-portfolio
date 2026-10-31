//
document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".mobile-menu-toggle");
    const panel = document.querySelector(".mobile-menu-panel");

    if (!toggle || !panel) return;

    toggle.addEventListener("click", () => {
        const isOpen = panel.classList.toggle("is-open");

        toggle.classList.toggle("is-open", isOpen);
        toggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
        panel.setAttribute("aria-hidden", isOpen ? "false" : "true");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const sliders = document.querySelectorAll(".gallery-slider");

    sliders.forEach((slider) => {
        const slides = Array.from(slider.querySelectorAll(".gallery-slide"));

        const previousButton = slider.querySelector(".gallery-slider-prev");
        const nextButton = slider.querySelector(".gallery-slider-next");

        if (!slides.length) {
            return;
        }

        let currentIndex = 0;

        const showSlide = (index) => {
            slides.forEach((slide, slideIndex) => {
                slide.classList.toggle("is-active", slideIndex === index);
            });
        };

        previousButton?.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;

            showSlide(currentIndex);
        });

        nextButton?.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % slides.length;

            showSlide(currentIndex);
        });

        showSlide(currentIndex);
    });
});
