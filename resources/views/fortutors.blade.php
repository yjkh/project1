@extends('layout.app')
@section('title', 'For Tutors')

@section('content')

<div class="wooden">
    <img style='height:100%; width: 100%; object-fit: contain' src="images/teach.jpg" >
    <div class="layer">
        <div class="layer2">
            <center>
        </div>
    </div>
</div>

    <div class="step1">
            <div class= "headings">
                    <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/step1.png"> </div>
                    
            </div>
            <div class="stepsdet">
                <p class="p5"> Find the best tutor for you
                        Learn one-on-one from a tutor who’s certified to teach your specific subject. Review profiles and read their reviews to choose the tutor that fits your learning style.</p>
                </div>
    </div>

    <div class="step1">
            <div class= "headings">
                    <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/step2.png"> </div>
            </div>
            <div class="stepsdet">
                    <p class="p5">Learn better with technology
                            You’ll like our digital classroom. Meet your tutor using your smartphone, tablet, or computer. Speak, chat, write, draw, send files, and rewatch your tutoring sessions any time!</p>
                </div>
    </div>

    <div class="step1">
            <div class= "headings">
                    <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/step3.png"> </div>
            </div>
            <div class="stepsdet">
                    <p class="p5">Access instant homework help
                            Tutors are available at any time and from anywhere to help you. Ready right now? Start an instant session!</p>
                </div>
    </div>

    <div class="step1">
            <div class= "headings">
                    <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/step4.png"> </div>
            </div>
            <div class="stepsdet">
                    <p class="p5">Get the grades you need for college acceptance
                            Study with fully licensed educators who know how to help you achieve your academic goals.</p>
                </div>
    </div>

    <div class="step1">
            <div class= "headings">
                    <div class="headingimg"> <img style='height:100%; width: 100%; object-fit: contain' src="images/step5.png"> </div>
            </div>
            <div class="stepsdet">
                    <p class="p5">
                            Learn from the best licensed teachers
                            Whether you’re looking to ace your final exam or boost your grades to get into college, you’ll find the perfect tutor for you. Connect with a licensed teacher with expertise in the subject you need.</p>                        
                </div>
    </div>


<style>

        .wooden
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

        .layer2
        {
            
            margin-top:10%;
            margin-left:50%;;
            width: 60%;
            height: 45%;
        }

        .p4
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

       .stepsdet{
        width:50%;
        height:250px;
        margin-left:25%;
        
        }

        .p5
        {
        margin-top:70px;
        color: grey;
        text-align: center;
        text-indent: 50px;
        letter-spacing: 3px;
        text-decoration-style: solid;
        text-decoration-color: white;
        font-family: "bookman";
        font-size: 20px;
        }
        
        


</style>
@endsection