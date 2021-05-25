require('./bootstrap');

if(document.getElementById('alert')){
     var messagealert = document.getElementById('alert');
     messagealert.onclick = function() {
          document.getElementById('alert-message').innerHTML= "";
          document.getElementById('alert-message').className= "";
     };
};
if(document.getElementById('menuprofilbutton')){
     window.addEventListener('DOMContentLoaded', ()=> {
          const menuprofilbutton = document.querySelector('#menuprofilbutton')
          const menuprofil = document.querySelector('#menuprofil')
          
          menuprofilbutton.addEventListener('click', () => {
               menuprofil.classList.toggle('hidden')
          })
      })
}
if(document.getElementById('menuadministrateur-btn')){
     window.addEventListener('DOMContentLoaded', ()=> {
          const menuprofilbutton = document.querySelector('#menuadministrateur-btn')
          const menuprofil = document.querySelector('#dropdownadministrateur')
          
          menuprofilbutton.addEventListener('click', () => {
               menuprofil.classList.toggle('hidden')
          })
      })
}
if(document.getElementById('menuetudiant-btn')){
     window.addEventListener('DOMContentLoaded', ()=> {
          const menuprofilbutton = document.querySelector('#menuetudiant-btn')
          const menuprofil = document.querySelector('#dropdownetudiant')
          
          menuprofilbutton.addEventListener('click', () => {
               menuprofil.classList.toggle('hidden')
          })
      })
}
if(document.getElementById('menuenseignant-btn')){
     window.addEventListener('DOMContentLoaded', ()=> {
          const menuprofilbutton = document.querySelector('#menuenseignant-btn')
          const menuprofil = document.querySelector('#dropdownenseignant')
          
          menuprofilbutton.addEventListener('click', () => {
               menuprofil.classList.toggle('hidden')
          })
      })
}
if(document.getElementById('menurs-btn')){
     window.addEventListener('DOMContentLoaded', ()=> {
          const menuprofilbutton = document.querySelector('#menurs-btn')
          const menuprofil = document.querySelector('#dropdownrs')
          
          menuprofilbutton.addEventListener('click', () => {
               menuprofil.classList.toggle('hidden')
          })
      })
}

