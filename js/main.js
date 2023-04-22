const hamburgerBtn = document.querySelector(".nav-toggler");

const navigation = document.querySelector("nav");

hamburgerBtn.addEventListener("click", toggleNav)

function toggleNav() {
    hamburgerBtn.classList.toggle("active");
    navigation.classList.toggle("active");
}

let textes = new Typed("#texte", {
    strings : ["Web", "Web mobile", "JavaScript", "PHP", "MySQL"],
    loop : true,
    typeSpeed : 100,
    backSpeed : 50,
    backDelay : 1000,
})