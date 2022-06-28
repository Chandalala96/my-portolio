<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chandalala Webdev</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
	<!----Bottstrap 5-------->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
     <!----Font awesome icons---->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

	<!---Custom CSS--->
    <link rel="stylesheet" href="css/style.css">

    <!-- -------------Smooth scroll------------- --->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

     <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="css/aos.css">

</head>
<body>
  <header>
    <!-- Navbar -->
    <div class="navy" id="top">
        <div class="holder flexer">
            <h2 class="logo"><a href="index"><b>Chandalala WebDev</b></a></h2>
            <nav>
                <ul>
                   <li><a href="about">About</a></li>
                    <li><a href="projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>  
    </div>

    <!-- Navbar x -->
   </header>
  <?php
     if(isset($_GET["sent"])) {
        echo'<div class="alert alert-success text-center">Your email has been sent</div>';
     }
    ?>
   <!----First Banner ----->
   <div class='container-fluid banner'> 
      <div class='row'> 
          <div class='col-sm-6 text-center intro'>
                <h1 id="demo"></h1>
                 <p data-aos="fade-right" data-aos-delay="3000">Hello my name is Chandalala, welcome to my web portfolio! I am a creative individual from Zambia who is passionate about web design and development....</p>
                 
                <a href="about.php" class="button button-outline" data-aos="fade-right" data-aos-delay="3000">Read More</a>
           </div>
          <div class='col-sm-6'> 
                <img src="images/photo2.jpg" alt="Photo of chandalala" class='img-fluid mx-auto d-block' data-aos="fade-right" data-aos-delay="300">
          </div>
      </div>
   </div>
      <!----First Banner ---X-->
      <main>
      <br>
      <br>
      <!----Packages ---->
      <section class="container text-center packages">
      	    <h2 class="section-titles">Packages</h2>
      	    <p style="font-size: 18px;"><b>Let me help you to bring your online presence to life with a professional and beautiful website, choose a package that meets your needs.</b></p>
      	  <div class="row">
      	  	<div class="col-sm-4" data-aos="fade-right" data-aos-delay="400">
      	  		<div class="card package-card">
			  <div class="card-body">
			  	 <i class="fas fa-briefcase fa-3x"></i>
			    <h4 class="card-title">Starter K800</h4>
			   <ul class="package-list">
                     <li>Ideal for personal websites, portfolios and small businesses.</li>
                    <li>3 Pages.</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K95 after your free hosting expires.</li>
                    <li>1 Email Account(eg - info@name.com).</li>
                    <li>Monthly updates.</li>
                </ul>
			  </div>
              </div>
      	  	 </div>
      	  	<div class="col-sm-4" data-aos="fade-down" data-aos-delay="600">
      	  	<div class="card package-card">
			  <div class="card-body">
			  	  <i class="fas fa-home fa-3x"></i>
			    <h4 class="card-title">Standard K1300</h4>
			   <ul class="package-list">
                     <li>Ideal for growing businesses.</li>
                    <li>5 Pages.</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com or .org).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K120 after your free hosting expires.</li>
                    <li>3 Email Accounts(eg - info@name.com).</li>
                    <li>Weekly updates.</li>
                </ul>
			  </div>
              </div> </div>
      	  	<div class="col-sm-4" data-aos="fade-right" data-aos-delay="800">
      	  	<div class="card package-card">
			  <div class="card-body">
			  	    <i class="fas fa-building fa-3x"></i>
			    <h4 class="card-title">Premium k2200</h4>
			   <ul class="package-list">
                     <li>Ideal for established businesses.</li>
                    <li>Unlimited Number of pages.</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com/ .org/ .net).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K280 after your free hosting expires.</li>
                    <li>6 Email Accounts(eg - info@name.com).</li>
                    <li>Weekly updates.</li>
                     </ul>
			  </div>
              </div> </div>
      	  </div>
      	  <br>
      	    <div class="row">
      	  	<div class="col-sm-4" data-aos="fade-right" data-aos-delay="400">
      	  		<div class="card package-card">
			  <div class="card-body">
			  	  <i class="fas fa-briefcase fa-3x"></i>
                    <i id="plus" class="fas fa-plus fa-3x "></i>
			    <h4 class="card-title">Starter Plus K1200</h4>
			 <ul class="package-list">
                    <li>Ideal for personal websites, portfolios and small businesses.</li>
                    <li>Domain Validation (DV). SSL Security for 1 year.</li>
                    <li>4 Pages</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K95 after your free hosting expires.</li>
                    <li>1 Email Account(eg - info@name.com).</li>
                    <li>Weekly updates.</li>
                     </ul>
			  </div>
              </div>
      	  	 </div>
      	  	<div class="col-sm-4" data-aos="fade-down" data-aos-delay="600">
      	  	<div class="card package-card">
			  <div class="card-body">
			  	  <i class="fas fa-home fa-3x "></i>
                    <i id="plus" class="fas fa-plus fa-3x "></i>
			    <h4 class="card-title">Standard Plus k3250</h4>
			   <ul class="package-list">
                    <li>Ideal for growing businesses that may be businesses accepting sensitive information.</li>
                    <li>Organization Validation (OV). Strong business level SSL for 1 year.</li>
                    <li>5 Pages.</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K120 after your free hosting expires.</li>
                    <li>4 Email Accounts(eg - info@name.com).</li>
                    <li>Weekly updates.</li>
                        </ul>
			  </div>
              </div> </div>
      	  	<div class="col-sm-4" data-aos="fade-right" data-aos-delay="800">
      	  	<div class="card package-card">
			  <div class="card-body">
			  	  <i class="fas fa-building fa-3x"></i>
                    <i id="plus" class="fas fa-plus fa-3x "></i>
			    <h4 class="card-title">Premium Plus k5500</h4>
			<ul class="package-list">
                     <li>Ideal for established businesses looking to provide maximum visitor confidence.</li>
                      <li>Extended Validation (EV). Maximum Protection & Trust SSL.</li>
                    <li>Unlimited Number of pages.</li>
                    <li>Free Domain/Website Name for 1 year(eg - www.name.com).</li>
                    <li>Free Hosting in the first month. Pay a monthly hosting fee of K280 after your free hosting expires.</li>
                    <li>6 Email Accounts(eg - info@name.com).</li>
                    <li>Weekly updates.</li>
                </ul>
			  </div>
              </div> </div>
      	  </div>
      	
      </section>
          <!----Packages --x-->
        <br>
          <!---Second Banner ---->
        <section class="container-fluid banner2">
        	<div class="row">
        		<div class="col-sm-6 text-center second-banner-text">
                    <h4><b>Connect your Business to the world with spectacular website designs.</b></h4>
                <p>All of the packages above come with 24/7 customer support.</p>
                <p>Communicate with your clients in a more professional way using a customized Email account(e.g info@BusinessName.com)</p>
                <p>Choose a Domain/Website name that you desire and i will bring it to life free for 1 year (e.g BusinessName.com /.org /.net).</p>
                <p>All websites are hosted for free in the first month.</p>
        		 </div>
        		<div class="col-sm-6 second-banner-image">
                     <img src="images/cloud.png" alt="img">
        		 </div>
        	</div>
        </section>
          <!---Second Banner --x-->
          
            <br>
            <br>
            <!-----Projects ---------->
            <section class="container text-center">
            	   <h2 class="section-titles">Some of My Projects</h2>
            	<div class="row">
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="200">
            			<div class="card package-card">
						   <img src="images/bg.jpg" alt="Photo of E-learning project">
						  <div class="card-body">
						    <h4 class="card-title">E-learning Web Application</h4>
						    <p class="card-text">This is a web application that enables teachers and students to carry out educational activities online. This web app can be very helpful in situations where learners and teachers cannot meet physically due to pandemics or other reasons. The web app was built using JavaScript, HTML ,CSS and Bootstrap for the front-end as well as PHP and MySQL for the back-end and database.</p>
						    <a href="https://demo.chandalalawebdev.com" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="300">
            	       <div class="card package-card">
						  <img src="images/bg1.jpg" alt="Photo of Restaurant project">
						  <div class="card-body">
						     <h4 class="card-title">Restaurant Website</h4>
						    <p class="card-text">This is a website that can be used by restaurants to advertise and display thier offers and services.This is a front-end project and does not contain any back-end programming. This website was built using JavaScript, HTML and CSS</p>
						    <a href="https://chandalala96.github.io/restaurant_website/" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            	</div>
            	<br>
            	<div class="row">
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="200">
            			<div class="card package-card">
						    <img src="images/bg2.jpg" alt="Photo of Brabershop project">
						  <div class="card-body">
						    <h4 class="card-title">Barber Shop Website</h4>
						    <p class="card-text">This is a website that can be used by barbershops to advertise and display thier offers and services.This is a front-end project and does not contain any back-end programming. This website was built using JavaScript, HTML and CSS</p>
						    <a href="https://chandalala96.github.io/barbershop_website/" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="300">
            	       <div class="card package-card">
						    <img src="images/bg3.jpg" alt="Photo of Music producer project">
						  <div class="card-body">
						     <h4 class="card-title">Music Producer Website</h4>
						    <p class="card-text">This is a website that can be used by musicians to advertise their music.This is a front-end project and does not contain any back-end programming. This website was built using JavaScript, HTML and CSS</p>
						    <a href="https://icetrx.github.io/icetrx.com" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            	</div>
            	<br>
            	<div class="row">
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="200">
            			<div class="card package-card">
						     <img src="images/calc.png" alt="Photo of calculator project">
						  <div class="card-body">
						    <h4 class="card-title">Simple Calculator</h4>
						    <p class="card-text">This is a basic calculator app that can be used to perform simple mathematical functions.This is a front-end project and does not contain any back-end programming. This app was built using JavaScript, HTML and CSS</p>
						    <a href="https://chandalala96.github.io/SimpleCalculator/" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            		<div class="col-sm-6" data-aos="fade-right" data-aos-delay="300">
            	       <div class="card package-card">
						 <img src="images/pac.png" alt="Photo of pacman project">
						  <div class="card-body">
						     <h4 class="card-title">Pac Man Game(for PC)</h4>
						    <p class="card-text">This is a replica of the famous pacman game.This is a front-end project and does not contain any back-end programming. This game was built using JavaScript, HTML and CSS</p>
						    <a href="https://chandalala96.github.io/PacMan/" target="blank" class="project-btn">View Project</a>
						  </div>
						</div>
            		</div>
            	</div>
            </section>
          <!-----Projects -----x----->
             <br>
             <br>
          <!------Contact ---------->
          <section class="container" id="contact">
          	 <h2 class="text-center section-titles">Get in Touch</h2>
          	<div class="row"> 
               <div class="col-sm-6 text-center">
               	 <form action="action_page.php" method="POST">
				  <div class="mb-3 mt-3">
				    <label for="email" class="form-label">Email:</label>
				    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				  <div class="mb-3">
				    <label for="sub" class="form-label">Subject:</label>
				    <input type="text" class="form-control" id="sub" placeholder="Enter subject" name="subject">
				  </div>
				  <label for="msg">Message:</label>
                  <textarea class="form-control" rows="5" id="msg" name="message"></textarea>
                  <br>
				  <button type="submit" name="contact" class="project-btn">Submit</button>
</form>
               </div>
               <div class="col-sm-6">
               	 <img src="images/mail.gif" class="mx-auto d-block img-fluid mail-img">
               </div>
          	</div>
          </section>
          <!------Contact ------x---->
      </main>
          <br>
         
      <!---Footer ---->

          <footer class="container-fluid text-center"> 
           <div class="row">
           	  <div class="col-sm-4 mt-5 text-center">
           	  	<h3>Social Media</h3>
           	  	<a href="https://github.com/Chandalala96" target="blank"><i class="fab fa-github fa-2x"></i></a>
                 <a href="https://www.linkedin.com/in/chandalala-chilatu-966ab4226/"  class="socials" target="blank"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://www.facebook.com/Chandalala-707409499718476"  class="socials" target="blank"><i class="fab fa-facebook fa-2x"></i></a>
                 <a href="https://twitter.com/TrapProgrammer"  class="socials" target="blank"><i class="fab fa-twitter fa-2x"></i></a>
           	  </div>
           	  <div class="col-sm-4 mt-3 text-center">
           	  	
                    <p><a href="#top">Back to top</a></p>
                    <p><a href="about">About</a></p>
                    <p><a href="projects">Projects</a></p>
              
             </div>
           	  <div class="col-sm-4 mt-3 text-center">
           	  	  <h3>Contact</h3>
                <p>Call/Whatsapp: +260760306344</p>
                <p>Email: info@chandalalawebdev.com</p>
                <p>Copyright &copy;2019-<?= date("Y")?> All rights reserved Chandalala</p>
           	  </div>
           </div>
          </footer>
          <!---Footer --x-->


</body>
   <!---smooth scroll ---->
    <script type="text/javascript">
    var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 2000,
    speedAsDuration: true
});

//TypeWriter function
 var i = 0;
var txt = 'Your Next Web Developer'; 
var speed = 100; 

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

window.addEventListener('load', (event) => {
  typeWriter();
});
    </script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="js/aos.js"></script>
    
      <!--- initialize AOS ----->
    <script>
         AOS.init();
    </script>
</html>