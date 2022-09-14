// NavTrigger and NavConatainer
const navContainer = document.getElementById('navContainer');
const navOverlay = document.getElementById('navOverlay');
const NavTrigger = document.getElementById('NavTrigger');


function openNavContainer()
{
  navOverlay.style.display = 'block';
  navContainer.style.left = '0px';
}

function closeNavContainer()
{
  navOverlay.style.display = 'none';
  navContainer.style.left = '-100%';
}




const nav = document.getElementById('navBtn');
nav.addEventListener('click', ()=>{
  nav.classList.add('active');
});