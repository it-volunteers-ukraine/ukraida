const btnDonateRef = document.getElementById("js-btn-donate");
const btnCloseModalRef = document.getElementById("js-btn-close");
const modalContainerRef = document.getElementById("js-modal");
const modalInnerRef = document.getElementById("js-inner__wrap");
const btnDonateCopyRef = document.getElementById("js-btn-donate-copy");

// console.log("modal script");

function openModal() {
  bodyScrollTop = window.scrollY || document.documentElement.scrollTop;
    // Запрещаем прокрутку страницы
  document.body.style.overflow = 'hidden';
  document.body.style.paddingRight = getScrollbarWidth() + 'px';

  modalContainerRef.classList.add("is-open");
  modalInnerRef.classList.add("is-open");
  modalContainerRef.addEventListener("click", closeModal);
  document.addEventListener("keydown", closeModal);
  // document.body.classList.add("modal-open");
  // window.scroll(0, 0);

  btnDonateCopyRef.addEventListener("click", copyIban);
}

function closeModal(evt) {
  if (
    evt.code === "Escape" ||
    evt.currentTarget === evt.target ||
    evt.currentTarget.id === "js-btn-close"
  ) {
    document.body.style.overflow = '';
    // Удаляем отступ справа
    document.body.style.paddingRight = '';
    // Возвращаем скролл на прежнюю позицию
    window.scrollTo(0, bodyScrollTop);

    modalInnerRef.classList.remove("is-open");
    modalContainerRef.classList.remove("is-open");
    document.removeEventListener("keydown", closeModal);
    modalContainerRef.removeEventListener("click", closeModal);

    btnDonateCopyRef.removeEventListener("click", copyIban);
    // document.body.classList.remove("modal-open");
  }
}

function getScrollbarWidth() {
  // Создаем элемент-индикатор прокрутки
  var scrollDiv = document.createElement('div');
  scrollDiv.style.cssText = 'width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;';
  document.body.appendChild(scrollDiv);
  // Вычисляем ширину скроллбара
  var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
  // Удаляем элемент-индикатор прокрутки
  document.body.removeChild(scrollDiv);
  return scrollbarWidth;
}

function copyIban() {
  const ibanValue = document.getElementById("js-iban").innerText;
  try {
    navigator.clipboard.writeText(ibanValue);
  } catch (error) {
    if (!window.isSecureContext) {
      console.log("Cant copy non securyti https");
    } else {
      console.log("Error", error);
    }
  }

  // Notification
  btnDonateCopyRef.style.position = "relative";

  const notify = document.createElement("div");
  // const backgroundImageUrl = "<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icons/success.svg";
  const svgUrl = "url(" + backgroundImageUrl + ")";
  if (btnDonateCopyRef.children.length == 0) {
    notify.style.backgroundImage = svgUrl;
    notify.style.width = "24px";
    notify.style.height = "24px";
    notify.style.borderRadius = "50%";
    notify.style.position = "absolute";
    notify.style.top = "-12px";
    notify.style.right = "-24px";

    btnDonateCopyRef.appendChild(notify);
    setTimeout(() => {
      btnDonateCopyRef.removeChild(notify);
      btnDonateCopyRef.style.position = "static";
    }, 2000);
  }
}

btnDonateRef.addEventListener("click", openModal);
btnCloseModalRef.addEventListener("click", closeModal);
