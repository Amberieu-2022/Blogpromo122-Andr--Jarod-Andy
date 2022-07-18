
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
