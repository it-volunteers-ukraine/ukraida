// Total number of currently loaded team members
let loadedTeamMembersCount = 0;
// Indicates whether we are currently loading more team members
// This is to avoid multiple load requests during scrolling
let isLoadingMoreTeamMembers = false;
// Indicates whether we have loaded all available team members
let isLoadedAllTeamMembers = false;

// Loads more team members
function loadMoreOurTeamMembers() {
  // Checking whether we are not loading more team members and
  // whether we have not loaded all available team members
  if (!isLoadingMoreTeamMembers && !isLoadedAllTeamMembers) {
    // Setting flag to indicate that we are loading more team members currently
    isLoadingMoreTeamMembers = true;

    // Determining how many items to load depending on window width
    let count = 6;
    if (window.innerWidth < 768) count = 2;
    else if (window.innerWidth < 1920) count = 4;

    // Query
    jQuery.ajax({
      url: vars.ajaxUrl,
      type: 'GET',
      data: `action=our_team_members_get_items&offset=${loadedTeamMembersCount}&count=${count}`,
      success: function(data) {
        // If we got some members
        if (data) {
          // Adding members
          const itemsElement = document.getElementById('ourTeamMembersItems');
          itemsElement.innerHTML += data;
          // Increasing total count
          // Assuming that we got all requested members
          loadedTeamMembersCount += count;
        } else {
          // We got no members so it means that we have loaded all of them
          isLoadedAllTeamMembers = true;
        }
        // Resetting flag
        isLoadingMoreTeamMembers = false;
      }
    });
  }
}
// Loading initial members
loadMoreOurTeamMembers();

// Handles 'scroll' event in window
function handleWindowScroll() {
  // Element with team members items
  const itemsElement = document.getElementById('ourTeamMembersItems');
  // Calculating current height and maximum possible height before we decide
  // to load more
  const currentHeight = window.innerHeight + window.scrollY;
  const maximumHeight = itemsElement.offsetTop + itemsElement.scrollHeight;

  if (currentHeight >= maximumHeight) {
    loadMoreOurTeamMembers();
  }
}
window.addEventListener('scroll', handleWindowScroll);