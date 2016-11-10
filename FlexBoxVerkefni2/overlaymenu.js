/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.getElementById("menuicon").style.color = "transparent";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("menuicon").style.color = "#3F3F3F";
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

function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["fpass"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}