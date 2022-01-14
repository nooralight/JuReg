<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <title>Hello, world!</title>
</head>

<body>






    <form action="{{route('signup')}}" method="post" class="form" id="forms" onsubmit="event.preventDefault()">
        @csrf
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active" data-title="Personal"></div>
            <div class="progress-step" data-title="Academic"></div>
            <div class="progress-step" data-title="Professional"></div>
            <div class="progress-step" data-title="Login"></div>
        </div>
        <!-- Personal Page -->
        <div class="step-forms step-forms-active">
            <!-- Name Part -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full name</label>
                <input class="form-control" type="text" name="fname" id="f_name" placeholder="Full name in English" />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full name(Bangla)</label>
                <input type="text" name="f_nameB" id="fname" placeholder="Full name in Bangla" />
            </div>
            <!-- Gender -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            </div>

            <!-- Blood Group -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Blood Group</label>
                <select class="form-select" id="blood" name="blood">
                    <option value="a+">A+</option>
                    <option value="a-">A-</option>
                    <option value="b+">B+</option>
                    <option value="b-">B-</option>
                    <option value="ab+">AB+</option>
                    <option value="ab-">AB-</option>
                    <option value="o+">O+</option>
                    <option value="o-">O-</option>
                </select>
            </div>

            <!-- Date of Birth -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>


            <!-- District -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">District</label>
                <select class="form-select" id="district" name="district">
                    <option value="m">Dhaka</option>
                    <option value="f">Gazipur</option>
                    <option value="o">Shibchor</option>
                </select>
            </div>

            <!-- Present Adress -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Present Adress</label>
                <input type="text" name="present_adress" placeholder="Present Adress" />
            </div>

            <!-- Mobile Number -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mobile No.</label>
                <input type="text" name="mobile" placeholder="Mobile Number" />
            </div>


            <!-- Email Adress -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <!-- Facebook Id -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Facebook ID</label>
                <input type="text" name="fb_link" placeholder="Facebook Id link" />
            </div>
            <div class=""> <a href="#" class="btn btn-next width-50 ml-auto">Next</a> </div>
        </div>
        <!--End Section -->


        <!-- Academic Page -->
        <div class="step-forms">
            <!--JU Batch -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">JU Batch</label>
                <select class="form-select" id="ju_batch" name="ju_batch">
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                    <option value="46">46</option>
                    <option value="47">47</option>
                </select>
            </div>

            <!--IIT Batch -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">IIT Batch</label>
                <select class="form-select" id="iit_batch" name="iit_batch">
                    <option value="1">1<sup>st</sup></option>
                    <option value="2">2<sup>nd</sup></option>
                    <option value="3">3<sup>rd</sup></option>
                    <option value="4">4<sup>th</sup></option>
                    <option value="5">5<sup>th</sup></option>
                    <option value="6">6<sup>th</sup></option>
                    <option value="7">7<sup>th</sup></option>
                    <option value="8">8<sup>th</sup></option>
                    <option value="9">9<sup>th</sup></option>
                </select>
            </div>

            <!--Hall of Residence -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Hall of Residence</label>
                <select class="form-select" id="hall_res" name="hor">
                    <option value="n">Bithi e Noor Hall</option>
                    <option value="b">Alo e Jewel Hall</option>
                </select>
            </div>

            <!--Academic Session -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Academic Session</label>
                <select class="form-select" id="ac_session" name="ac_session">
                    <option value="1">2000</option>
                    <option value="2">2001</option>
                    <option value="3">2002</option>
                    <option value="4">2003</option>
                </select>
            </div>

            <!--Degree obtained -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Degree obtained from JU</label>
                <select class="form-select" id="degree_obt" name="degree_obt">
                    <option value="n">BSc in CSE</option>
                    <option value="b">BSc in EEE</option>
                </select>
            </div>

            <div class="btns-group"> <a href="#" class="btn btn-prev">Previous</a> <a href="#"
                    class="btn btn-next">Next</a> </div>

        </div>
        <!--End Section -->

        <!--Personal Page -->
        <div class="step-forms">

            <!-- occupation -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Occupation</label>
                <input type="text" name="occupation" id="occupation" placeholder="Occupation" />
            </div>

            <!-- Designation -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Designation</label>
                <input type="text" name="designation" id="designation" placeholder="Designation" />
            </div>
            <!-- Organization -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Organization Name</label>
                <input type="text" name="organization" id="organization" placeholder="Organization Name" />
            </div>
            <!-- Adress of Organization -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adress of Organization</label>
                <input type="text" name="adress_org" id="adress_org" placeholder="Adress of Organization" />
            </div>

            <div class="btns-group"> <a href="#" class="btn btn-prev">Previous</a> <a href="#"
                    class="btn btn-next">Next</a> </div>
        </div>


        <!--Login Page -->
        <div class="step-forms">

            <!-- username -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Username</label>
                <input type="text" name="username" id="username" placeholder="Username" />
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" />
            </div>
            <!-- repeat password -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Repeat Password</label>
                <input type="password" name="r_password" id="r_password" placeholder="Repeat Password" />
            </div>

            <div class="btns-group"> <a href="#" class="btn btn-prev">Previous</a> <input type="submit"
                    value="Submit" id="submit-form" class="btn" /> </div>
        </div>
    </form>







    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
    <script src="{{ asset('assets/script.js') }}"></script>

</body>

</html>
