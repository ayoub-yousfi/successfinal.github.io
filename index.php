
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Successway</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" type="image/png" sizes="40x40" href="images/Capture.PNG">
	

    <!-- 
	Workforce CSS Template
	https://templatemo.com/tm-461-workforce
    -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/sponsors.css">
	<link rel="stylesheet" href="css/countstats.css">
	<link rel="stylesheet" href="css/presentation.css">
	<link rel="stylesheet" href="css/chat.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
  
	<div class="preloader" >
		<div id="mdiv">
        	<div class="cdiv">
            	<div class="rot"></div>
            	<h1 class="lh">successway</h1>
        	</div>
    	</div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">successway</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#home" class="smoothScroll">Accueil</a></li>
					<li><a href="#service" class="smoothScroll">Présentation</a></li>
					<li><a href="#about" class="smoothScroll">Formation en cours</a></li>
					<li><a href="#portfolio" class="smoothScroll">Services</a></li>
					<li><a href="#contact" class="smoothScroll">Réferences</a></li>
					<li><a href="#contact" class="smoothScroll">Formations réalisée</a></li>
					<li><a href="choix.php" class="smoothScroll">contact</a></li>
					<li><a href="choix.php" class="smoothScroll">s'identifier</a></li>
					<div>
					<?php
if(isset($_COOKIE['visiteur'])){
	echo 'bienvenu avec session active : '. $_COOKIE['user'];
}
?>
</div>
					
				</ul>
			</div>
		</div>
	</nav>
	<!-- start home -->
	<section id="home">
		<div class="overlay">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<img src="images/slider/1.jpg" alt="Slide 1">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
								<h2>Successway</h2>
								<h3 class="wow bounceIn">est le Partenaire de votre réussite et succès</h3>
								<a href="cathalogue.pdf" class="smoothScroll templatemo-slider-btn btn btn-default">telecharger le cathalogue des formations pour l'année 2021</a>
							</div>
						</div>
					</li>
					<li>
						<img src="images/slider/2.jpg" alt="Slide 2">
						<div class="slider-caption">
							<div class="templatemo_homewrapper">
                            	<h2>Successway</h2>
								<h3 class="wow bounce">un Centre de formation agrée par l'état </h3>
								<a href="cathalogue.pdf" class="smoothScroll templatemo-slider-btn btn btn-default">telecharger le cathalogue des formations pour l'année 2021</a>	
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end home -->
	<div class="section1" id="service">
		<div class="container1">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Présentation</h2>
					<hr class="text-center">
					
				</div>
					<div class="content-section1">
						<div class="title1">
							<h1>About us</h1>
						</div>
						<div class="content1">
							<p>
								Successway est un centre de formation continue agrée par le ministère de la formation professionnelle et de l'emploi, spécialisé dans l’enseignement des langues vivantes et la traduction, sous le numéro 61-311-16, sis au Route de Mahdia Km 2 a coté du lycée Mohamed Ali (Centre), Sfax,  Tunisie.
							</p>
							<div class="button1">
								<a href="Presentation.html">Read More</a>
							</div>
						</div>
						<div class="social1">
							<a href=""><i class="fab fa-facebook-f"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<div class="image-section1">
						<img src="images/logo-removebg-preview.png" alt="">
					</div>
			</div>
					
		</div>
	</div>

	<!--end presentation-->
	 <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Chat with us!
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: crimson;" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
<!--end chat bot-->
	
	<!-- start service -->
	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Formations en cours</h2>
					<hr>
					<h4>we specialize in web and mobile</h4>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-laptop"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Website Re-designed</h3>
							<p>Workforce HTML CSS Template is a mobile friendly site design layout with animated transitions. You can feel free to download and edit this for your sites.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-android"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">New Mobile App</h3>
							<p>Please spread a word to your friends about templatemo site. It would be helpful. Credit goes to <a rel="nofollow noopener" href="https://pixabay.com">Pixabay</a> for images used in this template.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-paper-plane"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Digital Marketing</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="media">
						<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
							<i class="fa fa-html5"></i>
						</div>
						<div class="media-body">
							<h3 class="media-heading">Coding HTML5 &amp; CSS3</h3>
							<p>This is a CSS layout with Bootstrap v3.3.4 kit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end service -->
	<!-- start divider -->
	<div class="divider">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="divider-des">
						<h3 class="text-uppercase">Nos Partenaires stratégiques</h3>
						<p>Rejoignez nous</p>
						<div id="team">
	<div class="col-sm-12"></div>
</div>

<center>
<div class="sponsors">
	<div class="left"><i class="fa fa-angle-left fa-3x" style="color:#333;"></i></div>
	<div class="box">
		<div class="innerbox">
		
		<div class="kisi">
				<img src="images/team-img-1.png" alt="" class="resim" />
		</div>
		
		<div class="kisi">
				<img src="images/team-img-2.png" alt="" class="resim" />
		</div>
			
				<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo3.png" alt="" class="resim" />
		</div>
			
		<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo4.png" alt="" class="resim" />
		</div>
			
		<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo5.png" alt="" class="resim" />
		</div>
			
			<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo6.png" alt="" class="resim" />
		</div>
			
			<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo7.png" alt="" class="resim" />
		</div>
			
			<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo8.png" alt="" class="resim" />
		</div>
			
			<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo9.png" alt="" class="resim" />	
		</div>
			<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo10.png" alt="" class="resim" />
		</div>
			
		<div class="kisi">
				<img src="https://javaday.istanbul/wp-content/uploads/2017/04/logo11.png" alt="" class="resim" />
		</div>
			
		</div>
	</div>
	<div class="right"><i class="fa fa-angle-right fa-3x" style="color:#333;"></i></div>
	<center><div class="bottom">Platinium Sponsor</div></center>
	
</div>
</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- end divider -->
	<!-- start about -->
	<!--<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounceIn">
					<h2>About</h2>
					<hr>
					<h4>some things about our past...</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 wow fadeInLeft templatemo-about-left" data-wow-delay="0.3s">
					<h3 class="about-title">Studio History</h3>
					<p>Phasellus tempus malesuada congue. Sed id est tincidunt, iaculis nulla vel, sodales metus. Morbi interdum accumsan augue, in accumsan neque lacinia sed. Fusce cursus eu ligula ut gravida. Ut tristique hendrerit bibendum. Suspendisse euismod sit amet quam et luctus.</p>
                    <p>Nulla viverra diam sed justo vehicula, non venenatis massa gravida. Nunc efficitur et quam non tempor. Nullam nec nisl eget est ultrices elementum nec vel nisl. Cras vestibulum nisl vel justo tempor, ut lacinia est accumsan.</p>
				</div>
				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
					<span class="text-uppercase">BOOTSTRAP 100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
					</div>
					<span class="text-uppercase">HTML5 &AMP; CSS3 90%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<span class="text-uppercase">Wordpress 65%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-1.png" class="img-responsive" alt="about img">
						<h3>Cindy Davis</h3>
						<h5>Founder &amp; Director</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-2.png" class="img-responsive" alt="about img">
						<h3>Jenny Meno</h3>
						<h5>Creative Manager</h5>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
					<div class="about-wrapper">
						<img src="images/team-img-3.png" class="img-responsive" alt="about img">
						<h3>Catherine Barkley</h3>
						<h5>Co-Founder &amp; Designer</h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	 end about --> 
	<!-- start portfolio -->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Actualité</h2>
					</div>
					<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

						<ul class="filter-wrapper clearfix">
							<li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".graphic">WEB</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".photoshop">MOBILE</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".wallpaper">DATA SCIENCE</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".wallpaper">MANAGEMENT</a></li>
						</ul>

						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">

								<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/html.png" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>	
											</div>											
										</div>
									</div>
								</div>
								<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-3.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-4.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-5.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/portfolio-img-6.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<div class="portfolio-description">
												<a href="#" class="fa fa-search"></a>
												<a href="#" class="fa fa-link"></a>
												<h4>Project title</h4>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonumm.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="button">
          
		  <a href="admin.php">ajouter actualité</a>
        </div>
		</div>
	</section>
	<!-- start count stats -->

<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">

	<div class="container">
		<div class="row">
		<p>notre success</p>
			<div class="col-lg-3 stats">
				<i class="fa fa-code" aria-hidden="true"></i>
				<div class="counting" data-count="900000">0</div>
				<h5>Lines of code</h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-check" aria-hidden="true"></i>
				<div class="counting" data-count="280">0</div>
				<h5>Projects done</h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-user" aria-hidden="true"></i>
				<div class="counting" data-count="75">0</div>
				<h5>Happy clients</h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<div class="counting" data-count="999">0</div>
				<h5>Cups of coffee</h5>
			</div>


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>

<!-- end cont stats -->
	
	<!-- end portfolio -->
	<!-- start contact -->
	<!--<section id="contact" style="background-color: #1A4280">
		<div class="container" >
			<div class="row">
				<div class="col-md-12">
					<div class="wow bounceIn">
						<h2 class="wow bounceIn">Contact</h2>
						<hr>
					</div>
					
-->
<section>
	<div>
	<ul>
	
	</ul>
	
	</div>
	
	</section>
					<div id="bloc1" class="aligncenter">
						<p>
							<img  src="images/Capture.PNG"  class="center" height="150px" width="200px">
						</p>
						<p style="color: white">Le Centre International de Formation Continue CIFOC est
						un organisme privé de formation
						continue agréé par l’état Tunisien sous le N° 09/404/12
						Téléphone: (+216) 70 696 199 – (+216) 28 753 750
						Fax: (+216) 71 690 114
						Adresse: 35 Avenue de l’UMA, résidence Florence 
						Appart. A24 – La Soukra 2036 Ariana</p>
						<iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=34.759958559172006,%2010.77154014025968&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<a href="https://123movies-to.org"></a>
						<br><style>.mapouter{position:right;text-align:right;height:500px;width:600px;}</style>
						<style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
					</div>
						<!--
					<div id="bloc2">
						<p style="color: white;">Nos types des formations</p>
						<p style="color: white;">Achat & Logistique</p>
						<p style="color: white;">Assurance</p>
						<p style="color: white;">Audit</p>
						<p style="color: white;">Comptabilité</p>
						<p style="color: white;">Douane & Commerce extérieur</p>
						<p style="color: white;">Droit Social</p>
						<p style="color: white;">Finance</p>
						<p style="color: white;">Fiscalité approfondie</p>
						<p style="color: white;">Formation sur mesure</p>
						<p style="color: white;">Gestion des Ressources Humaines</p>
						<p style="color: white;">Informatique et bureautique</p>
						<p style="color: white;">Langues</p>
						<p style="color: white;">Management</p>
						<p style="color: white;">Marketing</p>
						<p style="color: white;">Performance Industrielle</p>
						<p style="color: white;">PNL</p>
						<p style="color: white;">Qualité</p>

					</div>
					
					<!--maps-->	
					<!--	-->
					<!-- end maps-->			
					<!--<form action="#" method="post" role="form">
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Name" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="email" placeholder="Email" class="form-control">
						</div>
						<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
							<input type="text" placeholder="Subject" class="form-control">
						</div>
						<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
							<textarea class="form-control" rows="5" placeholder="Message"></textarea>
						</div>
						<div class="col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6 wow fadeIn" data-wow-delay="0.3s">
							<input type="submit" value="Send Message" class="form-control">
						</div>
					</form>-->
				<!--</div>
			</div>
		</div>
	</section>-->
	
	
	<div class="container">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fas fa-map-marker-alt"></i>
        <div class="topic">Address</div>
        <div class="text-one">35 Avenue de l’UMA  </div>
        <div class="text-two">résidence Florence</div>
      </div>
      <div class="phone details">
        <i class="fas fa-phone-alt"></i>
        <div class="topic">Phone</div>
        <div class="text-one">(+216) 70 696 199</div>
        <div class="text-two">(+216) 28 753 750</div>
      </div>
      <div class="email details">
        <div class="topic">Email</div>
        <div class="text-one">email@gmail.com</div>
        <div class="text-two">info.email@gmail.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">laisser un message</div>
      <p>si vous avez un travail ou un besoin relié a notre centre, n'hésitez pas de laisser un message</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" id="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" id="email">
        </div>
        <div class="input-box message-box">
			<input type="text" placeholder="message" id="message">

        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
  </div>
</div>

	<!-- end contact -->
	
	<footer style="src:\xampp\htdocs\success\dreamsnmotion_final_version\template\templatemo_461_workforce\images\slider;">
		<div class="container1">
			<div class="row">
				<div class="col-md-12">
					<ul class="social-icon wow fadeIn" data-wow-delay="0.3s">
						<li><a href="#" class="fa fa-facebook"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
					</ul>
					<p class="wow bounceIn">Copyright &copy; 2021 <span>Successway</span> created by 
                     <a rel="nofollow noopener" href="https://enetcomje.com/"><span>Enet'com junior entreprise</span></a></p>
				</div>
			</div>
		</div>
	</footer>
						
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/responses.js"></script>
	<script src="js/chat.js"></script>

	<script src="js/sponsors.js"></script>
	<script src="js/countstats.js"></script>
	<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
	
</body>
</html>