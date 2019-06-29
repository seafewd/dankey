/*jQuery time*/
$(document).ready(function() {
	let firstLevel_li = $('#sideMenu > ul > li');
	let viewportWidth = $(window).width();
	let mobileMenuCollapsed;


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

		//set border color around current list item
		$(this).parent('li').prev('li').toggleClass('menuItem-border-bottom');
		$(this).parents(firstLevel_li).toggleClass('menuItem-border-bottom');


		//slide up 2nd lvl ul
		$("#sideMenu ul ul").slideUp();

		//slide down the link list below the element clicked - only if its closed
		if(!$(this).siblings().is(":visible"))
			$(this).siblings().slideDown();
	});

	//collapse/expand the Products heading
	$('.sMenu-heading-wrap').click(function() {
		/*mobileMenuCollapsed = !mobileMenuCollapsed;
		if (!mobileMenuCollapsed){
			$('#sideMenu > ul').css('display', 'block');
		} else {
			$('#sideMenu  > ul').css('display', 'none');
		}*/

		$(this).siblings('ul:first').slideUp(300);
		if(!$(this).siblings().is(":visible"))
			$(this).siblings().slideDown();
		$(this).children('div').toggleClass('change');
		$(this).toggleClass('sMenu-collapsed');
	});

	//apply drop shadow on hover
	$('.menu-item').hover(function(){
			$(this).toggleClass('dropShadow');
	});



	//show full path in nav
	$('.current_lvl2').parents('ul').css('display', 'block');

	//add current
});