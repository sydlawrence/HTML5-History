$(document).ready(function() {

	// add listener onto navbar
	$('nav a').click(function() {	
	
		// store the reused object for speed
		var $t = $(this);
		
		// load the content in
		load_content($t.attr('title'),$t.attr('href'));
		
		// stop the default click event
		return false;
	});
	
	
});

function load_content(title,url,skipHistory) {
	
	// do the AJAX call
	$.get(url,function (data) {
	
		// add google analytics page view
		if (pageTracker)
			pageTracker._trackPageview(url);
	
		// update the window title
		document.title = title;
		
		// generate stateObj, this is used on the pop event
		var stateObj = {
			title: title,
			url: url
		};
		
		// check to see if added to history or skipped
		if (!skipHistory) {
		
			// check if can handle pushState
			if (typeof window.history.pushState == 'function') {
			
				// push on to history
				window.history.pushState(stateObj,title,url);
			
			}
	
		}
		
		// populate the content section
		$('#content').html(data);
		
	});
}

// add opstate listener
window.onpopstate = function(event) {
	
	// if is one of ours
	if (event.state) {
				
		// load the content
		load_content(event.state.title, window.location.pathname, true);
	}
}