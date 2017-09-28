$(function () {
    //Cia parasytas kodas veiks tik kai uzkraus visa svetaine
    console.log("Labas - puslapis pilnai uzkrautas");
});
// PlayButton isnyksta paspaudus

//     $(".playBut").click("mouseenter",function(){
//         var animacijosTikslai = {
//             width: "90px",
//             height: "90px"
//         };
//             $(this).toggle(200);
// });
// // END PlayButton
//
//     $(".dekorasCover").on("mouseenter",function(){
//         var animacijosTikslai = {
//             width: "650px",
//             height: "420px"
//         };
//
//             $(this).animate(animacijosTikslai);
//     });
//
//
//
//     $(".dekorasCover").on("mouseleave",function(){
//         var animacijosTikslai2 = {
//             width: "620px",
//             height: "400px"
//         };
//             $(this).animate(animacijosTikslai2);
//     });



    //         $(this).animate(animacijosTikslai2);
    //     });
    // });


//     $("img").on({
//         "mouseenter": function(){
//             $(this).animate(animacijosTikslai);
//         },
//         "mouseleave": function(){
//             $(this).animate(animacijosTikslai2);
//     }
// });
//



// permeta paspaudus ant nuorodos i nurodyta vieta
// $(function() {
//   $('a[href*="#"]:not([href="#"])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         $('html, body').animate({
//           scrollTop: target.offset().top
//         }, 800);
//         return false;
//       }
//     }
//   });
// });




/// Smooth scroll effect

// $(function(){
//
// 	var $window = $(window);		//Window object
//
// 	var scrollTime = .4;			//Scroll time
// 	var scrollDistance = 400;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll
//
// 	$window.on("mousewheel DOMMouseScroll", function(event){
//
// 		event.preventDefault();
//
// 		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
// 		var scrollTop = $window.scrollTop();
// 		var finalScroll = scrollTop - parseInt(delta*scrollDistance);
//
// 		TweenMax.to($window, scrollTime, {
// 			scrollTo : { y: finalScroll, autoKill:true },
// 				ease: Power1.easeOut,	//For more easing functions see https://api.greensock.com/js/com/greensock/easing/package-detail.html
// 				autoKill: true,
// 				overwrite: 5
// 			});
//
// 	});
//
// });

/// Smooth scroll effect end

// show&hidden navbar
// $(function() {
//     $(document).ready(function(){
//         $(window).scroll(function(){
//             if ($(this).scrollTop() > 0) {
//                 $('.navbar').fadeIn(500);
//             } else {
//                 $('.navbar').fadeOut();
//             }
//         });
//     });
// });

// linkinam WOW JS
$(document).ready(function(){

    'use strict';

   new WOW().init();
});
