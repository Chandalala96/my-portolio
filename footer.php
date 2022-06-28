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



→ git init
→ git pull
→ git add
→ git push
→ git status
→ git merge
→ git commit
→ git checkout