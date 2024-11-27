// Initialize select
jQuery(document).ready(function() {
  jQuery('#newsSearchNarrowSelect').select2();
});

// Handler when category button is clicked
const onCategoryClick = (index) => {
  // Retrieving category related elements
  const optionElement = document.getElementById(`categoryOption${index}`);
  const buttonElement = document.getElementById(`categoryButton${index}`);
  const removeSvgElement = document.getElementById(`categoryRemoveSvg${index}`);
  // Checking if category is selected
  if (optionElement.selected) {
    buttonElement.classList.remove('active');
    removeSvgElement.classList.remove('active');
    optionElement.selected = false;
  } else {
    buttonElement.classList.add('active');
    removeSvgElement.classList.add('active');
    optionElement.selected = true;
  }
}