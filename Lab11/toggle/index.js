document.addEventListener("DOMContentLoaded", function() {
    var toggleButton = document.getElementById("toggleButton");
    var mainNav = document.getElementById("mainNav");

    toggleButton.addEventListener("click", function() {
        mainNav.style.display = (mainNav.style.display === "block") ? "none" : "block";
    });
});
