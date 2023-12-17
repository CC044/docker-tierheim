'use strict';

const tiersteckSubBtn = document.getElementById('tiersteckSubBtn');
tiersteckSubBtn.addEventListener('mousedown', toggleSubmenu);
const submenu = document.getElementById('submenu');
let newSubmenuState = false;

// Submenu nach Klick persistent anzeigen
async function toggleSubmenu() {
  event.stopPropagation();
  const oldSubmenuState = submenu.getAttribute('aria-expanded');
  const label = document.getElementById('labelSub');
  try {
    console.log('submenu toggled')
    if (oldSubmenuState === null) {
        throw new Error('Attribut aria-expanded fehlt.');
        return;
    }

    if (oldSubmenuState === 'true') {
      newSubmenuState = false;
    } else {
      newSubmenuState = true;
    }
    submenu.setAttribute('aria-expanded', newSubmenuState);
    submenu.classList.toggle('openSubmenu');
    /* Arrow Up then Down*/
    label.textContent = newSubmenuState ? '⮝' : '⮟';
  } catch (error) {
    console.error(error.message);
  }
}

// Aktive Seite soll in der Navbar farblich hervorgehoben werden
async function navBackground(){
  let locationPath = window.location.pathname;
  let pathname = locationPath.split('/');
  let pageName = pathname[pathname.length-1];

  let topMenu = document.getElementsByClassName('topmenu')[0];

  for(let child of topMenu.children){
    if(child.getAttribute('id') === pageName){
      // Fuege class "currentSite" zum Element hinzu
      child.classList.toggle('currentSite');
    }
  }
}

navBackground();
/* navigation.js eof */
