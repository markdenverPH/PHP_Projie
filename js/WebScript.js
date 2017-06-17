



$(document).ready(function(){
    var x = $(window).height();
    var xNav = $(".cd-primary-nav").height();
    var x1 = $(window).height() - xNav;
    var y = $(window).width();
     $("#DivIntro").css("height", x);
  	$("#googleMap").css("height", x1);
  	$("#RightDiv").css("height", x1);
        
})
