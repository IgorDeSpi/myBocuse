const point = document.querySelector(".pointMatin")
const boutonPointage = document.getElementById("bouton_pointage")

if (point.textContent == "Tu a pointé.") {
    point.style.background = "green";
    boutonPointage.disabled = "true";
    boutonPointage.style.background = " rgb(169, 247, 159)";
}