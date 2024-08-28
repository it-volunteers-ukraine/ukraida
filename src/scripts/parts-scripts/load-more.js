document.addEventListener("DOMContentLoaded", function () {
  var ajaxUrl = ajax_load_more_params.ajax_url;
  var page = 2;

  document
    .getElementById("load-more-posts")
    .addEventListener("click", function () {
      var xhr = new XMLHttpRequest();
      xhr.open("POST", ajaxUrl, true);
      xhr.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded; charset=UTF-8"
      );

      xhr.onload = function () {
        if (xhr.status === 200) {
          var response = xhr.responseText.trim();
          // const resParams = response.getElementById("res-params");
          // console.log(resParams);
          if (response !== "") {
            var container = document.getElementById("donate-post-container");
            container.innerHTML += response;
            page++;
          } else {
            document.getElementById("load-more-posts").style.display = "none";
          }
        } else {
          console.error("Error:", xhr.statusText);
        }
      };

      xhr.onerror = function () {
        console.error("Request failed");
      };

      xhr.send("action=load_more_posts&page=" + page);
    });
});
