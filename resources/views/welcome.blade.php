@extends('layout.app')
@section('title', 'iSkool')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="background">
        <img style='height:100%; width: 100%; object-fit: contain' src="images/librarybackground.jpg" >
        <div class="layer">
            <div class="layer1">
                <center>
                    <p class = "p">Better Tutors, Better Grades<p>
                    <p class = "p2">Online tutoring with certified teachers<p>
                    <div class="search">
                            <form>
                                    <input class = "input1" type="text" placeholder="What subject are you looking for help with" required>
                                    <button class="btn1" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                            

                    </div>
                </center>
            </div >
        </div >
    </div>


    <div class="threebox">
        <div class="boxes"> 
               <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/science.png" ></div> 
               <div class="subjtitle">Science Tutors</div>
               <div class= "subjects">
                              <div class="subjectnames"><a class="subjectnames" href="welcome">Mathematics</a></div>
                            </br>
                            <div class="subjectnames1"><a class="subjectnames" href="subjects">Physics</a></div>
                            </br>
                            <div class="subjectnames1"><a class="subjectnames" href="forstudents">Chemistry</a></div>
                            </br>
                            <div class="subjectnames1"><a class="subjectnames" href="fortutors">Biology</a></div>
                        </br></div>
                        <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                            href="fortutors">View All Science Tutors</a></div>
               
        </div>
        
        <div class="boxes">
                <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/computer.png" ></div> 
                <div class="subjtitle">Computer Science</div>
                <div class= "subjects">
                        <div class="subjectnames"><a class="subjectnames" href="welcome">Algorithm</a></div>
                      </br>
                      <div class="subjectnames1"><a class="subjectnames" href="subjects">Web Technology</a></div>
                      </br>
                      <div class="subjectnames1"><a class="subjectnames" href="forstudents">OOP</a></div>
                      </br>
                      <div class="subjectnames1"><a class="subjectnames" href="fortutors">Visual Programming</a></div>
                    </br></div>
                    <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                        href="fortutors">View All CS Tutors</a></div>
        
        </div>

        <div class = "boxes">
                <div class="subjimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/english.png"  ></div> 
                <div class="subjtitle">English Tutors</div>
                <div class= "subjects">
                        <div class="subjectnames"><a class="subjectnames" href="welcome">Writing</a></div>
                      </br>
                      <div class="subjectnames1"><a class="subjectnames" href="subjects">Essay</a></div>
                      </br>
                    <div class="subjectnames1"><a class="subjectnames" href="forstudents">Grade 10</a></div>
                    </br>
                    <div class="subjectnames1"><a class="subjectnames" href="fortutors">A levels</a></div>
                    </br></div>
                    <div class="subjectnames1" style="margin-top:7px"><a class="subjectnames" style="font-size:25px" 
                        href="fortutors">View All English Tutors</a></div>
        </div>
    </div>


    <div class="screenshot">
       <img src="images/screenshot.png">
    </div>

    <div class="toptutors">
        </br>
          Our Top Tutors
            <div class="tutorcontainer">
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
              <div class="tutorsdisplay"></div>
             </div>
    </div>

    <div class="screenshot1">
            <img style='height:100%; width: 100%; object-fit: contain' src="images/screenshot1.png">
    
        </div>

    <div class="info">


            <div class= "info1">
                </br>
                <div class="personimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/students.png">
                </div> 
                <center><h3>Students<h3></center>
                <p></br>
                        Choose a safe and secure tutoring option</br></br>Reduce stress from homework</br> while staying involved in your child's learning
                        </br></br>
                        Save time
                        </br></br>
                        Try Skooli risk-free with</br> our Satisfaction Guarantee
                </p>
                <div style="margin-top:2px"><a  style="font-size:20px" 
                    href="fortutors">Learn More &#8594</a></div>
            </div>
        
            <div class= "info1">
                </br>
                <div class="personimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/tutors.png">
                </div> 
                <center><h3>Students<h3></center>
                <p></br>
                        Choose a safe and secure tutoring option</br></br>Reduce stress from homework</br> while staying involved in your child's learning
                        </br></br>
                        Save time
                        </br></br>
                        Try Skooli risk-free with</br> our Satisfaction Guarantee
                </p>
                <div style="margin-top:2px"><a  style="font-size:20px" 
                    href="fortutors">Learn More &#8594</a></div>
            </div>

        </div>

            <!-- Footer -->


            




    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <style>

        .background 
        {
            position: relative;
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

        .p 
        {
            color: #C0392B;
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
         }

         .boxes{
            
            float: left; 
            width: 400px;
            height: 500px;
            margin-left:3%;
            margin-top:3%;
            background-color: rgb(123, 36, 28);
            font-family: "bookman";
            font-size: 20px;
            color:white;
            border:1px solid lightgrey;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
            
         }
  
        .subjimg{
            width: 100px;
            height: 100px;
            margin-left: 150px;
            margin-top:20px;
        }

        .subjtitle{
            width: 150px;
            height: 55px;
            margin-left: 125px;
            margin-top:7px;
            color: white;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
        }

        .subjects{
           
            width: 250px;
            height: 220px;
            margin-left: 75px;
            margin-top:15px;
            color: white;
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
            
            margin-top:20px;
            color: white;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
            
        }

        .subjectnames1{
            
            margin-top:-10px;
            color: white;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            font-size: 20px;
            
        }

        .subjectnames:hover{
            transition: .7s;
            font-size: 22px;
            font-weight: bold;
             color: white;
            text-align: center;
            text-decoration-style: solid;
            font-family: "bookman";
            
        }

        .screenshot{
            margin-top:600px;
            margin-left:50px;
            padding: 1px;

        }

        .toptutors{

            width: 94%;
            height:500px;
            margin-left:3%;
            margin-top:3%;
            background-color: rgb(123, 36, 28);
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

        .tutorcontainer{

            width: 94%;
            height:300px;
            margin-left:3%;
            margin-top:3%;

        }

        .tutorsdisplay{
            width: 16%;
            height:300px;
            margin-left:3.3%;
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
            color:grey;
            -moz-border-radius-topleft: 20px;
            -moz-border-radius-topright: 20px;
            -moz-border-radius-bottomright: 20px;
            -moz-border-radius-bottomleft: 20px;
            -webkit-border-radius: 20px 20px 20px 20px;
            border-radius: 20px 20px 20px 20px;
        }

        .personimg{

            width: 150px;
            height: 100px;
            margin-left: 150px;
            margin-top:20px;

        }

        .screenshot1{
            margin-top:20px;
        }

       

       
    </style>



@endsection