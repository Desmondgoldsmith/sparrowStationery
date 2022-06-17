(function($) {
  'use strict';
  $(function() {
    $('#show').avgrund({
      height: 500,
      holderClass: 'custom',
      showClose: true,
      showCloseText: 'x',
      onBlurContainer: '.container-scroller',
      template: '<p>So implement your design and place content here! If you want to close modal, please hit "Esc", click somewhere on the screen or use special button.</p>' +
        '<div>' +
        '<a href="{{asset('http://twitter.com/voronianski" target="_blank" class="twitter btn btn-twitter btn-block">Twitter</a>' +
        '<a href="{{asset('http://dribbble.com/voronianski" target="_blank" class="dribble btn btn-dribbble btn-block">Dribbble</a>' +
        '</div>' +
        '<div class="text-center mt-4">' +
        '<a href="{{asset('#" target="_blank" class="btn btn-success me-2">Great!</a>' +
        '<a href="{{asset('#" target="_blank" class="btn btn-light">Cancel</a>' +
        '</div>'
    });
  })
})(jQuery);