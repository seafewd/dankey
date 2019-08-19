/*jQuery time*/
$(document).ready(function() {

	// create cookie keeping track of whether the mobile menu has previously been toggled
	let menuCollapsed = Cookies.get('mobileMenuCollapsed');
	if (!menuCollapsed)
		menuCollapsed = Cookies.set('mobileMenuCollapsed', 'expanded', { expires: 1});

	let sideMenu_ul = $('#sideMenu > ul');
	if (menuCollapsed === 'expanded') {
		$(sideMenu_ul).css('display', 'block');
	}
	else {
		$('.sMenu-heading-wrap').addClass('sMenu-collapsed');
		$(sideMenu_ul).css('display', 'none');
		Cookies.set('mobileMenuCollapsed', 'collapsed');
	}
	/*********************/

	let firstLevel_li = $('#sideMenu > ul > li');
	let viewportWidth = $(window).width();

	//click top level elements in sidemenu
	$('.toggler').click(function() {

		if ($(this).siblings().length === 0)
			return;

		//set current top level items
		$(this).toggleClass('nav-top-current');

		//remove classes from all items
		$(firstLevel_li).each(function() {
			if ($(this).prev('li').hasClass('menuItem-border-bottom'))
				$(this).prev('li').removeClass('menuItem-border-bottom');
		});

		//set border color around current top list item
		$(this).parent('li').prev('li').toggleClass('menuItem-border-bottom');
		$(this).parents(firstLevel_li).toggleClass('menuItem-border-bottom');

		//slide up 2nd lvl ul
		$("#sideMenu ul ul").slideUp();

		//slide down the link list below the element clicked - only if its closed
		if(!$(this).siblings().is(":visible"))
			$(this).siblings().slideDown();
	});

	//collapse/expand the Products heading & set cookie
	$('.sMenu-heading-wrap').click(function() {
		$(this).siblings('ul:first').slideUp(300);
		if(!$(this).siblings().is(":visible"))
			$(this).siblings().slideDown();
		$(this).children('div').toggleClass('change');
		$(this).toggleClass('sMenu-collapsed');
		//change menu cookie
		if (menuCollapsed === 'expanded')
			menuCollapsed = Cookies.set('mobileMenuCollapsed', 'collapsed', { expires: 1});
		else
			menuCollapsed = Cookies.set('mobileMenuCollapsed', 'expanded', { expires: 1});
	});

	//apply drop shadow on hover
	$('.menu-item').hover(function(){
			$(this).toggleClass('dropShadow');
	});



	//show full path in nav
	$('.current_lvl2').parents('ul').css('display', 'block');

	//add current
});