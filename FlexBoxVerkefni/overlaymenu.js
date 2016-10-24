/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

function scrollBanner() {
  $(document).scroll(function(){
  	var scrollPos = $(this).scrollTop();
  	$('#banner-text').css({
  	  'top' : (scrollPos/0)+'px',
  	  'opacity' : 1-(scrollPos/510)
  	});
  	$('#banner').css({
  	  'background-position' : 'center ' + (-scrollPos/2)+'px'
  	});
  });    
}
scrollBanner();