@extends('layout.app')
@section('title', 'iSkool')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="background">
        <img style='height:100%; width: 100%; object-fit: contain' src="images/librarybackground.jpg" >
        <div class="layer">
            <div class="layer1">
                <center>
                    <p class = "p1">Better Tutors, Better Grades<p>
                    <p class = "p2">Online tutoring with certified teachers<p>
                    <div class="search">
                            <form action="/subjects">
                                    <input class = "input1" type="text" placeholder="What subject are you looking for help with" required>
                                    <button class="btn1" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            

                    </div>
                </center>
            </div >
        </div >
    </div>

    <div class= "float"> </div>

    <div class= "headings">
        <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/4.png"> </div>
        <p class="heading1"> SUBJECTS </p>
    </div>

    <div class= "float"> </div>
    

    <div class="threebox">
        <div class="boxes"> 
            <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/3.jpg" ></div> 
                <div class= "subjects">
                    <div class="subjectnames"><a class="subjectnames" href="subjects">Mathematics</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Physics</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Chemistry</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Biology</a></div>
                    </br>
                    <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                    href="subjects">View All Science Tutors</a></div>
                </div>
            </div>
        </div>
        
        <div class="boxes">
            <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/1.jpg" ></div> 
                <div class= "subjects">
                    <div class="subjectnames"><a class="subjectnames" href="subjects">Algorithm</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Web Technology</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">OOP</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Visual Programming</a></div>
                    </br></div>
                    <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                        href="subjects">View All CS Tutors</a></div>
                </div>
            </div>
        </div>

        <div class = "boxes">
            <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/2.jpg"></div> 
                <div class= "subjects">
                    <div class="subjectnames"><a class="subjectnames" href="subjects">Writing</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Essay</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">Grade 10</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="subjects">A levels</a></div>
                    </br></div>
                    <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                        href="subjects">View All English Tutors</a></div>
                </div>
            </div>
        </div>
    </div>
    
    <div class= "float"> </div>

    <div class= "aboutus"> 
            <div class="yo"> <img style='margin-top:2.2%; margin-left:10%;' src="images/pen.png"></div>
            <div class="yo"> 
                <p class="p3"> iSkool helps students learn difficult concepts and get better grades by connecting them with professional teachers in a digital classroom.</br></br> Whether you need help understanding a complex topic or want to take your knowledge to the next level, we have tutors who can help you achieve your academic goals.
                </p>
                <form action="/subjects">
                <button class="btn3" type="submit">Join Now</i></button>
                </form>
            </div>
    </div>
 
    <div class= "float"> </div>

    <div class= "headings">
            <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/5.png"> </div>
            <p class="heading1"> WHY iSkool </p>
    </div>

    <div class="screenshot">
       <img src="images/screenshot.png">
    </div>

    <div class= "float"> </div>


    <div class="info">


            <div class= "info1">
                </br>
                <div class="personimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/12.png">
                </div> 
                </br>
                <center><h3>Students<h3></center>
                <p></br>
                    Sign up for free</br></br>Learn with professional tutors</br></br> Study at your own pace with advanced </br>digital technology
                    </br></br>
                    Improve your grades
                
                </p>
                <div style="margin-top:2px"><a  style="font-size:20px" 
                    href="forstudents">Learn More &#8594</a></div>
            </div>
        
            <div class= "info1">
                </br>
                <div class="personimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/6.png">
                </div> 
                </br>
                <center><h3>Tutors<h3></center>
                <p></br>
                    Cash in on your expertise</br></br>Set your own schedule</br>
                    </br>
                    Get approved and verified</br>Sharpen your profile
                    </br></br>
                    Get online to accept instant help requests
                </p>
                <div style="margin-top:2px"><a  style="font-size:20px" 
                    href="fortutors">Learn More &#8594</a></div>
            </div>
    
    </div>
    
    <div class= "float"> </div>


    <div class= "headings">
            <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/6.png"> </div>
            <p class="heading1"> VERIFIED TUTORS </p>
    </div>

    <div class= "float"> </div>



    <div class="toptutors">
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
    </div>

    <div class= "float"> </div>

    <div>
        <p class= "heading2">CHECK OUR CLASSROOM</p>
        <div style='margin-top:1%; margin-left:40%'>
            <button class="transparentbtn"> <img src="images/classroom.png"></button>
        </div>
    </div>

    <div class= "float"> </div>


    <style>

        .background 
        {
            position: relative;
            border:1px black solid;
            
        }

        .layer 
        {
            background-color: rgba(0, 0, 0, 0.2);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .layer1 
        {
            
            margin-top:10%;
            margin-left:20%;;
            width: 60%;
            height: 45%;
            background-color: rgba(0, 0, 0, 0.7);
            -moz-border-radius-topleft: 15px;
            -moz-border-radius-topright: 15px;
            -moz-border-radius-bottomright: 15px;
            -moz-border-radius-bottomleft: 15px;
            -webkit-border-radius: 15px 15px 15px 15px;
            border-radius: 15px 15px 15px 15px;
        }

        .p1
        {
            color: white;
            text-align: center;
            text-indent: 50px;
            letter-spacing: 3px;
            text-decoration-style: solid;
            text-decoration-color: white;
            font-family: "bookman";
            font-size: 50px;
        
        }

        .p2 
        {
            color: white;
            text-align: center;
            text-indent: 50px;
            letter-spacing: 3px;
            text-decoration-style: solid;
            text-decoration-color: white;
            font-family: "bookman";
            font-size: 30px;
        }

   

        .input1 {
            background-color: rgba(0,0,0,0.01);
            margin-top:2%;
            font-family: "bookman";
            font-size: 20px;
            color:white;
            width: 50%;
            border-top-color:rgba(0,0,0,0.01) ;
            border-right-color:rgba(0,0,0,0.01);
            border-left-color: rgba(0,0,0,0.01);
            border-bottom-color : #C0392B;
            }



        .btn1{

            background-color: rgba(0,0,0,0.01);
            
            font-family: "bookman";
            font-size: 20px;
            color:white;
            border-top-color:rgba(0,0,0,0.01) ;
            border-right-color:rgba(0,0,0,0.01);
            border-left-color: rgba(0,0,0,0.01);
            border-bottom-color : rgba(0,0,0,0.01);
        }

        .btn1:hover {
            color:  white;
            background-color: #C0392B;
            transition: .7s;
            -moz-border-radius-topleft: 8px;
            -moz-border-radius-topright: 8px;
            -moz-border-radius-bottomright: 8px;
            -moz-border-radius-bottomleft: 8px;
            -webkit-border-radius: 8px 8px 8px 8px;
            border-radius: 8px 8px 8px 8px
         }

        .threebox{
             width:100%;
             margin-top:3%;
             
         }

        .boxes{
            
            float: left; 
            width: 400px;
            height: 650px;
            margin-left:3%;
            margin-top:0.25%;
            background-color: rgba(0, 0, 0, 0.02);
            font-family: "bookman";
            font-size: 20px;
            color:grey !important;
            border:1px solid lightgrey;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
            }
        
        .float {
                clear: both;
            }
  
        .subjimg{
            
            width: 300px;
            height: 300px;
            margin-left: 50px;
            margin-top:0px;
        }

        .subjects{
           
            width: 250px;
            height: 220px;
            margin-left: 75px;
            margin-top:15px;
            color: grey;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
            border-top: 1px solid;
            border-top-color: black ;
            border-bottom: 1px solid;
            border-bottom-color: black ;
        }
        
        .subjectnames{
            
            margin-top:5px;
            color: grey;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
            
        }

        .subjectnames1{
            
            margin-top:-10px;
            color: grey;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
            
        }

        .subjectnames:hover{
            transition: .7s;
            font-size: 22px;
            font-weight: bold;
             color: grey;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            
        }

        .screenshot{
            margin-left:50px;
            padding: 7px;

        }

        .toptutors{

            width: 94%;
            height:500px;
            margin-left:3%;
            margin-top:3%;
            background-color: rgba(0, 0, 0, 0.02);
            font-family: "bookman";
            font-size: 40px;
            text-align: center;
            color:white;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;

        }


        .tutorsdisplay{
            width: 21.25%;
            height:400px;
            margin-left:3%;
            margin-top:2%;
            float: left; 
            border:1px solid lightgrey;
            font-family: "bookman";
            font-size: 40px;
            text-align: center;
            color:grey;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
        }

        .info{
            width:100%;
            height:600px;
        }

        .info1{
            
            width:35%;
            float:left;
            margin-left:10%;
            margin-top:4%; 
            height:520px;
            border:1px solid lightgrey;
            text-align: center;
            font-size: 18px;
            color:white;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
            background-color: rgba(0, 0, 0, 0.02);
            background-image: url("images/8.jpg")
        }

        .personimg{

            width: 150px;
            height: 100px;
            margin-left: 150px;
            margin-top:20px;

        }


        .headings{
            
            margin-top:100px;
            margin-left:400px;
            width:500px;
        }

        .headingimg{
           
            width:100px;
            height:100px;
            margin-left:220px;
        }


        .heading1
        {
            color: #7B241C;
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
            font-weight:bold;
            text-align: center;
            text-indent: 50px;
            letter-spacing: 3px;
            margin-top:5px;
        }

        .aboutus
        {
            background-image: url("images/bluebackgound.jpg");
            height:500px;
            margin-top:30px;
        }

        .yo
        {
        float: left;
        width:44%;
        }

        .p3
        {
        margin-top:70px;
        color: white;
        text-align: center;
        text-indent: 50px;
        letter-spacing: 3px;
        text-decoration-style: solid;
        text-decoration-color: white;
        font-family: "bookman";
        font-size: 20px;
        }

        .btn3
        {
        color:white;
        background-color: #091339;
        padding: 10px;
        margin-left:41%;
        margin-top:2%;
        }
        
        .btn3:hover
        {
        color:  white;
        background-color:transparent;
        border-color: white;
        transition: .7s;
        }

        .transparentbtn
        {
        background-color: transparent;
        border-color: transparent;
        }

        .transparentbtn:hover
        {
        background-color: rgba(0, 0, 0, 0.2);
        transition: .7s;
        border-color: transparent;
        -moz-border-radius-topleft: 20px;
        -moz-border-radius-topright: 20px;
        -moz-border-radius-bottomright: 20px;
        -moz-border-radius-bottomleft: 20px;
        -webkit-border-radius: 20px 20px 20px 20px;
        border-radius: 20px 20px 20px 20px;
        }

        .heading2{

            color: #7B241C;
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
            font-weight:bold;
            text-indent: 50px;
            letter-spacing: 3px;
            margin-top:120px;
            margin-left: 30%;
            margin-bottom: 0%;
         }



       
    </style>



@endsection