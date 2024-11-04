function toggleHelp() {
  var helpPopup = document.getElementById("help-popup");
  if (helpPopup.style.display === "none" || helpPopup.style.display === "") {
      helpPopup.style.display = "block"; // Mostra a janela
  } else {
      helpPopup.style.display = "none"; // Oculta a janela
  }
}
