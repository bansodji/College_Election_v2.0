//Sticky Navbar
$(window).on("scroll", function () {
    if ($(window).scrollTop()) {
        $("nav").addClass("is-sticky");
        $(".nav-link").addClass("f-black");
        $(".navbar-brand").addClass("f-black");
        $(".navbar-brand").removeClass("nav-margin");
        $(".navbar-brand").css({"transition": "300ms"})
        $(".bi-list").addClass("f-black");
    }
    else{
        $("nav").removeClass("is-sticky");
        $(".nav-link").removeClass("f-black");
        $(".navbar-brand").removeClass("f-black");
        $(".navbar-brand").addClass("nav-margin");
        $(".bi-list").removeClass("f-black");
    }
});

//Toggle Navbar
$(document).ready(function(){
    $("#tgl-mnu").hide();

    $(".bi-list").click(function(){
        $("#tgl-mnu").show();
    });

    $(".bi-x-lg").click(function(){
        $("#tgl-mnu").hide();
    });

    $(".nav-link").click(function(){
        $("#tgl-mnu").hide();
    });
});