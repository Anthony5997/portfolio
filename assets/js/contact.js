$(".button").on("click", function (e) {
   e.preventDefault();
   $(this).addClass("active");
 });
 
 $(".modal-wrapper")
   .find("label")
   .on("click", function () {
     $(".button").removeClass("active");
   });
 
 $(".input-text").focus(function () {
   $(this).parents(".input-box").addClass("focus");
 });
 
 $(".input-text").blur(function () {
   if ($(this).val()) {
     $(this).parents(".input-box").addClass("focus");
   } else {
     $(this).parents(".input-box").removeClass("focus");
   }
 });
 