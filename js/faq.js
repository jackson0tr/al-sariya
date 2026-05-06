document.querySelectorAll(".faq-question").forEach((item) => {
    item.addEventListener("click", () => {

        document.querySelectorAll(".faq-item").forEach(el => {
            if (el !== item.parentElement) {
                el.classList.remove("active");
            }
        });

        item.parentElement.classList.toggle("active");
    });
});