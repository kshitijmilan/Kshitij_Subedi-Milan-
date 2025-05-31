const toggleButton = document.getElementById('dark-toggle');
const rootElement = document.documentElement;

// Force dark mode by default on load (unless user has chosen light mode)
if (localStorage.getItem('theme') === 'light') {
    rootElement.classList.remove('dark');
    toggleButton.textContent = 'Dark Mode';
} else {
    // Default or localStorage 'dark' => activate dark mode
    rootElement.classList.add('dark');
    toggleButton.textContent = 'Light Mode';
}

toggleButton.addEventListener('click', () => {
    rootElement.classList.toggle('dark');
    if (rootElement.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        toggleButton.textContent = 'Light Mode';
    } else {
        localStorage.setItem('theme', 'light');
        toggleButton.textContent = 'Dark Mode';
    }
});
