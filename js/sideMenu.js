/*jQuery time*/
$(document).ready(function() {

	//click top level elements in sidemenu
	$('.toggler').click(function() {
		if ($(this).siblings().length === 0)
			return;

		//$(this).children('#submenu > ul > li .level2').css('border-bottom', '1px solid #4171aa');
		$(this).siblings('.level2').css('border-bottom', '1px solid #4171aa');
		console.log($(this).siblings('#submenu > ul > li .level2').text());

		//slide up 2nd lvl ul
		sideMenuLvl2.slideUp();

		//slide down the link list below the element clicked - only if its closed
		if(!$(this).siblings().is(":visible")){
			$(this).siblings().slideDown();
		}
	});

	//click the Products heading
	$('.sMenu-heading-wrap').click(function() {
		$(this).siblings('ul:first').slideUp(300);
		if(!$(this).siblings().is(":visible"))
			$(this).siblings().slideDown();
		$(this).toggleClass('sMenu-collapsed');

	});

	$('.menu-item').hover(function(){
			$(this).toggleClass('dropShadow');
	});

	//set bottom border at end of current submenu
	let sideMenuLvl2 = $("#sideMenu ul ul");

	//show full path in nav
	$('.current_lvl2').parents('ul').css('display', 'block');
});



function toggleMenuIcon(x) {
	x.classList.toggle("change");
}