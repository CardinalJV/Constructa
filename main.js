function showModal() {
    var modal = document.getElementsByClassName("modal")[0];

    if(modal.style.display === "none") {
        modal.style.display = "flex";
    } 
};

function toggleText() {
    var text = document.getElementById("hidden-text");
    var button = document.getElementById("toggle-button");
    var points = document.getElementById("three-points");

    if (text.style.display === "none") {
        points.style.display = "none"
        text.style.display = "inline";
        button.innerHTML = "Voir moins";
    } else {
        points.style.display = "inline"
        text.style.display = "none";
        button.innerHTML = "Voir plus";
    }
};