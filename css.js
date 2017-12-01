// Navbar trigger
$(function() {
  var burger = $(".nav-burger .icon"),
      sidebar = $(".nav-links");

  burger.on("click", function(e) {
    e.preventDefault();
    burger.toggleClass("change");
    sidebar.toggleClass("shift");
  });
});

// $(function() {
//   var photo = $(".nav-links ul li .nav-links-a"),
//       drop = $("dropdown-content");
//
//   photo.mouseover(function() {
//     $(".dropdown-content").css("display", "block");
//   });
//
//   photo.mouseout(function() {
//     $(".dropdown-content").css("display", "none");
//   });
// });
