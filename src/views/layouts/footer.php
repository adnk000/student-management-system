</div> <!-- container -->

<script>
// 🔥 FIX: ensure page is visible on load
document.body.classList.remove("fade-out");

const toggleBtn = document.getElementById('themeToggle');

// Load saved theme
if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
}

// Toggle theme
if (toggleBtn) {
    toggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
}

/* 🔥 SMOOTH PAGE TRANSITION */
document.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", function(e) {

        if (this.href && this.href.includes("index.php")) {
            e.preventDefault();

            document.body.classList.add("fade-out");

            setTimeout(() => {
                window.location.href = this.href;
            }, 200);
        }
    });
});
</script>

</body>
</html>