export default{
	scrollTop: document.body.scrollTop,
	windowHeight: window.innerHeight,
	bodyHeight: document.body.scrollHeight - this.windowHeight,
	

	scrollMore(){
		var scrollPercentage = (this.scrollTop / this.bodyHeight),
		if(this.scrollPercentage > 0.8) {
		return 1
		}
	}

}


// var scrollTop = $(document).scrollTop();
// var windowHeight = $(window).height();
// var bodyHeight = $(document).height() - windowHeight;
// var scrollPercentage = (scrollTop / bodyHeight);

// // if the scroll is more than 90% from the top, load more content.

// if(scrollPercentage > 0.8) {
// 	// this.fetchIndexData()
// }
