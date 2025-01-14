// script.js
function toggleDarkMode() {
    const darkModeStyle = document.getElementById('dark-mode-style');
    if (darkModeStyle.disabled) {
        darkModeStyle.disabled = false;
        localStorage.setItem('darkMode', 'enabled');
    } else {
        darkModeStyle.disabled = true;
        localStorage.setItem('darkMode', 'disabled');
    }
}

// Check and apply dark mode on page load
window.onload = () => {
    const darkMode = localStorage.getItem('darkMode');
    if (darkMode === 'enabled') {
        document.getElementById('dark-mode-style').disabled = false;
    }
};
