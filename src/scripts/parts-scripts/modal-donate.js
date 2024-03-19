const btnDonateRef = document.getElementById('js-btn-donate');
const btnCloseModalRef = document.getElementById('js-btn-close');
const modalContainerRef = document.getElementById('js-modal');
const btnDonateCopyRef = document.getElementById('js-btn-donate-copy');

function openModal() {
    modalContainerRef.classList.add('is-open');
    modalContainerRef.addEventListener('click', closeModal); 
    document.addEventListener('keydown', closeModal);
    document.body.classList.add('modal-open');
    window.scroll(0, 0);
    
    btnDonateCopyRef.addEventListener('click', copyIban);
}

function closeModal(evt) {
    if (evt.code === 'Escape' || evt.currentTarget === evt.target || evt.currentTarget.id === 'js-btn-close') {
        modalContainerRef.classList.remove('is-open');
        document.removeEventListener('keydown', closeModal);
        modalContainerRef.removeEventListener('click', closeModal); 

        btnDonateCopyRef.removeEventListener('click', copyIban);
        document.body.classList.remove('modal-open');
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

    // Notification
    btnDonateCopyRef.style.position = 'relative';

    const notify = document.createElement('div');
    notify.style.backgroundImage = 'url(wp-content/themes/ukraida/src/images/icons/success.svg)';
    notify.style.width = '24px';
    notify.style.height = '24px';
    notify.style.borderRadius = '50%';
    notify.style.position = 'absolute';
    notify.style.top = '-50%';
    notify.style.right = '-15%';

    btnDonateCopyRef.appendChild(notify);
    
    setTimeout(() => {
        btnDonateCopyRef.removeChild(notify);
        btnDonateCopyRef.style.position = 'static';
     }, 2000);
}

btnDonateRef.addEventListener('click', openModal);
btnCloseModalRef.addEventListener('click', closeModal);