//slow ride, take it easy
$(function () {

    $('.slow-ride').on('click', function (e) {
        $('html,body').stop().animate({scrollTop: $('#news').offset().top}, 1000);
        e.preventDefault();
    });

});

$(function(){
    $('.moscow').hover(function(){
        $('.moscow-photo').fadeIn(500)
    },function(){
        $('.moscow-photo').fadeOut(500)
    })
});

$(function(){
    $('.khimki').hover(function(){
        $('.khimki-photo').fadeIn(500)
    },function(){
        $('.khimki-photo').fadeOut(500)
    })
});

$(function(){
    $('.korolev').hover(function(){
        $('.korolev-photo').fadeIn(500)
    },function(){
        $('.korolev-photo').fadeOut(500)
    })
});

$('.multipleslides').each(function(){
    // scope everything for each slideshow
    var $this = this;
    $('> :gt(0)', $this).hide();
    setInterval(function(){
        $('> :first-child',$this).fadeOut()
            .next().fadeIn().end()
            .appendTo($this);
    }, 3000);
})