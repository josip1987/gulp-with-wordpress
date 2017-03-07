import $ from 'jquery';

class MobileMenu {
	constructor() {
		this.menuIcon = $(".header__toggle");
		this.menuOpen = $(".header__menu ul");
		this.events();
	}

	events() {
		this.menuIcon.click(this.toggleTheMenu.bind(this)); //point *this back to MobileMenu
	}

	toggleTheMenu() {
		this.menuOpen.toggleClass("open");
		$(".header__toggle").toggleClass("header__toggle--close-x");
	}
}

export default MobileMenu;