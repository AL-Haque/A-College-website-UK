(function (document, $, requestTimeout) {
    "use strict";

    $(document).foundation();

    var slideshow = $("#slideshow");

    function initSlick(slideshow) {
        if (slideshow.slick) {
            slideshow.slick({
                arrows: true,
                autoplay: true,
                prevArrow: '<button type="button" class="slideshow__nav slideshow__nav-prev slick-prev"></button>',
                nextArrow: '<button type="button" class="slideshow__nav slideshow__nav-next slick-next"></button>',
                lazyLoad: 'progressive',
                fade: true
            });
        }
    }

    initSlick(slideshow);

    /**
     * Smooth scroll any internal links
     */
    function filterPath(string) {
        return string
          .replace(/^\//,'')  
          .replace(/(index|default).[a-zA-Z]{3,4}$/,'')  
          .replace(/\/$/,'');
    }

    function smoothscroll() {
        if ( filterPath(location.pathname) == filterPath(this.pathname) && location.hostname == this.hostname && this.hash.replace(/#/,'') ) {
            var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
            var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
            if ($target) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({scrollTop: targetOffset}, 400);
                return false;
            }
        }
    }

    $(document).delegate('a[data-smoothscroll]', 'click', smoothscroll);
    
}(document, jQuery, requestTimeout));
