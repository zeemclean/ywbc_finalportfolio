<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Illustration, Design &amp; Web by Zoe McLean | zoe-mclean.com</title>
	<!-- Bootstrap -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<!-- Handlebars JS-->
	<script src="js/handlebars-v1.3.0.js" type="text/javascript"></script>
	<!-- Modernizr Custom JS -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<!-- ImagesLoaded JS -->
	<script type="text/javascript" src="js/imagesLoaded.min.js"></script>
	<!-- Masonry JS -->
	<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
	<!-- Bootstrap JS -->
	 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- Main JS -->
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Google Analytics -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54833422-1', 'auto');
  ga('send', 'pageview');

	</script>
</head>
<body>
<div class="cloud-container hidden-xs">
	<div class="cloud-wrapper">
		<div class="cloud" id="cloud1"></div>
		<div class="cloud" id="cloud2"></div>
		<div class="cloud" id="cloud3"></div>
		<div class="cloud" id="cloud4"></div>
		<div class="cloud" id="fairhill"></div>
		<div class="cloud" id="lowcloud"></div>
		<div class="cloud" id="nearhill"></div>
	</div>
</div>
<header class="clearfix">
	 	<div class="logo col-md-12">
	 		<img src="assets/zmlogo-175.png" alt="" class="logonym">
	 	
	 	<div class="smedia hidden-xs">
	 		<ul>
	 			<li class="smedia-icons"><a class="smedia-link" href='mai&#108;to&#58;z%&#54;Fe&#97;%6B&#37;6D&#37;63&#108;ean%40&#103;mail&#46;com'><img src="assets/mail.png" alt=""></a></li>
	 			<li class="smedia-icons"><a class="smedia-link" href="https://www.behance.net/zoe-mclean"><img src="assets/behance.png" alt=""></a></li>
	 			<li class="smedia-icons"><a class="smedia-link" href="https://www.linkedin.com/pub/zo%C3%AB-mclean/8a/61/530"><img src="assets/linkedin.png" alt=""></a></li>
	 			<li class="smedia-icons"><a class="smedia-link" href="https://twitter.com/ZoeAKMclean"><img src="assets/twitter.png" alt=""></a></li>
	 			<li class="smedia-icons"><a class="smedia-link" href="http://www.pinterest.com/zoeakmclean/"><img src="assets/pinterest.png" alt=""></a></li>
	 		</ul></div>
	 	</div>
</header>
<div id="intro">
	
	
	<div class="container-fluid welcome">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3">
				<div class="row">
					<h1 class="greeting">Hello</h1>
				</div>
				<div class="row">
					<p class="large">I'm Zoë.<br>I'm a designer and artist<br>from Wellington, New Zealand.</p>
				</div>
			</div>
		</div>
		<div class="row pluginnav">
			<nav class="cl-effect-21" id="homenav">
				<a href="#aboutMe">About</a>
				<a href="#work-section">Work</a>
				<a href="#contact-section">Contact</a>
			</nav>
		</div>
		<div class="scroll-icon"><h3 class="scroll">scroll down</h3></div>
	</div>
</div>
<!-- end of fluid container -->

<div class="content">
	<div id="aboutMe">
		<div class="container">
			<div class="row" id="me">
				<div class="col-md-10 col-md-offset-1">
					<div class="row ">
						<div class="pic col-xs-4 col-sm-4 col-md-2 col-md-offset-5">
						<img src="assets/me.png" alt="" class="img-responsive">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-4 col-md-offset-4">
							<h1 class="">About me</h1>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-offset-3 col-md-6">
							<p class="about">The result of an artistic mother, a techie father and a truckload of art supplies,
							 I live for making and telling awesome stories through art, design and the web. 
							<span class="interest">And, good news! I'm available for work! Come say <a href="">"hello".</a></span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		



	<div id="work-section" >
		<div class="container work">
		<!-- Work Modal -->
		<script type="text/x-handlebars-template" id="project-detail">
	{{#each projects}}
	<div class="modal container fade" id="{{id}}" tabindex="-1" role="dialog" aria-labelledby="{{id}}"
		aria-hidden="true">
		<div class="modal-dialog col-md-12">
			<div class="modal-content">
				<div class="modal-header clearfix" style="background: url('{{img1}}')">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-7 col-md-push-5">
							<img class="img-responsive modal-image" src="{{img1}}" alt="">
						</div>
						<div class="col-md-5 col-md-pull-7 description-column">
						<h2>{{title}}<br><small>{{date}}</small></h2>
						<p class="project-description">{{text}}</p>
						<label for="techs">Techonologies Used</label>
						<ul id="techs">
						{{#each techs}}
							<li class="tech">{{tech}}</li>
						{{/each}}
						</ul>
						
						<a href="{{behanceLink}}">See this project on Behance</a>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-12">
							<img class="img-responsive modal-image" src="{{img2}}" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6"><img class="img-responsive modal-image" src="{{img3}}" alt=""></div>
						<div class="col-md-6"><img class="img-responsive modal-image" src="{{img4}}" alt=""></div>
					</div>
					<div class="row">
						<div class="col-md-12"><img class="img-responsive modal-image" src="{{img5}}" alt=""></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default modal-image" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
		{{/each}}
</script>
			<div class="row projects-header">
				<h1 class="greeting">Works</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
				<div  id="project-container">
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="ce1-t">
						<figure class="gi600">
							<img src="assets/600/squid.jpg" class="gallerythumb">
							<div class="figcaption art visible-md visible-lg">
								<h2 class="project-name">A Well Deserved Rest<small>2012</small></h2>
								<p>Digital illustration.</p>
								<a class="project-link" href="#rest">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item2">
						<figure class="gi730">
							<img src="assets/600/ce2.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Environment Sketches <small>Ongoing</small></h2>
								<p>Quick studies and sketchess to capture the essence of a scene.</p>
								<a class="project-link" data-toggle="modal" href="#enviro-sketch">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item3">
						<figure>
							<img src="assets/600/tinder.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">The Tinder-Box <small>2012</small></h2>
								<p>Concept design project.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item4">
						<figure>
							<img src="assets/600/tarot.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">The fool,<br> The magician and the lovers <small>2012</small></h2>
								<p>Digital painting series.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						<figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item9">
						<figure>
							<img src="assets/600/doombird.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Doombird <small>2014</small></h2>
								<p class="">Branding and Application using Twitter API.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item5">
						<figure>
							<img src="assets/600/rx2.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Rx2 <small>2014</small></h2>
								<p>Branding and Web for a sports-wear company.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item6">
						<figure class="gi350">
							<img src="assets/600/thad.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Character Design <small>Ongoing</small></h2>
								<p>Various charcter designs for projects and personal enjoyment.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item7">
						<figure class="gi350">
							<img src="assets/600/rabbit.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Yellow Rabbit <small>2014</small></h2>
								<p>Branding and Web for a restaurant.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item8">
						<figure class="gi730">
							<img src="assets/600/makingfriends.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Making Old Friends <small>2013</small></h2>
								<p>Digital Painting for Chromacon, 2013.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<div class="project-item col-md-4 col-xs-6 effect-lily" id="item11">
						<figure class="gi600">
							<img src="assets/600/db.jpg" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Double Barrel <small>2014</small></h2>
								<p>Website design and build.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div>
					<!-- Spare grid -->
					<!-- div class="project-item col-md-4 col-xs-6 effect-lily" id="item10">
						<figure class="gi350">
							<img src="http://placehold.it/350x730" class="gallerythumb">
							<div class="figcaption visible-md visible-lg">
								<h2 class="project-name">Project Title</h2>
								<p>Project description with wordy word-word words.</p>
								<a class="project-link" href="#">View more...</a>
							</div>
						</figure>
					</div> -->
					<div class="project-item col-md-4 col-xs-6" id="item12"></div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of work-section -->
	<div id="contact-section">
		<div class="container">
			<div class="row contact-header">
				<div class="col-md-12">
					<h1 class="greeting">Contact me<small class="hidden-xs"> I'm available for work!</small></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<p class="large">If you have any questions,<br> or if you just want to say "hi",<br> you can email me at <script>document.write('<'+'a'+' '+'h'+'r'+'e'+'f'+'='+"'"+'m'+'a'+'i'+'l'+'t'+'o'+'&'+'#'+'5'+'8'+';'+'%'+'7'+'A'+'o'+'e'+
'&'+'#'+'9'+'7'+';'+'%'+'6'+'B'+'m'+'c'+'l'+'e'+'%'+'6'+'1'+'n'+'&'+'#'+'3'+'7'+';'+'&'+'#'+'5'+'2'+
';'+'0'+'%'+'6'+'&'+'#'+'5'+'5'+';'+'m'+'a'+'&'+'#'+'1'+'0'+'5'+';'+'&'+'#'+'3'+'7'+';'+'6'+'C'+'&'+
'#'+'4'+'6'+';'+'c'+'&'+'#'+'1'+'1'+'1'+';'+'m'+"'"+'>'+'z'+'o'+'e'+'&'+'#'+'9'+'7'+';'+'k'+'m'+'c'+
'l'+'e'+'a'+'n'+'&'+'#'+'6'+'4'+';'+'g'+'&'+'#'+'1'+'0'+'9'+';'+'a'+'&'+'#'+'1'+'0'+'5'+';'+'&'+'#'+
'1'+'0'+'8'+';'+'&'+'#'+'4'+'6'+';'+'c'+'o'+'&'+'#'+'1'+'0'+'9'+';'+'<'+'/'+'a'+'>');</script><noscript>[Turn on JavaScript to see the email address]</noscript> 
					</p>
				</div>
			</div>
		</div>
	</div>

<!-- Modal -->
	


</div>
</body>
</html>