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
$(window).scroll(function(){
var top = $(window).scrollTop();
if(top>=60){
$("header").addClass('secondary');
}
else
if($("header").hasClass('secondary')){
$("header").removeClass('secondary');
}
});
