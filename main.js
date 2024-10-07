function toggleText() {
    var text = document.getElementById("text-hidden");
    var button = document.getElementById("toggle-button");

    if (text.style.display === "none") {
        text.style.display = "inline";
        button.innerHTML = "Voir moins";
    } else {
        text.style.display = "none";
        button.innerHTML = "Voir plus";
    }
};
toggleText();