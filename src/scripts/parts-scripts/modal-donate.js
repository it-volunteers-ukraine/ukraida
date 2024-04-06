const btnDonateRef = document.getElementById("js-btn-donate");
const btnCloseModalRef = document.getElementById("js-btn-close");
const modalDonateRef = document.getElementById("donate-modal");
const modalWrapRef = document.getElementById("modal-wrap");
const btnDonateCopyRef = document.getElementById("js-btn-donate-copy");

// console.log("!!!!")
const allDonateBlock = document.querySelectorAll(".donate_block-text");
console.log("all donate block: ", allDonateBlock);

// const donateItemRef = document.querySelector('.donate_item');
const donateItemRef = document.querySelector(".modal-wrap");
console.log(donateItemRef);

console.log("modal script");

const copyText = (e) => {
  console.log(e.target);
  console.log(e.currentTarget);
};

function openModal() {
  bodyScrollTop = window.scrollY || document.documentElement.scrollTop;
  // Запрещаем прокрутку страницы
  document.body.style.overflow = "hidden";
  document.body.style.paddingRight = getScrollbarWidth() + "px";

  modalDonateRef.classList.add("is-open"); //background
  modalWrapRef.classList.add("is-open");
  modalDonateRef.addEventListener("click", closeModal);
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
    document.body.style.overflow = "";
    // Удаляем отступ справа
    document.body.style.paddingRight = "";
    // Возвращаем скролл на прежнюю позицию
    window.scrollTo(0, bodyScrollTop);

    modalWrapRef.classList.remove("is-open");
    modalDonateRef.classList.remove("is-open");
    document.removeEventListener("keydown", closeModal);
    modalDonateRef.removeEventListener("click", closeModal);

    btnDonateCopyRef.removeEventListener("click", copyIban);
    // document.body.classList.remove("modal-open");
  }
}

function getScrollbarWidth() {
  // Создаем элемент-индикатор прокрутки
  var scrollDiv = document.createElement("div");
  scrollDiv.style.cssText =
    "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;";
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

const setNewAttributeSuccess = (event) => {
  // console.log('@@@ start setNewAttributeSuccess')
  for(let i = 0; i < allDonateBlock.length; i++){
    if (allDonateBlock[i].hasAttribute('success')){
      // console.log(`Remove Attributefor_ ${allDonateBlock[i]}`)
      allDonateBlock[i].removeAttribute('success');
    }
  }
  event.currentTarget.setAttribute('success', '');
}


const copyToBuffer = (event) =>{
  // console.dir(e);
  // console.dir(e.currentTarget);
  console.log(`attribute success: ${event.currentTarget.hasAttribute('success')}`);
  // console.dir(e.currentTarget);
  // console.dir(`!!e.target: ${e}`);
  data = event.currentTarget.firstElementChild.innerText
  // console.log(`data: ${data}`)
  try {
    navigator.clipboard.writeText(data);
  } catch (error) {
    if (!window.isSecureContext) {
      console.log("Cant copy non securyti https");
    } else {
      console.log("Error", error);
    }
  }
  // #clear success
  if (!event.currentTarget.hasAttribute('success')){
    setNewAttributeSuccess(event);
  }
}

for (let i = 0; i < allDonateBlock.length; i++){
  console.log("add for: ", allDonateBlock[i])
  allDonateBlock[i].addEventListener("click", (e) => copyToBuffer(e));
}


btnDonateRef.addEventListener("click", openModal);
btnCloseModalRef.addEventListener("click", closeModal);
// donateItemRef.addEventListener("click", copyText);
