var baseUrl = document.getElementsByTagName('base')[0].href;
var language = document.getElementsByTagName('html')[0].getAttribute('lang');
var queryString = (function (a) {
    if (a === "") return {};
    var b = {};
    for (var i = 0; i < a.length; ++i) {
        var p = a[i].split('=');
        if (p.length !== 2) continue;
        b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
    }
    return b;
})(window.location.search.substr(1).split('&'));

$(function () {

    $('#myelement').jKit('parallax', {
        'strength': '0.15',
        'axis': 'x'
    });

    $(".refSlider").bxSlider({
        auto: true,
        pager: true,
        controls: false,
        slideWidth: 150,
        minSlides: 1,
        maxSlides: 3,
        slideMargin: 10,
        moveSlides: 1,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>',
    });

    $(".projectSlider").bxSlider({
        pager: false,
        controls: true,
        minSlides: 1,
        moveSlides: 1
    });

    $(".certSlider").bxSlider({
        auto: true,
        pager: true,
        controls: false,
        slideWidth: 150,
        minSlides: 1,
        maxSlides: 3,
        slideMargin: 5,
        moveSlides: 3,
        nextText: '<i class="fa fa-angle-right"></i>',
        prevText: '<i class="fa fa-angle-left"></i>',
    });

    $('[data-toggle="tooltip"]').tooltip()

    $('.img-zoom').hover(function () {
        $(this).addClass('transition1');

    }, function () {
        $(this).removeClass('transition1');
    });

    $('.fancybox').fancybox();
    $(".mask-phone").mask("0(999) 999 99 99", {placeholder: "_"});
    $(".numeric").numeric();

    $(".rooms-group").hover(function () {
        $(this).find(".options").stop().slideDown(500);
    }, function () {
        $(this).find(".options").stop().slideUp(500);
    });


    $('.share-box a').on('click', function () {
        window.open($(this).attr('href'), 'sharewindow', 'width=600,height=400');
        return false;
    });
});


$(document).ready(function(){
    $('.bxsliderBig').bxSlider({
        pagerCustom: '#bx-pager',
        slideMargin : 0
    });


    $('.galeriListe').fancybox({
        padding: 0,
        openEffect : 'elastic',
        openSpeed  : 150,
        closeEffect : 'elastic',
        closeSpeed  : 150,
        closeClick : false
    });

    $('.bxsliderThumb').bxSlider({
        prevSelector: '#bxsliderThumb-next',
        nextSelector: '#bxsliderThumb-prev',
        nextText: '<i class="fa fa-angle-up"></i>',
        prevText: '<i class="fa fa-angle-down"></i>',
        minSlides : 5,
        mode : 'vertical',
        slideMargin : 5,
        pager : false,
        slideMargin : 0
    });

});
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left'></i>",
        "<i class='fa fa-caret-right'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})
var sync1 = $("#product-slide");
var sync2 = $("#product-slide-thumb");

sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: false,
    pagination:false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
});

sync2.owlCarousel({
    items : 8,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,2],
    itemsTablet : [750,2],
    itemsMobile : [479,2],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
        el.find(".owl-item").eq(0).addClass("active");
    }
});

function syncPosition(el){
    var current = this.currentItem;
    $("#product-slide-thumb")
        .find(".owl-item")
        .removeClass("active")
        .eq(current)
        .addClass("active")
    if($("#product-slide-thumb").data("owlCarousel") !== undefined){
        center(current)
    }
}

$("#product-slide-thumb").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
});
function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
        if(num === sync2visible[i]){
            var found = true;
        }
    }

    if(found===false){
        if(num>sync2visible[sync2visible.length-1]){
            sync2.trigger("owl.goTo", num - sync2visible.length+2)
        }else{
            if(num - 1 === -1){
                num = 0;
            }
            sync2.trigger("owl.goTo", num);
        }
    } else if(num === sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
        sync2.trigger("owl.goTo", num-1)
    }

}