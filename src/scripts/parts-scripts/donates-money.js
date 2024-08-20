const animateDelay = 10;
const animateTime = 1000;

const sleep = ms => {
    return new Promise(resolve => setTimeout(resolve, ms));
}
const startAnimate = async (target) => {
  const parentTarget = target.parentNode;
  const totalSumClass = ".post-type__sum";
  const completeSumClass = ".post-type_complete-sum";
  const percentSumClass = ".post-type_complete";

  
  const totalSumRef = parentTarget.querySelector(totalSumClass);
  const completeSumRef = parentTarget.querySelector(completeSumClass);
  const percentSumRef = parentTarget.querySelector(percentSumClass);
  
//   percentSumRef.parentElement.classList.add('animation');

  const totalSum = totalSumRef.textContent;
  const completeSum = completeSumRef.dataset.sum;
  const completePercent = (completeSum / totalSum) * 100;

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
//   percentSumRef.parentElement.classList.remove('animation');


};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
    //   console.log(`Block ${entry.target.textContent} is visible`);
      startAnimate(entry.target);
      observer.unobserve(entry.target);
    } else {
    //   console.log(`Block ${entry.target.textContent} is not visible`);
    }
  });
});

const targetsSum = document.querySelectorAll(".post-type__sum");
const targetsCompleteSum = document.querySelectorAll(".post-type_complete-sum");
const targetsPercent = document.querySelectorAll(".post-type_complete");

targetsCompleteSum.forEach((targetsSum) => {
  observer.observe(targetsSum);
});
