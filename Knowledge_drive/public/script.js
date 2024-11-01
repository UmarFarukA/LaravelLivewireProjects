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

  $("#submissions").on("click", function () {
    $.ajax({
      type: "GET",
      url: "/submission",
      dataType: "json",
      success: function (data) {
        console.log(data);

        let resultHTML = "";

        data.forEach((submission) => {
          resultHTML += `<td>${submission.name}</td><td>${submission.email}</td><td>${submission.content}</td><td>${submission.created_at}</td>`;
        });

        $("#results").html(resultHTML);
      },
      error: function () {
        console.log("error");
      },
    });
  });
});
