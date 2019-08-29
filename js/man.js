jQuery(document).ready(function(){
	"use strict";
	$('#header').carouFredSel({
		responsive:true,
		width:'100%',
		circular:true,
		scroll:{
				items:1,
				duration:500,
				pauseOnHover:true
			},
			auto:true,
			items:{
					visible:{
						min:1,
						max:1
					},
					height:"variable"
				},
				pagination:{
					container:"",
					pageAnchorBuilder:false
				}		



	});
});
$(window).scroll(function(){
var top = $(window).scrollTop();
if(top>=60){
$("header").addClass('secondary');
}
else
if($("header").hasClass('secondary')){
$("header").removeClass('secondary');
}
});const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.menu');
	const navLinks = document.querySelectorAll('.menu li');
	
burger.addEventListener('click', () => {
		//Toggle Nav
		nav.classList.toggle('nav-active');
		//Animate Links
		navLinks.forEach((link, index) => {
			if(link.style.animation){
				link.style.animation = '';
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index /7 + 0.5}s`;
				console.log(index / 7);
		}
		});
		//Burger Animation
		burger.classList.toggle('toggle');
	});

}

navSlide();
	
