const btnDonateRef = document.getElementById('js-btn-donate');
const btnCloseModalRef = document.getElementById('js-btn-close');
const modalContainerRef = document.getElementById('js-modal');
const btnDonateCopyRef = document.getElementById('js-btn-donate-copy');

function openModal() {
    modalContainerRef.classList.add('is-open');
    modalContainerRef.addEventListener('click', closeModal); 
    document.addEventListener('keydown', closeModal);

    btnDonateCopyRef.addEventListener('click', copyIban);
}

function closeModal(evt) {
    if (evt.code === 'Escape' || evt.currentTarget === evt.target || evt.currentTarget.id === 'js-btn-close') {
        modalContainerRef.classList.remove('is-open');
        document.removeEventListener('keydown', closeModal);
        modalContainerRef.removeEventListener('click', closeModal); 

        btnDonateCopyRef.removeEventListener('click', copyIban);
    }
}

function copyIban() {
    const ibanFieldRef = document.getElementById('js-iban');
    console.log(ibanFieldRef.textContent);
}

btnDonateRef.addEventListener('click', openModal);
btnCloseModalRef.addEventListener('click', closeModal);