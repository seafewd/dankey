/*jQuery time*/
$(document).ready(function() {

	//hide sidemenu if on mobile
	let viewportWidth = $(window).width();
	if (viewportWidth <= 650) {
		$('#sideMenu .sMenu-heading-wrap').toggleClass('sMenu-collapsed');
		//$('.sMenu-heading-wrap').siblings('.level1').css('display', 'none');
	}



	//click top level elements in sidemenu
	$('.toggler').click(function() {
		if ($(this).siblings().length === 0)
			return;

		//set border color on current ul
		/*
		$(this).parents('ul').each(function() {
			$(this).toggleClass('menuItem-border-bottom');
		});
		*/

		$(this).parent().prev('li').toggleClass('menuItem-border-bottom');
		//$(this).siblings('.level2:last').toggleClass('menuItem-border-bottom');
		$(this).parents('#sideMenu > ul > li').toggleClass('menuItem-border-bottom');
		//alert($(this).siblings('.level2 > ul').css('background', 'red'));

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
		$(this).children('div').toggleClass('change');
	});

	$('.menu-item').hover(function(){
			$(this).toggleClass('dropShadow');
	});

	//set bottom border at end of current submenu
	let sideMenuLvl2 = $("#sideMenu ul ul");

	//show full path in nav
	$('.current_lvl2').parents('ul').css('display', 'block');
});