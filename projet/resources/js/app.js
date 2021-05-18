require('./bootstrap');

if(document.getElementById('alert')){
     var messagealert = document.getElementById('alert');
     messagealert.onclick = function() {
          document.getElementById('alert-message').innerHTML= "";
          document.getElementById('alert-message').className= "";
     };
};
if(document.getElementById('menuprofilbutton')){
     var menuprofil = document.getElementById('menuprofilbutton');
     menuprofil.onclick = function() {
          let className = document.getElementById('menuprofil').className;
          document.getElementById('menuprofil').className = className === "hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" ? "origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" : "hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none";
     };
}

