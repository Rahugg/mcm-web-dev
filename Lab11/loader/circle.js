document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.getElementById("loading-text").innerText = "Loaded!";
        document.querySelector(".loader-container").style.display = "none";
        
        addContent();
    }, 3000);

    function addContent() {
        var newParagraph = document.createElement("p");
        newParagraph.innerText = "Content loaded successfully!";
        
        document.body.appendChild(newParagraph);
    }
});
