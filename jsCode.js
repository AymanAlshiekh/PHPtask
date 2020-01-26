$(function() {

  $('.lazy').Lazy({

    scrollDirection: 'vertical',
    effect: 'fadeIn',
    visibleOnly: true,
    onError: function() {
        console.log('error loading ');
    }
});
});
