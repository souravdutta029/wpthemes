//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('.loader-container').fadeOut(); // will first fade out the loading animation
			$('#loader-circle').delay(20).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(20).css({'overflow':'visible'});
		})
	//]]>



//scroll to top botton


$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	
});




// client say
$('.testimo_slide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  dots:true,
  arrows:false,
  autoplaySpeed: 2000,
});

// sidenav for phone
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// Side Menu content
jQuery( '#dl-menu' ).dlmenu({
    animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
}); 



window.onscroll = function() {myFunction()};

var navbar = document.getElementById("header-nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// dropdown js
$('#header-nav .dropdown').hover(function() {
        jQuery(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
    },
    function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
    });
	
	


$(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
	
	