$(document).ready(function () {
  const baseURL = window.location.origin;

  $("#btn-search").on("click", function (e) {
    e.preventDefault();

    $search = $("#search").val();
    $.ajax({
      type: "POST",
      url: "/submissions",
      data: {
        search: $search,
      },
      success: function (data) {
        alert(data);
      },
      error: function () {
        console.log("error");
      },
    });
  });
});
