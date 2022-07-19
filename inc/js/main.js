// array.from() permet de crée un tableau des element recueprer
const forhover = Array.from(document.getElementsByClassName('forhover'))
const all = forhover.length

forhover.forEach(element => {
    //donc en appellant forhover ici on appelle tout le tableau
    element.addEventListener('mouseenter', () => {
        //ici element est l'équivalent du element[i] d'un For, en gros il cible celui qui sra clique/hover
        forhover.forEach(element => {
            element.classList.remove('test')
        })
        element.classList.add('test')
    })

    element.addEventListener('mouseleave', () => {
        forhover.forEach(element => {
            element.classList.add('test')
        });
    })
})

const categorie = document.getElementById('categorie')
const btnCategory = document.getElementById('btnCategory')

btnCategory.addEventListener('mouseenter', function(){
    categorie.classList.add('block')
})
categorie.addEventListener('mouseleave', function(){
    categorie.classList.remove('block')
})


let next = document.getElementById('nextbtn');
let prev = document.getElementById('prevbtn');
prev.addEventListener('click', function() {
    plusSlides(-1)
})
next.addEventListener('click', function() {
    plusSlides(1)
})

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}
  
  // Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
  console.log(plusSlides(-1))