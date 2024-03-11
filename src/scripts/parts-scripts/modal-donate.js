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
    const ibanFieldRef = document.getElementById('js-iban').innerText;
    const el = document.createElement('textarea');
    el.value = ibanFieldRef;
    el.setAttribute('readonly', '');
    el.style.position = 'absolute';
    el.style.left = '-9999px';
    document.body.appendChild(el);
    el.select();
    document.execCommand('copy');
    document.body.removeChild(el);
}

btnDonateRef.addEventListener('click', openModal);
btnCloseModalRef.addEventListener('click', closeModal);