document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-links");
    const overlay = document.querySelector(".overlay");

    function closeMenu() {
        nav.classList.remove("active");
        overlay.classList.remove("active");
        document.body.classList.remove("menu-open");
    }

    if (toggle && nav) {
        toggle.addEventListener("click", function() {
            nav.classList.toggle("active");
            overlay.classList.toggle("active");
            document.body.classList.toggle("menu-open");
        });
    }

    if (overlay) {
        overlay.addEventListener("click", closeMenu);
    }

    // optional: close on link click
    document.querySelectorAll(".nav-links a").forEach(link => {
        link.addEventListener("click", closeMenu);
    });
});