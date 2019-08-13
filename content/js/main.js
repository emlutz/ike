$("#reg_btn").click(function(){
  $(".login").addClass("blind");
  $(".reg_frm").css("display","block");
});

$("#menuToggle").click(function(){
  $("#menu").toggleClass("rise");
  $("#menu").toggleClass("drop");
});

$("#can").click(function(){
  $(".tutorial").addClass("blind");
});

$("#add_m").click(function(){
  $(".upload").toggleClass("blind");
});
$("#shut").click(function(){
  $(".upload").addClass("blind");
});
