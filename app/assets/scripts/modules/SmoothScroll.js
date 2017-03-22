import $ from 'jquery';

class SmoothScroll {
	constructor() {
		this.scrollButton = $("#scroll-down");
		this.topValue = $("#scroll").offset().top;
		this.events();
	}

	events() {
		this.scrollButton.click(this.scrollDown.bind(this));
	}

	scrollDown() {
		$("body").animate({
			scrollTop: this.topValue - 75 + 'px'
		}, 700);
	}
}

export default SmoothScroll;


/*
$(document).ready(function() {
	$("#scroll-down").click(function(){
		$val = $("#scroll").offset().top;
		$("body").animate({scrollTop:$val}, 1000);
	});
});
*/