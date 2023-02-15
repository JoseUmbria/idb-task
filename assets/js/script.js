$(document).ready(function(){
	$(".menu > li.have-children > a").on("click", function(i){
		  i.preventDefault();
    if( ! $(this).parent().hasClass("active") ){
      $(".menu li ul").slideUp();
      $(this).next().slideToggle();
      $(".menu li").removeClass("active");
      $(this).parent().addClass("active");
   
    }
    else{
      $(this).next().slideToggle();
      $(".menu li").removeClass("active");
        }
    });
});


$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
	  delegate: 'a',
	  type: 'image',
	  tLoading: 'Loading image #%curr%...',
	  mainClass: 'mfp-img-mobile',
	  gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	  },
	  image: {
		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		titleSrc: function(item) {
		  return item.el.attr('title') + '<small></small>';
		}
	  }
	});

});


// ===== Gallery ==== 
$(document).ready(function() {
	$('.popup-gallery').magnificPopup({
	  delegate: 'a',
	  type: 'image',
	  tLoading: 'Loading image #%curr%...',
	  mainClass: 'mfp-img-mobile',
	  gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	  },
	  image: {
		tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
		/*titleSrc: function(item) {
		  return item.el.attr('title') + '<small></small>';
		}*/
	  }
	});
  });
