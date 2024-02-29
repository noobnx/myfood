function handleMenuOpen() {
   document.querySelector('.menu__nav').classList.add('open');
   setTimeout(() => {
      document.querySelector('#Layer_1').style.display = 'block';
   }, 1000);
}
function handleMenuClose() {
   document.querySelector('.menu__nav').classList.remove('open');
   document.querySelector('#Layer_1').style.display = 'none';
}
