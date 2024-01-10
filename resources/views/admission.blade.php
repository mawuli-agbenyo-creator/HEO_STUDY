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
            {{-- <li><a href="{{route('career')}}">Career</a></li> --}}
            <li><a href="{{route('admission')}}">Admission</a></li>
            <li><button class="login-button" href="#">Join Us</button></li>
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
            <a href="{{route('contact')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-java'></i>
            <i class='bx bxl-python' ></i>
            <i class='bx bxl-c-plus-plus'></i>
            <h3>Cybersecurity Cell</h3>
            <p> Become a digital guardian and protect the online world! Master ethical hacking, network security, penetration testing, and incident response to thwart cyber threats.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-python'></i>
            <i class='bx bxl-postgresql'></i>
            <h3>Data Science and Analytics Cell</h3>
            <p>Uncover hidden insights and turn data into gold! Learn Python, R, SQL, and statistical analysis to transform raw data into actionable insights for businesses and organizations.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-java'></i>
            <i class='bx bxl-python' ></i>
            <i class='bx bxl-c-plus-plus'></i>
            <h3>Software Development Cell</h3>
            <p>Build the backbone of the digital world! Master popular programming languages like Python, Java, and C++, software development methodologies, and cloud computing to create web applications, mobile apps, and more.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-c-plus-plus'></i>
            <i class='bx bxl-unity' ></i>
            <h3>Game Development Cell</h3>
            <p>Craft immersive worlds and become a gaming master! Learn Unity, Unreal Engine, C++, and game design principles to build the next blockbuster title.
            </p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-aws'></i>
            <i class='bx bx-cast'></i>
            <h3>Cloud Computing Cell</h3>
            <p>Build agile and scalable solutions in the cloud! Master cloud platforms like AWS, Azure, and GCP, cloud infrastructure design, and DevOps principles to empower businesses with cutting-edge cloud solutions.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-python' ></i>
            <i class='bx bx-cast'></i>
            <h3>AI Cell</h3>
            <p>Become the architect of intelligent machines! Delve into Python, TensorFlow, machine learning, and deep learning to unlock the power of artificial intelligence.</p>
            <a href="/career.html" class="btn">Learn More</a>
        </div>


        <div class="row">
            <i class='bx bx-cast'></i>
            <i class='bx bxl-figma'></i>
            <h3>UX/UI Design Cell</h3>
            <p>Craft seamless user experiences and bridge the gap between humans and technology! Master user experience (UX) principles, user interface (UI) design tools like Figma and Sketch, and interaction design to create intuitive and beautiful interfaces.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

        <div class="row">
            <i class='bx bxl-adobe'></i>
            <i class='bx bx-cast'></i>
            <h3>Graphic Design Cell</h3>
            <p>Unleash your inner artist and make the digital world beautiful! Master Adobe Creative Suite, typography, branding, and user interface design to create stunning visuals.</p>
            <a href="{{route('career')}}" class="btn">Learn More</a>
        </div>

    </div>

 </section>

  <!---Start Registration ---->

  






  <div class="register-box">
    <!-- multistep form -->
    <form id="msform" action="{{route('reg_submit')}}" enctype="multipart/form-data" method="POST" class="form">
      @csrf
        <!-- progressbar -->
        <ul id="progressbar">
          {{-- <li class="active">Account Setup</li> --}}
          <li class="active">Personal Details</li>
          <li>Course Registration</li>
          
        </ul>
        <!-- fieldsets -->
        {{-- <fieldset>
          <h2 class="fs-title">Create your account</h2>
          <h3 class="fs-subtitle">Please fill below</h3>
          <input type="text" name="email" placeholder="Email" />
          <input type="password" name="pass" placeholder="Password" />
          <input type="password" name="cpass" placeholder="Confirm Password" />
          <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset> --}}
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">Please provide valid information</h3>
            <input type="text" name="full_name" id="full_name" placeholder="Name" required />
            @error('full_name')
                <p>{{$message}}</p>
            @enderror
            
            <input type="email" name="email" id="email" placeholder="Your email address" required>
            @error('email')
                <p>{{$message}}</p>
            @enderror
            
            <input type="text" name="nationality" id="nationality" placeholder="Nationality" />
            @error('nationality')
                <p>{{$message}}</p>
            @enderror
            
            <input type="date" name="date_of_birth" id="dob" required placeholder="Date" />
            @error('date_of_birth')
                <p>{{$message}}</p>
            @enderror
            
            <select name="gender" id="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender')
                <p>{{$message}}</p>
            @enderror
            
            <select name="marital_status" id="maritalStatus" required>
                <option value="" disabled selected>Select Marital Status</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
            </select>
            @error('marital_status')
                <p>{{$message}}</p>
            @enderror
            
            <textarea name="address" id="residentialAddress" rows="4" placeholder="Your residential address" required></textarea>
            @error('address')
                <p>{{$message}}</p>
            @enderror
            
            <input type="text" name="mother_name" id="motherName" placeholder="Mother's full name" required>
            @error('mother_name')
                <p>{{$message}}</p>
            @enderror
            
            <input type="tel" name="parent_guardian_phone" id="parentGuardianPhone" placeholder="Parent/Guardian phone number" required>
            @error('parent_guardian_phone')
                <p>{{$message}}</p>
            @enderror
            
            <textarea name="parent_guardian_address" id="parentGuardianAddress" rows="4" placeholder="Parent/Guardian address" required></textarea>
            @error('parent_guardian_address')
                <p>{{$message}}</p>
            @enderror
            



            <input type="button" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title"> Course Registration</h2>
<h3 class="fs-subtitle">Please provide valid information</h3>
<input type="text" id="educationLevel" name="education_level" placeholder="Your current/highest level of education" required>
@error('education_level')
    <p>{{$message}}</p>
@enderror

<input type="text" id="courseOfStudy" name="course_of_study" placeholder="Your course of study">
@error('course_of_study')
    <p>{{$message}}</p>
@enderror

<input type="text" id="university" name="university" placeholder="Your university/institution">
@error('university')
    <p>{{$message}}</p>
@enderror

<select id="completionStatus" name="completion_status" required>
    <option value="" disabled selected>completion Status</option>
    <option value="completed">completed</option>
    <option value="ongoing">Ongoing</option>
</select>
@error('completion_status')
    <p>{{$message}}</p>
@enderror

<input type="text" id="jobTitle" name="jobTitle" placeholder="Your current job title">
@error('jobTitle')
    <p>{{$message}}</p>
@enderror

<input type="text" id="industry" name="industry" placeholder="Your industry">
@error('industry')
    <p>{{$message}}</p>
@enderror

<input type="text" id="businessNature" name="business_nature" placeholder="Nature of your business">
@error('business_nature')
    <p>{{$message}}</p>
@enderror

<div class="section">
    <h2>Desired Career Path</h2>
    <div class="field">
        <label for="careerPath"></label>
        <select id="careerPath" name="career_path" required>
            <option value="">Select One</option>
            <option value="fullStackWebDevelopment">Full Stack Web Development</option>
                        <option value="frontEndWebDevelopment">Front-End Web Development</option>
                        <option value="backEndWebDevelopment">Back-End Web Development</option>
                        <option value="cybersecurity">Cybersecurity</option>
                        <option value="artificialIntelligence">Artificial Intelligence (AI)</option>
                        <option value="dataAnalytics">Data Analytics</option>
                        <option value="dataScience">Data Science</option>
                        <option value="devOps">DevOps</option>
                        <option value="cloudComputing">Cloud Computing</option>
                        <option value="dataVisualization">Data Visualization</option>
                        <option value="gameDevelopment">Game Development</option>
                        <option value="machineLearning">Machine Learning</option>
                        <option value="mobileDevelopment">Mobile Development</option>
                        <option value="uxUiDesign">UX/UI Design</option>
                        <option value="graphicDesign">Graphic Design</option>
                        <option value="animation">Animation</option>
            <!-- Add other options as needed -->
        </select>
        @error('career_path')
            <p>{{$message}}</p>
        @enderror
    </div>

    <textarea id="statement" name="statement" rows="8" placeholder="Write your statement here..." required></textarea>
    @error('statement')
        <p>{{$message}}</p>
    @enderror
</div>

<div class="section">
    <h2>Instructions for the Statement of Interest</h2>
    <p>Please write your statement in English language.</p>
    <p>Use paragraphs to organize your response.</p>
    <p>Avoid using bullet points or numbering.</p>
    <p>Aim for a clear and concise writing style.</p>
    <p>Highlight key achievements, experiences, and motivations related to technology and HEO, specifically your chosen career path.</p>
    <p>Proofread your statement carefully before submitting it.</p>
</div>

<div class="section">
    <h2>Additional Requirements</h2>
    <p>You may be required to submit additional documents, such as transcripts or letters of recommendation, upon request.</p>
    <p>All applications will be reviewed by the HEO Admissions Team.</p>
    <p>Shortlisted candidates may be invited to an interview.</p>
</div>

<input type="submit" class="next action-button" value="Submit" />

        </fieldset>
      </form>
      </div>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  











<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js'></script>
<script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
<script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
<script src='https://unpkg.com/scrollreveal'></script><script  src="{{asset('js/admission.js')}}"></script>

</body>
</html>
