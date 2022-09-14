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

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_live_6052f758eb6ab7d2f37190a02a2a74838511725b', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
