
$(function() {
    // - - -
    $('.slide').hover(function() {
        $('.btn-animation').toggleClass('active')
        if ($('.btn-animation').hasClass('active')) {
            $('.btn-animation').html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9v6m-4.5 0V9M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>Animación Pausada')
        } else {
            $('.btn-animation').html('<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" /></svg>Animación Activada')
        }
    })
    // - - -
    $('.btn-contrast').click(function () {
        $('html').toggleClass('contrast')
    })
    // - - -
    $clicks = 0

    $('.btn-text-decrease').click(function () {
        if ($clicks >= -2) {
            changeFontSize(-1);
        }
        $clicks--
    })
    $('.btn-text-increase').click(function () {
        if ($clicks <= 2) {
            changeFontSize(1);
        }
        $clicks++
    })
    // - - -
    $('.goto-top').hide()
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.goto-top').fadeIn()
        } else {
            $('.goto-top').fadeOut()
        }
    })
})
// - - -
var $affectedElements = $("p, h1, h2, h3, h4, h5, h6, li, a")
$affectedElements.each( function(){
    var $this = $(this);
    $this.data("orig-size", $this.css("font-size") );
})
// - - -
function changeFontSize(direction){
    $affectedElements.each( function(){
        var $this = $(this);
        $this.css( "font-size" , parseInt($this.css("font-size"))+direction );
    });
}