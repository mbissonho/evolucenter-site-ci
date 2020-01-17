// Get the current year for the copyright
$("#year").text(new Date().getFullYear());

// Configure Slide
$(".carousel").carousel({
  interval: 6000,
  pause: "hover"
});

//Our space gallery
$(function () {

  var holder = $("div.holder");
  var currentPage = null;

  //Navigation Active Class
  $(document).ready(function(){
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

  if (holder !== null) {
    if (window.innerWidth <= 767.98) {
      upJPages(1);
    } else {
      upJPages(4);
    }
  }

  window.addEventListener("resize", function () {

    if (window.innerWidth <= 767.98) {
      destroyJPages();
      upJPages(1);
    } else {
      destroyJPages();
      upJPages(4);
    }

  });

  function upJPages(perPageParam) {
    holder.jPages({
      containerID: "itemContainer",
      perPage: perPageParam,
      previous: "Anterior",
      next: "Próxima",
      keyBrowse: true,
      midRange: 3
    });
  }

  function destroyJPages() {
    if(currentPage === "index"){
      holder.jPages("destroy");
    }
  }

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
      opener: function (openerElement) {
        return openerElement.is("img")
          ? openerElement
          : openerElement.find("img");
      }
    }
  });
});
