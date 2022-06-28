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
                   <li><a href="index">Home</a></li>
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
          <div class='col-sm-6 text-center intro' id="about">
                <h1>About Me</h1>
                 <p data-aos="fade-right" data-aos-delay="100">Get to know me a little bit more...</p>
           </div>
          <div class='col-sm-6'> 
                <img src="images/docs.png" alt="about image" class='img-fluid mx-auto d-block' data-aos="fade-right" data-aos-delay="300">
          </div>
      </div>
   </div>
      <!----First Banner ---X-->
      <main>

      <!----Summary------>
      <section class='container text-center'>
           <article>
             <h2 class="section-titles">Summary</h2>
              <p>Hello my name is Chandalala, welcome to my web portfolio! I am a creative individual from Zambia who is passionate about web design and development,I am well organized and detail oriented. I love learning new techniques related to coding and I love challenging myself to work harder effectively and effeciently, away from the tech world i am interested in music as well as sports such as Football, Boxing and MMA.</p>
              <p>I'll be more than glad to help you build something amazing</p>
           </article>
      </section>
      <!------Summary---x-------->
         <br>
        
        <!----Tech Stack----->
        <section class="container text-center">
          <div class="row">
              <h2 class="section-titles">Technical Skills</h2>
            <div class="col-sm-6 tech-skills">
                    <p data-aos="fade-right" data-aos-delay="100">JavaScript</p>
                    <p data-aos="fade-right" data-aos-delay="200">PHP</p>
                    <p data-aos="fade-right" data-aos-delay="300">SQL</p>
                    <p data-aos="fade-right" data-aos-delay="400">HTML 5</p>
                    <p data-aos="fade-right" data-aos-delay="500">CSS</p>
                    <p data-aos="fade-right" data-aos-delay="600">Bootstrap</p>
                    <p data-aos="fade-right" data-aos-delay="700">React.js</p>
                    <p data-aos="fade-right" data-aos-delay="800">Node.js</p>
                
            </div>
            <div class="col-sm-6 spinner">
         <div class="box">
      <span style="--i:1"> <i class="fab fa-js"></i></span>
      <span style="--i:2">   <i class="fab fa-php"></i></span>
      <span style="--i:3">  <i class="fab fa-html5"></i></span>
      <span style="--i:4">  <i class="fab fa-css3"></i></span>
      <span style="--i:5">  <i class="fab fa-react"></i></span>
      <span style="--i:6">  <i class="fab fa-node-js"></i></span>
      <span style="--i:7">  <i class="fab fa-bootstrap"></i></span>
      <span style="--i:8">  <i class="fab fa-sql"></i></span>
    </div>
            </div>
          </div>
        </section>
        <!----Tech Stack--x--->
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
          <button type="submit" name="contact1" class="project-btn">Submit</button>
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
                    <p><a href="index">Home</a></p>
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

    </script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="js/aos.js"></script>
    
      <!--- initialize AOS ----->
    <script>
         AOS.init();
    </script>
</html>