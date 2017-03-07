import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';

class StickyHeader {
	constructor() {
		this.siteHeader = $(".header");
		this.headerTrigger = $(".large-hero__title");
		this.createHeaderWaypoint();
	}

	createHeaderWaypoint() {
		var that = this; //point to StickyHeader
		new Waypoint({
			element: this.headerTrigger[0], 
			//Waypoints wants JS native element, not jQuery object,
			//access native DOM element in jQuery object, first item
			//in jQuery array-like object is always a point to native DOM element
			handler: function(direction) {
				if(direction == "down") {
					that.siteHeader.addClass("header--darker");
				} else {
					that.siteHeader.removeClass("header--darker");
				}
			}
		});
	}
}

export default StickyHeader;