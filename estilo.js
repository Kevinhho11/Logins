const signInBtnLink = document.querySelector('.Actualizar-link');
const signUpBtnLink = document.querySelector('.Eliminar-link');
const wrapper = document.querySelector('.uno');
const dos = document.querySelector('.dos');
signUpBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
signInBtnLink.addEventListener('click', () => {
    wrapper.classList.toggle('active');
});
  
  