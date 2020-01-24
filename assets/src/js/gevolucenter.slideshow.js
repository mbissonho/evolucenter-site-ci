var Evolucenter = Evolucenter || {};

Evolucenter.SlideShow = (function() {

    function SlideShow() {
        this.element = undefined;
    }

    SlideShow.prototype.init = function(configObj) {
        configuration.call(this, configObj);
        start.call(this);
    }

    function configuration(configObj) {
        this.element = configObj ? configObj.element : $(".carousel");
    }

    function start() {
        this.element.carousel({
            interval: 6000,
            pause: "hover"
        });
    }

    return SlideShow;

}());

$(function() {
    var SlideShow = new Evolucenter.SlideShow();
    SlideShow.init({
        element: $(".carousel")
    });
});