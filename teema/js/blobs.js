//Blobs

window.onload = function() {
    try {
    window.setTimeout(verhot, 100); //8 seconds
    } finally {
    }
    }
    
    function verhot() {
    document.getElementsByClassName("blob-one")[0].style.transform =
    "translateX(0) ";
    document.getElementsByClassName("blob-two")[0].style.transform =
    "translateX(0)";
    document.getElementsByClassName("blob-three")[0].style.transform =
    "translateY(0)";
}

    
window.onscroll = function() {

    offsetY()
};



var scrollTop = $(window).scrollTop();
var pixels = 0;
var move = 0;

function offsetY() {
    scrollTop = $(window).scrollTop();

    pixels = (scrollTop);

    $('.blob-one').css({"transform":"translate(" + pixels + "px,0px)"});
    $('.blob-two').css({"transform":"translate(-" + pixels + "px,0px)"});
    $('.blob-three').css({"transform":"translate(0px, -" + pixels + "px)"});

    $('.blob-one').css({"transition": "transform 0.8s ease"});
    $('.blob-two').css({"transition": "transform 0.8s ease"});
    $('.blob-three').css({"transition": "transform 0.8s ease"});

}

var kumpi = true;

$(document).ready(function() {
    $('#filter').click(function(e) {  
        if (kumpi == true) {
            console.log("asdsasd");
            $('.header-logo img').css({
                "filter":  "brightness(0) invert(1)"
            });
            kumpi = false;
        } else {
            console.log(23132)
            $('.header-logo img').css({
                "filter":  "none"
            });
            kumpi = true;
        }
    });
});
  