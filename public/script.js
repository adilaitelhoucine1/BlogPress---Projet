var toggleOpen = document.getElementById('toggleOpen');
var toggleClose = document.getElementById('toggleClose');
var collapseMenu = document.getElementById('collapseMenu');
 console.log(toggleClose);
 
function handleClick() {
  if (collapseMenu.style.display === 'block') {
    collapseMenu.style.display = 'none';
  } else {
    collapseMenu.style.display = 'block';
  }
}

toggleOpen.addEventListener('click', handleClick);
toggleClose.addEventListener('click', handleClick);

var btn_home_login=document.querySelector("#btn_login_home");
console.log(btn_home_login);

btn_home_login.addEventListener("click",()=>{
  window.location='www.youtube.com'
})