document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("registrationForm");

    form.addEventListener("submit", function (event) {
        var emailInput = document.getElementById("email");
        var passwordInput = document.getElementById("password");

        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
            alert("Invalid email format.");
            event.preventDefault();
            return;
        }

        if (passwordInput.value.length < 6) {
            alert("Password must be at least 6 characters long.");
            event.preventDefault();
            return;
        }
    });
});