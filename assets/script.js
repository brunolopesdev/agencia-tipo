window.addEventListener("scroll", function(){
    let header = document.querySelector("header")
    header.classList.toggle("sticky", window.scrollY > 0)
})


// EFEITO NO LINK
const navLink = document.querySelectorAll(".nav-link")


// EFEITO NO LINK
function linkAction(){
    navLink.forEach(n => n.classList.remove("active"))
    this.classList.add("active")

// REMOVER MENU CELULAR
    const navMenu = document.getElementById("navbarNav")
    navMenu.classList.remove("show")
}

navLink.forEach(n => n.addEventListener("click", linkAction))

// SCROLL REVEAL
const sr = ScrollReveal({
    origin: "top",
    distance: "80px",
    duration: 2000,
    reset: "true"
})




sr.reveal(".inicio-titulo", {})
sr.reveal(".inicio_sub-titulo", {})
sr.reveal(".inicio-img", {delay: 400})


sr.reveal(".sobre_img", {})
sr.reveal(".sobre_titulo", {})
sr.reveal(".sobre_subtitulo", {})
sr.reveal(".sobre_texto", {delay: 400})


sr.reveal(".section-title", {delay:200})
sr.reveal(".clientes_img", {})

sr.reveal(".contato", {})
sr.reveal(".footer", {})

sr.reveal(".scroll", {})

sr.reveal(".cover", {})



const srBottom = ScrollReveal({
    origin: "bottom",
    distance: "80px",
    duration: 2000,
    reset: "true"
})
srBottom.reveal(".rect", {})