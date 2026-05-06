<section class="quick-actions-section">
    <div class="container">

        <!-- SOCIAL -->
        <div class="connect">
            <h2>Connect With Us</h2>

            <div class="social-icons-box">

                <a href="#" target="_blank" class="social-item">
                    <!-- LinkedIn -->
                    <svg viewBox="0 0 24 24">
                        <path fill="#fff" d="M4 3a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm1 5H3v13h2V8zm4 0h2v2h.1c.3-.6 1.2-1.2 2.4-1.2 2.6 0 3.1 1.7 3.1 3.9V21h-2v-6.6c0-1.6 0-3.7-2.3-3.7s-2.6 1.8-2.6 3.6V21H9V8z"/>
                    </svg>
                </a>

                <a href="#" target="_blank" class="social-item">
                    <!-- Facebook -->
                    <svg viewBox="0 0 24 24">
                        <path fill="#fff" d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.8v-3h2.6V9.5c0-2.6 1.6-4 3.9-4 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.7-1.6 1.5V12h2.8l-.4 3h-2.4v7A10 10 0 0 0 22 12z"/>
                    </svg>
                </a>

                <a href="#" target="_blank" class="social-item">
                    <!-- Instagram -->
                    <svg viewBox="0 0 24 24">
                        <path fill="#fff" d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 5a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6.5-.3a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                    </svg>
                </a>

                <a href="#" target="_blank" class="social-item">
                    <!-- Telegram -->
                    <svg viewBox="0 0 24 24">
                        <path fill="#fff" d="M9.9 15.5 9.5 20c.6 0 .9-.3 1.2-.6l2.9-2.8 6-4.3c1.1-.8-.2-1.2-1.7-.7L4.6 9.9C3.3 10.4 3.3 11.2 4.4 11.5l3.6 1.1 8.3-5.2c.4-.3.8-.1.5.2"/>
                    </svg>
                </a>

            </div>
        </div>

        <!-- QUICK ACTIONS -->
        <div class="quick-actions">
            <h2>Quick Actions</h2>

            <div class="actions-buttons">

                <a href="<?php echo get_template_directory_uri(); ?>/assets/company-profile.pdf" target="_blank" class="action-btn">
                    Company Profile
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/assets/projects-portfolio.pdf" target="_blank" class="action-btn">
                    Projects Portfolio
                </a>

                <a href="<?php echo get_template_directory_uri(); ?>/assets/organization-chart.pdf" target="_blank" class="action-btn">
                    Organization Chart
                </a>

                <!-- <a href="<?php echo get_template_directory_uri(); ?>/assets/iso-certificates.pdf" target="_blank" class="action-btn"> -->
               <a href="#" id="iso-download" class="action-btn">
    ISO Certificates
</a>

            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("iso-download").addEventListener("click", function(e) {
        e.preventDefault();

        const base = "<?php echo get_template_directory_uri(); ?>/assets/";

        const files = [
            "9001.pdf",
            "14001.pdf",
            "45001.pdf",
            "50001.pdf"
        ];

        files.forEach((file, index) => {
            setTimeout(() => {
                const link = document.createElement("a");
                link.href = base + file;
                link.download = file;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }, index * 300);
        });
    });
});
</script>