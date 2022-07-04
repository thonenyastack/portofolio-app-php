<!DOCTYPE html>
<html>
	<head> 
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equip="X-UA-Compatible" content="ie=edge">
		<!--Stylesheet-->
		<link rel="stylesheet" href="Template/CSS/grid.css">
		<link rel="stylesheet" href="Template/CSS/menu.css">
		<link rel="stylesheet" href="Template/CSS/freelancer.css">
		<!--End of Stylesheet -->
		
		<!--Component-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

		<!--Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
		<script src="https://kit.fontawesome.com/ed69c2d42c.js" crossorigin="anonymous"></script>
		<title>YN Portfolio</title>
		
	</head>
	<body>
		<header class="site-header">
			<div class="container">
				<div class="row">
					<div class="col4 logo">
						<h1 class="brand">
							<a href="">YN Freelancer</a>
						</h1>
					</div>
					<div class="col8">
						<div class="menu-toggle">
							<i class="fa fa-minus"></i>
							<i class="fa fa-minus"></i>
							<i class="fa fa-minus"></i>
						</div>
						<nav class="menu" id="primary-menu">
							<ul class="menu-nav">
								<li class="menu-nav-item"><a href="#about">About</a></li>
								<li class="menu-nav-item"><a href="#skills">Skills</a></li>
								<li class="menu-nav-item"><a href="#portfolio">Portfolio</a></li>
								<li class="menu-nav-item"><a href="#clients">Clients</a></li>
								<li class="menu-nav-item"><a href="#contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>				
			</div>
				
		</header>
		<section class="section" id="about">
			<div class="container">
				<div class="row">
					<div class="col5">
						<img class="img-rounded" id="avatar" src="Template/images/smallsized1.jpg" alt="Profile Photo">
					</div>
					<div class="col7">
						<header class="section-header">
							<h1 class="section-title site-title">
								Hey, What's up!
							</h1>
							<p class="lead>">I am Yan Naing, I am running a start-up IT business, mainly focus on transforming SMEs business idea to action, bringing them from offline to online business space. Provide techinical consultation to transform from tranditional marketing to digital marketing world sucessfully. I have five years of total experiences working as System Engineer and Software Engineer at oversea and two years of working in IT management position at MNC, back in Yangon.  </p>
							
							<a href="#contact" class="btn btn-primary">Get Quote</a>
						</header>
						
					</div>
					
				</div>
				
			</div>
		
		</section>

		<section class="section" id="skills">
			<div class="container">
				<div class="row">
					<div class="col12">
						<header class="section-header">
							<h1 class="section-title">My Skills</h1>
							<p class="lead">I have all the "know hows" to get all the job done. I always bear in mind that knowledge on hardskill and 
							softskill are critical for the greater good.
							Guaranted <strong>agile mindset</strong> and <strong>transparent communication</strong> will be embeded into product development through delivery. </p>
						</header>
					</div>
				</div>
				<div class="row features-list">
					<div class="col4 feature-item text-center">
						<i class="fa fa-terminal feature-icon"></i>
						<h3 class="feature-title">Programming Language</h3>
						<p class="feature-description">
						<i class="devicon-html5-plain-wordmark">HTML</i>
						<i class="devicon-css3-plain-wordmark colored">CSS</i>
						<i class="devicon-javascript-plain">Javascript</i>
						<i class="devicon-python-plain">Python</i>
						<i class="devicon-devicon-plain">Dart</i> 
						</p>
					</div>
					<div class="col4 feature-item text-center">
						<i class="fa fa-connectdevelop feature-icon"></i>
						<h3 class="feature-title">Systems</h3>
						<p class="feature-description">
						<i class="devicon-windows8-original">Windows Server</i>
						<i class="devicon-linux-plain colored">Linux Server</i>
						<i class="fa fa-sitemap">Cisco</i>
						<i class="devicon-heroku-plain">Heroku</i>
						<i class="devicon-docker-plain">Docker</i> 
						
						</p>
					</div>
					<div class="col4 feature-item text-center">
						<i class="fa fa-wrench feature-icon"></i>
						<h3 class="feature-title">Framework & Libraries</h3>
						<ul class="feature-description list-inline">
							<li class="list-inline-item "><i class="devicon-javascript-plain"></i><span class="framework-text">Express  </span></li>
							<li class="list-inline-item "><i class="devicon-bootstrap-plain colored"></i><span class="framework-text">Bootstrap  </span> </li>
							<li class="list-inline-item "><i class="devicon-jquery-plain colored"></i><span class="framework-text">JQuery  </span>  </li>
							<li class="list-inline-item "><i class="devicon-php-plain colored"><span class="framework-text">PHP </span></i></li>
							<li class="list-inline-item "><i class="devicon-wordpress-plain"></i><span class="framework-text"> Wordpress </span> </li>
							<li class="list-inline-item "><i class="devicon-python-plain-wordmark"></i><span class="framework-text"> Matplotlib, Pandas , Numpy & Scrapy </span></li>
						</ul>
						</ul>
						</ul>
					</div>
				</div>
	
			</div>
		</section>
		<setion class="section" id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col12">
						<header class="section-header">
							<h2 class="section-title">My Portfolio</h2>
							<p class="lead text-center">The project I have been delivered</p>
						</header>
					</div>
				</div>
					<!---->
					<div class="row no-gutter portfolio">
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#001" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="001">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#002" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="002">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#003" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="003">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutter portfolio">
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#004" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="004">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#005" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="005">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="col4 portfolio-item">
							<a data-fancybox="gallery" data-src="#006" href="">
								<img src="Template/images/portfolio/manu-small.png">
							</a>
							<div style="display:none;" class="portfolio-pop" id="006">
								<div class="row">
									<div class="col8">
										<img src="Template/images/portfolio/manu-big.png">
									</div>
									<div class="col4">
										<h3 class="Project Title">Legend manu</h3>
										<div class="lead project-description">
											<p>This the story about manu fans. :D</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</setion>
		<section class="section" id="contact">
			<div class="container">
				<div class="row">
					<div class="col6">
						<header class="section-header">
							<h1 class="section-title text-left">Hire Me.</h1>
							<p class="lead">Your business is starved to transform and reep benefits from digital tranformation. Co-creation to inovate your product with digital support is on our hand </p>
						</header>
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-map-marker"></i>YN Freelancer </li>
							<li class="list-inline-item"><i class="fa fa-phone"></i>09-7938**** </li>
							<li class="list-inline-item"><i class="fa fa-envelope"></i>as.yannainghtun@gmail.com </li>
						</ul>
					</div>
					<div class="col6">
						<form action="process.php" method="POST" class="dark contact-form">
							<h3 class="form-title">Contact Me</h3>
							<div class="form-field">
								<input class="text" type="text" name="name" placeholder="name" required>
							</div>
							<div class="form-field">
								<input class="text email" type="email" name="email" placeholder="email" required>
							</div>
							<div class="form-field">
								<textarea class="textarea" type="" name="message" placeholder="Tell me about your project" required></textarea>
							</div>
							<div class="form-field" style="display:none;">
								<input type="hidden" name="url" placeholder="URL">
							</div>
							<input class="btn btn-submit" type="submit" value="Get Quote">
							<div id="status-messages"></div>

						</form>
					</div>
				</div>
			</div>
		</section>
		<section>
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col12 text-center">
							Copyright &copy; 2020 YN Freelancer. All rights reserved.
						</div>
					</div>
				</div>
			</footer>
		</section>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		  crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		
		<script src="Template/js/freelancer.js"></script>
		
	</body>
</html>