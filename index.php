<!DOCTYPE html>
<html>
  <head>
    <title>Amy Jo Weddings</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    	<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.js"></script>
      <script>
		$(document).ready(function(){
			var hasSent = false;
		    $("#send").click(function(){
		    	var name = $("#name").val();
		    	var email = $("#email").val();
		    	var subject = $("#subject").val();
		    	var message = $("textarea#message").val();
				if(email.indexOf("@")!=-1 && name.length>0 && message.length>0 && !hasSent) {
			   		$("#send").html("Loading...");
			    	$.ajax({
						type: "POST",
					  	url: "backend.php",
					  	data: {name: name,email: email,subject: subject, message: message},
						success: function(data){
						  	if(data==1) {
								$("#send").html("Sent!");
								hasSent = true;
							} else{
								$("#send").html("ERROR");
								alert("Sorry! There was an error sending your message. Please try again later.");
							}
						}	 
					});
				}
			});
		});
	</script>
    </head>
  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#intro">Home</a>
							</li>
							<li><a href="#about">About</a></li>
							<li><a href="#services">Services</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->
	</div>	

	  <!-- intro area -->	  
	  <div id="intro">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-12">
			
						<div class="brand">
							<h1><a href="index.php">Getting Married?</a></h1>
							<div class="line-spacer"></div>
							<p><span>Discover a unique tailored experience for your wedding.</span></p>
							<p><span><i>Starting at $500</i></span></p>
							<br>
							<a class="page-scroll btn btn-primary" href="#contact">Contact Amy</a>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>
	  

	  
	  
	  <!-- About -->
	  <section id="about" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Reverend Amy Jo</h2>
					 <p>Beginning with the magical essence of love, Amy Jo works to ensure that your wedding day contains unique, memorable experiences tailored to you and your partner.</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                    <img src="img/about/1.jpg" alt="" class="img-responsive" />
                    <h4>Partner Dialogue</h4>
                    <p>To understand what makes your relationship unique</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/2.jpg" alt="" class="img-responsive" />
                    <h4>Vow Creation</h4>
                    <p>A memorable approach to a historical tradition</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/3.jpg" alt="" class="img-responsive" />
                    <h4>Music & Prayer</h4>
                    <p>Spiritual, musical thinking, crafted for your special day</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="box-team wow bounceInDown">
                    <img src="img/about/4.jpg" alt="" class="img-responsive" />
                    <h4>Ceremony Goals</h4>
                    <p>A powerful ceremony to pair with your endless love</p>
					</div>
                </div>
			  </div>			  
		  </div>	  
	  </section>
	  
		<!-- spacer -->	  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Schedule Your Wedding Today!</h2>
						<p class="lead wow bounceInUp" data-wow-delay="1s">And receive Amy Jo's deep understanding of families, both traditional and non-traditional.</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	  
	  
	  <!-- Services -->
	 <section id="services" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Services</h2>
					 <p>After 30 years of experience as a musician, teacher and lay service leader, Amy Jo became accredited to officiate at weddings and other life cycle ceremonies.</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-music fa-4x"></i>
						<h4>Music</h4>
						<p>"Amy Jo is an excellent musician and sings both a cappella and with guitar."</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-heart fa-4x"></i>
						<h4>Memories</h4>
						<p>"Amy created a truly memorable experience for us, with beautiful poetry, psalms, and songs!"</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-quote-left fa-4x"></i>
						<h4>Culture</h4>
						<p>"Her religious and spiritual knowledge is vast, she easily blended all our family traditions."</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<i class="fa fa-calendar fa-4x"></i>
						<h4>Coordination</h4>
						<p>"She is reasonable in price, easy to talk to, and meticulous with everything that concerned us."</p>
					</div>
                </div>
			  </div>	
		</div>
	</section>
	
	
		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light2">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Make your event memorable</h2>
						<p class="lead wow bounceInUp" data-wow-delay="1s">Book your wedding today with Amy Jo!</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	
	  
	 <!-- Contact -->
	  <section id="contact" class="home-section bg-white">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Contact us</h2>
					 <p>Get in touch with Amy Jo via phone, email, or the form below.</p>
					 <p class="fa fa-phone"> (484) 535-3006</p>  
					  <br> <a class="fa fa-envelope-o" href="mailto:amy@amyjoweddings.com"> amy@amyjoweddings.com</a>
					 </p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
	  			<div class="form-horizontal">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<button id="send" class="btn btn-theme btn-lg btn-block">Submit</button>
					</div>
				  </div>
	  			</div>
	
	  			</div>
			
				
	  		</div>
	  	</div>
	  </section>  

	 
	 <!-- js -->
	     <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

  	
</html>