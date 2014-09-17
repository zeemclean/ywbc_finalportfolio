
$(document).ready(function(){
	var $container = $('#project-container');
	$container.imagesLoaded(function(){
		$container.masonry({
			columnWidth: '.project-item',
			itemSelector: '.project-item',
			transitionDuration: 500
		});
	});
});