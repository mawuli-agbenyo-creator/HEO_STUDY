<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HEO Administration</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css'><link rel="stylesheet" href="{{asset('css/admission.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com" >

    <link rel="preconnect"href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,600;1,700&display=swap" rel="stylesheet">
 
 <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     
   

</head>
<header>
    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <img src="{{asset('img/HEO TRANS9.png')}}" height="1000px"width= "1050px">
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
            <li><a href="{{route('admission')}}">Admission</a></li>
            <li><a href="{{route('std_reg')}}">Register</a></li> 
            <li><button class="login-button" href="{{route('std_reg')}}">Join Us</button></li>
        </ul>
    </nav>
</header>



<body>
<!-- partial:index.partial.html -->
<body>
    <section class="home">
      <div class="description">
        <h1 class="title">
          <span class="gradient-text">Grow Professionally</span> with the Best
        </h1>
        <p class="paragraph">
          In a world filled with opportunities, having a mentor can make all the
          difference. Explore why people turn to this invaluable resource to
          unlock their potential.
        </p>
        <form id="form" autocomplete="off">
          <input
            type="email"
            id="email-id"
            name="email_address"
            aria-label="email adress"
            placeholder=""
            required
            oninput="checkEmpty()" />
          <button type="submit" class="btn" aria-label="submit">
            <span>Subscribe</span>
            <ion-icon name="arrow-forward-outline"></ion-icon>
          </button>
        </form>
      </div>

      <div class="users-color-container">
        <span class="item" style="--i: 1"></span>
        <img
          class="item"
          src="{{asset('img/c6.jpeg')}}"
          style="--i: 2"
          alt="" />
        <span class="item" style="--i: 3"></span>
        <img
          class="item"
          src="{{asset('img/item3.jpg')}}"
          style="--i: 4"
          alt="" />

        <img
          class="item"
          src="{{asset('img/career3.jpeg')}}"
          style="--i: 10"
          alt="" />
        <span class="item" style="--i: 11"></span>
        <img class="item" src="{{asset('img/illona.png')}}" style="--i: 12" alt="" />
        <span class="item" style="--i: 5"></span>

        <span class="item" style="--i: 9"></span>
        <img class="item" src="{{asset('img/c3.jpeg')}}" style="--i: 8" alt="" />
        <span class="item" style="--i: 7"></span>
        <img class="item" src="{{asset('img/next2c (6)trans.png')}}" style="--i: 6" alt="" />
      </div>
    </section>

    <section class="card-container" id="card-container">
      <div class="slider">
        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/header1.jpg')}}" alt="" />
            <h1>Personalized Guidance</h1>
            <p>
              Whether you are pursuing a career change, entrepreneurship, or
              personal development,  HEO offers substantial advice and
              support to navigate your unique path.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>

        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/next2c (2).jpeg')}}" alt="" />
            <h1>Accelerated Growth</h1>
            <p>
              With HEO, you can fast-track your journey to success. Benefit
              from our experienced instructors and students and tap into their knowledge, helping you
              avoid common pitfalls.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>

        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/item4.jpg')}}" alt="" />
            <h1>Inspiration & Motivation</h1>
            <p>
              A mentor isn't just an organization; they are a source of inspiration
              and motivation. They can help you to set and achieve ambitious
              goals and gain your self-confident.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>

        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/Admission4.jpg')}}" alt="" />
            <h1>Networking & Connections</h1>
            <p>
              HEO open doors to valuable connections and
              opportunities. We introduce you to our network and help
              you build meaningful relationships.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>

        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/Admission1.jpeg')}}" alt="" />
            <h1>Expert Insights</h1>
            <p>
              Gain access to Tech industry insights and expert knowledge that you
              won't find in textbooks.HEO provides practical wisdom
              that textbooks can't teach.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>

        <div class="card" data-tilt>
          <div class="content">
            <img src="{{asset('img/next3.jpg')}}" alt="" />
            <h1>Confidence & Self-Esteem</h1>
            <p>
              HEO is like a supportive team, boosting your confidence and
              self-esteem. Our encouragement can help you believe in your
              potential and take on challenges with vigor.
            </p>
            <button class="btn btn-grad">
              <span>Learn More</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </button>
          </div>
        </div>
      </div>

      <ul class="control" id="custom-control">
        <li class="prev">
          <ion-icon class="arrow" name="caret-back-outline"></ion-icon>
        </li>
        <li class="next">
          <ion-icon class="arrow" name="caret-forward-outline"></ion-icon>
        </li>
      </ul>
    </section>









  </body>


  <section class="about">
    <div class="about-img">
        <img src="{{asset('img/next2c (6)trans.png')}}">
    </div>

    <div class="about-text">
        <h1>Why Choose HEO?</h1>
        <h5> IGNITE YOUR PASSION, <span>& UNLOCK YOUR POTENTIAL </span></h5>
        <p> <strong> Where sparks ignite:</strong>  We nurture tech talents of all ages, nurturing curious minds and fueling ambition.<br> <strong> Bridging the gap:</strong> Access isn't a privilege, it's a right. We offer scholarships and flexible options to make sure tech education is within reach for everyone.<br> <strong>  Master in-demand skills:</strong>Learn from industry experts, code alongside peers, and gain the skills that unlock exciting careers in the digital world.
            <br><strong> More than just code:</strong>   Build confidence, foster creativity, and become a leader in your community-tech empowers, and HEO guides you every step of the way.</p>
            <li><a href="{{route('career')}}">Career</a></li>
    </div>
</section>








 <!---Start Services ---->
 <section class="services" id="services">
    <div class="center">
        <h2>HEO Skill Cells</h2>
        <p> Ready to unlock your tech potential and conquer the digital world? <br> Explore our vibrant Skill Cells, dedicated spaces where you'll master in-demand skills and ignite your passion for specific career paths.</p>
    </div>

    <div class="service-content">
        <div class="row">
            <i class='bx bxl-html5'></i>
            <i class='bx bxs-file-css'></i>
            <i class='bx bxl-tailwind-css' ></i>
            <i class='bx bxl-javascript'></i>
            <i class='bx bxl-react'></i>
            <i class='bx bxl-angular'></i>
            <h3>Web Development Cell</h3>
            <p>Build stunning websites and captivating web applications! Master HTML, CSS, JavaScript, and popular frameworks like React and Angular.</p>
            <a href="{{route('contact')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-java'></i>
            <i class='bx bxl-python' ></i>
            <i class='bx bxl-c-plus-plus'></i>
            <h3>Cybersecurity Cell</h3>
            <p> Become a digital guardian and protect the online world! Master ethical hacking, network security, penetration testing, and incident response to thwart cyber threats.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-python'></i>
            <i class='bx bxl-postgresql'></i>
            <h3>Data Science and Analytics Cell</h3>
            <p>Uncover hidden insights and turn data into gold! Learn Python, R, SQL, and statistical analysis to transform raw data into actionable insights for businesses and organizations.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-java'></i>
            <i class='bx bxl-python' ></i>
            <i class='bx bxl-c-plus-plus'></i>
            <h3>Software Development Cell</h3>
            <p>Build the backbone of the digital world! Master popular programming languages like Python, Java, and C++, software development methodologies, and cloud computing to create web applications, mobile apps, and more.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-c-plus-plus'></i>
            <i class='bx bxl-unity' ></i>
            <h3>Game Development Cell</h3>
            <p>Craft immersive worlds and become a gaming master! Learn Unity, Unreal Engine, C++, and game design principles to build the next blockbuster title.
            </p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-aws'></i>
            <i class='bx bx-cast'></i>
            <h3>Cloud Computing Cell</h3>
            <p>Build agile and scalable solutions in the cloud! Master cloud platforms like AWS, Azure, and GCP, cloud infrastructure design, and DevOps principles to empower businesses with cutting-edge cloud solutions.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-python' ></i>
            <i class='bx bx-cast'></i>
            <h3>AI Cell</h3>
            <p>Become the architect of intelligent machines! Delve into Python, TensorFlow, machine learning, and deep learning to unlock the power of artificial intelligence.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>


        <div class="row">
            <i class='bx bx-cast'></i>
            <i class='bx bxl-figma'></i>
            <h3>UX/UI Design Cell</h3>
            <p>Craft seamless user experiences and bridge the gap between humans and technology! Master user experience (UX) principles, user interface (UI) design tools like Figma and Sketch, and interaction design to create intuitive and beautiful interfaces.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

        <div class="row">
            <i class='bx bxl-adobe'></i>
            <i class='bx bx-cast'></i>
            <h3>Graphic Design Cell</h3>
            <p>Unleash your inner artist and make the digital world beautiful! Master Adobe Creative Suite, typography, branding, and user interface design to create stunning visuals.</p>
            <a href="{{route('std_reg')}}" class="btn">Register</a>
        </div>

    </div>

 </section>

  <!---Start Registration ---->

  

 <!--- Site footer -->
 <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Heostudy.com <i>HEO </i> Empowering Youth, Transforming and Building a Brighter Future, One Byte at a Time.</p>
        </div>
        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="{{route('career')}}">Programs</a></li>
            <li><a href="{{route('about')}}">Community</a></li>
            <li><a href="#">Support HEO</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Blog & Resources</a></li>
            <li><a href="{{route('admission')}}">Application Process</a></li>
          </ul>
        </div>
  
        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="/">Welcome</a></li>
            <li><a href="{{route('about')}}">About Us</a></li>
            <li><a href="{{route('admission')}}">Administration</a></li>
            <li><a href="/career.html">Careers</a></li>
            <li><a href="{{route('contact')}}">Contact us</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
  
          <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by <a href="heostudy.com">HEO</a>.
          </p>
        </div>
  
  
  
  
      <div class="col-md-4 col-sm-6 col-xs-12">
          <ul role="list" class="card__social flex-group">
            <li>
              <a href="https://x.com/heostudy_com?s=21">
                <i class="fa-brands fa-twitter "></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa-brands fa-linkedin "></i>
              </li>
              <li>
                <a href="https://www.instagram.com/heostudy_com">
                <i class="fa-brands fa-instagram "></i>
            </li>
            <li>
             <a href="https://youtube.com/@HEOSTUDY?si=W49duEP8SaHMM0ve">
              <i class="fa-brands fa-youtube "></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
  




 
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  











<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js'></script>
<script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
<script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/scrollreveal'></script><script  src="{{asset('js/admission.js')}}"></script>

</body>
</html>
