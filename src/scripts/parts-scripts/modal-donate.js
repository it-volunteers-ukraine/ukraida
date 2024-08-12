const btnDonateRef = document.getElementById("js-btn-donate");
const btnCloseModalRef = document.getElementById("js-btn-close");
const modalDonateRef = document.getElementById("donate-modal");
const modalWrapRef = document.getElementById("modal-wrap");
const btnDonateCopyRef = document.getElementById("js-btn-donate-copy");

const allDonateBlock = document.querySelectorAll(".donate_block-text");
// console.log("all donate block: ", allDonateBlock);

const donateItemRef = document.querySelector(".modal-wrap");

console.log("modal script");

const setNewAttributeSuccess = (event = null) => {
  for (let i = 0; i < allDonateBlock.length; i++) {
    if (allDonateBlock[i].hasAttribute("success")) {
      allDonateBlock[i].removeAttribute("success");
    }
  }
  if (event) {
    event.currentTarget.setAttribute("success", "");
  }
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
  setNewAttributeSuccess();
  // document.body.classList.add("modal-open");
  // window.scroll(0, 0);

  // btnDonateCopyRef.addEventListener("click", copyIban);
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

    // btnDonateCopyRef.removeEventListener("click", copyIban);
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

const copyToBuffer = (event) => {
  // console.log(`attribute success: ${event.currentTarget.hasAttribute('success')}`);
  data = event.currentTarget.firstElementChild.innerText;
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
  if (!event.currentTarget.hasAttribute("success")) {
    setNewAttributeSuccess(event);
  }
};

for (let i = 0; i < allDonateBlock.length; i++) {
  console.log("add for: ", allDonateBlock[i]);
  allDonateBlock[i].addEventListener("click", (e) => copyToBuffer(e));
}

btnDonateRef.addEventListener("click", openModal);
btnCloseModalRef.addEventListener("click", closeModal);
// donateItemRef.addEventListener("click", copyText);

//button block donates money
const donateButtons = document.querySelectorAll(".js-btn-donate");

donateButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const postTypeElement = this.closest(".post-type");

    if (postTypeElement) {
      const postId = postTypeElement.getAttribute("data-post-id");
      const postTitle =
        postTypeElement.querySelector(".post-type__title").textContent;

      openModal(postTitle);
    }
  });
});
