let modalReg = document.querySelector('.modal-reg');
let modalRegButton = document.querySelector('.registr');
let modalRegClose = document.querySelector('.modal-reg__close');
let modalAuth = document.querySelector('.modal-auth');
let modalAuthButton = document.querySelector('.auth');
let modalAuthClose = document.querySelector('.modal-auth__close');
let body = document.querySelector('body');


modalRegButton.addEventListener("click",()=>{
    modalReg.classList.add('modal-reg-on');
    modalAuth.classList.remove('modal-auth-on');
    body.classList.add('overflow');
})
modalRegClose.addEventListener('click',()=>{
    modalReg.classList.remove('modal-reg-on');
    body.classList.remove('overflow');
})
modalAuthButton.addEventListener('click',()=>{
    modalAuth.classList.add('modal-auth-on');
    modalReg.classList.remove('modal-reg-on');
    body.classList.add('overflow');
})
modalAuthClose.addEventListener('click',()=>{
    modalAuth.classList.remove('modal-auth-on');
    body.classList.remove('overflow');
})