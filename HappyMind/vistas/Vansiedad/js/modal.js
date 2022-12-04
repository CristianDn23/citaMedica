const openModal = document.querySelector('.btn-flotante');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.modal-close');

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modal--show');

});
closeModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal--show');

});





/*const openModal = document.querySelector('.btn-flotante'); /*SIRVE PARA SACAR NOTIFICACIONES
openModal.addEventListener('click', ()=>{
    alert('Auch me pinchaste')
});
*/