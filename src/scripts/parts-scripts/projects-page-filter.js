// Filter object
let filterData = {
  isActive: 'all'
}

// Filters projects based on filter object
function filterProjects() {
  //
  jQuery.ajax({
    url: vars.ajaxUrl,
    type: 'GET',
    data: `action=projects_get_items&isActive=${filterData.isActive}`,
    success: function( data ) {
      // Setting items
      jQuery('#projectsItems').empty().append(data);
      // Initializing swipers again
      initSwipers();
    }
  });
}

// Switches active filter button to the button with specified id
function activateFilterButton(buttonId) {
  // Deactivating all filter buttons
  jQuery(".projects-filter-btn").removeClass("active");
  jQuery(".projects-filter-btn").addClass("inactive");
  // Activating specified button
  jQuery(`#${buttonId}`).removeClass("inactive");
  jQuery(`#${buttonId}`).addClass("active");
}

// Attempts to select filter
function selectIsActiveFilter(value, buttonId) {
  if (filterData.isActive !== value) {
    //
    filterData.isActive = value;
    filterProjects();
    //
    activateFilterButton(buttonId);
  } 
}

// Handler for "Active" filter button
function onFilterActiveClick(el) {
  selectIsActiveFilter(el.getAttribute("data-value"), el.id);
}