document.addEventListener('DOMContentLoaded', function () {
  const modalForm = document.querySelector('#modal-form');
  const modalDonateRef = document.querySelector('#modal-form-content');
  const modalWrapRef = document.querySelector('#modal-form-wrap');
  const closeButton = document.querySelector('#modal-btn-close');
  let bodyScrollTop = 0;

  if (modalForm) {
    modalForm.addEventListener("click", openModal);

    function openModal(event) {
      event.preventDefault(); // Предотвращаем переход по ссылке
      bodyScrollTop = window.pageYOffset || document.documentElement.scrollTop;
      document.body.style.overflow = "hidden";
      document.body.style.paddingRight = getScrollbarWidth() + "px";

      modalDonateRef.style.display = "flex";
      modalDonateRef.classList.add("is-open");
    }

    closeButton.addEventListener("click", closeModal);

    modalDonateRef.addEventListener("click", function (e) {
      if (e.currentTarget === e.target) {
        closeModal(e);
      }
    });

    modalWrapRef.addEventListener("click", function (e) {
      if (e.currentTarget === e.target) {
        closeModal(e);
      }
    });

    function closeModal(e) {
      document.body.style.overflow = "";
      document.body.style.paddingRight = "";
      window.scrollTo(0, bodyScrollTop);

      modalDonateRef.classList.remove("is-open");
      modalDonateRef.style.display = "none";
    }

    function getScrollbarWidth() {
      const scrollDiv = document.createElement("div");
      scrollDiv.style.visibility = "hidden";
      scrollDiv.style.overflow = "scroll";
      document.body.appendChild(scrollDiv);

      const innerDiv = document.createElement("div");
      scrollDiv.appendChild(innerDiv);

      const scrollbarWidth = scrollDiv.offsetWidth - innerDiv.offsetWidth;

      document.body.removeChild(scrollDiv);

      return scrollbarWidth;
    }
  } else {
    console.log("Error");
  }
});