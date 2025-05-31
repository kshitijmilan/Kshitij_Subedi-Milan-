document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("toggleDarkMode");
    const body = document.body;

    // Check for saved preference
    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark");
    }

    toggleButton.addEventListener("click", () => {
        body.classList.toggle("dark");

        // Save preference to localStorage
        if (body.classList.contains("dark")) {
            localStorage.setItem("theme", "dark");
        } else {
            localStorage.setItem("theme", "light");
        }
    });
});
