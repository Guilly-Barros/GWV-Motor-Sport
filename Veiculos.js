function openOverlay(title, details, history) {
    document.getElementById("overlay").style.display = "flex";
    document.getElementById("overlayTitle").innerText = title;
    document.getElementById("overlayDetails").innerText = details;
    document.getElementById("overlayHistory").innerText = history;
}

function closeOverlay() {
    document.getElementById("overlay").style.display = "none";
}
