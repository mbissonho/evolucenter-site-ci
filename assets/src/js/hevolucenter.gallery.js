var Evolucenter = Evolucenter || {};

Evolucenter.Gallery = (function() {

    function Gallery() {
        this.holder = undefined;
    }

    Gallery.prototype.init = function(configObj) {

        configuration.call(this, configObj);
        start.call(this);

        window.addEventListener("resize", function() {

            if (window.innerWidth <= 767.98) {
                destroyJPages.call(this);
                upJPages.call(this, 1);
            } else {
                destroyJPages.call(this);
                upJPages.call(this, 4);
            }

        });

    }

    function configuration(configObj) {
        this.holder = configObj ? configObj.holder : $("div.holder");
    }

    function start() {
        if (this.holder !== null) {
            if (window.innerWidth <= 767.98) {
                upJPages.call(this, 1);
            } else {
                upJPages.call(this, 4);
            }
        }
    }

    function upJPages(perPageParam) {
        this.holder.jPages({
            containerID: "itemContainer",
            perPage: perPageParam,
            previous: "Anterior",
            next: "Próxima",
            keyBrowse: true,
            midRange: 3
        });
        console.log(this.holder);
        
    }

    function destroyJPages() {
        if (currentPage === "index") {
            this.holder.jPages("destroy");
        }
    }

    return Gallery;

}());

var currentPage = null;

//Our space gallery
$(function() {

    var Gallery = new Evolucenter.Gallery();

    Gallery.init();

    //Navigation Active Class
    $(document).ready(function() {
        var path = window.location.href;
        path = path.split("/");
        currentPage = path[path.length - 1];
        if (currentPage.split(".").length > 1) {
            currentPage = currentPage.split(".")[0];
        } else if (currentPage === "") {
            currentPage = "index";
        }
        $('.navbar-nav li a[data-route="' + currentPage + '"]').parent().addClass('active');
    });

    //Our space gallery popup

    $(".our-space-popup").magnificPopup({
        type: "image",
        removalDelay: 300,
        mainClass: "mfp-fade",
        gallery: {
            enabled: true,
            tPrev: "Anterior", // title for left button
            tNext: "Próxima" // title for right button
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: "ease-in-out",
            opener: function(openerElement) {
                return openerElement.is("img") ?
                    openerElement :
                    openerElement.find("img");
            }
        }
    });
});