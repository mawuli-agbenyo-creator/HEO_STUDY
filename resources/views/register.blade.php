<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HEO Register</title>
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
            <li><a href="{{route('std_reg')}}">Register</a></li> 
            <li><a href="{{route('admission')}}">Admission</a></li>

            <li><button class="login-button" href="{{route('std_reg')}}">Join Us</button></li>
        </ul>
    </nav>
</header>

<body>

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

            <input type="phone_number" name="phone_number" id="phone_number" placeholder="Your phone number" required>
            @error('phone_number')
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
