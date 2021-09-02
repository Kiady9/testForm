let para= document.querySelector('p');
para.addEventListener('click', updateName);
function updateName() {
    let name = prompt('Entre un nouveau nom');
    para.textContent = 'Joueur 1:' + name;
}
document.addEventListener("DOMContentLoaded", function() {
    function createParagraph() {
      let para = document.createElement('p');
      para.textContent = 'Vous avez cliqué sur le bouton!';
      document.body.appendChild(para);
    }
  
    const buttons = document.querySelectorAll('button');
  
    for(let i = 0; i < buttons.length ; i++) {
      buttons[i].addEventListener('click', createParagraph);
    }
  });