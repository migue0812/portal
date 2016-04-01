$(function () {
  $(".enlace-menu").click(function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    $.ajax({
      url: url,
      type: "GET",
      success: function (data) {
        $("#box-panel").html(data);
      }
    });
  });
});

$(function () {
  $(".menu-eventos").click(function (e) {
    e.preventDefault();
    var url = $(this).attr("href");
    $.ajax({
      url: url,
      type: "GET",
      success: function (data) {
        $("#tablaMenu").html(data);
      }
      
    });
  });
});


