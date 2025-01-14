// script.js
function toggleDarkMode() {
    const darkModeStyle = document.getElementById('dark-mode-style');
    const ambientLight = document.getElementById('ambient-light');
    if (darkModeStyle.disabled) {
        darkModeStyle.disabled = false;
        ambientLight.style.display = 'block';
        localStorage.setItem('darkMode', 'enabled');
    } else {
        darkModeStyle.disabled = true;
        ambientLight.style.display = 'none';
        localStorage.setItem('darkMode', 'disabled');
    }
}

// Check and apply dark mode on page load
window.onload = () => {
    const darkMode = localStorage.getItem('darkMode');
    const ambientLight = document.getElementById('ambient-light');
    if (darkMode === 'enabled') {
        document.getElementById('dark-mode-style').disabled = false;
        ambientLight.style.display = 'block';
    } else {
        ambientLight.style.display = 'none';
    }
};
