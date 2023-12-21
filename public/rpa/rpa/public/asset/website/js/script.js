console.log(Cookies.get());

if (getCookie('b-sidebar') == 1) {
    $("#b-sidebar,#main").addClass("deactive");
} else {
    $("#b-sidebar,#main").addClass("active");

}


if ($(window).width() < 720 && getCookie('b-sidebar') == 1) {
    $("#b-sidebar,#main").addClass("deactive");
}


$(".app-loader").fadeOut("slow");

$(".b-sidebar-trigger").click(function () {

    if (getCookie('b-sidebar') == 1) {
        $("#b-sidebar,#main").toggleClass("deactive");
        $("#b-sidebar,#main").toggleClass("active");
        setCookie('b-sidebar', 0, 1);
    } else {
        $("#b-sidebar,#main").toggleClass("deactive");
        $("#b-sidebar,#main").toggleClass("active");
        setCookie('b-sidebar', 1, 1);
    }

});


//reset cookie rpacart
if (getCookie('rpacart') === undefined || getCookie('rpacart')==null) {
    setCookie('rpacart', {incart: []}, 1);
}












function setCookie(cname, cvalue, exdays) {
    var TheCookie = Cookies.set(cname, cvalue, {expires: exdays});
    // console.log(TheCookie);
}


function getJSONCookie(cname) {
    return Cookies.getJSON(cname);
}

function getCookie(cname) {
    return Cookies.get(cname);
}

function loader(condition) {
    if (condition === true) {
        $(".app-loader").show();
    } else {
        $(".app-loader").hide();
    }
}

