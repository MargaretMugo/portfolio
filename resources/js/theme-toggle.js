
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('themeToggle');
    const body = document.body;
    const navbar = document.querySelector('.navbar');

    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-theme');
        navbar.classList.add('dark-theme');
        toggleButton.textContent = '☀️ Light Mode';
    } else {
        body.classList.add('light-theme');
        navbar.classList.add('light-theme');
    }

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark-theme');
        body.classList.toggle('light-theme');
        navbar.classList.toggle('dark-theme');
        navbar.classList.toggle('light-theme');

        if (body.classList.contains('dark-theme')) {
            toggleButton.textContent = '☀️ Light Mode';
            localStorage.setItem('theme', 'dark');
        } else {
            toggleButton.textContent = '🌙 Dark Mode';
            localStorage.setItem('theme', 'light');
        }
    });
});
