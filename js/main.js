
$(document).ready(function(){
	var $container = $('#project-container');
	$container.imagesLoaded(function(){
		$container.masonry({
			columnWidth: '.project-item',
			itemSelector: '.project-item',
			transitionDuration: 500
		});
	});
	getProject();


});

function getProject(){


	$.getJSON('projects.json', function(data) {
		console.log(data);
		var source = $('#project-detail').html();
		var template = Handlebars.compile(source);
		$('body').append(template(data));

	});
}