//Constantes

const menuIcon = document.querySelector('i')
const linksContainer = document.querySelector('#links-container')



//Funciones


function ocultarMenu(){
    menuIcon.addEventListener('click', function(){
        console.log(linksContainer)
        linksContainer.classList.toggle('display')
    })
    

}



//Llamadas a funciones
ocultarMenu()