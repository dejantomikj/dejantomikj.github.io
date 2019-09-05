<?php
require('constant.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dejan Tomikj">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,GraphicDesigner,WebDesigner,UI,UX">
    <meta name="description" content="UI/UX Designer">
    <title>Dejan Tomikj</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet">
    <script src="component/jquery/jquery-3.2.1.min.js"></script>
	<script>
	$(document).ready(function (e){
		$("#frmContact").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			$('#loader-icon').show();
			$.ajax({
				url: "contact.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"phone":$('input[name="phone"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				$('#loader-icon').hide();
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script>

	<style>
	.label {margin: 2px 0;}
	.field {margin: 0 0 20px 0;}	
		.content {width: 960px;margin: 0 auto;}
		h1, h2 {font-family:"Georgia", Times, serif;font-weight: normal;}
		div#central {margin: 40px 0px 100px 0px;}
		@media all and (min-width: 768px) and (max-width: 979px) {.content {width: 750px;}}
		@media all and (max-width: 767px) {
			body {margin: 0 auto;word-wrap:break-word}
			.content {width:auto;}
			div#central {	margin: 40px 20px 100px 20px;}
		}
		body {font-family: 'Helvetica',Arial,sans-serif;background:#ffffff;margin: 0 auto;-webkit-font-smoothing: antialiased;  font-size: initial;line-height: 1.7em;}	
		input, textarea {width:100%;padding: 15px;font-size:1em;border: 1px solid #A1A1A1;	}
		button {
			padding: 12px 60px;
			background: #5BC6FF;
			border: none;
			color: rgb(40, 40, 40);
			font-size:1em;
			font-family: "Georgia", Times, serif;
			cursor: pointer;	
		}
		#message {  padding: 0px 40px 0px 0px; }
		#mail-status {
			padding: 12px 20px;
			width: 100%;
			display:none; 
			font-size: 1em;
			font-family: "Georgia", Times, serif;
			color: rgb(40, 40, 40);
		}
	  .error{background-color: #F7902D;  margin-bottom: 40px;}
	  .success{background-color: #48e0a4; }
		.g-recaptcha {margin: 0 0 25px 0;}	  
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>	
    
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">skills</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4>Dejan Tomikj</h4>
                    <h1>UI &<br /> UX Designer</h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h4>01</h4>
                <h1 class="size-50">Know <br /> About me</h1>
                <div class="h-50"></div>
                <p>I'm part of the professional graphic designer's world 10 years already.<br> The combination of my practical work and solid educational experience has prepared me for showing an immediate contribution to your needs.</p>
                <p>My goals as a web and graphic designer have always been to create more usable and elegant produts on the web. My experience and knowlege provide me with the capabilyty to handle and deliver tasks in a beautiful yet effecient way.</p>
                <p>I love to create clean, smart and effective objects and have enthusiasm to find the best communication design solutions.</p>
                <div class="h-50"></div> <img src="img/Signature.svg" width="230" alt="" />
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="img/about-img.jpg" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    
     <!-- skills  -->
    <div class="section" id="skills">
        <div class="container">
            <div class="col-md-12">
                <h4>02</h4>
                <h1 class="size-50">My <br /> Competencies</h1>
                <div class="h-50"></div>
            </div>

            <div class="col-md-12">
                <ul>
                    <li data-aos="fade-up">I have natural eye for typography, colour, layout, photography and branding</li>
                    <li data-aos="fade-up">I posses strong work ethic, with the willingness to work as much as necessary to meet deadlines</li>
                    <li data-aos="fade-up">Passion for extraordinary design and commitment to create informative and engaging visual solutions</li>
                    <li data-aos="fade-up">The ability to work well with others and understand the importance of collaboration</li>
                    <li data-aos="fade-up">Highly organized, detail oriented, deadline driven, and have the commitment to quality</li>
                    <li data-aos="fade-up">English fluent, excellent communication skills, both written and verbal</li>
                    <li data-aos="fade-up">Coordination of producers and suppliers in the creative department</li>
                    <li data-aos="fade-up">Easy adaptation on any CMS platform</li>
                    <li data-aos="fade-up">Fast learner, always eager for more knowledge</li>
                    
                    
                </ul><br><br>

                <h4>Skills</h4><br>
                <ul>
                    <li data-aos="fade-up">Knowledge of HTML and CSS</li>
                    <li data-aos="fade-up">Knowledge of responsive web design</li>
                    <li data-aos="fade-up">A good understanding of WordPress front end development</li>
                    <li data-aos="fade-up">Excellent knowledge of xD, InDesign, Photoshop & Illustrator as well as JavaScript(basic)</li>
                    <li data-aos="fade-up">Campaign design: Conception & graphic implementation Print & Digital</li>
                    <li data-aos="fade-up">Corporate Design: Development of logos and key visuals</li>
                    <li data-aos="fade-up">Image editing: retouching, montage, corrections and cropping</li>
                    <li data-aos="fade-up">Photography experience</li>
                    <li data-aos="fade-up">Design of printing materials, multimedia presentations</li>
                    <li data-aos="fade-up">Graphical contact for marketing and customer projects</li>
                    <li data-aos="fade-up">Knowledge of pre-press and offset printing</li>
                </ul>
                <br><br>
                <h4>Tools</h4><br>
                <ul>
                
                <p><strong>Adobe Photoshop | Adobe Illustrator | Adobe InDesign | Adobe xD | Adobe Acrobar <br> Sketch | InVision | Figma | Sketsh Up Pro | Lumion | Keyshot <br> Trello | Basecamp | Slack | Miro | Microsoft Office | Microsoft Windows | Apple macOS <br> WordPress | Magento 2 | Shopify | Versacommerce | WIX | HTML/CSS | JavaScript-basic</strong></p>
            </ul>
            </div>
            
        </div>
    </div>
    <!-- ./skills -->
    
    <br><br><br>
    

    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>03</h4>
                <h1 class="size-50">My <br /> Experience</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">Jan 2016 - Present</p>
                            <h3>EDMV Solutions</h3>
                            <h4>UI/UX Designer</h4>
                            <p><strong>Web & Print design for marketing, special events, and corporate identity, Branding, Project Menagment Corporate & self-initiated management of projects. </strong></p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">Jan 2014 - Jan 2016</p>
                            <h3>Agrotehna</h3>
                            <h4>Graphic Designer</h4>
                            <p><strong>Brand Creation, Redesign, and consulting for local businesses, startups, and corporations. Web & Print design for marketing, special events, and corporate identity.</strong></p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">Apr 2010 - Jan 2014</p>
                            <h3>Planet Interactive</h3>
                            <h4>Graphic Designer</h4>
                            <p><strong>Web & Print design for marketing, special events, and corporate identity. </strong></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>04</h4>
                <h1 class="size-50">My <br /> Projects</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">All</a></li>
                                    <li><a href="" data-filter=".webdesign">Web Deisgn</a></li>
                                    <li><a href="" data-filter=".print">Print</a></li>
                                    <li><a href="" data-filter=".logo">Logo</a></li>
                                    <li><a href="" data-filter=".3d">3D</a></li>
                                    <li><a href="" data-filter=".product">Product packaging</a></li>
                                    <li><a href="" data-filter=".branding">Branding</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  webdesign">
                                <a id="alma-lichtdesign" href="alma-lichtdesign.html" class="portfolio_item"> <img src="img/portfolio/alma-lichtdesign.jpg" alt="alma-lichtdesign-website-design" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>WordPress Web Design</span> <em>alma-lichtdesign</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  webdesign">
                                    <a id="stilraum-objekteinrichtung" href="stilraum-objekteinrichtung.html" class="portfolio_item"> <img src="img/portfolio/stilraum-objekteinrichtung.jpg" alt="stilraum-objekteinrichtung-website-design" class="img-responsive" />
                                        <div class="portfolio_item_hover">
                                            <div class="portfolio-border clearfix">
                                                <div class="item_info"> <span>HTML / CSS Web Design</span> <em>stilraum-objekteinrichtung</em> </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 print">
                                <a id="demo03" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/02.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 print">
                                <a id="demo04" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/04.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Held by hands</span> <em>Fashion / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 logo">
                                <a id="demo05" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/05.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 3d">
                                <a id="demo06" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/010.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Photorealistic smartwatch</span> <em>Photography</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 product">
                                <a id="demo07" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/06.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 logo">
                                <a id="demo08" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/07.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 branding">
                                <a id="demo09" href="#animatedModal" class="portfolio_item"> <img src="img/portfolio/08.jpg" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mobile devices</span> <em>Graphics / Ads</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>05</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3> Mobile Number</h3>
                <p><a href="tel:+38977694466">+389 77 69 44 66</a></p>
                <h3>Email</h3>
                <p><a href="mailto:dejantomikj@gmail.com?Subject=Hello%20Dejan" target="_top">dejantomikj@gmail.com</a></p>

                <h3>Skype</h3>
                <p><a href="skype:dejan.tomik?chat">dejan.tomik</a></p>

                
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
            <div id="central">
	<div class="content">
        
    
		<div id="message">
		<form id="frmContact" action="" method="POST" novalidate="novalidate">
			<div class="label">Name:</div>
			<div class="field">
				<input type="text" id="name" name="name" placeholder="enter your name here" title="Please enter your name" class="required" aria-required="true" required>
			</div>
			<div class="label">Email:</div>
			<div class="field">			
				<input type="text" id="email" name="email" placeholder="enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
			</div>
			
			<div class="label">Comments:</div>
			<div class="field">			
				<textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>			
			</div>
			<div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>			
			<div id="mail-status"></div>			
			<button type="Submit" id="send-message" style="clear:both;">Send Message</button>
		</form>
		<div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
		</div>		
	</div><!-- content -->
</div><!-- central -->
                
                <!-- <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    <input type="email" name="email" class="form-control" placeholder="Your E-mail" />
                   
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form> -->
            </div>
        </div>
    </div>
    <!-- ./contact -->

    
    
    
   
    
    
    
    
   
    
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!--  plugins  -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!--  main script  -->
    <script src="js/custom.js"></script>
</body>

</html>