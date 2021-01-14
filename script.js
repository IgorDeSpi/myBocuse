const point = document.querySelector(".pointMatin")
const point2 = document.querySelector(".pointSoir")
const boutonPointage = document.getElementById("bouton_pointage")
boutonPointage.addEventListener("click",function(){
    window.location = "";
    alert("Pointage du matin réussi");
})
let inter = false;

if (point.textContent == "pointMatin") {
    point.style.background = "green";
    boutonPointage.disabled = "true";
    boutonPointage.style.background = " rgb(169, 247, 159)";
    point.innerHTML ="";
    inter = true;
}

const boutonPointageSoir = document.querySelector(".boutonSoir")
if( point2.textContent == "pointSoir" && inter == true){
    boutonPointageSoir.disabled ="true";
    boutonPointageSoir.style.background = " rgb(169, 247, 159)";
    point2.innerHTML ="";
}

