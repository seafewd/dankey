/*jQuery time*/
$(document).ready(function() {
	//$("#sideMenu .sideMenu_l1 li").click(function(){
	$("#sideMenu > ul > li > span.text").click(function() {

		//slide up all the link lists
		//$("#sideMenu ul ul").slideUp();
		$("#sideMenu ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).siblings().is(":visible"))
		{
			$(this).siblings().slideDown();
		}
	})
})
