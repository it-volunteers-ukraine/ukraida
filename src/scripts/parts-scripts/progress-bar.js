document.addEventListener("DOMContentLoaded", function () {
  const progressElements = document.querySelectorAll(".post-type__progress");

  progressElements.forEach(function (progressElement) {
    const collected = parseFloat(
      progressElement.getAttribute("data-collected")
    );
    const target = parseFloat(progressElement.getAttribute("data-target"));

    let progress = 0;
    if (target > 0) {
      progress = (collected / target) * 100;
    }
    progress = Math.min(progress, 100);

    const progressBar = progressElement.querySelector(
      ".post-type__progress-bar"
    );
    progressBar.style.width = progress + "%";
  });
});
