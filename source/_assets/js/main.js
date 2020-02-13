const anis = $('.ani');
const cssFadeIn = 'fade-in-bottom';

let doAnimation = () => {
  let count = 0;
  let delay = 150;

  $.each(anis, (index, ani) => {
    new Waypoint({
      element: ani,
      handler: function() {
        let element = $(this.element);
        let timing = delay * count;

        setTimeout(function() {
          element.addClass(cssFadeIn);
        }, timing);

        this.destroy();

        count++;
      },
      offset: 'bottom-in-view'
    });
  });
};

$(window).on('load', function() {
  if($('.ani').length) doAnimation();
});