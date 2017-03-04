

jQuery(document).ready(function() {
	jQuery(".header__toggle").on("click", function(){
		jQuery(".header__menu ul").toggleClass("open");
		jQuery(".header__toggle").toggleClass("header__toggle--close-x");
	});

	new WOW().init();
});