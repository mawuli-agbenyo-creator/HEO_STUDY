<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{asset('data/css/std_reg.css')}}">

   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration Student</header>

        <form action="{{route('reg_submit')}}" method="POST">
            @csrf
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="full_name" placeholder="Enter your name" required>
                            @error('full_name')
                                <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="date_of_birth" placeholder="Enter birth date" required>
                            @error('date_of_birth')
                                <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                            @error('email')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile_number" placeholder="Enter mobile number" required>
                            @error('mobile_number')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option  value="Female">Female</option>
                                
                            </select>
                            @error('gender')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>zip</label>
                            <input type="text" name="zip" placeholder="Enter your zip code" required>
                            @error('zip')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">School Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Select Level</label>
                            <select required name="level"> 
                                <option disabled selected>Select Level</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                            </select>
                            @error('level')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>University</label>
                            <input type="text" name="university" placeholder="Enter University" required>
                            @error('university')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Select Carrer</label>
                            <select required name="course">
                                <option disabled selected>Select course</option>
                                <option value="course">course</option>
                                <option value="course">course</option>
                                <option value="course">course</option>
                                <option value="course">course</option>
                            </select>
                            @error('course')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                         {{-- <div class="input-field">
                            <label>Issued State</label>
                            <input type="text" placeholder="Enter issued state" required>
                        </div>

                        <div class="input-field">
                            <label>Issued Date</label>
                            <input type="date" placeholder="Enter your issued date" required>
                        </div>

                        <div class="input-field">
                            <label>Expiry Date</label>
                            <input type="date" placeholder="Enter expiry date" required>
                        </div> --}}
                    </div> 

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <input type="text" name="address_type" placeholder="Permanent or Temporary" required>
                            @error('address_type')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter nationality" required>
                            @error('nationality')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" placeholder="Enter your state" required>
                            @error('state')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter your district" required>
                            @error('district')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Block Number</label>
                            <input type="number" name="block_number" placeholder="Enter block number" required>
                            @error('block_number')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Passport Picture</label>
                            <input type="file" name="Passport" placeholder="Passport Picture" required>
                            @error('Passport')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Guardian Name</label>
                            <input type="text" name="father_name" placeholder="Enter father name" required>
                            @error('father_name')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="input-field">
                            <label>Guardian phone number</label>
                            <input type="text" name="guardian_phone_number" placeholder="Guardian phone number" required>
                            @error('mother_name')
                            <p>{{$message}}</p>
                            @enderror
                        </div>

                        {{-- <div class="input-field">
                            <label>Grandfather</label>
                            <input type="text" name="grandfather_name" placeholder="Enter grandfther name" required>
                            @error('grandfather_name')
                            <p>{{$message}}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="input-field">
                            <label>Spouse Name</label>
                            <input type="text" name="spouse_name" placeholder="Enter spouse name" required>
                            @error('spouse_name')
                            <p>{{$message}}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="input-field">
                            <label>Father in Law</label>
                            <input type="text" name="father_in_law_name" placeholder="Father in law name" required>
                            @error('father_in_law_name')
                            <p>{{$message}}</p>
                            @enderror
                        </div> --}}

                        <div class="input-field">
                            <label>Emergency phone Number</label>
                            <input type="text" name="emergency" placeholder="Emergency phone Number" required>
                            @error('emergency')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="{{asset('data/js/std_reg.js')}}"></script>
</body>
</html>