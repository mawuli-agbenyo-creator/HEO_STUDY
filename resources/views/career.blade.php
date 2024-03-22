<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Path</title>
  <link rel="stylesheet" href="css/career.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,600;1,700&display=swap" rel="stylesheet">
</head>
<!-- partial:index.partial.html -->

    
<body>
  <header>
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <img src="img/HEO TRANS9.png" height="1000px"width= "1050px">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="/">Welcome</a></li>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('career')}}">Career</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('admission')}}">Admission</a></li>
            <li><a href="{{route('std_reg')}}">Register</a></li> 
            <li><button class="login-button" href="{{route('register')}}">Join Us</button></li>
        </ul>
    </nav>
</header>
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Empowering</h2>
            <h1>Welcome<br>to HEO </h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="{{route('admission')}}">Learn More</a></div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Inclusive</h2>
            <h1>diverse  &<br>abilities</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="{{route('admission')}}">Learn More</a></div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Here We Are</h2>
            <h1>Transformative <br>Idea</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="{{route('admission')}}">Learn More</a></div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper">
            <h2>Our Contacts</h2>
            <h1>Get<br>Involved</h1>
            <div class="line"></div>
            <div class="learn-more-button"><a href="{{route('contact')}}">Learn More</a></div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span> Intro</label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span> Work</label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span> About</label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span> Contacts</label>
        </div>
      </nav>
    </div>
  </section>




































<main class="main flow">
  <h1 class="main__heading">SKILL & CAREER PATHS</h1>
  <div class="main__cards cards">
    <div class="cards__inner">
      <div class="cards__card card">
        <h2 class="card__heading">Software Development</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>Software developer</li>
          <li>Web developer</li>
          <li>Mobile app developer</li>
          <li>Software engineer</li>
          <li>DevOps engineer</li>
        </ul>
        <a href="#basic" class="card__cta cta">Get Started</a>
      </div>

      <div class="cards__card card">
        <h2 class="card__heading">Cybersecurity</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>Cybersecurity analyst</li>
          <li>Penetration tester</li>
          <li>Security consultant</li>
          <li>Security architect</li>
          <li>Cybersecurity manager</li>
        </ul>
        <a href="#pro" class="card__cta cta">Upgrade to Pro</a>
      </div>

      <div class="cards__card card">
        <h2 class="card__heading">Data Science and Analytics</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>Data scientist</li>
          <li>Data analyst</li>
          <li>Business intelligence specialist</li>
          <li>Machine learning engineer</li>
          <li>Data mining specialist</li>
        </ul>
        <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
      </div>


      <div class="cards__card card">
        <h2 class="card__heading">Artificial Intelligence (AI)</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>AI engineer</li>
          <li>Machine learning engineer</li>
          <li>NLP engineer</li>
          <li>AI researcher</li>
          <li>AI product manager</li>
        </ul>
        <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
      </div>

      <div class="cards__card card">
        <h2 class="card__heading">Cloud Computing</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>Cloud engineer</li>
          <li>Cloud architect</li>
          <li>NCloud solutions architect</li>
          <li>Cloud DevOps engineer</li>
          <li>Cloud security specialist</li>
        </ul>
        <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
      </div>


      <div class="cards__card card">
        <h2 class="card__heading"> UX/UI Design</h2>
        <p class="card__price">Career paths</p>
        <ul role="list" class="card__bullets flow">
          <li>UX designer</li>
          <li>UI designer</li>
          <li>UX researcher</li>
          <li>Product design manager</li>
          <li>Interaction design</li>
          <li>Design software proficiency (Adobe Photoshop, Illustrator, InDesign, Figma)</li>

        </ul>
        <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
      </div>




    </div>
    
    <div class="overlay cards__inner"></div>
  </div>
</main>



<div class="maping">
  <h1>Software Development</h1>
  <ul class="maps">
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="img/SOFTWARE.D.png"></div>
        <div class="map_content">
          <h2 class="map_title">Full-Stack Web Development</h2>
          <br>
          <h3>Skills</h3>
          <p class="map_text">
            <strong> <h5> Front-end</h5>
            </strong> 
            <br>
             HTML, CSS, JavaScript (including frameworks like React, Vue.js, Angular), UI/UX design principles, accessibility.
             <br>
             <br>
             <strong> <h5> Back-end</h5></strong>
             <br>
           
              Server-side programming languages (e.g., Python, Java, PHP, Ruby), databases (e.g., MySQL, PostgreSQL), APIs, software architecture, security.
            <br>
            <br>
            <strong> <h5>  DevOps </h5></strong>
            <br>
            Basic understanding of deployment, version control, and server management.
            <br>
            <br>
            <strong> <h5>   Problem-solving and communication</h5></strong>
            <br>
             Ability to understand client needs, translate them into technical solutions, and work collaboratively with teams.</p>
             <br>
             <br>
            <h3> Career Paths</h3>
            <br>

        <strong><h6>Full-stack  developer</h6> </strong>
        <br>
         Builds and maintains entire web applications, handling both front-end and back-end development.
        <br>
        <br>
        <strong><h6>  Junior full-stack developer</h6> </strong>
        <br>
         Starts with basic full-stack tasks and gradually develops expertise in specific areas.
         <br>
         <br>
         <strong><h6>   Lead full-stack developer</h4> </strong>
         <br>
          Manages projects, mentors junior developers, and    makes architectural decisions.
          <br>
          <br>
          <button class="btn card_btn"> <a href=" https://developer.mozilla.org/"> Read More</a></button>
        </div>
      </div>
    </li>
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="https://picsum.photos/500/300/?image=5"></div>
        <div class="map_content">
          <h2 class="map_title">Card Grid Layout</h2>
          <p class="map_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="https://picsum.photos/500/300/?image=11"></div>
        <div class="map_content">
          <h2 class="map_title">Card Grid Layout</h2>
          <p class="map_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn map_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="https://picsum.photos/500/300/?image=14"></div>
        <div class="map_content">
          <h2 class="map_title">Card Grid Layout</h2>
          <p class="map_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn map_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="https://picsum.photos/500/300/?image=17"></div>
        <div class="map_content">
          <h2 class="map_title">Card Grid Layout</h2>
          <p class="map_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Read More</button>
        </div>
      </div>
    </li>
    <li class="maps_item">
      <div class="map">
        <div class="map_image"><img src="https://picsum.photos/500/300/?image=2"></div>
        <div class="map_content">
          <h2 class="map_title">Card Grid Layout</h2>
          <p class="map_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn map_btn">Read More</button>
        </div>
      </div>
    </li>
  </ul>
</div>

<h3 class="made_by">Made with ♡</h3>





<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://use.fontawesome.com/8ae46bccf5.js'></script><script  src="js/career.js"></script>

</body>
</html>
