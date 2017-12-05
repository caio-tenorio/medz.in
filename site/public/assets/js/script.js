$(document).ready(function(){
    
    $('#viability .container').slick({
        slidesToShow: 2
  });
    
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();
    
    var target = this.hash;
    var $target = $(target);
    
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 75
		}, 900, 'swing');
	});
});

var modal = document.getElementById('modal');

var purchase = document.getElementsByClassName('purchase');
purchase = [].slice.call(purchase);

var close = document.getElementById('close');

purchase.forEach(function(el) {
    el.addEventListener('click', function() {
        modal.classList.toggle('show');
    })
})

close.addEventListener('click', function() {
    modal.classList.toggle('show');
})