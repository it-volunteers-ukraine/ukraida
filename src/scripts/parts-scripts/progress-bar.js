// document.addEventListener("DOMContentLoaded", function () {
//   const progressElements = document.querySelectorAll(".post-type__progress");

//   progressElements.forEach(function (progressElement) {
//     const collected = parseFloat(
//       progressElement.getAttribute("data-collected")
//     );
//     const target = parseFloat(progressElement.getAttribute("data-target"));

//     let progress = 0;
//     if (target > 0) {
//       progress = (collected / target) * 100;
//     }
//     progress = Math.min(progress, 100);

//     const progressBar = progressElement.querySelector(
//       ".post-type__progress-bar"
//     );
//     progressBar.style.width = progress + "%";
//   });
// });


const animateDelay = 10;
const animateTime = 1000;

const sleep = ms => {
    return new Promise(resolve => setTimeout(resolve, ms));
}
const startAnimate = async (target) => {
  const parentTarget = target.parentNode;
  
  const totalSumRef = parentTarget.querySelector(".total-sum");
  const completeSumRef = parentTarget.querySelector(".colected-sum");
  const percentSumRef = parentTarget.querySelector(".post-type__progress-bar");
  
  const totalSum = totalSumRef.textContent;
  const completeSum = completeSumRef.textContent;
  const completePercent = (completeSum / totalSum) * 100;
  // console.log(totalSum, completeSum,completePercent);

  percentSumRef.style.width = `${completePercent}%`;

  stepAnimate = animateTime / animateDelay;
  let sumAnimate = 0;

  for (
    let index = 0;
    sumAnimate < completeSum || index < stepAnimate;
    index++
  ) {
    sumAnimate = (completeSum / stepAnimate) * index;
    sumAnimate = sumAnimate >= completeSum ? completeSum : sumAnimate;
    completeSumRef.textContent = sumAnimate;
    await sleep(animateDelay);
  }
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      startAnimate(entry.target);
      observer.unobserve(entry.target);
    } 
  });
});

const targetsSum = document.querySelectorAll(".post-type__money");
// const targetsCompleteSum = document.querySelectorAll(".post-type_complete-sum");

targetsSum.forEach((target) => {
  observer.observe(target);
});
